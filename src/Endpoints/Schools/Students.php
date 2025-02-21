<?php
namespace Kroscom\OneRosterAPI\Endpoints\Schools;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\UsersOutputModel;

/**
 * @api
 */
class Students extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "schools/{parent_id}/students";

    /**
     * @var string
     */
    protected string $modelName = "user";

    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/students";

    /**
     * Returns a collection of student user data for the specified $school_id
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
