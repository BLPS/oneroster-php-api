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
     * @var string[] $fields
     */
    protected static array $fields = [
        "result" => "\Kroscom\OneRosterAPI\Components\ResultModel"
    ];
}
