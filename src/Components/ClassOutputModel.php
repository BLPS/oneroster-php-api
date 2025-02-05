<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\ClassModel $class_
 *
 * @api
 */
class ClassOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "class";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\ClassModel";
}
