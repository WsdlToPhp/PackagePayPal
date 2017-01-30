<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPExpressCheckoutPaymentResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPExpressCheckoutPaymentResponseType extends DoExpressCheckoutPaymentResponseType
{
    /**
     * The UATPDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:UATPDetails
     * @var \PayPal\StructType\UATPDetailsType
     */
    public $UATPDetails;
    /**
     * Constructor method for DoUATPExpressCheckoutPaymentResponseType
     * @uses DoUATPExpressCheckoutPaymentResponseType::setUATPDetails()
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     */
    public function __construct(\PayPal\StructType\UATPDetailsType $uATPDetails = null)
    {
        $this
            ->setUATPDetails($uATPDetails);
    }
    /**
     * Get UATPDetails value
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function getUATPDetails()
    {
        return $this->UATPDetails;
    }
    /**
     * Set UATPDetails value
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @return \PayPal\StructType\DoUATPExpressCheckoutPaymentResponseType
     */
    public function setUATPDetails(\PayPal\StructType\UATPDetailsType $uATPDetails = null)
    {
        $this->UATPDetails = $uATPDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoUATPExpressCheckoutPaymentResponseType
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
