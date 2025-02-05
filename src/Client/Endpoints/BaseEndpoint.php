<?php
namespace Kroscom\OneRosterAPI\Client\Endpoints;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\OneRosterClient;

abstract class BaseEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = '';

    /**
     * @var string
     */
    protected string $modelName = '';

    /**
     * @var array
     */
    protected array $endpoints = [];

    /**
     * @var string
     */
    protected string $id = '';

    /**
     * @var string
     */
    protected string $parentId = '';

    /**
     * @var OneRosterClient
     */
    protected OneRosterClient $api;

    /**
     * Filter parameters
     *
     * @var array
     */
    protected array $_where = [];

    /**
     * Results number per page
     *
     * @var int
     */
    protected int $_limit = 100;

    /**
     * Filter offset
     *
     * @var int
     */
    protected int $_offset = 0;

    /**
     * Query fields
     *
     * @var array
     */
    protected array $_fields = [];

    /**
     * Class constructor
     *
     * @param OneRosterClient $api
     */
    public function __construct(OneRosterClient $api)
    {
        $this->api = $api;
    }

    /**
     * @param string $name
     * @return BaseEndpoint|null
     */
    public function __get(string $name): ?BaseEndpoint
    {
        if (array_key_exists($name, $this->endpoints)) {
            $instance = "_$name";
            assert(
                property_exists($this, $instance),
                new Exception(
                    "Expected router property `$instance` not present"
                )
            );
            if ($this->$instance === null) {
                $class = $this->endpoints[$name];
                $this->$instance = new $class($this->api);
            }
            return $this->$instance;
        }
        trigger_error(
            'Undefined property: ' . static::class . "::$name",
            E_USER_WARNING
        );
        return null;
    }

    /**
     * @param string $endpoint
     * @param array $data
     * @param string $method
     * @return array
     * @throws GuzzleException
     */
    protected function query(string $endpoint, array $data = [], string $method = 'GET'): array
    {
        $queryData = [];
        if(!empty($this->_fields)) {
            $queryData['fields'] = implode(',', $this->_fields);
        }
        if(!empty($this->_where)) {
            $queryData['filter'] = implode(' AND ', $this->_where);
        }
        $queryData['limit'] = !empty($this->_limit) ? $this->_limit : 100;
        $queryData['offset'] = !empty($this->_offset) ? $this->_offset : 0;

        $params = ['data' => array_merge($queryData, $data)];

        $response = null;
        switch (strtoupper($method)) {
            case 'GET':
                $response= $this->api->get($endpoint, $params);
                break;
        }
        // $this->reset();

        return ['response' => $response, 'params' => $params['data']];
    }

    /**
     * Returns a collection of models.
     *
     * @param array $params Query Parameters
     * @return BaseComponent
     * @throws GuzzleException
     * @throws Exception
     */
    protected function getQuery(array $params = []): BaseComponent
    {
        $modelName = $this->getOutputModelName(true);
        $url = $this->endpoint;
        $url = str_replace('{parent_id}', $this->parentId, $url);
        $url = str_replace('{id}', $this->id, $url);

        $result         = $this->query($url, $params);
        $response       = $result['response'];
        $queryParams    = $result['params'];

        $data           = json_decode($response->getBody(), true);

        $countLimit     = $response->getHeader('x-count')[0] ?? null;
        $total          = $response->getHeader('x-total-count')[0] ?? 0;

        // $limit = $countLimit !== null ? $countLimit : ($queryParams['limit'] ?? 100);
        $limit = $queryParams['limit'] ?? 100;
        if(empty($queryParams['limit']) && !empty($countLimit)) {
          $limit = $countLimit;
        }

        $model = new $modelName($data);
        $model->setParentId($this->parentId);
        $model->setId($this->id);
        $model->setCount($total ?? 0);
        $model->setLimit($limit);
        $model->setOffset($queryParams['offset'] ?? null);
        $model->setFields($queryParams['fields'] ?? null);
        $model->setFilter($queryParams['filter'] ?? null);
        $model->setEndpoint($this);

        return $model;
    }

    /**
     * Returns a specific model.
     *
     * @param float|int|string|array|null $id Model ID or Query Parameters
     * @param array $params Query Parameters
     * @return BaseComponent
     * @throws GuzzleException
     * @throws Exception
     */
    protected function getOneQuery(float|int|string|array $id = null, array $params = []): BaseComponent
    {
        if (is_array($id)) {
            $params = array_merge($params, $id);
            $id = $params['id'] ?? null;
        }

        $modelName = $this->getOutputModelName();

        if (empty($id) && !empty($this->id)) { $id = $this->id; }
        if (empty($id)) { throw new Exception('Id not set'); }

        if (str_contains($this->endpoint, '{id}')) { $url = str_replace('{id}', $id, $this->endpoint); }
        else { $url = $this->endpoint.'/'.strval($id); }

        $url = str_replace('{parent_id}', $this->parentId, $url);

        $result = $this->query($url, $params);
        $response = $result['response'];

        $data = json_decode($response->getBody(), true);

        return new $modelName($data);
    }

    /**
     * @param string|int|float $id
     * @return $this
     */
    public function setId(string|int|float $id): static
    {
        $this->id = strval($id);
        return $this;
    }

    /**
     * @param string|int|float $id
     * @return $this
     */
    public function setParentId(string|int|float $id): static
    {
        $this->parentId = strval($id);
        return $this;
    }

    /**
     * @param bool $plural
     * @return string
     * @throws Exception
     */
    protected function getOutputModelName(bool $plural = false): string
    {
        if(empty($this->modelName)) {
            throw new Exception("Model name can't be empty");
        }
        $modelName = ucfirst($this->modelName);
        if($plural) {
            $lastChar = substr($modelName, -1);
            if ($lastChar === 'y') {
                $modelName = substr_replace($modelName, "", -1).'ies';
            } else {
                $lastChars = substr($modelName, -2);
                $modelName = $lastChars === 'ss' ? $modelName.'es' : $modelName.'s';
            }
        }
        return "\\Kroscom\\OneRosterAPI\\Components\\{$modelName}OutputModel";
    }

    /**
     * Add filter parameters
     *
     * @param string $field Search field.
     * @param string $param1 Search value or operator. Operators: =,!=,>,>=,<,<=,~. Default: ~.
     * @param mixed|null $param2 Search value.
     * @return $this
     * @throws Exception
     */
    public function where(string $field, string $param1, mixed $param2 = null): static
    {
        $operators = ['=', '!=', '>', '>=', '<', '<=', '~'];
        $operator = '~';
        $value = $param1;
        if(!is_null($param2)) {
            if(trim($param2) === '') { throw new Exception('Search value is empty!'); }
            if(!in_array($param1, $operators)) { throw new Exception('Search operator is not valid!'); }
            $value = $param2;
            $operator = $param1;
        } else {
            if(trim($param1) === '') { throw new Exception('Search value is empty!'); }
        }
        if(is_array($value)) {
            $string = implode(',', $value);
            $this->_where[] = '"'.$field.$operator.str_replace('"', '%22', $string).'"';
        } else {
            $this->_where[] = $field.$operator."'".str_replace("'", '%27', $value)."'";
        }
        return $this;
    }

    /**
     * Set the range of fields to be returned
     *
     * @param array|string $fields Fields list. Example fields(['sourcedId', 'name']) or fields('sourcedId,name')
     * @return $this
     */
    public function fields(array|string $fields): static
    {
        $this->_fields = is_array($fields) ? $fields : array_map('trim', explode(',', $fields));
        return $this;
    }


    /**
     * Set query limit
     *
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit): static
    {
        $this->_limit = $limit;
        return $this;
    }

    /**
     * Set query offset
     *
     * @param int $offset
     * @return $this
     */
    public function offset(int $offset): static
    {
        $this->_offset = $offset;
        return $this;
    }

    /**
     * @return void
     */
    protected function reset(): void
    {
        $this->_where = [];
        $this->_fields = [];
        $this->_limit = 100;
        $this->_offset = 0;
        $this->id = '';
        $this->parentId = '';
    }
}
