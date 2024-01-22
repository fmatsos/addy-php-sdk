<?php

namespace Addy\Api\Model;

class ApiV1EncryptedRecipientsPostResponse200 extends \ArrayObject
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
     * @var ApiV1EncryptedRecipientsPostResponse200Data|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1EncryptedRecipientsPostResponse200Data|null
     */
    public function getData() : ?ApiV1EncryptedRecipientsPostResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1EncryptedRecipientsPostResponse200Data|null $data
     *
     * @return self
     */
    public function setData(?ApiV1EncryptedRecipientsPostResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}