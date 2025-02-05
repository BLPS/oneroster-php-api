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
     * @var string
     */
    public static string $key = "demographic";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\DemographicModel";
}
