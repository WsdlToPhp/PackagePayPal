<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoExpressCheckoutPaymentResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoExpressCheckoutPaymentResponseType extends AbstractResponseType
{
    /**
     * The DoExpressCheckoutPaymentResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoExpressCheckoutPaymentResponseDetails
     * @var \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public $DoExpressCheckoutPaymentResponseDetails;
    /**
     * The FMFDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FMFDetailsType
     */
    public $FMFDetails;
    /**
     * Constructor method for DoExpressCheckoutPaymentResponseType
     * @uses DoExpressCheckoutPaymentResponseType::setDoExpressCheckoutPaymentResponseDetails()
     * @uses DoExpressCheckoutPaymentResponseType::setFMFDetails()
     * @param \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType $doExpressCheckoutPaymentResponseDetails
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     */
    public function __construct(\PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType $doExpressCheckoutPaymentResponseDetails = null, \PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this
            ->setDoExpressCheckoutPaymentResponseDetails($doExpressCheckoutPaymentResponseDetails)
            ->setFMFDetails($fMFDetails);
    }
    /**
     * Get DoExpressCheckoutPaymentResponseDetails value
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType
     */
    public function getDoExpressCheckoutPaymentResponseDetails()
    {
        return $this->DoExpressCheckoutPaymentResponseDetails;
    }
    /**
     * Set DoExpressCheckoutPaymentResponseDetails value
     * @param \PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType $doExpressCheckoutPaymentResponseDetails
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseType
     */
    public function setDoExpressCheckoutPaymentResponseDetails(\PayPal\StructType\DoExpressCheckoutPaymentResponseDetailsType $doExpressCheckoutPaymentResponseDetails = null)
    {
        $this->DoExpressCheckoutPaymentResponseDetails = $doExpressCheckoutPaymentResponseDetails;
        return $this;
    }
    /**
     * Get FMFDetails value
     * @return \PayPal\StructType\FMFDetailsType|null
     */
    public function getFMFDetails()
    {
        return $this->FMFDetails;
    }
    /**
     * Set FMFDetails value
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseType
     */
    public function setFMFDetails(\PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this->FMFDetails = $fMFDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoExpressCheckoutPaymentResponseType
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
