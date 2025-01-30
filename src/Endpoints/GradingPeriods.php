<?php
namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;

/**
 * @api
 */
class GradingPeriods extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "gradingPeriods";

    /**
     * @var string
     */
    protected string $modelName = "academicSession";
}
