<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\DemographicModel
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
    public static string $model = "\BLPS\OneRosterAPI\Components\DemographicModel";
}
