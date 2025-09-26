<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\LineItemModel $lineItem
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
    public static string $model = "\BLPS\OneRosterAPI\Components\LineItemModel";
}
