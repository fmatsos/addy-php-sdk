<?php

namespace Addy\Api\Model;

class ApiV1AliasesGetResponse200Meta extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int|null
     */
    protected $currentPage;
    /**
     * 
     *
     * @var int|null
     */
    protected $from;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastPage;
    /**
     * 
     *
     * @var ApiV1AliasesGetResponse200MetaLinksItem[]|null
     */
    protected $links;
    /**
     * 
     *
     * @var string|null
     */
    protected $path;
    /**
     * 
     *
     * @var int|null
     */
    protected $perPage;
    /**
     * 
     *
     * @var int|null
     */
    protected $to;
    /**
     * 
     *
     * @var int|null
     */
    protected $total;
    /**
     * 
     *
     * @return int|null
     */
    public function getCurrentPage() : ?int
    {
        return $this->currentPage;
    }
    /**
     * 
     *
     * @param int|null $currentPage
     *
     * @return self
     */
    public function setCurrentPage(?int $currentPage) : self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFrom() : ?int
    {
        return $this->from;
    }
    /**
     * 
     *
     * @param int|null $from
     *
     * @return self
     */
    public function setFrom(?int $from) : self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastPage() : ?int
    {
        return $this->lastPage;
    }
    /**
     * 
     *
     * @param int|null $lastPage
     *
     * @return self
     */
    public function setLastPage(?int $lastPage) : self
    {
        $this->initialized['lastPage'] = true;
        $this->lastPage = $lastPage;
        return $this;
    }
    /**
     * 
     *
     * @return ApiV1AliasesGetResponse200MetaLinksItem[]|null
     */
    public function getLinks() : ?array
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ApiV1AliasesGetResponse200MetaLinksItem[]|null $links
     *
     * @return self
     */
    public function setLinks(?array $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPerPage() : ?int
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage) : self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTo() : ?int
    {
        return $this->to;
    }
    /**
     * 
     *
     * @param int|null $to
     *
     * @return self
     */
    public function setTo(?int $to) : self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}