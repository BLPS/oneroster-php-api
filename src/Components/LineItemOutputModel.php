<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\LineItemModel $lineItem
 * @property ?\Kroscom\OneRosterAPI\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class LineItemOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItem" => "\Kroscom\OneRosterAPI\Components\LineItemModel",
        "statusInfoSet" => "\Kroscom\OneRosterAPI\Components\StatusInfoModel[]",
    ];
}
