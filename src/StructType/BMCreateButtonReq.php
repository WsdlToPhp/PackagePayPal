<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMCreateButtonReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMCreateButtonReq extends AbstractStructBase
{
    /**
     * The BMCreateButtonRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:BMCreateButtonRequest
     * @var \PayPal\StructType\BMCreateButtonRequestType
     */
    public $BMCreateButtonRequest;
    /**
     * Constructor method for BMCreateButtonReq
     * @uses BMCreateButtonReq::setBMCreateButtonRequest()
     * @param \PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest
     */
    public function __construct(\PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest = null)
    {
        $this
            ->setBMCreateButtonRequest($bMCreateButtonRequest);
    }
    /**
     * Get BMCreateButtonRequest value
     * @return \PayPal\StructType\BMCreateButtonRequestType|null
     */
    public function getBMCreateButtonRequest()
    {
        return $this->BMCreateButtonRequest;
    }
    /**
     * Set BMCreateButtonRequest value
     * @param \PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest
     * @return \PayPal\StructType\BMCreateButtonReq
     */
    public function setBMCreateButtonRequest(\PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest = null)
    {
        $this->BMCreateButtonRequest = $bMCreateButtonRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMCreateButtonReq
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
