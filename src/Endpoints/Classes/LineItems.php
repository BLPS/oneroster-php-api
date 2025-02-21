<?php

namespace Kroscom\OneRosterAPI\Endpoints\Classes;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\LineItemsOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Classes\LineItems\Results;

/**
 * Routing class for the subnamespace `LineItems`
 *
 * @api
 */
class LineItems extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/lineItems";

    /**
     * @var string
     */
    protected string $modelName = "lineItem";

    /**
     * @var array $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "results" => "\Kroscom\OneRosterAPI\Endpoints\Classes\LineItems\Results",
    ];

    /**
     * @var ?Results
     *   $_results
     */
    protected ?Results $_results = null;

    /**
     * Returns a collection of lineItems for the specified $class_id
     *
     * @param string|int|float $class_id
     * @param array $params
     * @return LineItemsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassId(string|int|float $class_id, array $params = []): LineItemsOutputModel|BaseComponent
    {
        $this->setParentId($class_id);
        return $this->get($params);
    }
}
