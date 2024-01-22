<?php

namespace Addy\Api\Model;

class ApiV1FailedDeliveriesGetResponse200DataItem extends \ArrayObject
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
    protected $recipientId;
    /**
     * 
     *
     * @var string|null
     */
    protected $recipientEmail;
    /**
     * 
     *
     * @var string|null
     */
    protected $aliasId;
    /**
     * 
     *
     * @var string|null
     */
    protected $aliasEmail;
    /**
     * 
     *
     * @var string|null
     */
    protected $bounceType;
    /**
     * 
     *
     * @var string|null
     */
    protected $remoteMta;
    /**
     * 
     *
     * @var string|null
     */
    protected $sender;
    /**
     * 
     *
     * @var string|null
     */
    protected $emailType;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $code;
    /**
     * 
     *
     * @var string|null
     */
    protected $attemptedAt;
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
    public function getRecipientId() : ?string
    {
        return $this->recipientId;
    }
    /**
     * 
     *
     * @param string|null $recipientId
     *
     * @return self
     */
    public function setRecipientId(?string $recipientId) : self
    {
        $this->initialized['recipientId'] = true;
        $this->recipientId = $recipientId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecipientEmail() : ?string
    {
        return $this->recipientEmail;
    }
    /**
     * 
     *
     * @param string|null $recipientEmail
     *
     * @return self
     */
    public function setRecipientEmail(?string $recipientEmail) : self
    {
        $this->initialized['recipientEmail'] = true;
        $this->recipientEmail = $recipientEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAliasId() : ?string
    {
        return $this->aliasId;
    }
    /**
     * 
     *
     * @param string|null $aliasId
     *
     * @return self
     */
    public function setAliasId(?string $aliasId) : self
    {
        $this->initialized['aliasId'] = true;
        $this->aliasId = $aliasId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAliasEmail() : ?string
    {
        return $this->aliasEmail;
    }
    /**
     * 
     *
     * @param string|null $aliasEmail
     *
     * @return self
     */
    public function setAliasEmail(?string $aliasEmail) : self
    {
        $this->initialized['aliasEmail'] = true;
        $this->aliasEmail = $aliasEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBounceType() : ?string
    {
        return $this->bounceType;
    }
    /**
     * 
     *
     * @param string|null $bounceType
     *
     * @return self
     */
    public function setBounceType(?string $bounceType) : self
    {
        $this->initialized['bounceType'] = true;
        $this->bounceType = $bounceType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRemoteMta() : ?string
    {
        return $this->remoteMta;
    }
    /**
     * 
     *
     * @param string|null $remoteMta
     *
     * @return self
     */
    public function setRemoteMta(?string $remoteMta) : self
    {
        $this->initialized['remoteMta'] = true;
        $this->remoteMta = $remoteMta;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSender() : ?string
    {
        return $this->sender;
    }
    /**
     * 
     *
     * @param string|null $sender
     *
     * @return self
     */
    public function setSender(?string $sender) : self
    {
        $this->initialized['sender'] = true;
        $this->sender = $sender;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmailType() : ?string
    {
        return $this->emailType;
    }
    /**
     * 
     *
     * @param string|null $emailType
     *
     * @return self
     */
    public function setEmailType(?string $emailType) : self
    {
        $this->initialized['emailType'] = true;
        $this->emailType = $emailType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttemptedAt() : ?string
    {
        return $this->attemptedAt;
    }
    /**
     * 
     *
     * @param string|null $attemptedAt
     *
     * @return self
     */
    public function setAttemptedAt(?string $attemptedAt) : self
    {
        $this->initialized['attemptedAt'] = true;
        $this->attemptedAt = $attemptedAt;
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