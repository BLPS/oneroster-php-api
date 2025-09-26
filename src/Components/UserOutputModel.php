<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\UserModel $user
 *
 * @api
 */
class UserOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "user";

    /**
     * @var string
     */
    public static string $model = "\BLPS\OneRosterAPI\Components\UserModel";
}
