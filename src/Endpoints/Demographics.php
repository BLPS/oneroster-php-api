<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Demographics extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "demographics";

    /**
     * @var string
     */
    protected string $modelName = "demographic";
}
