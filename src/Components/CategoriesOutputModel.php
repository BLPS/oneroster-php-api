<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\CategoryModel[] $categories
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
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\CategoryModel[]";
}
