<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\CategoryModel $category
 *
 * @api
 */
class CategoryOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "category";

    /**
     * @var string
     */
    public static string $model = "\BLPS\OneRosterAPI\Components\CategoryModel";
}
