<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\ClassModel $class_
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
    public static string $model = "\BLPS\OneRosterAPI\Components\ClassModel";
}
