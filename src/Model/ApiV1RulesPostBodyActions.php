<?php

namespace Addy\Api\Model;

class ApiV1RulesPostBodyActions extends \ArrayObject
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
     * The type for the action, options - subject, displayFrom, encryption, banner, block.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The value for the action.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The type for the action, options - subject, displayFrom, encryption, banner, block.
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type for the action, options - subject, displayFrom, encryption, banner, block.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The value for the action.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value for the action.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}