<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRecoupResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteRecoupResponseType extends AbstractResponseType
{
    /**
     * The EnhancedCompleteRecoupResponseDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedCompleteRecoupResponseDetails
     * @var \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType
     */
    public $EnhancedCompleteRecoupResponseDetails;
    /**
     * Constructor method for CompleteRecoupResponseType
     * @uses CompleteRecoupResponseType::setEnhancedCompleteRecoupResponseDetails()
     * @param \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails
     */
    public function __construct(\PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails = null)
    {
        $this
            ->setEnhancedCompleteRecoupResponseDetails($enhancedCompleteRecoupResponseDetails);
    }
    /**
     * Get EnhancedCompleteRecoupResponseDetails value
     * @return \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType
     */
    public function getEnhancedCompleteRecoupResponseDetails()
    {
        return $this->EnhancedCompleteRecoupResponseDetails;
    }
    /**
     * Set EnhancedCompleteRecoupResponseDetails value
     * @param \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails
     * @return \PayPal\StructType\CompleteRecoupResponseType
     */
    public function setEnhancedCompleteRecoupResponseDetails(\PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails = null)
    {
        $this->EnhancedCompleteRecoupResponseDetails = $enhancedCompleteRecoupResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CompleteRecoupResponseType
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
