<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRecoupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteRecoupRequestType extends AbstractRequestType
{
    /**
     * The EnhancedCompleteRecoupRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedCompleteRecoupRequestDetails
     * @var \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType
     */
    public $EnhancedCompleteRecoupRequestDetails;
    /**
     * Constructor method for CompleteRecoupRequestType
     * @uses CompleteRecoupRequestType::setEnhancedCompleteRecoupRequestDetails()
     * @param \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails
     */
    public function __construct(\PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails = null)
    {
        $this
            ->setEnhancedCompleteRecoupRequestDetails($enhancedCompleteRecoupRequestDetails);
    }
    /**
     * Get EnhancedCompleteRecoupRequestDetails value
     * @return \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType
     */
    public function getEnhancedCompleteRecoupRequestDetails()
    {
        return $this->EnhancedCompleteRecoupRequestDetails;
    }
    /**
     * Set EnhancedCompleteRecoupRequestDetails value
     * @param \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails
     * @return \PayPal\StructType\CompleteRecoupRequestType
     */
    public function setEnhancedCompleteRecoupRequestDetails(\PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails = null)
    {
        $this->EnhancedCompleteRecoupRequestDetails = $enhancedCompleteRecoupRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CompleteRecoupRequestType
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
