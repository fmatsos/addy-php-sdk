<?php

namespace Addy\Api\Model;

class ApiV1UsernamesPostResponse201 extends \ArrayObject
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
     * @var ApiV1UsernamesPostResponse201Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1UsernamesPostResponse201Data|null
     */
    public function getData() : ?ApiV1UsernamesPostResponse201Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1UsernamesPostResponse201Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1UsernamesPostResponse201Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}