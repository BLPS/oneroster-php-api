<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\CategoriesOutputModel;
use Kroscom\OneRosterAPI\Components\CategoryInputModel;
use Kroscom\OneRosterAPI\Components\CategoryOutputModel;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/categories/{id}";

    /**
     * Returns a collection of categories.
     *
     * @return \Kroscom\OneRosterAPI\Components\CategoriesOutputModel OK -
     *   It was possible to read the collection.
     */
    public function get(): CategoriesOutputModel
    {
        return new CategoriesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific category.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the category
     *
     * @return \Kroscom\OneRosterAPI\Components\CategoryOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): CategoryOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new CategoryOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Returns the category object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the category
     * @param \Kroscom\OneRosterAPI\Components\CategoryInputModel
     *   $requestBody input model for a category
     *
     * @return \Kroscom\OneRosterAPI\Components\CategoryOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function putById(array $params, CategoryInputModel $requestBody): CategoryOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new CategoryOutputModel($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody));
    }
}
