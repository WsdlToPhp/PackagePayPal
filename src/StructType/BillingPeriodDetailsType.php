<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPeriodDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingPeriodDetailsType extends AbstractStructBase
{
    /**
     * The BillingPeriod
     * Meta information extracted from the WSDL
     * - documentation: Unit of meausre for billing cycle
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingPeriod;
    /**
     * The BillingFrequency
     * Meta information extracted from the WSDL
     * - documentation: Number of BillingPeriod that make up one billing cycle
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BillingFrequency;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount to charge
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The TotalBillingCycles
     * Meta information extracted from the WSDL
     * - documentation: Total billing cycles in this portion of the schedule
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalBillingCycles;
    /**
     * The ShippingAmount
     * Meta information extracted from the WSDL
     * - documentation: Additional shipping amount to charge
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingAmount;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: Additional tax amount to charge
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxAmount;
    /**
     * Constructor method for BillingPeriodDetailsType
     * @uses BillingPeriodDetailsType::setBillingPeriod()
     * @uses BillingPeriodDetailsType::setBillingFrequency()
     * @uses BillingPeriodDetailsType::setAmount()
     * @uses BillingPeriodDetailsType::setTotalBillingCycles()
     * @uses BillingPeriodDetailsType::setShippingAmount()
     * @uses BillingPeriodDetailsType::setTaxAmount()
     * @param string $billingPeriod
     * @param int $billingFrequency
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param int $totalBillingCycles
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     */
    public function __construct($billingPeriod = null, $billingFrequency = null, \PayPal\StructType\BasicAmountType $amount = null, $totalBillingCycles = null, \PayPal\StructType\BasicAmountType $shippingAmount = null, \PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this
            ->setBillingPeriod($billingPeriod)
            ->setBillingFrequency($billingFrequency)
            ->setAmount($amount)
            ->setTotalBillingCycles($totalBillingCycles)
            ->setShippingAmount($shippingAmount)
            ->setTaxAmount($taxAmount);
    }
    /**
     * Get BillingPeriod value
     * @return string
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
     * @return \PayPal\StructType\BillingPeriodDetailsType
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
     * @return int
     */
    public function getBillingFrequency()
    {
        return $this->BillingFrequency;
    }
    /**
     * Set BillingFrequency value
     * @param int $billingFrequency
     * @return \PayPal\StructType\BillingPeriodDetailsType
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
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\BillingPeriodDetailsType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
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
     * @return \PayPal\StructType\BillingPeriodDetailsType
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
     * Get ShippingAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingAmount()
    {
        return $this->ShippingAmount;
    }
    /**
     * Set ShippingAmount value
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @return \PayPal\StructType\BillingPeriodDetailsType
     */
    public function setShippingAmount(\PayPal\StructType\BasicAmountType $shippingAmount = null)
    {
        $this->ShippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @return \PayPal\StructType\BillingPeriodDetailsType
     */
    public function setTaxAmount(\PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
}
