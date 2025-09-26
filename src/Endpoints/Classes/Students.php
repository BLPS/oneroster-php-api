<?php

namespace BLPS\OneRosterAPI\Endpoints\Classes;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use BLPS\OneRosterAPI\Client\Endpoints\SubEndpoint;
use BLPS\OneRosterAPI\Components\UsersOutputModel;
use BLPS\OneRosterAPI\Endpoints\Classes\Students\Results;

/**
 * Routing class for the subnamespace `Students`
 *
 * @api
 */
class Students extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/students";

    /**
     * @var string
     */
    protected string $modelName = "user";

    /**
     * @var array $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "results" => "\BLPS\OneRosterAPI\Endpoints\Classes\Students\Results",
    ];

    /**
     * @var ?\BLPS\OneRosterAPI\Endpoints\Classes\Students\Results
     *   $_results
     */
    protected ?Results $_results = null;

    /**
     * Returns a collection of student user data for the specified $class_id
     *
     * @param string|int|float $class_id
     * @param array $params
     * @return UsersOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassId(string|int|float $class_id, array $params = []): UsersOutputModel|BaseComponent
    {
        $this->setParentId($class_id);
        return $this->get($params);
    }
}
