<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\CategoryModel $category
 *
 * @api
 */
class CategoryInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category" => "\BLPS\OneRosterAPI\Components\CategoryModel",
    ];
}
