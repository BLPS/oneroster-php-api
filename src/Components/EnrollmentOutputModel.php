<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\EnrollmentModel $enrollment
 *
 * @api
 */
class EnrollmentOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "enrollment" => "\Kroscom\OneRosterAPI\Components\EnrollmentModel"
    ];
}
