<?php

namespace Addy\Api\Model;

class ApiV1AliasesIdRestorePatchResponse200Data extends \ArrayObject
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
    protected $aliasableId;
    /**
     * 
     *
     * @var string|null
     */
    protected $aliasableType;
    /**
     * 
     *
     * @var string|null
     */
    protected $localPart;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
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
    protected $email;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $fromName;
    /**
     * 
     *
     * @var int|null
     */
    protected $emailsForwarded;
    /**
     * 
     *
     * @var int|null
     */
    protected $emailsBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $emailsReplied;
    /**
     * 
     *
     * @var int|null
     */
    protected $emailsSent;
    /**
     * 
     *
     * @var mixed[]|null
     */
    protected $recipients;
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
     * @var string|null
     */
    protected $deletedAt;
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
    public function getAliasableId() : ?string
    {
        return $this->aliasableId;
    }
    /**
     * 
     *
     * @param string|null $aliasableId
     *
     * @return self
     */
    public function setAliasableId(?string $aliasableId) : self
    {
        $this->initialized['aliasableId'] = true;
        $this->aliasableId = $aliasableId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAliasableType() : ?string
    {
        return $this->aliasableType;
    }
    /**
     * 
     *
     * @param string|null $aliasableType
     *
     * @return self
     */
    public function setAliasableType(?string $aliasableType) : self
    {
        $this->initialized['aliasableType'] = true;
        $this->aliasableType = $aliasableType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocalPart() : ?string
    {
        return $this->localPart;
    }
    /**
     * 
     *
     * @param string|null $localPart
     *
     * @return self
     */
    public function setLocalPart(?string $localPart) : self
    {
        $this->initialized['localPart'] = true;
        $this->localPart = $localPart;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
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
     * @return int|null
     */
    public function getEmailsForwarded() : ?int
    {
        return $this->emailsForwarded;
    }
    /**
     * 
     *
     * @param int|null $emailsForwarded
     *
     * @return self
     */
    public function setEmailsForwarded(?int $emailsForwarded) : self
    {
        $this->initialized['emailsForwarded'] = true;
        $this->emailsForwarded = $emailsForwarded;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEmailsBlocked() : ?int
    {
        return $this->emailsBlocked;
    }
    /**
     * 
     *
     * @param int|null $emailsBlocked
     *
     * @return self
     */
    public function setEmailsBlocked(?int $emailsBlocked) : self
    {
        $this->initialized['emailsBlocked'] = true;
        $this->emailsBlocked = $emailsBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEmailsReplied() : ?int
    {
        return $this->emailsReplied;
    }
    /**
     * 
     *
     * @param int|null $emailsReplied
     *
     * @return self
     */
    public function setEmailsReplied(?int $emailsReplied) : self
    {
        $this->initialized['emailsReplied'] = true;
        $this->emailsReplied = $emailsReplied;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getEmailsSent() : ?int
    {
        return $this->emailsSent;
    }
    /**
     * 
     *
     * @param int|null $emailsSent
     *
     * @return self
     */
    public function setEmailsSent(?int $emailsSent) : self
    {
        $this->initialized['emailsSent'] = true;
        $this->emailsSent = $emailsSent;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getRecipients() : ?array
    {
        return $this->recipients;
    }
    /**
     * 
     *
     * @param mixed[]|null $recipients
     *
     * @return self
     */
    public function setRecipients(?array $recipients) : self
    {
        $this->initialized['recipients'] = true;
        $this->recipients = $recipients;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getDeletedAt() : ?string
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param string|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?string $deletedAt) : self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
}