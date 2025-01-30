<?php
namespace Kroscom\OneRosterAPI\Endpoints\Schools;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\AcademicSessionsOutputModel;

/**
 * @api
 */
class Terms extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools/{parent_id}/terms";

    /**
     * @var string
     */
    protected string $modelName = "academicSession";

    /**
     * Returns a collection of terms for the specified $school_id
     *
     * @param string|int|float $school_id
     * @param array $params
     * @return AcademicSessionsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getBySchoolId(string|int|float $school_id, array $params = []): AcademicSessionsOutputModel|BaseComponent
    {
        return $this->get($school_id, $params);
    }
}
