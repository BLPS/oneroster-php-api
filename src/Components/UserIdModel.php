<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $type
 * @property ?string $identifier
 *
 * @api
 */
class UserIdModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "type" => "string",
        "identifier" => "string",
    ];
}
