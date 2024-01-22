<?php

namespace Addy\Api\Model;

class ApiV1AliasesDeactivateBulkPostResponse200 extends \ArrayObject
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
     * @var ApiV1AliasesDeactivateBulkPostResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1AliasesDeactivateBulkPostResponse200Data|null
     */
    public function getData() : ?ApiV1AliasesDeactivateBulkPostResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1AliasesDeactivateBulkPostResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1AliasesDeactivateBulkPostResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}