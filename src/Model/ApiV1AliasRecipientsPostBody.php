<?php

namespace Addy\Api\Model;

class ApiV1AliasRecipientsPostBody extends \ArrayObject
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
     * The id of the alias
     *
     * @var string|null
     */
    protected $aliasId;
    /**
     * An array of recipient ids to add
     *
     * @var string[]|null
     */
    protected $recipientIds;
    /**
     * The id of the alias
     *
     * @return string|null
     */
    public function getAliasId() : ?string
    {
        return $this->aliasId;
    }
    /**
     * The id of the alias
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
     * An array of recipient ids to add
     *
     * @return string[]|null
     */
    public function getRecipientIds() : ?array
    {
        return $this->recipientIds;
    }
    /**
     * An array of recipient ids to add
     *
     * @param string[]|null $recipientIds
     *
     * @return self
     */
    public function setRecipientIds(?array $recipientIds) : self
    {
        $this->initialized['recipientIds'] = true;
        $this->recipientIds = $recipientIds;
        return $this;
    }
}