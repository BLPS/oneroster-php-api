<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Enrollments extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "enrollments";

    /**
     * @var string
     */
    protected string $modelName = "enrollment";
}
