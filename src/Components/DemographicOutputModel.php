<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\DemographicModel
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
        "demographic" => "\Kroscom\OneRosterAPI\Components\DemographicModel",
    ];
}
