<?php

namespace Kroscom\OneRosterAPI\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Kroscom\OneRosterAPI\Components\AcademicSessionOutputModel;
use Kroscom\OneRosterAPI\Components\AcademicSessionsOutputModel;
use Kroscom\OneRosterAPI\Endpoints\Terms\GradingPeriods;

/**
 * Routing class for the subnamespace `Terms`
 *
 * @property \Kroscom\OneRosterAPI\Endpoints\Terms\GradingPeriods
 *   $gradingPeriods
 *
 * @api
 */
class Terms extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "gradingPeriods" => "\Kroscom\OneRosterAPI\Endpoints\Terms\GradingPeriods",
    ];

    /**
     * @var ?\Kroscom\OneRosterAPI\Endpoints\Terms\GradingPeriods
     *   $_gradingPeriods
     */
    protected ?GradingPeriods $_gradingPeriods = null;

    /**
     * Returns a collection of terms.
     *
     * @return \Kroscom\OneRosterAPI\Components\AcademicSessionsOutputModel
     *   OK - It was possible to read the collection.
     */
    public function get(): AcademicSessionsOutputModel
    {
        return new AcademicSessionsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific term.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the term
     *
     * @return \Kroscom\OneRosterAPI\Components\AcademicSessionOutputModel
     *   OK - It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): AcademicSessionOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new AcademicSessionOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
