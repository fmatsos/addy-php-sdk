<?php

namespace Addy\Api\Model;

class ApiV1RecipientKeysIdPatchResponse200Data extends \ArrayObject
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
    protected $email;
    /**
     * 
     *
     * @var bool|null
     */
    protected $canReplySend;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shouldEncrypt;
    /**
     * 
     *
     * @var bool|null
     */
    protected $inlineEncryption;
    /**
     * 
     *
     * @var bool|null
     */
    protected $protectedHeaders;
    /**
     * 
     *
     * @var string|null
     */
    protected $fingerprint;
    /**
     * 
     *
     * @var string|null
     */
    protected $emailVerifiedAt;
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
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCanReplySend() : ?bool
    {
        return $this->canReplySend;
    }
    /**
     * 
     *
     * @param bool|null $canReplySend
     *
     * @return self
     */
    public function setCanReplySend(?bool $canReplySend) : self
    {
        $this->initialized['canReplySend'] = true;
        $this->canReplySend = $canReplySend;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShouldEncrypt() : ?bool
    {
        return $this->shouldEncrypt;
    }
    /**
     * 
     *
     * @param bool|null $shouldEncrypt
     *
     * @return self
     */
    public function setShouldEncrypt(?bool $shouldEncrypt) : self
    {
        $this->initialized['shouldEncrypt'] = true;
        $this->shouldEncrypt = $shouldEncrypt;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getInlineEncryption() : ?bool
    {
        return $this->inlineEncryption;
    }
    /**
     * 
     *
     * @param bool|null $inlineEncryption
     *
     * @return self
     */
    public function setInlineEncryption(?bool $inlineEncryption) : self
    {
        $this->initialized['inlineEncryption'] = true;
        $this->inlineEncryption = $inlineEncryption;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getProtectedHeaders() : ?bool
    {
        return $this->protectedHeaders;
    }
    /**
     * 
     *
     * @param bool|null $protectedHeaders
     *
     * @return self
     */
    public function setProtectedHeaders(?bool $protectedHeaders) : self
    {
        $this->initialized['protectedHeaders'] = true;
        $this->protectedHeaders = $protectedHeaders;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFingerprint() : ?string
    {
        return $this->fingerprint;
    }
    /**
     * 
     *
     * @param string|null $fingerprint
     *
     * @return self
     */
    public function setFingerprint(?string $fingerprint) : self
    {
        $this->initialized['fingerprint'] = true;
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmailVerifiedAt() : ?string
    {
        return $this->emailVerifiedAt;
    }
    /**
     * 
     *
     * @param string|null $emailVerifiedAt
     *
     * @return self
     */
    public function setEmailVerifiedAt(?string $emailVerifiedAt) : self
    {
        $this->initialized['emailVerifiedAt'] = true;
        $this->emailVerifiedAt = $emailVerifiedAt;
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