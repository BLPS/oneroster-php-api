<?php
namespace BLPS\OneRosterAPI\Endpoints\Schools;

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
    protected string $endpoint = "schools/{parent_id}/teachers";

    /**
     * @var string
     */
    protected string $modelName = "user";

    /**
     * Returns a collection of teacher user data for the specified $school_id
     *
     * @param string|int|float $school_id
     * @param array $params
     * @return UsersOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getBySchoolId(string|int|float $school_id, array $params = []): UsersOutputModel|BaseComponent
    {
        $this->setParentId($school_id);
        return $this->get($params);
    }
}
