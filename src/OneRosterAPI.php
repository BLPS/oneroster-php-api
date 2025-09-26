<?php

namespace BLPS\OneRosterAPI;

use BLPS\OneRosterAPI\Client\Endpoints\BaseEndpoint;
use BLPS\OneRosterAPI\Endpoints\AcademicSessions;
use BLPS\OneRosterAPI\Endpoints\Categories;
use BLPS\OneRosterAPI\Endpoints\Classes;
use BLPS\OneRosterAPI\Endpoints\Courses;
use BLPS\OneRosterAPI\Endpoints\Demographics;
use BLPS\OneRosterAPI\Endpoints\Enrollments;
use BLPS\OneRosterAPI\Endpoints\GradingPeriods;
use BLPS\OneRosterAPI\Endpoints\LineItems;
use BLPS\OneRosterAPI\Endpoints\Orgs;
use BLPS\OneRosterAPI\Endpoints\Results;
use BLPS\OneRosterAPI\Endpoints\Schools;
use BLPS\OneRosterAPI\Endpoints\Students;
use BLPS\OneRosterAPI\Endpoints\Teachers;
use BLPS\OneRosterAPI\Endpoints\Terms;
use BLPS\OneRosterAPI\Endpoints\Users;

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
        "academicSessions" => "\BLPS\OneRosterAPI\Endpoints\AcademicSessions",
        "terms" => "\BLPS\OneRosterAPI\Endpoints\Terms",
        "gradingPeriods" => "\BLPS\OneRosterAPI\Endpoints\GradingPeriods",
        "categories" => "\BLPS\OneRosterAPI\Endpoints\Categories",
        "classes" => "\BLPS\OneRosterAPI\Endpoints\Classes",
        "courses" => "\BLPS\OneRosterAPI\Endpoints\Courses",
        "enrollments" => "\BLPS\OneRosterAPI\Endpoints\Enrollments",
        "lineItems" => "\BLPS\OneRosterAPI\Endpoints\LineItems",
        "orgs" => "\BLPS\OneRosterAPI\Endpoints\Orgs",
        "results" => "\BLPS\OneRosterAPI\Endpoints\Results",
        "schools" => "\BLPS\OneRosterAPI\Endpoints\Schools",
        "users" => "\BLPS\OneRosterAPI\Endpoints\Users",
        "teachers" => "\BLPS\OneRosterAPI\Endpoints\Teachers",
        "students" => "\BLPS\OneRosterAPI\Endpoints\Students",
        "demographics" => "\BLPS\OneRosterAPI\Endpoints\Demographics",
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
