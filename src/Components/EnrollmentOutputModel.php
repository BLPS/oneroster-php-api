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
     * @var string
     */
    public static string $key = "enrollment";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\EnrollmentModel";
}
