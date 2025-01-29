<?php

namespace Kroscom\OneRosterAPI;

use Battis\OpenAPI\Client\BaseEndpoint;
use Kroscom\OneRosterAPI\Endpoints\AcademicSessions;
use Kroscom\OneRosterAPI\Endpoints\Categories;
use Kroscom\OneRosterAPI\Endpoints\Classes;
use Kroscom\OneRosterAPI\Endpoints\Courses;
use Kroscom\OneRosterAPI\Endpoints\Demographics;
use Kroscom\OneRosterAPI\Endpoints\Enrollments;
use Kroscom\OneRosterAPI\Endpoints\GradingPeriods;
use Kroscom\OneRosterAPI\Endpoints\LineItems;
use Kroscom\OneRosterAPI\Endpoints\Orgs;
use Kroscom\OneRosterAPI\Endpoints\Results;
use Kroscom\OneRosterAPI\Endpoints\Schools;
use Kroscom\OneRosterAPI\Endpoints\Students;
use Kroscom\OneRosterAPI\Endpoints\Teachers;
use Kroscom\OneRosterAPI\Endpoints\Terms;
use Kroscom\OneRosterAPI\Endpoints\Users;

/**
 * Routing class for OneRoster
 *
 * @property \Kroscom\OneRosterAPI\Endpoints\AcademicSessions
 *   $academicSessions
 * @property \Kroscom\OneRosterAPI\Endpoints\Terms $terms Routing class for
 *   the subnamespace `Terms`
 * @property \Kroscom\OneRosterAPI\Endpoints\GradingPeriods $gradingPeriods
 * @property \Kroscom\OneRosterAPI\Endpoints\Categories $categories
 * @property \Kroscom\OneRosterAPI\Endpoints\Classes $classes Routing class
 *   for the subnamespace `Classes`
 * @property \Kroscom\OneRosterAPI\Endpoints\Courses $courses
 * @property \Kroscom\OneRosterAPI\Endpoints\Enrollments $enrollments
 * @property \Kroscom\OneRosterAPI\Endpoints\LineItems $lineItems
 * @property \Kroscom\OneRosterAPI\Endpoints\Orgs $orgs
 * @property \Kroscom\OneRosterAPI\Endpoints\Results $results
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools $schools Routing class
 *   for the subnamespace `Schools`
 * @property \Kroscom\OneRosterAPI\Endpoints\Users $users
 * @property \Kroscom\OneRosterAPI\Endpoints\Teachers $teachers Routing
 *   class for the subnamespace `Teachers`
 * @property \Kroscom\OneRosterAPI\Endpoints\Students $students
 * @property \Kroscom\OneRosterAPI\Endpoints\Demographics $demographics
 *
 * @api
 */
class Client extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "academicSessions" => "\Kroscom\OneRosterAPI\Endpoints\AcademicSessions",
        "terms" => "\Kroscom\OneRosterAPI\Endpoints\Terms",
        "gradingPeriods" => "\Kroscom\OneRosterAPI\Endpoints\GradingPeriods",
        "categories" => "\Kroscom\OneRosterAPI\Endpoints\Categories",
        "classes" => "\Kroscom\OneRosterAPI\Endpoints\Classes",
        "courses" => "\Kroscom\OneRosterAPI\Endpoints\Courses",
        "enrollments" => "\Kroscom\OneRosterAPI\Endpoints\Enrollments",
        "lineItems" => "\Kroscom\OneRosterAPI\Endpoints\LineItems",
        "orgs" => "\Kroscom\OneRosterAPI\Endpoints\Orgs",
        "results" => "\Kroscom\OneRosterAPI\Endpoints\Results",
        "schools" => "\Kroscom\OneRosterAPI\Endpoints\Schools",
        "users" => "\Kroscom\OneRosterAPI\Endpoints\Users",
        "teachers" => "\Kroscom\OneRosterAPI\Endpoints\Teachers",
        "students" => "\Kroscom\OneRosterAPI\Endpoints\Students",
        "demographics" => "\Kroscom\OneRosterAPI\Endpoints\Demographics",
    ];

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\AcademicSessions
     *   $_academicSessions
     */
    protected ?AcademicSessions $_academicSessions = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Terms $_terms Routing class
     *   for the subnamespace `Terms`
     */
    protected ?Terms $_terms = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\GradingPeriods
     *   $_gradingPeriods
     */
    protected ?GradingPeriods $_gradingPeriods = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Categories $_categories
     */
    protected ?Categories $_categories = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Classes $_classes Routing
     *   class for the subnamespace `Classes`
     */
    protected ?Classes $_classes = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Courses $_courses
     */
    protected ?Courses $_courses = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Enrollments $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\LineItems $_lineItems
     */
    protected ?LineItems $_lineItems = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Orgs $_orgs
     */
    protected ?Orgs $_orgs = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Results $_results
     */
    protected ?Results $_results = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools $_schools Routing
     *   class for the subnamespace `Schools`
     */
    protected ?Schools $_schools = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Users $_users
     */
    protected ?Users $_users = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Teachers $_teachers Routing
     *   class for the subnamespace `Teachers`
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Students $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Demographics $_demographics
     */
    protected ?Demographics $_demographics = null;
}
