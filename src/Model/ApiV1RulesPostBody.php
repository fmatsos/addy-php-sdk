<?php

namespace Addy\Api\Model;

class ApiV1RulesPostBody extends \ArrayObject
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
     * The name of the rule
     *
     * @var string|null
     */
    protected $name;
    /**
     * The conditions for the rule.
     *
     * @var ApiV1RulesPostBodyConditions|null
     */
    protected $conditions;
    /**
     * The actions for the rule.
     *
     * @var ApiV1RulesPostBodyActions|null
     */
    protected $actions;
    /**
     * The chosen operator for the rule, options - AND, OR
     *
     * @var string|null
     */
    protected $operator;
    /**
     * Whether to apply rule to forwarded messages.
     *
     * @var bool|null
     */
    protected $forwards;
    /**
     * Whether to apply rule to replies from aliases.
     *
     * @var bool|null
     */
    protected $replies;
    /**
     * Whether to apply rule to sends from aliases.
     *
     * @var bool|null
     */
    protected $sends;
    /**
     * The name of the rule
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the rule
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The conditions for the rule.
     *
     * @return ApiV1RulesPostBodyConditions|null
     */
    public function getConditions() : ?ApiV1RulesPostBodyConditions
    {
        return $this->conditions;
    }
    /**
     * The conditions for the rule.
     *
     * @param ApiV1RulesPostBodyConditions|null $conditions
     *
     * @return self
     */
    public function setConditions(?ApiV1RulesPostBodyConditions $conditions) : self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * The actions for the rule.
     *
     * @return ApiV1RulesPostBodyActions|null
     */
    public function getActions() : ?ApiV1RulesPostBodyActions
    {
        return $this->actions;
    }
    /**
     * The actions for the rule.
     *
     * @param ApiV1RulesPostBodyActions|null $actions
     *
     * @return self
     */
    public function setActions(?ApiV1RulesPostBodyActions $actions) : self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
    /**
     * The chosen operator for the rule, options - AND, OR
     *
     * @return string|null
     */
    public function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * The chosen operator for the rule, options - AND, OR
     *
     * @param string|null $operator
     *
     * @return self
     */
    public function setOperator(?string $operator) : self
    {
        $this->initialized['operator'] = true;
        $this->operator = $operator;
        return $this;
    }
    /**
     * Whether to apply rule to forwarded messages.
     *
     * @return bool|null
     */
    public function getForwards() : ?bool
    {
        return $this->forwards;
    }
    /**
     * Whether to apply rule to forwarded messages.
     *
     * @param bool|null $forwards
     *
     * @return self
     */
    public function setForwards(?bool $forwards) : self
    {
        $this->initialized['forwards'] = true;
        $this->forwards = $forwards;
        return $this;
    }
    /**
     * Whether to apply rule to replies from aliases.
     *
     * @return bool|null
     */
    public function getReplies() : ?bool
    {
        return $this->replies;
    }
    /**
     * Whether to apply rule to replies from aliases.
     *
     * @param bool|null $replies
     *
     * @return self
     */
    public function setReplies(?bool $replies) : self
    {
        $this->initialized['replies'] = true;
        $this->replies = $replies;
        return $this;
    }
    /**
     * Whether to apply rule to sends from aliases.
     *
     * @return bool|null
     */
    public function getSends() : ?bool
    {
        return $this->sends;
    }
    /**
     * Whether to apply rule to sends from aliases.
     *
     * @param bool|null $sends
     *
     * @return self
     */
    public function setSends(?bool $sends) : self
    {
        $this->initialized['sends'] = true;
        $this->sends = $sends;
        return $this;
    }
}