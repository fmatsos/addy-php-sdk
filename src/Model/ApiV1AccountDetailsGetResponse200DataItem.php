<?php

namespace Addy\Api\Model;

class ApiV1AccountDetailsGetResponse200DataItem extends \ArrayObject
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
    protected $username;
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
    protected $emailSubject;
    /**
     * 
     *
     * @var string|null
     */
    protected $bannerLocation;
    /**
     * 
     *
     * @var int|null
     */
    protected $bandwidth;
    /**
     * 
     *
     * @var int|null
     */
    protected $usernameCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $usernameLimit;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultRecipientId;
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
     * @var string|null
     */
    protected $subscription;
    /**
     * 
     *
     * @var string|null
     */
    protected $subscriptionEndsAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $bandwidthLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $recipientCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $recipientLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeDomainCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeDomainLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeSharedDomainAliasCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeSharedDomainAliasLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeRuleCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $activeRuleLimit;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalEmailsForwarded;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalEmailsBlocked;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalEmailsReplied;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalEmailsSent;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalAliases;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalActiveAliases;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalInactiveAliases;
    /**
     * 
     *
     * @var int|null
     */
    protected $totalDeletedAliases;
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
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
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
    public function getEmailSubject() : ?string
    {
        return $this->emailSubject;
    }
    /**
     * 
     *
     * @param string|null $emailSubject
     *
     * @return self
     */
    public function setEmailSubject(?string $emailSubject) : self
    {
        $this->initialized['emailSubject'] = true;
        $this->emailSubject = $emailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBannerLocation() : ?string
    {
        return $this->bannerLocation;
    }
    /**
     * 
     *
     * @param string|null $bannerLocation
     *
     * @return self
     */
    public function setBannerLocation(?string $bannerLocation) : self
    {
        $this->initialized['bannerLocation'] = true;
        $this->bannerLocation = $bannerLocation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBandwidth() : ?int
    {
        return $this->bandwidth;
    }
    /**
     * 
     *
     * @param int|null $bandwidth
     *
     * @return self
     */
    public function setBandwidth(?int $bandwidth) : self
    {
        $this->initialized['bandwidth'] = true;
        $this->bandwidth = $bandwidth;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsernameCount() : ?int
    {
        return $this->usernameCount;
    }
    /**
     * 
     *
     * @param int|null $usernameCount
     *
     * @return self
     */
    public function setUsernameCount(?int $usernameCount) : self
    {
        $this->initialized['usernameCount'] = true;
        $this->usernameCount = $usernameCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsernameLimit() : ?int
    {
        return $this->usernameLimit;
    }
    /**
     * 
     *
     * @param int|null $usernameLimit
     *
     * @return self
     */
    public function setUsernameLimit(?int $usernameLimit) : self
    {
        $this->initialized['usernameLimit'] = true;
        $this->usernameLimit = $usernameLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultRecipientId() : ?string
    {
        return $this->defaultRecipientId;
    }
    /**
     * 
     *
     * @param string|null $defaultRecipientId
     *
     * @return self
     */
    public function setDefaultRecipientId(?string $defaultRecipientId) : self
    {
        $this->initialized['defaultRecipientId'] = true;
        $this->defaultRecipientId = $defaultRecipientId;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getSubscription() : ?string
    {
        return $this->subscription;
    }
    /**
     * 
     *
     * @param string|null $subscription
     *
     * @return self
     */
    public function setSubscription(?string $subscription) : self
    {
        $this->initialized['subscription'] = true;
        $this->subscription = $subscription;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubscriptionEndsAt() : ?string
    {
        return $this->subscriptionEndsAt;
    }
    /**
     * 
     *
     * @param string|null $subscriptionEndsAt
     *
     * @return self
     */
    public function setSubscriptionEndsAt(?string $subscriptionEndsAt) : self
    {
        $this->initialized['subscriptionEndsAt'] = true;
        $this->subscriptionEndsAt = $subscriptionEndsAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getBandwidthLimit() : ?int
    {
        return $this->bandwidthLimit;
    }
    /**
     * 
     *
     * @param int|null $bandwidthLimit
     *
     * @return self
     */
    public function setBandwidthLimit(?int $bandwidthLimit) : self
    {
        $this->initialized['bandwidthLimit'] = true;
        $this->bandwidthLimit = $bandwidthLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRecipientCount() : ?int
    {
        return $this->recipientCount;
    }
    /**
     * 
     *
     * @param int|null $recipientCount
     *
     * @return self
     */
    public function setRecipientCount(?int $recipientCount) : self
    {
        $this->initialized['recipientCount'] = true;
        $this->recipientCount = $recipientCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRecipientLimit() : ?int
    {
        return $this->recipientLimit;
    }
    /**
     * 
     *
     * @param int|null $recipientLimit
     *
     * @return self
     */
    public function setRecipientLimit(?int $recipientLimit) : self
    {
        $this->initialized['recipientLimit'] = true;
        $this->recipientLimit = $recipientLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveDomainCount() : ?int
    {
        return $this->activeDomainCount;
    }
    /**
     * 
     *
     * @param int|null $activeDomainCount
     *
     * @return self
     */
    public function setActiveDomainCount(?int $activeDomainCount) : self
    {
        $this->initialized['activeDomainCount'] = true;
        $this->activeDomainCount = $activeDomainCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveDomainLimit() : ?int
    {
        return $this->activeDomainLimit;
    }
    /**
     * 
     *
     * @param int|null $activeDomainLimit
     *
     * @return self
     */
    public function setActiveDomainLimit(?int $activeDomainLimit) : self
    {
        $this->initialized['activeDomainLimit'] = true;
        $this->activeDomainLimit = $activeDomainLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveSharedDomainAliasCount() : ?int
    {
        return $this->activeSharedDomainAliasCount;
    }
    /**
     * 
     *
     * @param int|null $activeSharedDomainAliasCount
     *
     * @return self
     */
    public function setActiveSharedDomainAliasCount(?int $activeSharedDomainAliasCount) : self
    {
        $this->initialized['activeSharedDomainAliasCount'] = true;
        $this->activeSharedDomainAliasCount = $activeSharedDomainAliasCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveSharedDomainAliasLimit() : ?int
    {
        return $this->activeSharedDomainAliasLimit;
    }
    /**
     * 
     *
     * @param int|null $activeSharedDomainAliasLimit
     *
     * @return self
     */
    public function setActiveSharedDomainAliasLimit(?int $activeSharedDomainAliasLimit) : self
    {
        $this->initialized['activeSharedDomainAliasLimit'] = true;
        $this->activeSharedDomainAliasLimit = $activeSharedDomainAliasLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveRuleCount() : ?int
    {
        return $this->activeRuleCount;
    }
    /**
     * 
     *
     * @param int|null $activeRuleCount
     *
     * @return self
     */
    public function setActiveRuleCount(?int $activeRuleCount) : self
    {
        $this->initialized['activeRuleCount'] = true;
        $this->activeRuleCount = $activeRuleCount;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getActiveRuleLimit() : ?int
    {
        return $this->activeRuleLimit;
    }
    /**
     * 
     *
     * @param int|null $activeRuleLimit
     *
     * @return self
     */
    public function setActiveRuleLimit(?int $activeRuleLimit) : self
    {
        $this->initialized['activeRuleLimit'] = true;
        $this->activeRuleLimit = $activeRuleLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalEmailsForwarded() : ?int
    {
        return $this->totalEmailsForwarded;
    }
    /**
     * 
     *
     * @param int|null $totalEmailsForwarded
     *
     * @return self
     */
    public function setTotalEmailsForwarded(?int $totalEmailsForwarded) : self
    {
        $this->initialized['totalEmailsForwarded'] = true;
        $this->totalEmailsForwarded = $totalEmailsForwarded;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalEmailsBlocked() : ?int
    {
        return $this->totalEmailsBlocked;
    }
    /**
     * 
     *
     * @param int|null $totalEmailsBlocked
     *
     * @return self
     */
    public function setTotalEmailsBlocked(?int $totalEmailsBlocked) : self
    {
        $this->initialized['totalEmailsBlocked'] = true;
        $this->totalEmailsBlocked = $totalEmailsBlocked;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalEmailsReplied() : ?int
    {
        return $this->totalEmailsReplied;
    }
    /**
     * 
     *
     * @param int|null $totalEmailsReplied
     *
     * @return self
     */
    public function setTotalEmailsReplied(?int $totalEmailsReplied) : self
    {
        $this->initialized['totalEmailsReplied'] = true;
        $this->totalEmailsReplied = $totalEmailsReplied;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalEmailsSent() : ?int
    {
        return $this->totalEmailsSent;
    }
    /**
     * 
     *
     * @param int|null $totalEmailsSent
     *
     * @return self
     */
    public function setTotalEmailsSent(?int $totalEmailsSent) : self
    {
        $this->initialized['totalEmailsSent'] = true;
        $this->totalEmailsSent = $totalEmailsSent;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalAliases() : ?int
    {
        return $this->totalAliases;
    }
    /**
     * 
     *
     * @param int|null $totalAliases
     *
     * @return self
     */
    public function setTotalAliases(?int $totalAliases) : self
    {
        $this->initialized['totalAliases'] = true;
        $this->totalAliases = $totalAliases;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalActiveAliases() : ?int
    {
        return $this->totalActiveAliases;
    }
    /**
     * 
     *
     * @param int|null $totalActiveAliases
     *
     * @return self
     */
    public function setTotalActiveAliases(?int $totalActiveAliases) : self
    {
        $this->initialized['totalActiveAliases'] = true;
        $this->totalActiveAliases = $totalActiveAliases;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalInactiveAliases() : ?int
    {
        return $this->totalInactiveAliases;
    }
    /**
     * 
     *
     * @param int|null $totalInactiveAliases
     *
     * @return self
     */
    public function setTotalInactiveAliases(?int $totalInactiveAliases) : self
    {
        $this->initialized['totalInactiveAliases'] = true;
        $this->totalInactiveAliases = $totalInactiveAliases;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotalDeletedAliases() : ?int
    {
        return $this->totalDeletedAliases;
    }
    /**
     * 
     *
     * @param int|null $totalDeletedAliases
     *
     * @return self
     */
    public function setTotalDeletedAliases(?int $totalDeletedAliases) : self
    {
        $this->initialized['totalDeletedAliases'] = true;
        $this->totalDeletedAliases = $totalDeletedAliases;
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