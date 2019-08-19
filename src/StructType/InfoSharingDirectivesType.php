<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoSharingDirectivesType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InfoSharingDirectivesType extends AbstractStructBase
{
    /**
     * The ReqBillingAddress
     * Meta information extracted from the WSDL
     * - documentation: If Billing Address should be returned in GetExpressCheckoutDetails response, this parameter should be set to yes here
     * - minOccurs: 0
     * @var string
     */
    public $ReqBillingAddress;
    /**
     * Constructor method for InfoSharingDirectivesType
     * @uses InfoSharingDirectivesType::setReqBillingAddress()
     * @param string $reqBillingAddress
     */
    public function __construct($reqBillingAddress = null)
    {
        $this
            ->setReqBillingAddress($reqBillingAddress);
    }
    /**
     * Get ReqBillingAddress value
     * @return string|null
     */
    public function getReqBillingAddress()
    {
        return $this->ReqBillingAddress;
    }
    /**
     * Set ReqBillingAddress value
     * @param string $reqBillingAddress
     * @return \PayPal\StructType\InfoSharingDirectivesType
     */
    public function setReqBillingAddress($reqBillingAddress = null)
    {
        // validation for constraint: string
        if (!is_null($reqBillingAddress) && !is_string($reqBillingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reqBillingAddress, true), gettype($reqBillingAddress)), __LINE__);
        }
        $this->ReqBillingAddress = $reqBillingAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\InfoSharingDirectivesType
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
