<?php
namespace BLPS\OneRosterAPI\Client\Endpoints;

use Exception;
use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;

class NestedSubEndpoint extends BaseEndpoint
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
}
