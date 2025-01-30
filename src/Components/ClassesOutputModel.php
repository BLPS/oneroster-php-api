<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\ClassModel[] $classes
 *
 * @api
 */
class ClassesOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "classes";

    /**
     * @var string
     */
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\ClassModel[]";
}
