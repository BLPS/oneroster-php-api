<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * Result
 *
 * @property ?\Kroscom\OneRosterAPI\Components\ResultModel[] $results Results
 *
 * @api
 */
class ResultsOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "results";

    /**
     * @var string
     */
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\ResultModel[]";
}
