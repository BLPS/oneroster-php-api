<?php

namespace Kroscom\OneRosterAPI\Endpoints\Schools;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\ClassesOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Schools\Classes\Enrollments;

/**
 * Routing class for the subnamespace `Classes`
 *
 * @api
 */
class Classes extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools/{parent_id}/classes";

    /**
     * @var string
     */
    protected string $modelName = "class";

    /**
     * @var array $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "enrollments" => "\Kroscom\OneRosterAPI\Endpoints\Schools\Classes\Enrollments",
    ];

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Schools\Classes\Enrollments
     *   $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * Returns a collection of classes for the specified $school_id
     *
     * @param string|int|float $school_id
     * @param array $params
     * @return ClassesOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getBySchoolId(string|int|float $school_id, array $params = []): ClassesOutputModel|BaseComponent
    {
        $this->setParentId($school_id);
        return $this->get($params);
    }
}
