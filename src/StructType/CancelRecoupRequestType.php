<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRecoupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CancelRecoupRequestType extends AbstractRequestType
{
    /**
     * The EnhancedCancelRecoupRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedCancelRecoupRequestDetails
     * @var \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType
     */
    public $EnhancedCancelRecoupRequestDetails;
    /**
     * Constructor method for CancelRecoupRequestType
     * @uses CancelRecoupRequestType::setEnhancedCancelRecoupRequestDetails()
     * @param \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails
     */
    public function __construct(\PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails = null)
    {
        $this
            ->setEnhancedCancelRecoupRequestDetails($enhancedCancelRecoupRequestDetails);
    }
    /**
     * Get EnhancedCancelRecoupRequestDetails value
     * @return \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType
     */
    public function getEnhancedCancelRecoupRequestDetails()
    {
        return $this->EnhancedCancelRecoupRequestDetails;
    }
    /**
     * Set EnhancedCancelRecoupRequestDetails value
     * @param \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails
     * @return \PayPal\StructType\CancelRecoupRequestType
     */
    public function setEnhancedCancelRecoupRequestDetails(\PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails = null)
    {
        $this->EnhancedCancelRecoupRequestDetails = $enhancedCancelRecoupRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CancelRecoupRequestType
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
