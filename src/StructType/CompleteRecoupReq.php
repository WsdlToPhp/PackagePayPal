<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRecoupReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteRecoupReq extends AbstractStructBase
{
    /**
     * The CompleteRecoupRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:CompleteRecoupRequest
     * @var \PayPal\StructType\CompleteRecoupRequestType
     */
    public $CompleteRecoupRequest;
    /**
     * Constructor method for CompleteRecoupReq
     * @uses CompleteRecoupReq::setCompleteRecoupRequest()
     * @param \PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest
     */
    public function __construct(\PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest = null)
    {
        $this
            ->setCompleteRecoupRequest($completeRecoupRequest);
    }
    /**
     * Get CompleteRecoupRequest value
     * @return \PayPal\StructType\CompleteRecoupRequestType|null
     */
    public function getCompleteRecoupRequest()
    {
        return $this->CompleteRecoupRequest;
    }
    /**
     * Set CompleteRecoupRequest value
     * @param \PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest
     * @return \PayPal\StructType\CompleteRecoupReq
     */
    public function setCompleteRecoupRequest(\PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest = null)
    {
        $this->CompleteRecoupRequest = $completeRecoupRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CompleteRecoupReq
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
