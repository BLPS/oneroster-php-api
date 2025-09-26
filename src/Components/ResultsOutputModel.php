<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * Result
 *
 * @property ?\BLPS\OneRosterAPI\Components\ResultModel[] $results Results
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
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\ResultModel[]";
}
