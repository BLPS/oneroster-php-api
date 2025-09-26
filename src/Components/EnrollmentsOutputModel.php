<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\BLPS\OneRosterAPI\Components\EnrollmentModel[] $enrollments
 *
 * @api
 */
class EnrollmentsOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "enrollments";

    /**
     * @var string
     */
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\EnrollmentModel[]";
}
