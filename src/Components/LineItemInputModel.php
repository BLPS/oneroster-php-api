<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\LineItemModel $lineItem
 *
 * @api
 */
class LineItemInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItem" => "\BLPS\OneRosterAPI\Components\LineItemModel",
    ];
}
