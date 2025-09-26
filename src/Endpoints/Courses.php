<?php
namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;

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
