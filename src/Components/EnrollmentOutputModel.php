<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\EnrollmentModel $enrollment
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
    public static string $model = "\BLPS\OneRosterAPI\Components\EnrollmentModel";
}
