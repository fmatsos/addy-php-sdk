<?php

namespace Addy\Api\Model;

class ApiV1RecipientsEmailResendPostBody extends \ArrayObject
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
     * The ID of the recipient
     *
     * @var string|null
     */
    protected $recipientId;
    /**
     * The ID of the recipient
     *
     * @return string|null
     */
    public function getRecipientId() : ?string
    {
        return $this->recipientId;
    }
    /**
     * The ID of the recipient
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
}