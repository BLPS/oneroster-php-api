<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\ClassOutputModel;
use Kroscom\OneRosterAPI\Components\ClassesOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Classes\Categories;
use Kroscom\OneRosterAPI\Endpoints\Classes\LineItems;
use Kroscom\OneRosterAPI\Endpoints\Classes\Results;
use Kroscom\OneRosterAPI\Endpoints\Classes\Students;
use Kroscom\OneRosterAPI\Endpoints\Classes\Teachers;

/**
 * Routing class for the subnamespace `Classes`
 *
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes\LineItems $lineItems
 *   Routing class for the subnamespace `LineItems`
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes\Results $results
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes\Teachers $teachers
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes\Students $students
 *   Routing class for the subnamespace `Students`
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes\Categories $categories
 *
 * @api
 */
class Classes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "lineItems" => "\Kroscom\OneRosterAPI\Endpoints\Classes\LineItems",
        "results" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Results",
        "teachers" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Teachers",
        "students" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Students",
        "categories" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Categories",
    ];

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes\LineItems $_lineItems
     *   Routing class for the subnamespace `LineItems`
     */
    protected ?LineItems $_lineItems = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes\Results $_results
     */
    protected ?Results $_results = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes\Teachers $_teachers
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes\Students $_students
     *   Routing class for the subnamespace `Students`
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes\Categories
     *   $_categories
     */
    protected ?Categories $_categories = null;

    /**
     * Returns a collection of classes.
     *
     * @return \Kroscom\OneRosterAPI\Components\ClassesOutputModel OK - It
     *   was possible to read the collection.
     */
    public function get(): ClassesOutputModel
    {
        return new ClassesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific class.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the class
     *
     * @return \Kroscom\OneRosterAPI\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): ClassOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new ClassOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
