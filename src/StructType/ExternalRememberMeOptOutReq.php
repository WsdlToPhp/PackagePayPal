<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRememberMeOptOutReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalRememberMeOptOutReq extends AbstractStructBase
{
    /**
     * The ExternalRememberMeOptOutRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:ExternalRememberMeOptOutRequest
     * @var \PayPal\StructType\ExternalRememberMeOptOutRequestType
     */
    public $ExternalRememberMeOptOutRequest;
    /**
     * Constructor method for ExternalRememberMeOptOutReq
     * @uses ExternalRememberMeOptOutReq::setExternalRememberMeOptOutRequest()
     * @param \PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest
     */
    public function __construct(\PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest = null)
    {
        $this
            ->setExternalRememberMeOptOutRequest($externalRememberMeOptOutRequest);
    }
    /**
     * Get ExternalRememberMeOptOutRequest value
     * @return \PayPal\StructType\ExternalRememberMeOptOutRequestType|null
     */
    public function getExternalRememberMeOptOutRequest()
    {
        return $this->ExternalRememberMeOptOutRequest;
    }
    /**
     * Set ExternalRememberMeOptOutRequest value
     * @param \PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest
     * @return \PayPal\StructType\ExternalRememberMeOptOutReq
     */
    public function setExternalRememberMeOptOutRequest(\PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest = null)
    {
        $this->ExternalRememberMeOptOutRequest = $externalRememberMeOptOutRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExternalRememberMeOptOutReq
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
