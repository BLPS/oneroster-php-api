<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class Courses extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "courses";

    /**
     * @var string
     */
    protected string $modelName = "course";
}
