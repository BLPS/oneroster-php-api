<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\ORDemographicModel
 *   $demographic
 *
 * @api
 */
class DemographicOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "demographic" => "\Kroscom\OneRosterAPI\Components\ORDemographicModel",
    ];
}
