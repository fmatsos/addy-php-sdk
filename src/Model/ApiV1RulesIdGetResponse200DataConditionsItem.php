<?php

namespace Addy\Api\Model;

class ApiV1RulesIdGetResponse200DataConditionsItem extends \ArrayObject
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
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $match;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $values;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getMatch() : ?string
    {
        return $this->match;
    }
    /**
     * 
     *
     * @param string|null $match
     *
     * @return self
     */
    public function setMatch(?string $match) : self
    {
        $this->initialized['match'] = true;
        $this->match = $match;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getValues() : ?array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param string[]|null $values
     *
     * @return self
     */
    public function setValues(?array $values) : self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
}