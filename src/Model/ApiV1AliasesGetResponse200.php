<?php

namespace Addy\Api\Model;

class ApiV1AliasesGetResponse200 extends \ArrayObject
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
     * @var ApiV1AliasesGetResponse200DataItem[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var ApiV1AliasesGetResponse200Links|null
     */
    protected $links;
    /**
     * 
     *
     * @var ApiV1AliasesGetResponse200Meta|null
     */
    protected $meta;
    /**
     * 
     *
     * @return ApiV1AliasesGetResponse200DataItem[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1AliasesGetResponse200DataItem[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return ApiV1AliasesGetResponse200Links|null
     */
    public function getLinks() : ?ApiV1AliasesGetResponse200Links
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ApiV1AliasesGetResponse200Links|null $links
     *
     * @return self
     */
    public function setLinks(?ApiV1AliasesGetResponse200Links $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return ApiV1AliasesGetResponse200Meta|null
     */
    public function getMeta() : ?ApiV1AliasesGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ApiV1AliasesGetResponse200Meta|null $meta
     *
     * @return self
     */
    public function setMeta(?ApiV1AliasesGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}