<?php

namespace Addy\Api\Model;

class ApiV1RecipientKeysIdPatchBody extends \ArrayObject
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
     * The public key data for the recipient
     *
     * @var string|null
     */
    protected $keyData;
    /**
     * The public key data for the recipient
     *
     * @return string|null
     */
    public function getKeyData() : ?string
    {
        return $this->keyData;
    }
    /**
     * The public key data for the recipient
     *
     * @param string|null $keyData
     *
     * @return self
     */
    public function setKeyData(?string $keyData) : self
    {
        $this->initialized['keyData'] = true;
        $this->keyData = $keyData;
        return $this;
    }
}