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
}
