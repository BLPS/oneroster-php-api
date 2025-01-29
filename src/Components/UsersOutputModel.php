<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\ORUserModel[] $users
 * @property ?\Kroscom\OneRosterAPI\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class UsersOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "users" => "\Kroscom\OneRosterAPI\Components\ORUserModel[]",
        "statusInfoSet" => "\Kroscom\OneRosterAPI\Components\StatusInfoModel[]",
    ];
}
