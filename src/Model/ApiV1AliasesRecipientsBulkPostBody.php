<?php

namespace Addy\Api\Model;

class ApiV1AliasesRecipientsBulkPostBody extends \ArrayObject
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
     * An array of the alias ids (max 25)
     *
     * @var string[]|null
     */
    protected $ids;
    /**
     * An array of recipient ids to add
     *
     * @var string[]|null
     */
    protected $recipientIds;
    /**
     * An array of the alias ids (max 25)
     *
     * @return string[]|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * An array of the alias ids (max 25)
     *
     * @param string[]|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
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