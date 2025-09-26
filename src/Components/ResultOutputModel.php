<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * Result
 *
 * @property \BLPS\OneRosterAPI\Components\ResultModel $result Results model
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
    public static string $model = "\BLPS\OneRosterAPI\Components\ResultModel";
}
