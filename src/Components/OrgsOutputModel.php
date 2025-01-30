<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Collections\BaseCollection;

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
    protected static string $collectionModel = "\Kroscom\OneRosterAPI\Components\OrgModel[]";
}
