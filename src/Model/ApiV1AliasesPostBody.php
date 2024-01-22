<?php

namespace Addy\Api\Model;

class ApiV1AliasesPostBody extends \ArrayObject
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
     * The domain of the alias
     *
     * @var string|null
     */
    protected $domain;
    /**
     * The description of the alias
     *
     * @var string|null
     */
    protected $description;
    /**
     * The chosen format for the alias. Options: random_characters, uuid, random_words, custom (the custom format is not available for shared domains)
     *
     * @var string|null
     */
    protected $format;
    /**
     * The chosen local part for the alias (only required if you have the format as custom)
     *
     * @var string|null
     */
    protected $localPart;
    /**
     * An array of recipient ids to add (the default recipient will be used if none provided)
     *
     * @var string[]|null
     */
    protected $recipientIds;
    /**
     * The domain of the alias
     *
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * The domain of the alias
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
     * The description of the alias
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of the alias
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
     * The chosen format for the alias. Options: random_characters, uuid, random_words, custom (the custom format is not available for shared domains)
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * The chosen format for the alias. Options: random_characters, uuid, random_words, custom (the custom format is not available for shared domains)
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * The chosen local part for the alias (only required if you have the format as custom)
     *
     * @return string|null
     */
    public function getLocalPart() : ?string
    {
        return $this->localPart;
    }
    /**
     * The chosen local part for the alias (only required if you have the format as custom)
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
     * An array of recipient ids to add (the default recipient will be used if none provided)
     *
     * @return string[]|null
     */
    public function getRecipientIds() : ?array
    {
        return $this->recipientIds;
    }
    /**
     * An array of recipient ids to add (the default recipient will be used if none provided)
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