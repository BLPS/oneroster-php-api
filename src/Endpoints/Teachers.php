<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\UserOutputModel;
use Kroscom\OneRosterAPI\Components\UsersOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Teachers\Classes;

/**
 * Routing class for the subnamespace `Teachers`
 *
 * @property \Kroscom\OneRosterAPI\Endpoints\Teachers\Classes $classes
 *
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/teachers/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "classes" => "\Kroscom\OneRosterAPI\Endpoints\Teachers\Classes",
    ];

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Teachers\Classes $_classes
     */
    protected ?Classes $_classes = null;

    /**
     * Returns a collection of teacher user data.
     *
     *  Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @return \Kroscom\OneRosterAPI\Components\UsersOutputModel Success
     */
    public function get(): UsersOutputModel
    {
        return new UsersOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single teacher user for the specified ```id```.
     *
     *  Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the teacher
     *
     * @return \Kroscom\OneRosterAPI\Components\UserOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): UserOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new UserOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
