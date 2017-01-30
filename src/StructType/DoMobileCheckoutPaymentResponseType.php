<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoMobileCheckoutPaymentResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoMobileCheckoutPaymentResponseType extends AbstractResponseType
{
    /**
     * The DoMobileCheckoutPaymentResponseDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoMobileCheckoutPaymentResponseDetails
     * @var \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public $DoMobileCheckoutPaymentResponseDetails;
    /**
     * Constructor method for DoMobileCheckoutPaymentResponseType
     * @uses DoMobileCheckoutPaymentResponseType::setDoMobileCheckoutPaymentResponseDetails()
     * @param \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails
     */
    public function __construct(\PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails = null)
    {
        $this
            ->setDoMobileCheckoutPaymentResponseDetails($doMobileCheckoutPaymentResponseDetails);
    }
    /**
     * Get DoMobileCheckoutPaymentResponseDetails value
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public function getDoMobileCheckoutPaymentResponseDetails()
    {
        return $this->DoMobileCheckoutPaymentResponseDetails;
    }
    /**
     * Set DoMobileCheckoutPaymentResponseDetails value
     * @param \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseType
     */
    public function setDoMobileCheckoutPaymentResponseDetails(\PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails = null)
    {
        $this->DoMobileCheckoutPaymentResponseDetails = $doMobileCheckoutPaymentResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseType
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
