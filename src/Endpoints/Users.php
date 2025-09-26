<?php

namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;

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
