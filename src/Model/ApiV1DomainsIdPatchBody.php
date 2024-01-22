<?php

namespace Addy\Api\Model;

class ApiV1DomainsIdPatchBody extends \ArrayObject
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
     * The description of the domain
     *
     * @var string|null
     */
    protected $description;
    /**
     * The from name of the domain
     *
     * @var string|null
     */
    protected $fromName;
    /**
     * The description of the domain
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The description of the domain
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
     * The from name of the domain
     *
     * @return string|null
     */
    public function getFromName() : ?string
    {
        return $this->fromName;
    }
    /**
     * The from name of the domain
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
}