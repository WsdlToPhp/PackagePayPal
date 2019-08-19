<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InstallmentDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InstallmentDetailsType extends AbstractStructBase
{
    /**
     * The BillingPeriod
     * Meta information extracted from the WSDL
     * - documentation: Installment Period. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingPeriod;
    /**
     * The BillingFrequency
     * Meta information extracted from the WSDL
     * - documentation: Installment Frequency. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BillingFrequency;
    /**
     * The TotalBillingCycles
     * Meta information extracted from the WSDL
     * - documentation: Installment Cycles. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalBillingCycles;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Installment Amount. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Amount;
    /**
     * The ShippingAmount
     * Meta information extracted from the WSDL
     * - documentation: Installment Amount. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingAmount;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: Installment Amount. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TaxAmount;
    /**
     * Constructor method for InstallmentDetailsType
     * @uses InstallmentDetailsType::setBillingPeriod()
     * @uses InstallmentDetailsType::setBillingFrequency()
     * @uses InstallmentDetailsType::setTotalBillingCycles()
     * @uses InstallmentDetailsType::setAmount()
     * @uses InstallmentDetailsType::setShippingAmount()
     * @uses InstallmentDetailsType::setTaxAmount()
     * @param string $billingPeriod
     * @param int $billingFrequency
     * @param int $totalBillingCycles
     * @param string $amount
     * @param string $shippingAmount
     * @param string $taxAmount
     */
    public function __construct($billingPeriod = null, $billingFrequency = null, $totalBillingCycles = null, $amount = null, $shippingAmount = null, $taxAmount = null)
    {
        $this
            ->setBillingPeriod($billingPeriod)
            ->setBillingFrequency($billingFrequency)
            ->setTotalBillingCycles($totalBillingCycles)
            ->setAmount($amount)
            ->setShippingAmount($shippingAmount)
            ->setTaxAmount($taxAmount);
    }
    /**
     * Get BillingPeriod value
     * @return string|null
     */
    public function getBillingPeriod()
    {
        return $this->BillingPeriod;
    }
    /**
     * Set BillingPeriod value
     * @uses \PayPal\EnumType\BillingPeriodType::valueIsValid()
     * @uses \PayPal\EnumType\BillingPeriodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingPeriod
     * @return \PayPal\StructType\InstallmentDetailsType
     */
    public function setBillingPeriod($billingPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BillingPeriodType::valueIsValid($billingPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BillingPeriodType', is_array($billingPeriod) ? implode(', ', $billingPeriod) : var_export($billingPeriod, true), implode(', ', \PayPal\EnumType\BillingPeriodType::getValidValues())), __LINE__);
        }
        $this->BillingPeriod = $billingPeriod;
        return $this;
    }
    /**
     * Get BillingFrequency value
     * @return int|null
     */
    public function getBillingFrequency()
    {
        return $this->BillingFrequency;
    }
    /**
     * Set BillingFrequency value
     * @param int $billingFrequency
     * @return \PayPal\StructType\InstallmentDetailsType
     */
    public function setBillingFrequency($billingFrequency = null)
    {
        // validation for constraint: int
        if (!is_null($billingFrequency) && !(is_int($billingFrequency) || ctype_digit($billingFrequency))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingFrequency, true), gettype($billingFrequency)), __LINE__);
        }
        $this->BillingFrequency = $billingFrequency;
        return $this;
    }
    /**
     * Get TotalBillingCycles value
     * @return int|null
     */
    public function getTotalBillingCycles()
    {
        return $this->TotalBillingCycles;
    }
    /**
     * Set TotalBillingCycles value
     * @param int $totalBillingCycles
     * @return \PayPal\StructType\InstallmentDetailsType
     */
    public function setTotalBillingCycles($totalBillingCycles = null)
    {
        // validation for constraint: int
        if (!is_null($totalBillingCycles) && !(is_int($totalBillingCycles) || ctype_digit($totalBillingCycles))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBillingCycles, true), gettype($totalBillingCycles)), __LINE__);
        }
        $this->TotalBillingCycles = $totalBillingCycles;
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \PayPal\StructType\InstallmentDetailsType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ShippingAmount value
     * @return string|null
     */
    public function getShippingAmount()
    {
        return $this->ShippingAmount;
    }
    /**
     * Set ShippingAmount value
     * @param string $shippingAmount
     * @return \PayPal\StructType\InstallmentDetailsType
     */
    public function setShippingAmount($shippingAmount = null)
    {
        // validation for constraint: string
        if (!is_null($shippingAmount) && !is_string($shippingAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingAmount, true), gettype($shippingAmount)), __LINE__);
        }
        $this->ShippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $taxAmount
     * @return \PayPal\StructType\InstallmentDetailsType
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: string
        if (!is_null($taxAmount) && !is_string($taxAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\InstallmentDetailsType
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
