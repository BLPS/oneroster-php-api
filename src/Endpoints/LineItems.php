<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class LineItems extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "lineItems";

    /**
     * @var string
     */
    protected string $modelName = "lineItem";

//    /**
//     * Returns the lineItem object that was created or updated.
//     *
//     * @param array{id: string} $params An associative array
//     *     - id: sourcedId for the lineItem
//     * @param \Kroscom\OneRosterAPI\Components\LineItemInputModel
//     *   $requestBody input model for the lineItem
//     *
//     * @return \Kroscom\OneRosterAPI\Components\LineItemOutputModel OK - It
//     *   was possible to read the resource.
//     *
//     * @throws \Kroscom\OneRosterAPI\Client\Exceptions\ArgumentException if required
//     *   parameters are not defined
//     */
//    public function putById(array $params, LineItemInputModel $requestBody): LineItemOutputModel
//    {
//        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
//        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));
//
//        return new LineItemOutputModel($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody));
//    }
}
