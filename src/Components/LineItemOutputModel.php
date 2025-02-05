<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\LineItemModel $lineItem
 *
 * @api
 */
class LineItemOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "lineItem";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\LineItemModel";
}
