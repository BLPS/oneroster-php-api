<?php

namespace Kroscom\OneRosterAPI;

use Kroscom\OneRosterAPI\Client\Endpoints\BaseEndpoint;
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
 * @property AcademicSessions
 *   $academicSessions
 * @property Terms $terms Routing class for
 *   the subnamespace `Terms`
 * @property GradingPeriods $gradingPeriods
 * @property Categories $categories
 * @property Classes $classes Routing class
 *   for the subnamespace `Classes`
 * @property Courses $courses
 * @property Enrollments $enrollments
 * @property LineItems $lineItems
 * @property Orgs $orgs
 * @property Results $results
 * @property Schools $schools Routing class
 *   for the subnamespace `Schools`
 * @property Users $users
 * @property Teachers $teachers Routing
 *   class for the subnamespace `Teachers`
 * @property Students $students
 * @property Demographics $demographics
 *
 * @api
 */
class OneRosterAPI extends BaseEndpoint
{
    /**
     * @var array|string[]
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
     * @var ?AcademicSessions
     *   $_academicSessions
     */
    protected ?AcademicSessions $_academicSessions = null;

    /**
     * @var ?Terms $_terms Routing class
     *   for the subnamespace `Terms`
     */
    protected ?Terms $_terms = null;

    /**
     * @var ?GradingPeriods
     *   $_gradingPeriods
     */
    protected ?GradingPeriods $_gradingPeriods = null;

    /**
     * @var ?Categories $_categories
     */
    protected ?Categories $_categories = null;

    /**
     * @var ?Classes $_classes Routing
     *   class for the subnamespace `Classes`
     */
    protected ?Classes $_classes = null;

    /**
     * @var ?Courses $_courses
     */
    protected ?Courses $_courses = null;

    /**
     * @var ?Enrollments $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * @var ?LineItems $_lineItems
     */
    protected ?LineItems $_lineItems = null;

    /**
     * @var ?Orgs $_orgs
     */
    protected ?Orgs $_orgs = null;

    /**
     * @var ?Results $_results
     */
    protected ?Results $_results = null;

    /**
     * @var ?Schools $_schools Routing
     *   class for the subnamespace `Schools`
     */
    protected ?Schools $_schools = null;

    /**
     * @var ?Users $_users
     */
    protected ?Users $_users = null;

    /**
     * @var ?Teachers $_teachers Routing
     *   class for the subnamespace `Teachers`
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?Students $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?Demographics $_demographics
     */
    protected ?Demographics $_demographics = null;
}
