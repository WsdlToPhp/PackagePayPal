<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeviceDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DeviceDetailsType extends AbstractStructBase
{
    /**
     * The DeviceID
     * Meta information extracted from the WSDL
     * - documentation: Device ID Optional Character length and limits: 256 single-byte characters DeviceID length morethan 256 is truncated
     * - minOccurs: 0
     * @var string
     */
    public $DeviceID;
    /**
     * Constructor method for DeviceDetailsType
     * @uses DeviceDetailsType::setDeviceID()
     * @param string $deviceID
     */
    public function __construct($deviceID = null)
    {
        $this
            ->setDeviceID($deviceID);
    }
    /**
     * Get DeviceID value
     * @return string|null
     */
    public function getDeviceID()
    {
        return $this->DeviceID;
    }
    /**
     * Set DeviceID value
     * @param string $deviceID
     * @return \PayPal\StructType\DeviceDetailsType
     */
    public function setDeviceID($deviceID = null)
    {
        // validation for constraint: string
        if (!is_null($deviceID) && !is_string($deviceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceID, true), gettype($deviceID)), __LINE__);
        }
        $this->DeviceID = $deviceID;
        return $this;
    }
}
