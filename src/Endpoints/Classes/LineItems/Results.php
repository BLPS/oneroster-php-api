<?php
namespace Kroscom\OneRosterAPI\Endpoints\Classes\LineItems;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\NestedSubEndpoint;
use Kroscom\OneRosterAPI\Components\ResultsOutputModel;

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
        return $this->get($class_id, $line_item_id, $params);
    }
}
