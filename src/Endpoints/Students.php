<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Students extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "students";

    /**
     * @var string
     */
    protected string $modelName = "user";
}
