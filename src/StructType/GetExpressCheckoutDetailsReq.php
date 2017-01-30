<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExpressCheckoutDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetExpressCheckoutDetailsReq extends AbstractStructBase
{
    /**
     * The GetExpressCheckoutDetailsRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetExpressCheckoutDetailsRequest
     * @var \PayPal\StructType\GetExpressCheckoutDetailsRequestType
     */
    public $GetExpressCheckoutDetailsRequest;
    /**
     * Constructor method for GetExpressCheckoutDetailsReq
     * @uses GetExpressCheckoutDetailsReq::setGetExpressCheckoutDetailsRequest()
     * @param \PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest = null)
    {
        $this
            ->setGetExpressCheckoutDetailsRequest($getExpressCheckoutDetailsRequest);
    }
    /**
     * Get GetExpressCheckoutDetailsRequest value
     * @return \PayPal\StructType\GetExpressCheckoutDetailsRequestType|null
     */
    public function getGetExpressCheckoutDetailsRequest()
    {
        return $this->GetExpressCheckoutDetailsRequest;
    }
    /**
     * Set GetExpressCheckoutDetailsRequest value
     * @param \PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest
     * @return \PayPal\StructType\GetExpressCheckoutDetailsReq
     */
    public function setGetExpressCheckoutDetailsRequest(\PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest = null)
    {
        $this->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetExpressCheckoutDetailsReq
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
