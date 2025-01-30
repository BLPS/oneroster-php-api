<?php
namespace Kroscom\OneRosterAPI\Client\Endpoints;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;

class NestedSubEndpoint extends BaseEndpoint
{
    /**
     * Returns a collection of models.
     *
     * @param string|int|float $parent_id
     * @param string|int|float $id
     * @param array $params Query Parameters
     * @return BaseComponent
     * @throws GuzzleException
     */
    public function get(string|int|float $parent_id, string|int|float $id, array $params = []): BaseComponent
    {
        $this->setParentId($parent_id);
        $this->setId($id);
        return $this->getQuery($params);
    }
}
