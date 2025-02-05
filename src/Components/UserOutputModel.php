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
     * @var string
     */
    public static string $key = "user";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\UserModel";
}
