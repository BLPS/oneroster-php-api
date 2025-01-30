<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Categories extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "categories";

    /**
     * @var string
     */
    protected string $modelName = "category";


//    /**
//     * Returns the category object that was created or updated.
//     *
//     * @param array{id: string} $params An associative array
//     *     - id: sourcedId for the category
//     * @param \Kroscom\OneRosterAPI\Components\CategoryInputModel
//     *   $requestBody input model for a category
//     *
//     * @return \Kroscom\OneRosterAPI\Components\CategoryOutputModel OK - It
//     *   was possible to read the resource.
//     *
//     * @throws \Kroscom\OneRosterAPI\Client\Exceptions\ArgumentException if required
//     *   parameters are not defined
//     */
//    public function putById(array $params, CategoryInputModel $requestBody): CategoryOutputModel
//    {
//        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
//        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));
//
//        return new CategoryOutputModel($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody));
//    }
}
