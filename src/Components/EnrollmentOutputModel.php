<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\EnrollmentModel $enrollment
 * @property ?\Kroscom\OneRosterAPI\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class EnrollmentOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "enrollment" => "\Kroscom\OneRosterAPI\Components\EnrollmentModel",
        "statusInfoSet" => "\Kroscom\OneRosterAPI\Components\StatusInfoModel[]",
    ];
}
