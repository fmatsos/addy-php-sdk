<?php

namespace Addy\Api\Model;

class ApiV1DomainsPostResponse201 extends \ArrayObject
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
     * @var ApiV1DomainsPostResponse201Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1DomainsPostResponse201Data|null
     */
    public function getData() : ?ApiV1DomainsPostResponse201Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1DomainsPostResponse201Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1DomainsPostResponse201Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}