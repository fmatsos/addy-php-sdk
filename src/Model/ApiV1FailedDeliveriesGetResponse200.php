<?php

namespace Addy\Api\Model;

class ApiV1FailedDeliveriesGetResponse200 extends \ArrayObject
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
     * @var ApiV1FailedDeliveriesGetResponse200DataItem[]|null
     */
    protected $data;
    /**
     * 
     *
     * @return ApiV1FailedDeliveriesGetResponse200DataItem[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ApiV1FailedDeliveriesGetResponse200DataItem[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}