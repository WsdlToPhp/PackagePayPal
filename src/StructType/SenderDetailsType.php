<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SenderDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SenderDetailsType extends AbstractStructBase
{
    /**
     * The DeviceDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\DeviceDetailsType
     */
    public $DeviceDetails;
    /**
     * Constructor method for SenderDetailsType
     * @uses SenderDetailsType::setDeviceDetails()
     * @param \PayPal\StructType\DeviceDetailsType $deviceDetails
     */
    public function __construct(\PayPal\StructType\DeviceDetailsType $deviceDetails = null)
    {
        $this
            ->setDeviceDetails($deviceDetails);
    }
    /**
     * Get DeviceDetails value
     * @return \PayPal\StructType\DeviceDetailsType|null
     */
    public function getDeviceDetails()
    {
        return $this->DeviceDetails;
    }
    /**
     * Set DeviceDetails value
     * @param \PayPal\StructType\DeviceDetailsType $deviceDetails
     * @return \PayPal\StructType\SenderDetailsType
     */
    public function setDeviceDetails(\PayPal\StructType\DeviceDetailsType $deviceDetails = null)
    {
        $this->DeviceDetails = $deviceDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SenderDetailsType
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
