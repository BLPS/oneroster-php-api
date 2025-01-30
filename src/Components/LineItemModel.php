<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $description
 * @property ?string $assignDate
 * @property ?string $dueDate
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $class_
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $category
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $gradingPeriod
 * @property ?float $resultValueMin
 * @property ?float $resultValueMax
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class LineItemModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "description" => "string",
        "assignDate" => "string",
        "dueDate" => "string",
        "class" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "category" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "gradingPeriod" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "resultValueMin" => "float",
        "resultValueMax" => "float",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
