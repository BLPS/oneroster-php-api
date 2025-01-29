<?php

namespace Kroscom\OneRosterAPI\Endpoints\Schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\CoursesOutputModel;

/**
 * @api
 */
class Courses extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/courses";

    /**
     * Returns a collection of courses for the specified ```school\_id```.
     *
     * @param array{school_id: string} $params An associative array
     *     - school_id: sourcedId for the teacher
     *
     * @return \Kroscom\OneRosterAPI\Components\CoursesOutputModel OK - It
     *   was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySchoolId(array $params): CoursesOutputModel
    {
        assert(isset($params['school_id']), new ArgumentException("Parameter `school_id` is required"));

        return new CoursesOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['school_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
