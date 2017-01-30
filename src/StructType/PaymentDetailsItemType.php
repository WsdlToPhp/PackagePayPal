<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailsItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentDetailsItemType Information about a Payment Item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentDetailsItemType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Item name. Optional Character length and limitations: 127 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: Item number. Optional Character length and limitations: 127 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Item quantity. Optional Character length and limitations: Any positive integer
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - documentation: Item sales tax. Optional Character length and limitations: any valid currency amount; currency code is set the same as for OrderTotal.
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Tax;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Cost of item You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol.
     * Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The EbayItemPaymentDetailsItem
     * Meta informations extracted from the WSDL
     * - documentation: Ebay specific details. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\EbayItemPaymentDetailsItemType
     */
    public $EbayItemPaymentDetailsItem;
    /**
     * The PromoCode
     * Meta informations extracted from the WSDL
     * - documentation: Promotional financing code for item. Part of the Merchant Services Promotion Financing feature.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PromoCode;
    /**
     * The ProductCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductCategory;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Item description. Optional Character length and limitations: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ItemWeight
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Item weight.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\MeasureType
     */
    public $ItemWeight;
    /**
     * The ItemLength
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Item length.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\MeasureType
     */
    public $ItemLength;
    /**
     * The ItemWidth
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Item width.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\MeasureType
     */
    public $ItemWidth;
    /**
     * The ItemHeight
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Item height.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\MeasureType
     */
    public $ItemHeight;
    /**
     * The ItemURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for the item. Optional Character length and limitations: no limit.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemURL;
    /**
     * The EnhancedItemData
     * Meta informations extracted from the WSDL
     * - documentation: Enhanced data for each item in the cart. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\EnhancedItemDataType
     */
    public $EnhancedItemData;
    /**
     * The ItemCategory
     * Meta informations extracted from the WSDL
     * - documentation: Item category - physical or digital. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemCategory;
    /**
     * Constructor method for PaymentDetailsItemType
     * @uses PaymentDetailsItemType::setName()
     * @uses PaymentDetailsItemType::setNumber()
     * @uses PaymentDetailsItemType::setQuantity()
     * @uses PaymentDetailsItemType::setTax()
     * @uses PaymentDetailsItemType::setAmount()
     * @uses PaymentDetailsItemType::setEbayItemPaymentDetailsItem()
     * @uses PaymentDetailsItemType::setPromoCode()
     * @uses PaymentDetailsItemType::setProductCategory()
     * @uses PaymentDetailsItemType::setDescription()
     * @uses PaymentDetailsItemType::setItemWeight()
     * @uses PaymentDetailsItemType::setItemLength()
     * @uses PaymentDetailsItemType::setItemWidth()
     * @uses PaymentDetailsItemType::setItemHeight()
     * @uses PaymentDetailsItemType::setItemURL()
     * @uses PaymentDetailsItemType::setEnhancedItemData()
     * @uses PaymentDetailsItemType::setItemCategory()
     * @param string $name
     * @param string $number
     * @param int $quantity
     * @param \PayPal\StructType\BasicAmountType $tax
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param \PayPal\StructType\EbayItemPaymentDetailsItemType $ebayItemPaymentDetailsItem
     * @param string $promoCode
     * @param string $productCategory
     * @param string $description
     * @param \PayPal\StructType\MeasureType $itemWeight
     * @param \PayPal\StructType\MeasureType $itemLength
     * @param \PayPal\StructType\MeasureType $itemWidth
     * @param \PayPal\StructType\MeasureType $itemHeight
     * @param string $itemURL
     * @param \PayPal\StructType\EnhancedItemDataType $enhancedItemData
     * @param string $itemCategory
     */
    public function __construct($name = null, $number = null, $quantity = null, \PayPal\StructType\BasicAmountType $tax = null, \PayPal\StructType\BasicAmountType $amount = null, \PayPal\StructType\EbayItemPaymentDetailsItemType $ebayItemPaymentDetailsItem = null, $promoCode = null, $productCategory = null, $description = null, \PayPal\StructType\MeasureType $itemWeight = null, \PayPal\StructType\MeasureType $itemLength = null, \PayPal\StructType\MeasureType $itemWidth = null, \PayPal\StructType\MeasureType $itemHeight = null, $itemURL = null, \PayPal\StructType\EnhancedItemDataType $enhancedItemData = null, $itemCategory = null)
    {
        $this
            ->setName($name)
            ->setNumber($number)
            ->setQuantity($quantity)
            ->setTax($tax)
            ->setAmount($amount)
            ->setEbayItemPaymentDetailsItem($ebayItemPaymentDetailsItem)
            ->setPromoCode($promoCode)
            ->setProductCategory($productCategory)
            ->setDescription($description)
            ->setItemWeight($itemWeight)
            ->setItemLength($itemLength)
            ->setItemWidth($itemWidth)
            ->setItemHeight($itemHeight)
            ->setItemURL($itemURL)
            ->setEnhancedItemData($enhancedItemData)
            ->setItemCategory($itemCategory);
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
     * @return \PayPal\StructType\PaymentDetailsItemType
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
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Tax value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \PayPal\StructType\BasicAmountType $tax
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setTax(\PayPal\StructType\BasicAmountType $tax = null)
    {
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get EbayItemPaymentDetailsItem value
     * @return \PayPal\StructType\EbayItemPaymentDetailsItemType|null
     */
    public function getEbayItemPaymentDetailsItem()
    {
        return $this->EbayItemPaymentDetailsItem;
    }
    /**
     * Set EbayItemPaymentDetailsItem value
     * @param \PayPal\StructType\EbayItemPaymentDetailsItemType $ebayItemPaymentDetailsItem
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setEbayItemPaymentDetailsItem(\PayPal\StructType\EbayItemPaymentDetailsItemType $ebayItemPaymentDetailsItem = null)
    {
        $this->EbayItemPaymentDetailsItem = $ebayItemPaymentDetailsItem;
        return $this;
    }
    /**
     * Get PromoCode value
     * @return string|null
     */
    public function getPromoCode()
    {
        return $this->PromoCode;
    }
    /**
     * Set PromoCode value
     * @param string $promoCode
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setPromoCode($promoCode = null)
    {
        // validation for constraint: string
        if (!is_null($promoCode) && !is_string($promoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promoCode)), __LINE__);
        }
        $this->PromoCode = $promoCode;
        return $this;
    }
    /**
     * Get ProductCategory value
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->ProductCategory;
    }
    /**
     * Set ProductCategory value
     * @uses \PayPal\EnumType\ProductCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\ProductCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productCategory
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setProductCategory($productCategory = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ProductCategoryType::valueIsValid($productCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productCategory, implode(', ', \PayPal\EnumType\ProductCategoryType::getValidValues())), __LINE__);
        }
        $this->ProductCategory = $productCategory;
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
     * @return \PayPal\StructType\PaymentDetailsItemType
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
     * Get ItemWeight value
     * @return \PayPal\StructType\MeasureType|null
     */
    public function getItemWeight()
    {
        return $this->ItemWeight;
    }
    /**
     * Set ItemWeight value
     * @param \PayPal\StructType\MeasureType $itemWeight
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setItemWeight(\PayPal\StructType\MeasureType $itemWeight = null)
    {
        $this->ItemWeight = $itemWeight;
        return $this;
    }
    /**
     * Get ItemLength value
     * @return \PayPal\StructType\MeasureType|null
     */
    public function getItemLength()
    {
        return $this->ItemLength;
    }
    /**
     * Set ItemLength value
     * @param \PayPal\StructType\MeasureType $itemLength
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setItemLength(\PayPal\StructType\MeasureType $itemLength = null)
    {
        $this->ItemLength = $itemLength;
        return $this;
    }
    /**
     * Get ItemWidth value
     * @return \PayPal\StructType\MeasureType|null
     */
    public function getItemWidth()
    {
        return $this->ItemWidth;
    }
    /**
     * Set ItemWidth value
     * @param \PayPal\StructType\MeasureType $itemWidth
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setItemWidth(\PayPal\StructType\MeasureType $itemWidth = null)
    {
        $this->ItemWidth = $itemWidth;
        return $this;
    }
    /**
     * Get ItemHeight value
     * @return \PayPal\StructType\MeasureType|null
     */
    public function getItemHeight()
    {
        return $this->ItemHeight;
    }
    /**
     * Set ItemHeight value
     * @param \PayPal\StructType\MeasureType $itemHeight
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setItemHeight(\PayPal\StructType\MeasureType $itemHeight = null)
    {
        $this->ItemHeight = $itemHeight;
        return $this;
    }
    /**
     * Get ItemURL value
     * @return string|null
     */
    public function getItemURL()
    {
        return $this->ItemURL;
    }
    /**
     * Set ItemURL value
     * @param string $itemURL
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setItemURL($itemURL = null)
    {
        // validation for constraint: string
        if (!is_null($itemURL) && !is_string($itemURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemURL)), __LINE__);
        }
        $this->ItemURL = $itemURL;
        return $this;
    }
    /**
     * Get EnhancedItemData value
     * @return \PayPal\StructType\EnhancedItemDataType|null
     */
    public function getEnhancedItemData()
    {
        return $this->EnhancedItemData;
    }
    /**
     * Set EnhancedItemData value
     * @param \PayPal\StructType\EnhancedItemDataType $enhancedItemData
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setEnhancedItemData(\PayPal\StructType\EnhancedItemDataType $enhancedItemData = null)
    {
        $this->EnhancedItemData = $enhancedItemData;
        return $this;
    }
    /**
     * Get ItemCategory value
     * @return string|null
     */
    public function getItemCategory()
    {
        return $this->ItemCategory;
    }
    /**
     * Set ItemCategory value
     * @uses \PayPal\EnumType\ItemCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\ItemCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemCategory
     * @return \PayPal\StructType\PaymentDetailsItemType
     */
    public function setItemCategory($itemCategory = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ItemCategoryType::valueIsValid($itemCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemCategory, implode(', ', \PayPal\EnumType\ItemCategoryType::getValidValues())), __LINE__);
        }
        $this->ItemCategory = $itemCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentDetailsItemType
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
