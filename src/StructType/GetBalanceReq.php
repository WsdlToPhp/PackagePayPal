<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBalanceReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBalanceReq extends AbstractStructBase
{
    /**
     * The GetBalanceRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetBalanceRequest
     * @var \PayPal\StructType\GetBalanceRequestType
     */
    public $GetBalanceRequest;
    /**
     * Constructor method for GetBalanceReq
     * @uses GetBalanceReq::setGetBalanceRequest()
     * @param \PayPal\StructType\GetBalanceRequestType $getBalanceRequest
     */
    public function __construct(\PayPal\StructType\GetBalanceRequestType $getBalanceRequest = null)
    {
        $this
            ->setGetBalanceRequest($getBalanceRequest);
    }
    /**
     * Get GetBalanceRequest value
     * @return \PayPal\StructType\GetBalanceRequestType|null
     */
    public function getGetBalanceRequest()
    {
        return $this->GetBalanceRequest;
    }
    /**
     * Set GetBalanceRequest value
     * @param \PayPal\StructType\GetBalanceRequestType $getBalanceRequest
     * @return \PayPal\StructType\GetBalanceReq
     */
    public function setGetBalanceRequest(\PayPal\StructType\GetBalanceRequestType $getBalanceRequest = null)
    {
        $this->GetBalanceRequest = $getBalanceRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBalanceReq
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
