<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\BLPS\OneRosterAPI\Components\UserModel[] $users
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
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\UserModel[]";
}
