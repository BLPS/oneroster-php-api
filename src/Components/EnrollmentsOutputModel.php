<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\EnrollmentModel[] $enrollments
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
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\EnrollmentModel[]";
}
