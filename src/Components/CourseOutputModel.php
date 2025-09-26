<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\CourseModel $course
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
    public static string $model = "\BLPS\OneRosterAPI\Components\CourseModel";
}
