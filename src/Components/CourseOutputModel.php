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
     * @var string[] $fields
     */
    protected static array $fields = [
        "course" => "\Kroscom\OneRosterAPI\Components\CourseModel"
    ];
}
