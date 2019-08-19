<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesTaxType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SalesTaxType extends AbstractStructBase
{
    /**
     * The SalesTaxPercent
     * Meta information extracted from the WSDL
     * - documentation: Amount of the sales tax to be collected for the transaction. Sales tax is only for US.
     * - minOccurs: 0
     * @var float
     */
    public $SalesTaxPercent;
    /**
     * The SalesTaxState
     * Meta information extracted from the WSDL
     * - documentation: Sales tax for the transaction, expressed as a percentage. Should be empty for items listed on international sites (hence, this is US-only element).
     * - minOccurs: 0
     * @var string
     */
    public $SalesTaxState;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether shipping is included in the tax. Applicable if ShippingType = 1 or 2. This element is used for US-only.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
    /**
     * Constructor method for SalesTaxType
     * @uses SalesTaxType::setSalesTaxPercent()
     * @uses SalesTaxType::setSalesTaxState()
     * @uses SalesTaxType::setShippingIncludedInTax()
     * @param float $salesTaxPercent
     * @param string $salesTaxState
     * @param bool $shippingIncludedInTax
     */
    public function __construct($salesTaxPercent = null, $salesTaxState = null, $shippingIncludedInTax = null)
    {
        $this
            ->setSalesTaxPercent($salesTaxPercent)
            ->setSalesTaxState($salesTaxState)
            ->setShippingIncludedInTax($shippingIncludedInTax);
    }
    /**
     * Get SalesTaxPercent value
     * @return float|null
     */
    public function getSalesTaxPercent()
    {
        return $this->SalesTaxPercent;
    }
    /**
     * Set SalesTaxPercent value
     * @param float $salesTaxPercent
     * @return \PayPal\StructType\SalesTaxType
     */
    public function setSalesTaxPercent($salesTaxPercent = null)
    {
        // validation for constraint: float
        if (!is_null($salesTaxPercent) && !(is_float($salesTaxPercent) || is_numeric($salesTaxPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesTaxPercent, true), gettype($salesTaxPercent)), __LINE__);
        }
        $this->SalesTaxPercent = $salesTaxPercent;
        return $this;
    }
    /**
     * Get SalesTaxState value
     * @return string|null
     */
    public function getSalesTaxState()
    {
        return $this->SalesTaxState;
    }
    /**
     * Set SalesTaxState value
     * @param string $salesTaxState
     * @return \PayPal\StructType\SalesTaxType
     */
    public function setSalesTaxState($salesTaxState = null)
    {
        // validation for constraint: string
        if (!is_null($salesTaxState) && !is_string($salesTaxState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesTaxState, true), gettype($salesTaxState)), __LINE__);
        }
        $this->SalesTaxState = $salesTaxState;
        return $this;
    }
    /**
     * Get ShippingIncludedInTax value
     * @return bool|null
     */
    public function getShippingIncludedInTax()
    {
        return $this->ShippingIncludedInTax;
    }
    /**
     * Set ShippingIncludedInTax value
     * @param bool $shippingIncludedInTax
     * @return \PayPal\StructType\SalesTaxType
     */
    public function setShippingIncludedInTax($shippingIncludedInTax = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIncludedInTax) && !is_bool($shippingIncludedInTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIncludedInTax, true), gettype($shippingIncludedInTax)), __LINE__);
        }
        $this->ShippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SalesTaxType
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
