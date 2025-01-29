<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\CourseModel $course
 * @property ?\Kroscom\OneRosterAPI\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class CourseOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "course" => "\Kroscom\OneRosterAPI\Components\CourseModel",
        "statusInfoSet" => "\Kroscom\OneRosterAPI\Components\StatusInfoModel[]",
    ];
}
