<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Kroscom\OneRosterAPI\Client\Endpoints\Endpoint;
use Kroscom\OneRosterAPI\Endpoints\Teachers\Classes;

/**
 * Routing class for the subnamespace `Teachers`
 *
 * @property Classes $classes
 *
 * @api
 */
class Teachers extends Endpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "teachers";

    /**
     * @var string
     */
    protected string $modelName = "user";

    /**
     * @var array $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "classes" => "\Kroscom\OneRosterAPI\Endpoints\Teachers\Classes",
    ];

    /**
     * @var ?Classes $_classes
     */
    protected ?Classes $_classes = null;
}
