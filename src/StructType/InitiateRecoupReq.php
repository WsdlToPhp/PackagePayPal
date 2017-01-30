<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitiateRecoupReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InitiateRecoupReq extends AbstractStructBase
{
    /**
     * The InitiateRecoupRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:InitiateRecoupRequest
     * @var \PayPal\StructType\InitiateRecoupRequestType
     */
    public $InitiateRecoupRequest;
    /**
     * Constructor method for InitiateRecoupReq
     * @uses InitiateRecoupReq::setInitiateRecoupRequest()
     * @param \PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest
     */
    public function __construct(\PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest = null)
    {
        $this
            ->setInitiateRecoupRequest($initiateRecoupRequest);
    }
    /**
     * Get InitiateRecoupRequest value
     * @return \PayPal\StructType\InitiateRecoupRequestType|null
     */
    public function getInitiateRecoupRequest()
    {
        return $this->InitiateRecoupRequest;
    }
    /**
     * Set InitiateRecoupRequest value
     * @param \PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest
     * @return \PayPal\StructType\InitiateRecoupReq
     */
    public function setInitiateRecoupRequest(\PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest = null)
    {
        $this->InitiateRecoupRequest = $initiateRecoupRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\InitiateRecoupReq
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
