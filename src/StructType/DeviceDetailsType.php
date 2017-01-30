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
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deviceID)), __LINE__);
        }
        $this->DeviceID = $deviceID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DeviceDetailsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
