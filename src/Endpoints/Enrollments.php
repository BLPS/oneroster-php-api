<?php
namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;

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
