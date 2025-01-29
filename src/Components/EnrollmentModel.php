<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $user
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $class_
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $school
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
        "user" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "class" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "school" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
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
