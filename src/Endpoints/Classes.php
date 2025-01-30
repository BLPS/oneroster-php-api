<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;
use Kroscom\OneRosterAPI\Endpoints\Classes\Categories;
use Kroscom\OneRosterAPI\Endpoints\Classes\LineItems;
use Kroscom\OneRosterAPI\Endpoints\Classes\Results;
use Kroscom\OneRosterAPI\Endpoints\Classes\Students;
use Kroscom\OneRosterAPI\Endpoints\Classes\Teachers;

/**
 * Routing class for the subnamespace `Classes`
 *
 * @property LineItems $lineItems
 *   Routing class for the subnamespace `LineItems`
 * @property Results $results
 * @property Teachers $teachers
 * @property Students $students
 *   Routing class for the subnamespace `Students`
 * @property Categories $categories
 *
 * @api
 */
class Classes extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes";

    /**
     * @var string
     */
    protected string $modelName = "class";

    /**
     * @var array $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "lineItems" => "\Kroscom\OneRosterAPI\Endpoints\Classes\LineItems",
        "results" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Results",
        "teachers" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Teachers",
        "students" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Students",
        "categories" => "\Kroscom\OneRosterAPI\Endpoints\Classes\Categories",
    ];

    /**
     * @var ?LineItems $_lineItems
     *   Routing class for the subnamespace `LineItems`
     */
    protected ?LineItems $_lineItems = null;

    /**
     * @var ?Results $_results
     */
    protected ?Results $_results = null;

    /**
     * @var ?Teachers $_teachers
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?Students $_students
     *   Routing class for the subnamespace `Students`
     */
    protected ?Students $_students = null;

    /**
     * @var ?Categories
     *   $_categories
     */
    protected ?Categories $_categories = null;
}
