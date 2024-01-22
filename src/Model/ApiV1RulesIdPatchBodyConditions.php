<?php

namespace Addy\Api\Model;

class ApiV1RulesIdPatchBodyConditions extends \ArrayObject
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
     * The type for the condition, options - sender, subject, alias.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The match type for the condition, options - is exactly, is not, contains, does not contain, starts with, does not start with, ends with, does not end with.
     *
     * @var string|null
     */
    protected $match;
    /**
     * The array of values you would like to match.
     *
     * @var string[]|null
     */
    protected $values;
    /**
     * The type for the condition, options - sender, subject, alias.
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type for the condition, options - sender, subject, alias.
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
     * The match type for the condition, options - is exactly, is not, contains, does not contain, starts with, does not start with, ends with, does not end with.
     *
     * @return string|null
     */
    public function getMatch() : ?string
    {
        return $this->match;
    }
    /**
     * The match type for the condition, options - is exactly, is not, contains, does not contain, starts with, does not start with, ends with, does not end with.
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
     * The array of values you would like to match.
     *
     * @return string[]|null
     */
    public function getValues() : ?array
    {
        return $this->values;
    }
    /**
     * The array of values you would like to match.
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