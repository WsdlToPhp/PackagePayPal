<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMobileCheckoutReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetMobileCheckoutReq extends AbstractStructBase
{
    /**
     * The SetMobileCheckoutRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:SetMobileCheckoutRequest
     * @var \PayPal\StructType\SetMobileCheckoutRequestType
     */
    public $SetMobileCheckoutRequest;
    /**
     * Constructor method for SetMobileCheckoutReq
     * @uses SetMobileCheckoutReq::setSetMobileCheckoutRequest()
     * @param \PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest
     */
    public function __construct(\PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest = null)
    {
        $this
            ->setSetMobileCheckoutRequest($setMobileCheckoutRequest);
    }
    /**
     * Get SetMobileCheckoutRequest value
     * @return \PayPal\StructType\SetMobileCheckoutRequestType|null
     */
    public function getSetMobileCheckoutRequest()
    {
        return $this->SetMobileCheckoutRequest;
    }
    /**
     * Set SetMobileCheckoutRequest value
     * @param \PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest
     * @return \PayPal\StructType\SetMobileCheckoutReq
     */
    public function setSetMobileCheckoutRequest(\PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest = null)
    {
        $this->SetMobileCheckoutRequest = $setMobileCheckoutRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetMobileCheckoutReq
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
