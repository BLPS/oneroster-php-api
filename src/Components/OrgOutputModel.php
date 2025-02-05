<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\OrgModel $org
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
    public static string $model = "\Kroscom\OneRosterAPI\Components\OrgModel";
}
