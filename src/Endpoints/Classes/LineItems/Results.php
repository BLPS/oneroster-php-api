<?php
namespace BLPS\OneRosterAPI\Endpoints\Classes\LineItems;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use BLPS\OneRosterAPI\Client\Endpoints\NestedSubEndpoint;
use BLPS\OneRosterAPI\Components\ResultsOutputModel;

/**
 * @api
 */
class Results extends NestedSubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/lineItems/{id}/results";

    /**
     * @var string
     */
    protected string $modelName = "result";

    /**
     * Returns a collection of results for the specified $class_id and $line_item_id
     *
     * @param string|int|float $class_id
     * @param string|int|float $line_item_id
     * @param array $params
     * @return ResultsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassIdAndLiId(string|int|float $class_id, string|int|float $line_item_id, array $params = []): ResultsOutputModel|BaseComponent
    {
        $this->setParentId($class_id);
        $this->setId($line_item_id);
        return $this->get($params);
    }
}
