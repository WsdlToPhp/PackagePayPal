<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPAuthorizationReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPAuthorizationReq extends AbstractStructBase
{
    /**
     * The DoUATPAuthorizationRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:DoUATPAuthorizationRequest
     * @var \PayPal\StructType\DoUATPAuthorizationRequestType
     */
    public $DoUATPAuthorizationRequest;
    /**
     * Constructor method for DoUATPAuthorizationReq
     * @uses DoUATPAuthorizationReq::setDoUATPAuthorizationRequest()
     * @param \PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest
     */
    public function __construct(\PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest = null)
    {
        $this
            ->setDoUATPAuthorizationRequest($doUATPAuthorizationRequest);
    }
    /**
     * Get DoUATPAuthorizationRequest value
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType|null
     */
    public function getDoUATPAuthorizationRequest()
    {
        return $this->DoUATPAuthorizationRequest;
    }
    /**
     * Set DoUATPAuthorizationRequest value
     * @param \PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest
     * @return \PayPal\StructType\DoUATPAuthorizationReq
     */
    public function setDoUATPAuthorizationRequest(\PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest = null)
    {
        $this->DoUATPAuthorizationRequest = $doUATPAuthorizationRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoUATPAuthorizationReq
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
