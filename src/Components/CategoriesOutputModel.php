<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\BLPS\OneRosterAPI\Components\CategoryModel[] $categories
 *
 * @api
 */
class CategoriesOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "categories";

    /**
     * @var string
     */
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\CategoryModel[]";
}
