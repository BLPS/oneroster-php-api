<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * Result
 *
 * @property \Kroscom\OneRosterAPI\Components\ResultModel $result Results model
 *
 * @api
 */
class ResultOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "result";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\ResultModel";
}
