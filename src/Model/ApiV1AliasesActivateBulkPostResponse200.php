<?php

namespace Addy\Api\Model;

class ApiV1AliasesActivateBulkPostResponse200 extends \ArrayObject
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
     * @var ApiV1AliasesActivateBulkPostResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1AliasesActivateBulkPostResponse200Data|null
     */
    public function getData() : ?ApiV1AliasesActivateBulkPostResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1AliasesActivateBulkPostResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1AliasesActivateBulkPostResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}