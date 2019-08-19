<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitiateRecoupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InitiateRecoupRequestType extends AbstractRequestType
{
    /**
     * The EnhancedInitiateRecoupRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedInitiateRecoupRequestDetails
     * @var \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType
     */
    public $EnhancedInitiateRecoupRequestDetails;
    /**
     * Constructor method for InitiateRecoupRequestType
     * @uses InitiateRecoupRequestType::setEnhancedInitiateRecoupRequestDetails()
     * @param \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails
     */
    public function __construct(\PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails = null)
    {
        $this
            ->setEnhancedInitiateRecoupRequestDetails($enhancedInitiateRecoupRequestDetails);
    }
    /**
     * Get EnhancedInitiateRecoupRequestDetails value
     * @return \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType
     */
    public function getEnhancedInitiateRecoupRequestDetails()
    {
        return $this->EnhancedInitiateRecoupRequestDetails;
    }
    /**
     * Set EnhancedInitiateRecoupRequestDetails value
     * @param \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails
     * @return \PayPal\StructType\InitiateRecoupRequestType
     */
    public function setEnhancedInitiateRecoupRequestDetails(\PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails = null)
    {
        $this->EnhancedInitiateRecoupRequestDetails = $enhancedInitiateRecoupRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\InitiateRecoupRequestType
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
