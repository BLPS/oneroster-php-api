<?php

namespace Kroscom\OneRosterAPI\Endpoints\Schools\Classes;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\NestedSubEndpoint;
use Kroscom\OneRosterAPI\Components\EnrollmentsOutputModel;

/**
 * @api
 */
class Enrollments extends NestedSubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools/{parent_id}/classes/{id}/enrollments";

    /**
     * @var string
     */
    protected string $modelName = "enrollment";

    /**
     * Returns a collection of enrollments for the specified $school_id in the $class_id
     *
     * @param string|int|float $school_id
     * @param string|int|float $class_id
     * @param array $params
     * @return EnrollmentsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassIdAndStudentId(string|int|float $school_id, string|int|float $class_id, array $params = []): EnrollmentsOutputModel|BaseComponent
    {
        $this->setParentId($school_id);
        $this->setId($class_id);
        return $this->get($params);
    }
}
