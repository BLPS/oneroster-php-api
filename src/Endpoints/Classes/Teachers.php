<?php
namespace BLPS\OneRosterAPI\Endpoints\Classes;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use BLPS\OneRosterAPI\Client\Endpoints\SubEndpoint;
use BLPS\OneRosterAPI\Components\UsersOutputModel;

/**
 * @api
 */
class Teachers extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/teachers";

    /**
     * @var string
     */
    protected string $modelName = "user";

    /**
     * Returns a collection of teacher user data for the specified $class_id
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
