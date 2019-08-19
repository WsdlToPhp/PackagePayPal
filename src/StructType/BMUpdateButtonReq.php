<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMUpdateButtonReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMUpdateButtonReq extends AbstractStructBase
{
    /**
     * The BMUpdateButtonRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMUpdateButtonRequest
     * @var \PayPal\StructType\BMUpdateButtonRequestType
     */
    public $BMUpdateButtonRequest;
    /**
     * Constructor method for BMUpdateButtonReq
     * @uses BMUpdateButtonReq::setBMUpdateButtonRequest()
     * @param \PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest
     */
    public function __construct(\PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest = null)
    {
        $this
            ->setBMUpdateButtonRequest($bMUpdateButtonRequest);
    }
    /**
     * Get BMUpdateButtonRequest value
     * @return \PayPal\StructType\BMUpdateButtonRequestType|null
     */
    public function getBMUpdateButtonRequest()
    {
        return $this->BMUpdateButtonRequest;
    }
    /**
     * Set BMUpdateButtonRequest value
     * @param \PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest
     * @return \PayPal\StructType\BMUpdateButtonReq
     */
    public function setBMUpdateButtonRequest(\PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest = null)
    {
        $this->BMUpdateButtonRequest = $bMUpdateButtonRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMUpdateButtonReq
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
