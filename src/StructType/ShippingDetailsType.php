<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the shipping payment details.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingDetailsType extends AbstractStructBase
{
    /**
     * The AllowPaymentEdit
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the buyer edited the payment amount.
     * - minOccurs: 0
     * @var bool
     */
    public $AllowPaymentEdit;
    /**
     * The CalculatedShippingRate
     * Meta informations extracted from the WSDL
     * - documentation: Calculated shipping rate details. If present, then the calculated shipping rate option was used.
     * - minOccurs: 0
     * @var \PayPal\StructType\CalculatedShippingRateType
     */
    public $CalculatedShippingRate;
    /**
     * The ChangePaymentInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the payment instructions are included (e.g., for updating the details of a transaction).
     * - minOccurs: 0
     * @var bool
     */
    public $ChangePaymentInstructions;
    /**
     * The FlatShippingRate
     * Meta informations extracted from the WSDL
     * - documentation: Flat shipping rate details. If present, then the flat shipping rate option was used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\FlatShippingRateType[]
     */
    public $FlatShippingRate;
    /**
     * The InsuranceTotal
     * Meta informations extracted from the WSDL
     * - documentation: Total cost of insurance for the transaction.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $InsuranceTotal;
    /**
     * The InsuranceWanted
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether buyer selected to have insurance.
     * - minOccurs: 0
     * @var bool
     */
    public $InsuranceWanted;
    /**
     * The PaymentInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Payment instuctions.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInstructions;
    /**
     * The SalesTax
     * Meta informations extracted from the WSDL
     * - documentation: Sales tax details. Sales tax applicable for only US sites. For non-US sites this sub-element should not be used.
     * - minOccurs: 0
     * @var \PayPal\StructType\SalesTaxType
     */
    public $SalesTax;
    /**
     * The SellerPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Postal/Zip code from where the seller will ship the item.
     * - minOccurs: 0
     * @var string
     */
    public $SellerPostalCode;
    /**
     * Constructor method for ShippingDetailsType
     * @uses ShippingDetailsType::setAllowPaymentEdit()
     * @uses ShippingDetailsType::setCalculatedShippingRate()
     * @uses ShippingDetailsType::setChangePaymentInstructions()
     * @uses ShippingDetailsType::setFlatShippingRate()
     * @uses ShippingDetailsType::setInsuranceTotal()
     * @uses ShippingDetailsType::setInsuranceWanted()
     * @uses ShippingDetailsType::setPaymentInstructions()
     * @uses ShippingDetailsType::setSalesTax()
     * @uses ShippingDetailsType::setSellerPostalCode()
     * @param bool $allowPaymentEdit
     * @param \PayPal\StructType\CalculatedShippingRateType $calculatedShippingRate
     * @param bool $changePaymentInstructions
     * @param \PayPal\StructType\FlatShippingRateType[] $flatShippingRate
     * @param \PayPal\StructType\AmountType $insuranceTotal
     * @param bool $insuranceWanted
     * @param string $paymentInstructions
     * @param \PayPal\StructType\SalesTaxType $salesTax
     * @param string $sellerPostalCode
     */
    public function __construct($allowPaymentEdit = null, \PayPal\StructType\CalculatedShippingRateType $calculatedShippingRate = null, $changePaymentInstructions = null, array $flatShippingRate = array(), \PayPal\StructType\AmountType $insuranceTotal = null, $insuranceWanted = null, $paymentInstructions = null, \PayPal\StructType\SalesTaxType $salesTax = null, $sellerPostalCode = null)
    {
        $this
            ->setAllowPaymentEdit($allowPaymentEdit)
            ->setCalculatedShippingRate($calculatedShippingRate)
            ->setChangePaymentInstructions($changePaymentInstructions)
            ->setFlatShippingRate($flatShippingRate)
            ->setInsuranceTotal($insuranceTotal)
            ->setInsuranceWanted($insuranceWanted)
            ->setPaymentInstructions($paymentInstructions)
            ->setSalesTax($salesTax)
            ->setSellerPostalCode($sellerPostalCode);
    }
    /**
     * Get AllowPaymentEdit value
     * @return bool|null
     */
    public function getAllowPaymentEdit()
    {
        return $this->AllowPaymentEdit;
    }
    /**
     * Set AllowPaymentEdit value
     * @param bool $allowPaymentEdit
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setAllowPaymentEdit($allowPaymentEdit = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowPaymentEdit) && !is_bool($allowPaymentEdit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowPaymentEdit)), __LINE__);
        }
        $this->AllowPaymentEdit = $allowPaymentEdit;
        return $this;
    }
    /**
     * Get CalculatedShippingRate value
     * @return \PayPal\StructType\CalculatedShippingRateType|null
     */
    public function getCalculatedShippingRate()
    {
        return $this->CalculatedShippingRate;
    }
    /**
     * Set CalculatedShippingRate value
     * @param \PayPal\StructType\CalculatedShippingRateType $calculatedShippingRate
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setCalculatedShippingRate(\PayPal\StructType\CalculatedShippingRateType $calculatedShippingRate = null)
    {
        $this->CalculatedShippingRate = $calculatedShippingRate;
        return $this;
    }
    /**
     * Get ChangePaymentInstructions value
     * @return bool|null
     */
    public function getChangePaymentInstructions()
    {
        return $this->ChangePaymentInstructions;
    }
    /**
     * Set ChangePaymentInstructions value
     * @param bool $changePaymentInstructions
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setChangePaymentInstructions($changePaymentInstructions = null)
    {
        // validation for constraint: boolean
        if (!is_null($changePaymentInstructions) && !is_bool($changePaymentInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changePaymentInstructions)), __LINE__);
        }
        $this->ChangePaymentInstructions = $changePaymentInstructions;
        return $this;
    }
    /**
     * Get FlatShippingRate value
     * @return \PayPal\StructType\FlatShippingRateType[]|null
     */
    public function getFlatShippingRate()
    {
        return $this->FlatShippingRate;
    }
    /**
     * Set FlatShippingRate value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FlatShippingRateType[] $flatShippingRate
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setFlatShippingRate(array $flatShippingRate = array())
    {
        foreach ($flatShippingRate as $shippingDetailsTypeFlatShippingRateItem) {
            // validation for constraint: itemType
            if (!$shippingDetailsTypeFlatShippingRateItem instanceof \PayPal\StructType\FlatShippingRateType) {
                throw new \InvalidArgumentException(sprintf('The FlatShippingRate property can only contain items of \PayPal\StructType\FlatShippingRateType, "%s" given', is_object($shippingDetailsTypeFlatShippingRateItem) ? get_class($shippingDetailsTypeFlatShippingRateItem) : gettype($shippingDetailsTypeFlatShippingRateItem)), __LINE__);
            }
        }
        $this->FlatShippingRate = $flatShippingRate;
        return $this;
    }
    /**
     * Add item to FlatShippingRate value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FlatShippingRateType $item
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function addToFlatShippingRate(\PayPal\StructType\FlatShippingRateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\FlatShippingRateType) {
            throw new \InvalidArgumentException(sprintf('The FlatShippingRate property can only contain items of \PayPal\StructType\FlatShippingRateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlatShippingRate[] = $item;
        return $this;
    }
    /**
     * Get InsuranceTotal value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getInsuranceTotal()
    {
        return $this->InsuranceTotal;
    }
    /**
     * Set InsuranceTotal value
     * @param \PayPal\StructType\AmountType $insuranceTotal
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setInsuranceTotal(\PayPal\StructType\AmountType $insuranceTotal = null)
    {
        $this->InsuranceTotal = $insuranceTotal;
        return $this;
    }
    /**
     * Get InsuranceWanted value
     * @return bool|null
     */
    public function getInsuranceWanted()
    {
        return $this->InsuranceWanted;
    }
    /**
     * Set InsuranceWanted value
     * @param bool $insuranceWanted
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setInsuranceWanted($insuranceWanted = null)
    {
        // validation for constraint: boolean
        if (!is_null($insuranceWanted) && !is_bool($insuranceWanted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($insuranceWanted)), __LINE__);
        }
        $this->InsuranceWanted = $insuranceWanted;
        return $this;
    }
    /**
     * Get PaymentInstructions value
     * @return string|null
     */
    public function getPaymentInstructions()
    {
        return $this->PaymentInstructions;
    }
    /**
     * Set PaymentInstructions value
     * @param string $paymentInstructions
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setPaymentInstructions($paymentInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($paymentInstructions) && !is_string($paymentInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentInstructions)), __LINE__);
        }
        $this->PaymentInstructions = $paymentInstructions;
        return $this;
    }
    /**
     * Get SalesTax value
     * @return \PayPal\StructType\SalesTaxType|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param \PayPal\StructType\SalesTaxType $salesTax
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setSalesTax(\PayPal\StructType\SalesTaxType $salesTax = null)
    {
        $this->SalesTax = $salesTax;
        return $this;
    }
    /**
     * Get SellerPostalCode value
     * @return string|null
     */
    public function getSellerPostalCode()
    {
        return $this->SellerPostalCode;
    }
    /**
     * Set SellerPostalCode value
     * @param string $sellerPostalCode
     * @return \PayPal\StructType\ShippingDetailsType
     */
    public function setSellerPostalCode($sellerPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($sellerPostalCode) && !is_string($sellerPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerPostalCode)), __LINE__);
        }
        $this->SellerPostalCode = $sellerPostalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ShippingDetailsType
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
