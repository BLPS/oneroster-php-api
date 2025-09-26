<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * Results input model
 *
 * @property \BLPS\OneRosterAPI\Components\ResultModel $result
 *   Results model
 *
 * @api
 */
class ResultInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "result" => "\BLPS\OneRosterAPI\Components\ResultModel",
    ];
}
