<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $classCode
 * @property ?string $classType
 * @property ?string $location
 * @property ?string[] $grades
 * @property ?string[] $subjects
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $course
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $school
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $terms
 * @property ?string[] $subjectCodes
 * @property ?string[] $periods
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $resources
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class ClassModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "classCode" => "string",
        "classType" => "string",
        "location" => "string",
        "grades" => "string[]",
        "subjects" => "string[]",
        "course" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "school" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "terms" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "subjectCodes" => "string[]",
        "periods" => "string[]",
        "resources" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
