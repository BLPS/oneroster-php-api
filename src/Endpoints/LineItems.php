<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\LineItemInputModel;
use Kroscom\OneRosterAPI\Components\LineItemOutputModel;
use Kroscom\OneRosterAPI\Components\LineItemsOutputModel;

/**
 * @api
 */
class LineItems extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/lineItems/{id}";

    /**
     * Returns a collection of lineItems.
     *
     * @return \Kroscom\OneRosterAPI\Components\LineItemsOutputModel OK -
     *   It was possible to read the collection.
     */
    public function get(): LineItemsOutputModel
    {
        return new LineItemsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific lineItem.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the lineItem
     *
     * @return \Kroscom\OneRosterAPI\Components\LineItemOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): LineItemOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new LineItemOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Returns the lineItem object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the lineItem
     * @param \Kroscom\OneRosterAPI\Components\LineItemInputModel
     *   $requestBody input model for the lineItem
     *
     * @return \Kroscom\OneRosterAPI\Components\LineItemOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function putById(array $params, LineItemInputModel $requestBody): LineItemOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new LineItemOutputModel($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody));
    }
}
