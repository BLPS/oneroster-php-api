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
     * @return mixed|null
     * @throws GuzzleException
     */
    protected function query(string $endpoint, array $data = [], string $method = 'GET'): mixed
    {
        $result = null;
        switch (strtoupper($method)) {
            case 'GET':
                $result = $this->api->get($endpoint, $data);
                break;
            case 'POST':
                $result = $this->api->post($endpoint, $data);
                break;
        }
        return $result;
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
        return new $modelName($this->query($url, $params));
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

        return new $modelName($this->query($url, $params));
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
}
