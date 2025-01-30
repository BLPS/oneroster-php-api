<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\LineItemModel[] $lineItems
 *
 * @api
 */
class LineItemsOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "lineItems";

    /**
     * @var string
     */
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\LineItemModel[]";
}
