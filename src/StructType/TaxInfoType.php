<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxInfoType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TaxInfoType extends AbstractStructBase
{
    /**
     * The TaxAmount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxAmount;
    /**
     * The SalesTaxPercentage
     * @var string
     */
    public $SalesTaxPercentage;
    /**
     * The TaxState
     * @var string
     */
    public $TaxState;
    /**
     * Constructor method for TaxInfoType
     * @uses TaxInfoType::setTaxAmount()
     * @uses TaxInfoType::setSalesTaxPercentage()
     * @uses TaxInfoType::setTaxState()
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @param string $salesTaxPercentage
     * @param string $taxState
     */
    public function __construct(\PayPal\StructType\BasicAmountType $taxAmount = null, $salesTaxPercentage = null, $taxState = null)
    {
        $this
            ->setTaxAmount($taxAmount)
            ->setSalesTaxPercentage($salesTaxPercentage)
            ->setTaxState($taxState);
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
     * @return \PayPal\StructType\TaxInfoType
     */
    public function setTaxAmount(\PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get SalesTaxPercentage value
     * @return string|null
     */
    public function getSalesTaxPercentage()
    {
        return $this->SalesTaxPercentage;
    }
    /**
     * Set SalesTaxPercentage value
     * @param string $salesTaxPercentage
     * @return \PayPal\StructType\TaxInfoType
     */
    public function setSalesTaxPercentage($salesTaxPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($salesTaxPercentage) && !is_string($salesTaxPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesTaxPercentage, true), gettype($salesTaxPercentage)), __LINE__);
        }
        $this->SalesTaxPercentage = $salesTaxPercentage;
        return $this;
    }
    /**
     * Get TaxState value
     * @return string|null
     */
    public function getTaxState()
    {
        return $this->TaxState;
    }
    /**
     * Set TaxState value
     * @param string $taxState
     * @return \PayPal\StructType\TaxInfoType
     */
    public function setTaxState($taxState = null)
    {
        // validation for constraint: string
        if (!is_null($taxState) && !is_string($taxState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxState, true), gettype($taxState)), __LINE__);
        }
        $this->TaxState = $taxState;
        return $this;
    }
}
