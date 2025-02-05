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
     * @var string
     */
    public static string $key = "category";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\CategoryModel";
}
