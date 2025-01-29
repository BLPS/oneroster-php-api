<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $schoolYear
 * @property ?string $courseCode
 * @property ?string[] $grades
 * @property ?string[] $subjects
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $org
 * @property ?string[] $subjectCodes
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $resources
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class CourseModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "schoolYear" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "courseCode" => "string",
        "grades" => "string[]",
        "subjects" => "string[]",
        "org" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "subjectCodes" => "string[]",
        "resources" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
