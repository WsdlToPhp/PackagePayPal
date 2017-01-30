<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalPartnerTrackingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains elements that allow tracking for an external partner.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalPartnerTrackingDetailsType extends AbstractStructBase
{
    /**
     * The ExternalPartnerSegmentID
     * Meta informations extracted from the WSDL
     * - documentation: PayPal will just log this string. There will NOT be any business logic around it, nor any decisions made based on the value of the string that is passed in. From a tracking/analytical perspective, PayPal would not infer any meaning
     * to any specific value. We would just segment the traffic based on the value passed (Cart and None as an example) and track different metrics like risk/conversion etc based on these segments. The external partner would control the value of what gets
     * passed and we take that value as is and generate data based on it. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalPartnerSegmentID;
    /**
     * Constructor method for ExternalPartnerTrackingDetailsType
     * @uses ExternalPartnerTrackingDetailsType::setExternalPartnerSegmentID()
     * @param string $externalPartnerSegmentID
     */
    public function __construct($externalPartnerSegmentID = null)
    {
        $this
            ->setExternalPartnerSegmentID($externalPartnerSegmentID);
    }
    /**
     * Get ExternalPartnerSegmentID value
     * @return string|null
     */
    public function getExternalPartnerSegmentID()
    {
        return $this->ExternalPartnerSegmentID;
    }
    /**
     * Set ExternalPartnerSegmentID value
     * @param string $externalPartnerSegmentID
     * @return \PayPal\StructType\ExternalPartnerTrackingDetailsType
     */
    public function setExternalPartnerSegmentID($externalPartnerSegmentID = null)
    {
        // validation for constraint: string
        if (!is_null($externalPartnerSegmentID) && !is_string($externalPartnerSegmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalPartnerSegmentID)), __LINE__);
        }
        $this->ExternalPartnerSegmentID = $externalPartnerSegmentID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExternalPartnerTrackingDetailsType
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
