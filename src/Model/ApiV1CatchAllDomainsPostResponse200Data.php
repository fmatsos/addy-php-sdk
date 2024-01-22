<?php

namespace Addy\Api\Model;

class ApiV1CatchAllDomainsPostResponse200Data extends \ArrayObject
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
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $fromName;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $aliases;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultRecipient;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var bool|null
     */
    protected $catchAll;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainVerifiedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainMxValidatedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainSendingVerifiedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFromName() : ?string
    {
        return $this->fromName;
    }
    /**
     * 
     *
     * @param string|null $fromName
     *
     * @return self
     */
    public function setFromName(?string $fromName) : self
    {
        $this->initialized['fromName'] = true;
        $this->fromName = $fromName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getAliases() : ?array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param mixed[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases) : self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultRecipient() : ?string
    {
        return $this->defaultRecipient;
    }
    /**
     * 
     *
     * @param string|null $defaultRecipient
     *
     * @return self
     */
    public function setDefaultRecipient(?string $defaultRecipient) : self
    {
        $this->initialized['defaultRecipient'] = true;
        $this->defaultRecipient = $defaultRecipient;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCatchAll() : ?bool
    {
        return $this->catchAll;
    }
    /**
     * 
     *
     * @param bool|null $catchAll
     *
     * @return self
     */
    public function setCatchAll(?bool $catchAll) : self
    {
        $this->initialized['catchAll'] = true;
        $this->catchAll = $catchAll;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainVerifiedAt() : ?string
    {
        return $this->domainVerifiedAt;
    }
    /**
     * 
     *
     * @param string|null $domainVerifiedAt
     *
     * @return self
     */
    public function setDomainVerifiedAt(?string $domainVerifiedAt) : self
    {
        $this->initialized['domainVerifiedAt'] = true;
        $this->domainVerifiedAt = $domainVerifiedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainMxValidatedAt() : ?string
    {
        return $this->domainMxValidatedAt;
    }
    /**
     * 
     *
     * @param string|null $domainMxValidatedAt
     *
     * @return self
     */
    public function setDomainMxValidatedAt(?string $domainMxValidatedAt) : self
    {
        $this->initialized['domainMxValidatedAt'] = true;
        $this->domainMxValidatedAt = $domainMxValidatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainSendingVerifiedAt() : ?string
    {
        return $this->domainSendingVerifiedAt;
    }
    /**
     * 
     *
     * @param string|null $domainSendingVerifiedAt
     *
     * @return self
     */
    public function setDomainSendingVerifiedAt(?string $domainSendingVerifiedAt) : self
    {
        $this->initialized['domainSendingVerifiedAt'] = true;
        $this->domainSendingVerifiedAt = $domainSendingVerifiedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}