<?php
namespace BLPS\OneRosterAPI\Endpoints;

use BLPS\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class AcademicSessions extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "academicSessions";

    /**
     * @var string
     */
    protected string $modelName = "academicSession";
}
