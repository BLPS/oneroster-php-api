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
     * @var string[] $fields
     */
    protected static array $fields = [
        "class" => "\Kroscom\OneRosterAPI\Components\ClassModel"
    ];
}
