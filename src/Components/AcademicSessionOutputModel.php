<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property \BLPS\OneRosterAPI\Components\AcademicSessionModel
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
    public static string $model = "\BLPS\OneRosterAPI\Components\AcademicSessionModel";
}
