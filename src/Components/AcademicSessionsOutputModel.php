<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

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
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\AcademicSessionModel[]";
}
