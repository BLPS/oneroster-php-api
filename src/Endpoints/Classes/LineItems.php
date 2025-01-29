<?php

namespace Kroscom\OneRosterAPI\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\LineItemsOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Classes\LineItems\Results;

/**
 * Routing class for the subnamespace `LineItems`
 *
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes\LineItems\Results
 *   $results
 *
 * @api
 */
class LineItems extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "results" => "\Kroscom\OneRosterAPI\Endpoints\Classes\LineItems\Results",
    ];

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes\LineItems\Results
     *   $_results
     */
    protected ?Results $_results = null;

    /**
     * Returns a collection of lineItems for the specified ```class\_id```.
     *
     * @param array{class_id: string} $params An associative array
     *     - class_id: sourcedId for the class
     *
     * @return \Kroscom\OneRosterAPI\Components\LineItemsOutputModel OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByClassId(array $params): LineItemsOutputModel
    {
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));

        return new LineItemsOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['class_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
