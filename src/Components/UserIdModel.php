<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

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
