<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRecoupReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CancelRecoupReq extends AbstractStructBase
{
    /**
     * The CancelRecoupRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:CancelRecoupRequest
     * @var \PayPal\StructType\CancelRecoupRequestType
     */
    public $CancelRecoupRequest;
    /**
     * Constructor method for CancelRecoupReq
     * @uses CancelRecoupReq::setCancelRecoupRequest()
     * @param \PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest
     */
    public function __construct(\PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest = null)
    {
        $this
            ->setCancelRecoupRequest($cancelRecoupRequest);
    }
    /**
     * Get CancelRecoupRequest value
     * @return \PayPal\StructType\CancelRecoupRequestType|null
     */
    public function getCancelRecoupRequest()
    {
        return $this->CancelRecoupRequest;
    }
    /**
     * Set CancelRecoupRequest value
     * @param \PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest
     * @return \PayPal\StructType\CancelRecoupReq
     */
    public function setCancelRecoupRequest(\PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest = null)
    {
        $this->CancelRecoupRequest = $cancelRecoupRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CancelRecoupReq
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
