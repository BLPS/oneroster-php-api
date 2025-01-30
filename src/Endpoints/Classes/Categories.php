<?php
namespace Kroscom\OneRosterAPI\Endpoints\Classes;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use GuzzleHttp\Exception\GuzzleException;
use Kroscom\OneRosterAPI\Client\Endpoints\SubEndpoint;
use Kroscom\OneRosterAPI\Components\CategoriesOutputModel;

/**
 * @api
 */
class Categories extends SubEndpoint
{
    /**
     * @var string
     */
    protected string $endpoint = "classes/{parent_id}/categories";

    /**
     * @var string
     */
    protected string $modelName = "category";

    /**
     * Returns a collection of categories for a specified $class_id
     *
     * @param string|int|float $class_id
     * @param array $params
     * @return CategoriesOutputModel|BaseComponent
     * @throws GuzzleException
     */
    public function getByClassId(string|int|float $class_id, array $params = []): CategoriesOutputModel|BaseComponent
    {
        return $this->get($class_id, $params);
    }
}
