<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $startDate
 * @property ?string $endDate
 * @property ?string $type
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $parent
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $children
 * @property ?string $schoolYear
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class AcademicSessionModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "startDate" => "string",
        "endDate" => "string",
        "type" => "string",
        "parent" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "children" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "schoolYear" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
