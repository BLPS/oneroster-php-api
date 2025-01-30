<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $name
 * @property ?string $type
 * @property ?string $identifier
 * @property \Kroscom\OneRosterAPI\Components\GuidRefModel $parent
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $children
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class OrgModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "type" => "string",
        "identifier" => "string",
        "parent" => "\Kroscom\OneRosterAPI\Components\GuidRefModel",
        "children" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
