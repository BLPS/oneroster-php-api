<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Users extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "users";

    /**
     * @var string
     */
    protected string $modelName = "user";
}
