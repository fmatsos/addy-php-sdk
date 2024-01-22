<?php

namespace Addy\Api\Model;

class ApiV1AppVersionGetResponse200 extends \ArrayObject
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
    protected $version;
    /**
     * 
     *
     * @var int|null
     */
    protected $major;
    /**
     * 
     *
     * @var int|null
     */
    protected $minor;
    /**
     * 
     *
     * @var int|null
     */
    protected $patch;
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMajor() : ?int
    {
        return $this->major;
    }
    /**
     * 
     *
     * @param int|null $major
     *
     * @return self
     */
    public function setMajor(?int $major) : self
    {
        $this->initialized['major'] = true;
        $this->major = $major;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinor() : ?int
    {
        return $this->minor;
    }
    /**
     * 
     *
     * @param int|null $minor
     *
     * @return self
     */
    public function setMinor(?int $minor) : self
    {
        $this->initialized['minor'] = true;
        $this->minor = $minor;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPatch() : ?int
    {
        return $this->patch;
    }
    /**
     * 
     *
     * @param int|null $patch
     *
     * @return self
     */
    public function setPatch(?int $patch) : self
    {
        $this->initialized['patch'] = true;
        $this->patch = $patch;
        return $this;
    }
}