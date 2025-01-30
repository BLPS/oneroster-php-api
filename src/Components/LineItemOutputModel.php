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
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItem" => "\Kroscom\OneRosterAPI\Components\LineItemModel"
    ];
}
