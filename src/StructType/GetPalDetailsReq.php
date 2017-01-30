<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPalDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetPalDetailsReq extends AbstractStructBase
{
    /**
     * The GetPalDetailsRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetPalDetailsRequest
     * @var \PayPal\StructType\GetPalDetailsRequestType
     */
    public $GetPalDetailsRequest;
    /**
     * Constructor method for GetPalDetailsReq
     * @uses GetPalDetailsReq::setGetPalDetailsRequest()
     * @param \PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest = null)
    {
        $this
            ->setGetPalDetailsRequest($getPalDetailsRequest);
    }
    /**
     * Get GetPalDetailsRequest value
     * @return \PayPal\StructType\GetPalDetailsRequestType|null
     */
    public function getGetPalDetailsRequest()
    {
        return $this->GetPalDetailsRequest;
    }
    /**
     * Set GetPalDetailsRequest value
     * @param \PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest
     * @return \PayPal\StructType\GetPalDetailsReq
     */
    public function setGetPalDetailsRequest(\PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest = null)
    {
        $this->GetPalDetailsRequest = $getPalDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetPalDetailsReq
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
