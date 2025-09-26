<?php

namespace BLPS\OneRosterAPI\Endpoints\Schools;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use BLPS\OneRosterAPI\Client\Endpoints\SubEndpoint;
use BLPS\OneRosterAPI\Components\CoursesOutputModel;

/**
 * @api
 */
class Courses extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools/{parent_id}/courses";

    /**
     * @var string
     */
    protected string $modelName = "course";

    /**
     * Returns a collection of courses for the specified $school_id
     *
     * @param string|int|float $school_id
     * @param array $params
     * @return CoursesOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getBySchoolId(string|int|float $school_id, array $params = []): CoursesOutputModel|BaseComponent
    {
        $this->setParentId($school_id);
        return $this->get($params);
    }
}
