<?php
namespace Kroscom\OneRosterAPI\Endpoints\Classes\Students;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\NestedSubEndpoint;
use Kroscom\OneRosterAPI\Components\ResultsOutputModel;

/**
 * @api
 */
class Results extends NestedSubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/students/{id}/results";

    /**
     * @var string
     */
    protected string $modelName = "result";

    /**
     * Returns a collection of results for a specified $class_id and $student_id
     *
     * @param string|int|float $class_id
     * @param string|int|float $student_id
     * @param array $params
     * @return ResultsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassIdAndStudentId(string|int|float $class_id, string|int|float $student_id, array $params = []): ResultsOutputModel|BaseComponent
    {
        return $this->get($class_id, $student_id, $params);
    }
}
