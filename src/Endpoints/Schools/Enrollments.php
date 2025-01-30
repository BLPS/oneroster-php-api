<?php
namespace Kroscom\OneRosterAPI\Endpoints\Schools;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\EnrollmentsOutputModel;

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
        return $this->get($school_id, $params);
    }
}
