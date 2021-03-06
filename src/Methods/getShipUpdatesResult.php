<?php

namespace SmsaSDK\Methods;

class getShipUpdatesResult
{
    /**
     * @var string
     */
    protected $schema = null;

    /**
     * @var string
     */
    protected $any = null;

    /**
     * @param string $schema
     * @param string $any
     */
    public function __construct($schema = null, $any = null)
    {
        $this->schema = $schema;
        $this->any = $any;
    }

    /**
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param string $schema
     *
     * @return \SmsaSDK\Methods\getShipUpdatesResult
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param string $any
     *
     * @return \SmsaSDK\Methods\getShipUpdatesResult
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }
}
