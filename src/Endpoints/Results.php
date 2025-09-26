<?php
namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Results extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "results";

    /**
     * @var string
     */
    protected string $modelName = "result";

//    /**
//     * Returns the result object that was created or updated.
//     *
//     * @param array{id: string} $params An associative array
//     *     - id: sourcedId for the result
//     * @param \BLPS\OneRosterAPI\Components\ResultInputModelSvc
//     *   $requestBody input model for the result
//     *
//     * @return \BLPS\OneRosterAPI\Components\ResultOutputModelSvc OK -
//     *   It was possible to read the resource.
//     *
//     * @throws \BLPS\OneRosterAPI\Client\Exceptions\ArgumentException if required
//     *   parameters are not defined
//     */
//    public function putById(array $params, ResultInputModelSvc $requestBody): ResultOutputModelSvc
//    {
//        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
//        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));
//
//        return new ResultOutputModelSvc($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody));
//    }
//
//    /**
//     * Deletes the specified result sourcedId.
//     *
//     * @param array{id: string} $params An associative array
//     *     - id: sourcedId for the result
//     *
//     * @return \BLPS\OneRosterAPI\Components\ResultsOutputModelSvc OK -
//     *   Resource has been deleted.
//     *
//     * @throws \BLPS\OneRosterAPI\Client\Exceptions\ArgumentException if required
//     *   parameters are not defined
//     */
//    public function deleteById(array $params): ResultsOutputModelSvc
//    {
//        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
//
//        return new ResultsOutputModelSvc($this->send("delete", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
//    }
}
