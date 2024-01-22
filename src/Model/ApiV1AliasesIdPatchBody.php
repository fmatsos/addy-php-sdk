<?php

namespace Addy\Api\Model;

class ApiV1AliasesIdPatchBody extends \ArrayObject
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
     * The description of the alias
     *
     * @var string|null
     */
    protected $description;
    /**
     * The from name of the alias
     *
     * @var string|null
     */
    protected $fromName;
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
     * The from name of the alias
     *
     * @return string|null
     */
    public function getFromName() : ?string
    {
        return $this->fromName;
    }
    /**
     * The from name of the alias
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