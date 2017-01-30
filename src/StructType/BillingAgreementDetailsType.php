<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingAgreementDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingAgreementDetailsType extends AbstractStructBase
{
    /**
     * The BillingType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingType;
    /**
     * The BillingAgreementDescription
     * Meta informations extracted from the WSDL
     * - documentation: Only needed for AutoBill billinng type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementDescription;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The BillingAgreementCustom
     * Meta informations extracted from the WSDL
     * - documentation: Custom annotation field for your exclusive use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementCustom;
    /**
     * Constructor method for BillingAgreementDetailsType
     * @uses BillingAgreementDetailsType::setBillingType()
     * @uses BillingAgreementDetailsType::setBillingAgreementDescription()
     * @uses BillingAgreementDetailsType::setPaymentType()
     * @uses BillingAgreementDetailsType::setBillingAgreementCustom()
     * @param string $billingType
     * @param string $billingAgreementDescription
     * @param string $paymentType
     * @param string $billingAgreementCustom
     */
    public function __construct($billingType = null, $billingAgreementDescription = null, $paymentType = null, $billingAgreementCustom = null)
    {
        $this
            ->setBillingType($billingType)
            ->setBillingAgreementDescription($billingAgreementDescription)
            ->setPaymentType($paymentType)
            ->setBillingAgreementCustom($billingAgreementCustom);
    }
    /**
     * Get BillingType value
     * @return string
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }
    /**
     * Set BillingType value
     * @uses \PayPal\EnumType\BillingCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BillingCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingType
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setBillingType($billingType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BillingCodeType::valueIsValid($billingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $billingType, implode(', ', \PayPal\EnumType\BillingCodeType::getValidValues())), __LINE__);
        }
        $this->BillingType = $billingType;
        return $this;
    }
    /**
     * Get BillingAgreementDescription value
     * @return string|null
     */
    public function getBillingAgreementDescription()
    {
        return $this->BillingAgreementDescription;
    }
    /**
     * Set BillingAgreementDescription value
     * @param string $billingAgreementDescription
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setBillingAgreementDescription($billingAgreementDescription = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementDescription) && !is_string($billingAgreementDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAgreementDescription)), __LINE__);
        }
        $this->BillingAgreementDescription = $billingAgreementDescription;
        return $this;
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
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MerchantPullPaymentCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \PayPal\EnumType\MerchantPullPaymentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get BillingAgreementCustom value
     * @return string|null
     */
    public function getBillingAgreementCustom()
    {
        return $this->BillingAgreementCustom;
    }
    /**
     * Set BillingAgreementCustom value
     * @param string $billingAgreementCustom
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setBillingAgreementCustom($billingAgreementCustom = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementCustom) && !is_string($billingAgreementCustom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAgreementCustom)), __LINE__);
        }
        $this->BillingAgreementCustom = $billingAgreementCustom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillingAgreementDetailsType
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
