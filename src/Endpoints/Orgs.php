<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Orgs extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "orgs";

    /**
     * @var string
     */
    protected string $modelName = "org";
}
