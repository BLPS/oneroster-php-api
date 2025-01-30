<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\CourseModel[] $courses
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
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\CourseModel[]";
}
