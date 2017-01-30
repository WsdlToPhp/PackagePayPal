<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMButtonSearchReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMButtonSearchReq extends AbstractStructBase
{
    /**
     * The BMButtonSearchRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:BMButtonSearchRequest
     * @var \PayPal\StructType\BMButtonSearchRequestType
     */
    public $BMButtonSearchRequest;
    /**
     * Constructor method for BMButtonSearchReq
     * @uses BMButtonSearchReq::setBMButtonSearchRequest()
     * @param \PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest
     */
    public function __construct(\PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest = null)
    {
        $this
            ->setBMButtonSearchRequest($bMButtonSearchRequest);
    }
    /**
     * Get BMButtonSearchRequest value
     * @return \PayPal\StructType\BMButtonSearchRequestType|null
     */
    public function getBMButtonSearchRequest()
    {
        return $this->BMButtonSearchRequest;
    }
    /**
     * Set BMButtonSearchRequest value
     * @param \PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest
     * @return \PayPal\StructType\BMButtonSearchReq
     */
    public function setBMButtonSearchRequest(\PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest = null)
    {
        $this->BMButtonSearchRequest = $bMButtonSearchRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMButtonSearchReq
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
