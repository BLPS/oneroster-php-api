<?php
namespace BLPS\OneRosterAPI\Client\Endpoints;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use Exception;
use GuzzleHttp\Exception\GuzzleException;

class Endpoint extends BaseEndpoint
{
    /**
     * Returns a collection of models.
     *
     * @param array $params Query Parameters
     * @return BaseComponent
     * @throws GuzzleException
     * @throws Exception
     */
    public function get(array $params = []): BaseComponent
    {
        return $this->getQuery($params);
    }

    /**
     * Returns a specific model.
     *
     * @param float|int|string|array|null $id Model ID or Query Parameters
     * @param array $params Query Parameters
     * @return BaseComponent
     * @throws GuzzleException
     */
    public function getOne(float|int|string|array $id = null, array $params = []): BaseComponent
    {
        return $this->getOneQuery($id, $params);
    }
}
