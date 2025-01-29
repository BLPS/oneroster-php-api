<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\AcademicSessionModel[]
 *   $academicSessions
 * @property ?\Kroscom\OneRosterAPI\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class AcademicSessionsOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "academicSessions" => "\Kroscom\OneRosterAPI\Components\AcademicSessionModel[]",
        "statusInfoSet" => "\Kroscom\OneRosterAPI\Components\StatusInfoModel[]",
    ];
}
