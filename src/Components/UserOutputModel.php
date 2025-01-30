<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\UserModel $user
 *
 * @api
 */
class UserOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user" => "\Kroscom\OneRosterAPI\Components\UserModel"
    ];
}
