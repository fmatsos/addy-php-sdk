<?php

namespace Addy\Api\Model;

class ApiV1DomainOptionsGetResponse200 extends \ArrayObject
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
     * @var string[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $sharedDomains;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultAliasDomain;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultAliasFormat;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSharedDomains() : ?array
    {
        return $this->sharedDomains;
    }
    /**
     * 
     *
     * @param string[]|null $sharedDomains
     *
     * @return self
     */
    public function setSharedDomains(?array $sharedDomains) : self
    {
        $this->initialized['sharedDomains'] = true;
        $this->sharedDomains = $sharedDomains;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultAliasDomain() : ?string
    {
        return $this->defaultAliasDomain;
    }
    /**
     * 
     *
     * @param string|null $defaultAliasDomain
     *
     * @return self
     */
    public function setDefaultAliasDomain(?string $defaultAliasDomain) : self
    {
        $this->initialized['defaultAliasDomain'] = true;
        $this->defaultAliasDomain = $defaultAliasDomain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultAliasFormat() : ?string
    {
        return $this->defaultAliasFormat;
    }
    /**
     * 
     *
     * @param string|null $defaultAliasFormat
     *
     * @return self
     */
    public function setDefaultAliasFormat(?string $defaultAliasFormat) : self
    {
        $this->initialized['defaultAliasFormat'] = true;
        $this->defaultAliasFormat = $defaultAliasFormat;
        return $this;
    }
}