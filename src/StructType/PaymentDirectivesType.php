<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDirectivesType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentDirectivesType extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - documentation: Type of the Payment is it Instant or Echeck or Any.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for PaymentDirectivesType
     * @uses PaymentDirectivesType::setPaymentType()
     * @param string $paymentType
     */
    public function __construct($paymentType = null)
    {
        $this
            ->setPaymentType($paymentType);
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \PayPal\EnumType\MerchantPullPaymentCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MerchantPullPaymentCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \PayPal\StructType\PaymentDirectivesType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MerchantPullPaymentCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MerchantPullPaymentCodeType', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \PayPal\EnumType\MerchantPullPaymentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentDirectivesType
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
