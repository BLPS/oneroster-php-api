<?php

namespace Kroscom\OneRosterAPI\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $username
 * @property ?\Kroscom\OneRosterAPI\Components\UserIdModel[] $userIds
 * @property ?bool $enabledUser
 * @property ?string $givenName
 * @property ?string $familyName
 * @property ?string $middleName
 * @property ?string $role
 * @property ?string $identifier
 * @property ?string $email
 * @property ?string $sms
 * @property ?string $phone
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $agents
 * @property ?\Kroscom\OneRosterAPI\Components\GuidRefModel[] $orgs
 * @property ?string[] $grades
 * @property ?string $password
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class ORUserModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "username" => "string",
        "userIds" => "\Kroscom\OneRosterAPI\Components\UserIdModel[]",
        "enabledUser" => "bool",
        "givenName" => "string",
        "familyName" => "string",
        "middleName" => "string",
        "role" => "string",
        "identifier" => "string",
        "email" => "string",
        "sms" => "string",
        "phone" => "string",
        "agents" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "orgs" => "\Kroscom\OneRosterAPI\Components\GuidRefModel[]",
        "grades" => "string[]",
        "password" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
