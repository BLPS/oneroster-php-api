<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $user
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $class_
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $school
 * @property ?string $role
 * @property ?bool $primary
 * @property ?string $beginDate
 * @property ?string $endDate
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class EnrollmentModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "class" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "school" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "role" => "string",
        "primary" => "bool",
        "beginDate" => "string",
        "endDate" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
