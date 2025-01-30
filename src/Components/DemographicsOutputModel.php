<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\Kroscom\OneRosterAPI\Components\DemographicModel[] $demographics
 *
 * @api
 */
class DemographicsOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "demographics";

    /**
     * @var string
     */
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\DemographicModel[]";
}
