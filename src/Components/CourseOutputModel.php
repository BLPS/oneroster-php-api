<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\CourseModel $course
 *
 * @api
 */
class CourseOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "course";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\CourseModel";
}
