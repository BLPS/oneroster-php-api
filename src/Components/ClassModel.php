<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $classCode
 * @property ?string $classType
 * @property ?string $location
 * @property ?string[] $grades
 * @property ?string[] $subjects
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $course
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $school
 * @property ?\BLPS\OneRosterAPI\Components\GuidRefModel[] $terms
 * @property ?string[] $subjectCodes
 * @property ?string[] $periods
 * @property ?\BLPS\OneRosterAPI\Components\GuidRefModel[] $resources
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
        "course" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "school" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "terms" => "\BLPS\OneRosterAPI\Components\GuidRefModel[]",
        "subjectCodes" => "string[]",
        "periods" => "string[]",
        "resources" => "\BLPS\OneRosterAPI\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
