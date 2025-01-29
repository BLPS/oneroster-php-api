<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\OrgOutputModel;
use Kroscom\OneRosterAPI\Components\OrgsOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Schools\Classes;
use Kroscom\OneRosterAPI\Endpoints\Schools\Courses;
use Kroscom\OneRosterAPI\Endpoints\Schools\Enrollments;
use Kroscom\OneRosterAPI\Endpoints\Schools\Students;
use Kroscom\OneRosterAPI\Endpoints\Schools\Teachers;
use Kroscom\OneRosterAPI\Endpoints\Schools\Terms;

/**
 * Routing class for the subnamespace `Schools`
 *
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools\Classes $classes
 *   Routing class for the subnamespace `Classes`
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools\Teachers $teachers
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools\Students $students
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools\Enrollments
 *   $enrollments
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools\Terms $terms
 * @property \Kroscom\OneRosterAPI\Endpoints\Schools\Courses $courses
 *
 * @api
 */
class Schools extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
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
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Classes $_classes
     *   Routing class for the subnamespace `Classes`
     */
    protected ?Classes $_classes = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Teachers $_teachers
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Students $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Enrollments
     *   $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Terms $_terms
     */
    protected ?Terms $_terms = null;

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Courses $_courses
     */
    protected ?Courses $_courses = null;

    /**
     * Returns a collection of schools.
     *
     * @return \Kroscom\OneRosterAPI\Components\OrgsOutputModel OK - It was
     *   possible to read the collection.
     */
    public function get(): OrgsOutputModel
    {
        return new OrgsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific school.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the school
     *
     * @return \Kroscom\OneRosterAPI\Components\OrgOutputModel OK - It was
     *   possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): OrgOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new OrgOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
