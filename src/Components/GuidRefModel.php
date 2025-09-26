<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $sourcedId
 * @property ?string $href
 * @property ?string $type
 *
 * @api
 */
class GuidRefModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sourcedId" => "string",
        "href" => "string",
        "type" => "string",
    ];
}
