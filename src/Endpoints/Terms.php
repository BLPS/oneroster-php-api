<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;
use Kroscom\OneRosterAPI\Endpoints\Terms\GradingPeriods;

/**
 * Routing class for the subnamespace `Terms`
 *
 * @property GradingPeriods
 *   $gradingPeriods
 *
 * @api
 */
class Terms extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "terms";

    /**
     * @var string
     */
    protected string $modelName = "academicSession";

    /**
     * @var array
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "gradingPeriods" => "\Kroscom\OneRosterAPI\Endpoints\Terms\GradingPeriods",
    ];

    /**
     * @var ?GradingPeriods
     *   $_gradingPeriods
     */
    protected ?GradingPeriods $_gradingPeriods = null;
}
