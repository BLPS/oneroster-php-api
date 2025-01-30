<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;
use Kroscom\OneRosterAPI\Endpoints\Schools\Classes;
use Kroscom\OneRosterAPI\Endpoints\Schools\Courses;
use Kroscom\OneRosterAPI\Endpoints\Schools\Enrollments;
use Kroscom\OneRosterAPI\Endpoints\Schools\Students;
use Kroscom\OneRosterAPI\Endpoints\Schools\Teachers;
use Kroscom\OneRosterAPI\Endpoints\Schools\Terms;

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
        "classes" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Classes",
        "teachers" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Teachers",
        "students" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Students",
        "enrollments" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Enrollments",
        "terms" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Terms",
        "courses" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Courses",
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
