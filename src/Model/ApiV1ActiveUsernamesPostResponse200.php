<?php

namespace Addy\Api\Model;

class ApiV1ActiveUsernamesPostResponse200 extends \ArrayObject
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
     * @var ApiV1ActiveUsernamesPostResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1ActiveUsernamesPostResponse200Data|null
     */
    public function getData() : ?ApiV1ActiveUsernamesPostResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1ActiveUsernamesPostResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1ActiveUsernamesPostResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}