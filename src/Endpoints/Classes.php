<?php
namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;
use BLPS\OneRosterAPI\Endpoints\Classes\Categories;
use BLPS\OneRosterAPI\Endpoints\Classes\LineItems;
use BLPS\OneRosterAPI\Endpoints\Classes\Results;
use BLPS\OneRosterAPI\Endpoints\Classes\Students;
use BLPS\OneRosterAPI\Endpoints\Classes\Teachers;

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
        "lineItems" => "\BLPS\OneRosterAPI\Endpoints\Classes\LineItems",
        "results" => "\BLPS\OneRosterAPI\Endpoints\Classes\Results",
        "teachers" => "\BLPS\OneRosterAPI\Endpoints\Classes\Teachers",
        "students" => "\BLPS\OneRosterAPI\Endpoints\Classes\Students",
        "categories" => "\BLPS\OneRosterAPI\Endpoints\Classes\Categories",
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
