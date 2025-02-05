<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \Kroscom\OneRosterAPI\Components\AcademicSessionModel
 *   $academicSession
 *
 * @api
 */
class AcademicSessionOutputModel extends BaseComponent
{
    /**
     * @var string
     */
    public static string $key = "academicSession";

    /**
     * @var string
     */
    public static string $model = "\Kroscom\OneRosterAPI\Components\AcademicSessionModel";
}
