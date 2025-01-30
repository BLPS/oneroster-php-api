<?php
namespace Kroscom\OneRosterAPI\Endpoints\Terms;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\AcademicSessionsOutputModel;

/**
 * @api
 */
class GradingPeriods extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "terms/{parent_id}/gradingPeriods";

    /**
     * @var string
     */
    protected string $modelName = "academicSession";

    /**
     * Returns a collection of grading periods for the specified $term_id
     *
     * @param string|int|float $term_id
     * @param array $params
     * @return AcademicSessionsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByTermId(string|int|float $term_id, array $params = []): AcademicSessionsOutputModel|BaseComponent
    {
        return $this->get($term_id, $params);
    }
}
