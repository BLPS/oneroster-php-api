<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @api
 */
class AcademicSessionsOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "academicSessions";

    /**
     * @var string
     */
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\AcademicSessionModel[]";
}
