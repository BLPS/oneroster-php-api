<?php

namespace Kroscom\OneRosterAPI\Endpoints\Classes;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\ResultsOutputModel;

/**
 * @api
 */
class Results extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/results";

    /**
     * @var string
     */
    protected string $modelName = "result";

    /**
     * Returns a collection of results for a specified $class_id
     *
     * @param string|int|float $class_id
     * @param array $params
     * @return ResultsOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassId(string|int|float $class_id, array $params = []): ResultsOutputModel|BaseComponent
    {
        return $this->get($class_id, $params);
    }
}
