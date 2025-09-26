<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\BLPS\OneRosterAPI\Components\CourseModel[] $courses
 *
 * @api
 */
class CoursesOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "courses";

    /**
     * @var string
     */
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\CourseModel[]";
}
