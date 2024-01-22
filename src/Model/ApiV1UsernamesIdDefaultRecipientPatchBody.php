<?php

namespace Addy\Api\Model;

class ApiV1UsernamesIdDefaultRecipientPatchBody extends \ArrayObject
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
     * The id of the recipient
     *
     * @var string|null
     */
    protected $defaultRecipient;
    /**
     * The id of the recipient
     *
     * @return string|null
     */
    public function getDefaultRecipient() : ?string
    {
        return $this->defaultRecipient;
    }
    /**
     * The id of the recipient
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
}