<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnterBoardingReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EnterBoardingReq extends AbstractStructBase
{
    /**
     * The EnterBoardingRequest
     * Meta information extracted from the WSDL
     * - ref: ns:EnterBoardingRequest
     * @var \PayPal\StructType\EnterBoardingRequestType
     */
    public $EnterBoardingRequest;
    /**
     * Constructor method for EnterBoardingReq
     * @uses EnterBoardingReq::setEnterBoardingRequest()
     * @param \PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest
     */
    public function __construct(\PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest = null)
    {
        $this
            ->setEnterBoardingRequest($enterBoardingRequest);
    }
    /**
     * Get EnterBoardingRequest value
     * @return \PayPal\StructType\EnterBoardingRequestType|null
     */
    public function getEnterBoardingRequest()
    {
        return $this->EnterBoardingRequest;
    }
    /**
     * Set EnterBoardingRequest value
     * @param \PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest
     * @return \PayPal\StructType\EnterBoardingReq
     */
    public function setEnterBoardingRequest(\PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest = null)
    {
        $this->EnterBoardingRequest = $enterBoardingRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\EnterBoardingReq
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
