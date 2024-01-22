<?php

namespace Addy\Api\Model;

class ApiV1AliasesDeleteBulkPostBody extends \ArrayObject
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
     * An array of the alias ids (max 25)
     *
     * @var string[]|null
     */
    protected $ids;
    /**
     * An array of the alias ids (max 25)
     *
     * @return string[]|null
     */
    public function getIds() : ?array
    {
        return $this->ids;
    }
    /**
     * An array of the alias ids (max 25)
     *
     * @param string[]|null $ids
     *
     * @return self
     */
    public function setIds(?array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
}