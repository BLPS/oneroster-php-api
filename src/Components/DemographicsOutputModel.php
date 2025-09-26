<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?\BLPS\OneRosterAPI\Components\DemographicModel[] $demographics
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
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\DemographicModel[]";
}
