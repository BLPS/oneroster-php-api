<?php

namespace Kroscom\OneRosterAPI\Components;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class CategoryModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
