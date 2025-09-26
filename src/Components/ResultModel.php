<?php

namespace BLPS\OneRosterAPI\Components;

use BLPS\OneRosterAPI\Client\Components\BaseComponent;

/**
 * Results model
 *
 * @property ?string $scoreStatus Score status
 * @property ?string $scoreDate Score date
 * @property ?float $score Score
 * @property ?string $comment Comment
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $lineItem
 * @property \BLPS\OneRosterAPI\Components\GuidRefModel $student
 * @property ?string $sourcedId Unique identifier for the instance
 * @property ?string $status Status for the instance
 * @property ?string $dateLastModified Date and time the instance was last
 *   modified
 * @property ?array{...<string, string>} $metadata Extension properties for
 *   the instance
 *
 * @api
 */
class ResultModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "scoreStatus" => "string",
        "scoreDate" => "string",
        "score" => "float",
        "comment" => "string",
        "lineItem" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "student" => "\BLPS\OneRosterAPI\Components\GuidRefModel",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
