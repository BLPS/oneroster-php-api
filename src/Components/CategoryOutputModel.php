<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\CategoryModel $category
 *
 * @api
 */
class CategoryOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category" => "\Kroscom\OneRosterAPI\Components\CategoryModel"
    ];
}
