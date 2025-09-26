<?php
namespace BLPS\OneRosterAPI\Endpoints\Classes\Students;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use BLPS\OneRosterAPI\Client\Endpoints\NestedSubEndpoint;
use BLPS\OneRosterAPI\Components\ResultsOutputModel;

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
        $this->setParentId($class_id);
        $this->setId($student_id);
        return $this->get($params);
    }
}
