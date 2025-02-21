<?php
namespace Kroscom\OneRosterAPI\Endpoints\Teachers;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\ClassesOutputModel;

/**
 * @api
 */
class Classes extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "teachers/{parent_id}/classes";

    /**
     * @var string
     */
    protected string $modelName = "class";

    /**
     * Returns a collection of classes for the specified $teacher_id
     *
     * @param string|int|float $teacher_id
     * @param array $params
     * @return ClassesOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByTeacherId(string|int|float $teacher_id, array $params = []): ClassesOutputModel|BaseComponent
    {
        $this->setParentId($teacher_id);
        return $this->get($params);
    }
}
