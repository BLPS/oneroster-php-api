<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Collections\BaseCollection;

/**
 * @property ?OrgModel[] $orgs
 *
 * @api
 */
class OrgsOutputModel extends BaseCollection
{
    /**
     * @var string
     */
    protected static string $collectionKey = "orgs";

    /**
     * @var string
     */
    protected static string $collectionModel = "\BLPS\OneRosterAPI\Components\OrgModel[]";
}
