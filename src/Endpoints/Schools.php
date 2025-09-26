<?php

namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;
use BLPS\OneRosterAPI\Endpoints\Schools\Classes;
use BLPS\OneRosterAPI\Endpoints\Schools\Courses;
use BLPS\OneRosterAPI\Endpoints\Schools\Enrollments;
use BLPS\OneRosterAPI\Endpoints\Schools\Students;
use BLPS\OneRosterAPI\Endpoints\Schools\Teachers;
use BLPS\OneRosterAPI\Endpoints\Schools\Terms;

/**
 * Routing class for the subnamespace `Schools`
 *
 * @property Classes $classes
 *   Routing class for the subnamespace `Classes`
 * @property Teachers $teachers
 * @property Students $students
 * @property Enrollments
 *   $enrollments
 * @property Terms $terms
 * @property Courses $courses
 *
 * @api
 */
class Schools extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools";

    /**
     * @var string
     */
    protected string $modelName = "org";

    /**
     * @var array|string[]
     * $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "classes" => "\BLPS\OneRosterAPI\Endpoints\Schools\Classes",
        "teachers" => "\BLPS\OneRosterAPI\Endpoints\Schools\Teachers",
        "students" => "\BLPS\OneRosterAPI\Endpoints\Schools\Students",
        "enrollments" => "\BLPS\OneRosterAPI\Endpoints\Schools\Enrollments",
        "terms" => "\BLPS\OneRosterAPI\Endpoints\Schools\Terms",
        "courses" => "\BLPS\OneRosterAPI\Endpoints\Schools\Courses",
    ];

    /**
     * @var ?Classes $_classes
     *   Routing class for the subnamespace `Classes`
     */
    protected ?Classes $_classes = null;

    /**
     * @var ?Teachers $_teachers
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?Students $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?Enrollments
     *   $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * @var ?Terms $_terms
     */
    protected ?Terms $_terms = null;

    /**
     * @var ?Courses $_courses
     */
    protected ?Courses $_courses = null;
}
