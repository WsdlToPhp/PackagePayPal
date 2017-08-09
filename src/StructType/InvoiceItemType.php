<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes an individual item for an invoice.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InvoiceItemType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: a human readable item nameOptional Character length and limits: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: a human readable item descriptionOptional Character length and limits: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - documentation: The International Article Number or Universal Product Code (UPC) for the item. Empty string is allowed. Character length and limits: 17 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EAN;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: The Stock-Keeping Unit or other identification code assigned to the item. Character length and limits: 64 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The ReturnPolicyIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: A retailer could apply different return policies on different items. Each return policy would be identified using a label or identifier. This return policy identifier should be set here. This identifier will be displayed next to the
     * item in the e-Receipt. Character length and limits: 8 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReturnPolicyIdentifier;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: total price of this item
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Price;
    /**
     * The ItemPrice
     * Meta informations extracted from the WSDL
     * - documentation: price per item quantity
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemPrice;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: quantity of the item (non-negative)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ItemCount;
    /**
     * The ItemCountUnit
     * Meta informations extracted from the WSDL
     * - documentation: Unit of measure for the itemCount
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemCountUnit;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - documentation: discount applied to this item
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\DiscountType[]
     */
    public $Discount;
    /**
     * The Taxable
     * Meta informations extracted from the WSDL
     * - documentation: identifies whether this item is taxable or not. If not passed, this will be assumed to be true.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Taxable;
    /**
     * The TaxRate
     * Meta informations extracted from the WSDL
     * - documentation: The tax percentage applied to the item. This is only used for displaying in the receipt, it is not used in pricing calculations. Note: we have totalTax at invoice level. It's up to the caller to do the calculations for setting that
     * other element.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxRate;
    /**
     * The AdditionalFees
     * Meta informations extracted from the WSDL
     * - documentation: Additional fees to this item
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\AdditionalFeeType[]
     */
    public $AdditionalFees;
    /**
     * The Reimbursable
     * Meta informations extracted from the WSDL
     * - documentation: identifies whether this is reimbursable or not. If not pass, this will be assumed to be true.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Reimbursable;
    /**
     * The MPN
     * Meta informations extracted from the WSDL
     * - documentation: Manufacturer part number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MPN;
    /**
     * The ISBN
     * Meta informations extracted from the WSDL
     * - documentation: International Standard Book Number. Reference http://en.wikipedia.org/wiki/ISBN Character length and limits: 32 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ISBN;
    /**
     * The PLU
     * Meta informations extracted from the WSDL
     * - documentation: Price Look-Up code Reference http://en.wikipedia.org/wiki/Price_Look-Up_code Character length and limits: 5 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PLU;
    /**
     * The ModelNumber
     * Meta informations extracted from the WSDL
     * - documentation: Character length and limits: 32 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModelNumber;
    /**
     * The StyleNumber
     * Meta informations extracted from the WSDL
     * - documentation: Character length and limits: 32 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StyleNumber;
    /**
     * Constructor method for InvoiceItemType
     * @uses InvoiceItemType::setName()
     * @uses InvoiceItemType::setDescription()
     * @uses InvoiceItemType::setEAN()
     * @uses InvoiceItemType::setSKU()
     * @uses InvoiceItemType::setReturnPolicyIdentifier()
     * @uses InvoiceItemType::setPrice()
     * @uses InvoiceItemType::setItemPrice()
     * @uses InvoiceItemType::setItemCount()
     * @uses InvoiceItemType::setItemCountUnit()
     * @uses InvoiceItemType::setDiscount()
     * @uses InvoiceItemType::setTaxable()
     * @uses InvoiceItemType::setTaxRate()
     * @uses InvoiceItemType::setAdditionalFees()
     * @uses InvoiceItemType::setReimbursable()
     * @uses InvoiceItemType::setMPN()
     * @uses InvoiceItemType::setISBN()
     * @uses InvoiceItemType::setPLU()
     * @uses InvoiceItemType::setModelNumber()
     * @uses InvoiceItemType::setStyleNumber()
     * @param string $name
     * @param string $description
     * @param string $eAN
     * @param string $sKU
     * @param string $returnPolicyIdentifier
     * @param \PayPal\StructType\BasicAmountType $price
     * @param \PayPal\StructType\BasicAmountType $itemPrice
     * @param float $itemCount
     * @param string $itemCountUnit
     * @param \PayPal\StructType\DiscountType[] $discount
     * @param bool $taxable
     * @param float $taxRate
     * @param \PayPal\StructType\AdditionalFeeType[] $additionalFees
     * @param bool $reimbursable
     * @param string $mPN
     * @param string $iSBN
     * @param string $pLU
     * @param string $modelNumber
     * @param string $styleNumber
     */
    public function __construct($name = null, $description = null, $eAN = null, $sKU = null, $returnPolicyIdentifier = null, \PayPal\StructType\BasicAmountType $price = null, \PayPal\StructType\BasicAmountType $itemPrice = null, $itemCount = null, $itemCountUnit = null, array $discount = array(), $taxable = null, $taxRate = null, array $additionalFees = array(), $reimbursable = null, $mPN = null, $iSBN = null, $pLU = null, $modelNumber = null, $styleNumber = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setEAN($eAN)
            ->setSKU($sKU)
            ->setReturnPolicyIdentifier($returnPolicyIdentifier)
            ->setPrice($price)
            ->setItemPrice($itemPrice)
            ->setItemCount($itemCount)
            ->setItemCountUnit($itemCountUnit)
            ->setDiscount($discount)
            ->setTaxable($taxable)
            ->setTaxRate($taxRate)
            ->setAdditionalFees($additionalFees)
            ->setReimbursable($reimbursable)
            ->setMPN($mPN)
            ->setISBN($iSBN)
            ->setPLU($pLU)
            ->setModelNumber($modelNumber)
            ->setStyleNumber($styleNumber);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get EAN value
     * @return string|null
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        return $this;
    }
    /**
     * Get ReturnPolicyIdentifier value
     * @return string|null
     */
    public function getReturnPolicyIdentifier()
    {
        return $this->ReturnPolicyIdentifier;
    }
    /**
     * Set ReturnPolicyIdentifier value
     * @param string $returnPolicyIdentifier
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setReturnPolicyIdentifier($returnPolicyIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($returnPolicyIdentifier) && !is_string($returnPolicyIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnPolicyIdentifier)), __LINE__);
        }
        $this->ReturnPolicyIdentifier = $returnPolicyIdentifier;
        return $this;
    }
    /**
     * Get Price value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \PayPal\StructType\BasicAmountType $price
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setPrice(\PayPal\StructType\BasicAmountType $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \PayPal\StructType\BasicAmountType $itemPrice
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setItemPrice(\PayPal\StructType\BasicAmountType $itemPrice = null)
    {
        $this->ItemPrice = $itemPrice;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return float|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param float $itemCount
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setItemCount($itemCount = null)
    {
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get ItemCountUnit value
     * @return string|null
     */
    public function getItemCountUnit()
    {
        return $this->ItemCountUnit;
    }
    /**
     * Set ItemCountUnit value
     * @uses \PayPal\EnumType\UnitOfMeasure::valueIsValid()
     * @uses \PayPal\EnumType\UnitOfMeasure::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemCountUnit
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setItemCountUnit($itemCountUnit = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\UnitOfMeasure::valueIsValid($itemCountUnit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemCountUnit, implode(', ', \PayPal\EnumType\UnitOfMeasure::getValidValues())), __LINE__);
        }
        $this->ItemCountUnit = $itemCountUnit;
        return $this;
    }
    /**
     * Get Discount value
     * @return \PayPal\StructType\DiscountType[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DiscountType[] $discount
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $invoiceItemTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$invoiceItemTypeDiscountItem instanceof \PayPal\StructType\DiscountType) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \PayPal\StructType\DiscountType, "%s" given', is_object($invoiceItemTypeDiscountItem) ? get_class($invoiceItemTypeDiscountItem) : gettype($invoiceItemTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DiscountType $item
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function addToDiscount(\PayPal\StructType\DiscountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\DiscountType) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \PayPal\StructType\DiscountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
    /**
     * Get Taxable value
     * @return bool|null
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }
    /**
     * Set Taxable value
     * @param bool $taxable
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setTaxable($taxable = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxable) && !is_bool($taxable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxable)), __LINE__);
        }
        $this->Taxable = $taxable;
        return $this;
    }
    /**
     * Get TaxRate value
     * @return float|null
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }
    /**
     * Set TaxRate value
     * @param float $taxRate
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setTaxRate($taxRate = null)
    {
        $this->TaxRate = $taxRate;
        return $this;
    }
    /**
     * Get AdditionalFees value
     * @return \PayPal\StructType\AdditionalFeeType[]|null
     */
    public function getAdditionalFees()
    {
        return $this->AdditionalFees;
    }
    /**
     * Set AdditionalFees value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AdditionalFeeType[] $additionalFees
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setAdditionalFees(array $additionalFees = array())
    {
        foreach ($additionalFees as $invoiceItemTypeAdditionalFeesItem) {
            // validation for constraint: itemType
            if (!$invoiceItemTypeAdditionalFeesItem instanceof \PayPal\StructType\AdditionalFeeType) {
                throw new \InvalidArgumentException(sprintf('The AdditionalFees property can only contain items of \PayPal\StructType\AdditionalFeeType, "%s" given', is_object($invoiceItemTypeAdditionalFeesItem) ? get_class($invoiceItemTypeAdditionalFeesItem) : gettype($invoiceItemTypeAdditionalFeesItem)), __LINE__);
            }
        }
        $this->AdditionalFees = $additionalFees;
        return $this;
    }
    /**
     * Add item to AdditionalFees value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AdditionalFeeType $item
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function addToAdditionalFees(\PayPal\StructType\AdditionalFeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\AdditionalFeeType) {
            throw new \InvalidArgumentException(sprintf('The AdditionalFees property can only contain items of \PayPal\StructType\AdditionalFeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalFees[] = $item;
        return $this;
    }
    /**
     * Get Reimbursable value
     * @return bool|null
     */
    public function getReimbursable()
    {
        return $this->Reimbursable;
    }
    /**
     * Set Reimbursable value
     * @param bool $reimbursable
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setReimbursable($reimbursable = null)
    {
        // validation for constraint: boolean
        if (!is_null($reimbursable) && !is_bool($reimbursable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reimbursable)), __LINE__);
        }
        $this->Reimbursable = $reimbursable;
        return $this;
    }
    /**
     * Get MPN value
     * @return string|null
     */
    public function getMPN()
    {
        return $this->MPN;
    }
    /**
     * Set MPN value
     * @param string $mPN
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setMPN($mPN = null)
    {
        // validation for constraint: string
        if (!is_null($mPN) && !is_string($mPN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mPN)), __LINE__);
        }
        $this->MPN = $mPN;
        return $this;
    }
    /**
     * Get ISBN value
     * @return string|null
     */
    public function getISBN()
    {
        return $this->ISBN;
    }
    /**
     * Set ISBN value
     * @param string $iSBN
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setISBN($iSBN = null)
    {
        // validation for constraint: string
        if (!is_null($iSBN) && !is_string($iSBN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSBN)), __LINE__);
        }
        $this->ISBN = $iSBN;
        return $this;
    }
    /**
     * Get PLU value
     * @return string|null
     */
    public function getPLU()
    {
        return $this->PLU;
    }
    /**
     * Set PLU value
     * @param string $pLU
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setPLU($pLU = null)
    {
        // validation for constraint: string
        if (!is_null($pLU) && !is_string($pLU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pLU)), __LINE__);
        }
        $this->PLU = $pLU;
        return $this;
    }
    /**
     * Get ModelNumber value
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->ModelNumber;
    }
    /**
     * Set ModelNumber value
     * @param string $modelNumber
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setModelNumber($modelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($modelNumber) && !is_string($modelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modelNumber)), __LINE__);
        }
        $this->ModelNumber = $modelNumber;
        return $this;
    }
    /**
     * Get StyleNumber value
     * @return string|null
     */
    public function getStyleNumber()
    {
        return $this->StyleNumber;
    }
    /**
     * Set StyleNumber value
     * @param string $styleNumber
     * @return \PayPal\StructType\InvoiceItemType
     */
    public function setStyleNumber($styleNumber = null)
    {
        // validation for constraint: string
        if (!is_null($styleNumber) && !is_string($styleNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($styleNumber)), __LINE__);
        }
        $this->StyleNumber = $styleNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\InvoiceItemType
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
