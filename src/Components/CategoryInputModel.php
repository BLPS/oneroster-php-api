<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\CategoryModel $category
 *
 * @api
 */
class CategoryInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category" => "\Kroscom\OneRosterAPI\Components\CategoryModel",
    ];
}
