<?php
namespace Kroscom\OneRosterAPI\Client\Collections;

use Kroscom\OneRosterAPI\Client\Components\BaseComponent;
use Kroscom\OneRosterAPI\Client\Endpoints\BaseEndpoint;
use Kroscom\OneRosterAPI\Client\OneRosterClient;
use Kroscom\OneRosterAPI\OneRosterAPI;

class BaseCollection extends BaseComponent
{
    /**
     * @var string|null
     */
    protected ?string $_parentId = null;

    /**
     * @var string|null
     */
    protected ?string $_id = null;

    /**
     * @var int|null
     */
    protected ?int $_count = 0;

    /**
     * @var int|null
     */
    protected ?int $_limit = 100;

    /**
     * @var int|null
     */
    protected ?int $_offset = 0;

    /**
     * @var BaseEndpoint|null
     */
    protected ?BaseEndpoint $_endpoint = null;

    /**
     * @var string|array|null
     */
    protected null|string|array $_fields = null;

    /**
     * @var string|array|null
     */
    protected null|string|array $_filter = null;

    /**
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->_parentId;
    }

    /**
     * @param string|null $parentId
     * @return $this
     */
    public function setParentId(?string $parentId): static
    {
        $this->_parentId = $parentId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->_id;
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function setId(?string $id): static
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->_count;
    }

    /**
     * @param int|null $count
     * @return $this
     */
    public function setCount(?int $count): static
    {
        $this->_count = $count;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->_limit;
    }

    /**
     * @param int|null $limit
     * @return $this
     */
    public function setLimit(?int $limit): static
    {
        $this->_limit = $limit;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->_offset;
    }

    /**
     * @param int|null $offset
     * @return $this
     */
    public function setOffset(?int $offset): static
    {
        $this->_offset = $offset;
        return $this;
    }

    /**
     * @return array|string|null
     */
    public function getFields(): array|string|null
    {
        return $this->_fields;
    }

    /**
     * @param array|string|null $fields
     * @return $this
     */
    public function setFields(array|string|null $fields): static
    {
        $this->_fields = $fields;
        return $this;
    }

    /**
     * @return array|string|null
     */
    public function getFilter(): array|string|null
    {
        return $this->_filter;
    }

    /**
     * @param array|string|null $filter
     * @return $this
     */
    public function setFilter(array|string|null $filter): static
    {
        $this->_filter = $filter;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrev(): bool
    {
        return $this->_offset > 0;
    }

    /**
     * @return bool
     */
    public function isNext(): bool
    {
        return ($this->_offset + $this->_limit) < $this->_count;
    }

    /**
     * @return int|null
     */
    public function getPrevOffset(): ?int
    {
        $offset = $this->_offset - $this->_limit;
        $offset = $offset < 0 ? 0 : $offset;
        return $this->isPrev() ? $offset : null;
    }

    /**
     * @return int|null
     */
    public function getNextOffset(): ?int
    {
        $offset = $this->_offset + $this->_limit;
        return $this->isNext() ? $offset : null;
    }

    /**
     * @param BaseEndpoint|null $endpoint
     * @return $this
     */
    public function setEndpoint(?BaseEndpoint $endpoint): static
    {
        $this->_endpoint = $endpoint;
        return $this;
    }

    /**
     * @return $this|null
     */
    public function getNextPage(): ?static
    {
        $newOffset = $this->getNextOffset();
        if($newOffset === null) { return null; }
        return $this->getPageByOffset($newOffset);
    }

    /**
     * @return $this|null
     */
    public function getPrevPage(): ?static
    {
        $newOffset = $this->getPrevOffset();
        if($newOffset === null) { return null; }
        return $this->getPageByOffset($newOffset);
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function getPageByOffset(int $offset): static
    {
        $fields = $this->getFields();
        $filter = $this->getFilter();
        $limit = $this->getLimit();

        $params = [];
        if(!empty($fields)) { $params['fields'] = $fields; }
        if(!empty($filter)) { $params['filter'] = $filter; }
        $params['limit'] = $limit;
        $params['offset'] = $offset;

        $api = $this->_endpoint;
//        $api->setId($this->getId());
//        $api->setParentId($this->getParentId());
        return $api->get($params);
    }
}
