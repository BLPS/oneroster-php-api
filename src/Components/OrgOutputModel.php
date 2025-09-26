<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\OrgModel $org
 *
 * @api
 */
class OrgOutputModel extends BaseComponent
{
    /**
    * @var string
    */
    public static string $key = "org";

    /**
    * @var string
    */
    public static string $model = "\BLPS\OneRosterAPI\Components\OrgModel";
}
