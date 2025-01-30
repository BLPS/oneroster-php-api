<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\UserModel[] $users
 *
 * @api
 */
class UsersOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "users";

    /**
     * @var string
     */
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\UserModel[]";
}
