<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $name
 * @property ?string $type
 * @property ?string $identifier
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $parent
 * @property ?\BLPS\OneRosterAPI\Components\GuidRefModel[] $children
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
        "parent" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "children" => "\BLPS\OneRosterAPI\Components\GuidRefModel[]",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
