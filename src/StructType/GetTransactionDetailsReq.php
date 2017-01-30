<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetTransactionDetailsReq extends AbstractStructBase
{
    /**
     * The GetTransactionDetailsRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetTransactionDetailsRequest
     * @var \PayPal\StructType\GetTransactionDetailsRequestType
     */
    public $GetTransactionDetailsRequest;
    /**
     * Constructor method for GetTransactionDetailsReq
     * @uses GetTransactionDetailsReq::setGetTransactionDetailsRequest()
     * @param \PayPal\StructType\GetTransactionDetailsRequestType $getTransactionDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetTransactionDetailsRequestType $getTransactionDetailsRequest = null)
    {
        $this
            ->setGetTransactionDetailsRequest($getTransactionDetailsRequest);
    }
    /**
     * Get GetTransactionDetailsRequest value
     * @return \PayPal\StructType\GetTransactionDetailsRequestType|null
     */
    public function getGetTransactionDetailsRequest()
    {
        return $this->GetTransactionDetailsRequest;
    }
    /**
     * Set GetTransactionDetailsRequest value
     * @param \PayPal\StructType\GetTransactionDetailsRequestType $getTransactionDetailsRequest
     * @return \PayPal\StructType\GetTransactionDetailsReq
     */
    public function setGetTransactionDetailsRequest(\PayPal\StructType\GetTransactionDetailsRequestType $getTransactionDetailsRequest = null)
    {
        $this->GetTransactionDetailsRequest = $getTransactionDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetTransactionDetailsReq
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
