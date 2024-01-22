<?php

namespace Addy\Api\Model;

class ApiV1RecipientsPostResponse201 extends \ArrayObject
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
     * @var ApiV1RecipientsPostResponse201Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1RecipientsPostResponse201Data|null
     */
    public function getData() : ?ApiV1RecipientsPostResponse201Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1RecipientsPostResponse201Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1RecipientsPostResponse201Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}