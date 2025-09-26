<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $title
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $schoolYear
 * @property ?string $courseCode
 * @property ?string[] $grades
 * @property ?string[] $subjects
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $org
 * @property ?string[] $subjectCodes
 * @property ?\BLPS\OneRosterAPI\Components\GuidRefModel[] $resources
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
        "schoolYear" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "courseCode" => "string",
        "grades" => "string[]",
        "subjects" => "string[]",
        "org" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "subjectCodes" => "string[]",
        "resources" => "\BLPS\OneRosterAPI\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
