<?php

namespace Addy\Api\Model;

class ApiV1ActiveAliasesPostBody extends \ArrayObject
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
     * The id for the alias
     *
     * @var string|null
     */
    protected $id;
    /**
     * The id for the alias
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The id for the alias
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
}