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
     * @var string[] $fields
     */
    protected static array $fields = [
        "academicSession" => "\Kroscom\OneRosterAPI\Components\AcademicSessionModel"
    ];
}
