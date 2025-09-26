<?php
namespace BLPS\OneRosterAPI\Endpoints\Schools;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use BLPS\OneRosterAPI\Client\Endpoints\SubEndpoint;
use BLPS\OneRosterAPI\Components\EnrollmentsOutputModel;

/**
 * @api
 */
class Enrollments extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools/{parent_id}/enrollments";

    /**
     * @var string
     */
    protected string $modelName = "enrollment";

    /**
     * Returns a collection of enrollments for the specified $school_id
     *
     * @param string|int|float $school_id
     * @param array $params
     * @return EnrollmentsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getBySchoolId(string|int|float $school_id, array $params = []): EnrollmentsOutputModel|BaseComponent
    {
        $this->setParentId($school_id);
        return $this->get($params);
    }
}
