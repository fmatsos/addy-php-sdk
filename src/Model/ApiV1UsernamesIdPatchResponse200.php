<?php

namespace Addy\Api\Model;

class ApiV1UsernamesIdPatchResponse200 extends \ArrayObject
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
     * @var ApiV1UsernamesIdPatchResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1UsernamesIdPatchResponse200Data|null
     */
    public function getData() : ?ApiV1UsernamesIdPatchResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1UsernamesIdPatchResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1UsernamesIdPatchResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}