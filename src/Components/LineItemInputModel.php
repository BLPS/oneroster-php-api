<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\LineItemModel $lineItem
 *
 * @api
 */
class LineItemInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItem" => "\Kroscom\OneRosterAPI\Components\LineItemModel",
    ];
}
