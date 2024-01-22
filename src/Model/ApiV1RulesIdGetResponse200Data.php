<?php

namespace Addy\Api\Model;

class ApiV1RulesIdGetResponse200Data extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $order;
    /**
     * 
     *
     * @var ApiV1RulesIdGetResponse200DataConditionsItem[]|null
     */
    protected $conditions;
    /**
     * 
     *
     * @var ApiV1RulesIdGetResponse200DataActionsItem[]|null
     */
    protected $actions;
    /**
     * 
     *
     * @var string|null
     */
    protected $operator;
    /**
     * 
     *
     * @var bool|null
     */
    protected $forwards;
    /**
     * 
     *
     * @var bool|null
     */
    protected $replies;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sends;
    /**
     * 
     *
     * @var bool|null
     */
    protected $active;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getOrder() : ?int
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param int|null $order
     *
     * @return self
     */
    public function setOrder(?int $order) : self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return ApiV1RulesIdGetResponse200DataConditionsItem[]|null
     */
    public function getConditions() : ?array
    {
        return $this->conditions;
    }
    /**
     * 
     *
     * @param ApiV1RulesIdGetResponse200DataConditionsItem[]|null $conditions
     *
     * @return self
     */
    public function setConditions(?array $conditions) : self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * 
     *
     * @return ApiV1RulesIdGetResponse200DataActionsItem[]|null
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * 
     *
     * @param ApiV1RulesIdGetResponse200DataActionsItem[]|null $actions
     *
     * @return self
     */
    public function setActions(?array $actions) : self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOperator() : ?string
    {
        return $this->operator;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getForwards() : ?bool
    {
        return $this->forwards;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getReplies() : ?bool
    {
        return $this->replies;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getSends() : ?bool
    {
        return $this->sends;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return bool|null
     */
    public function getActive() : ?bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}