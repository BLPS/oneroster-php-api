<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Results input model
 *
 * @property \Kroscom\OneRosterAPI\Components\ResultModelSvc $result
 *   Results model
 *
 * @api
 */
class ResultInputModelSvc extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "result" => "\Kroscom\OneRosterAPI\Components\ResultModelSvc",
    ];
}
