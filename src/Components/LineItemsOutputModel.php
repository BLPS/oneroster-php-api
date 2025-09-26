<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\BLPS\OneRosterAPI\Components\LineItemModel[] $lineItems
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
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\LineItemModel[]";
}
