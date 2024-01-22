<?php

namespace Addy\Api\Model;

class ApiV1AliasesPostResponse201 extends \ArrayObject
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
     * @var ApiV1AliasesPostResponse201Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1AliasesPostResponse201Data|null
     */
    public function getData() : ?ApiV1AliasesPostResponse201Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1AliasesPostResponse201Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1AliasesPostResponse201Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}