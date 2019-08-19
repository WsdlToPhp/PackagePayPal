<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: PaymentItemType Information about a Payment Item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentItemType extends AbstractStructBase
{
    /**
     * The EbayItemTxnId
     * Meta information extracted from the WSDL
     * - documentation: eBay Auction Transaction ID of the Item Optional Character length and limitations: 255 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $EbayItemTxnId;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Item name set by you or entered by the customer. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Item number set by you. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Quantity set by you or entered by the customer. Character length and limitations: no limit
     * - minOccurs: 0
     * @var string
     */
    public $Quantity;
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: Amount of tax charged on payment
     * - minOccurs: 0
     * @var string
     */
    public $SalesTax;
    /**
     * The ShippingAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of shipping charged on payment
     * - minOccurs: 0
     * @var string
     */
    public $ShippingAmount;
    /**
     * The HandlingAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of handling charged on payment
     * - minOccurs: 0
     * @var string
     */
    public $HandlingAmount;
    /**
     * The InvoiceItemDetails
     * Meta information extracted from the WSDL
     * - documentation: Invoice item details
     * - minOccurs: 0
     * @var \PayPal\StructType\InvoiceItemType
     */
    public $InvoiceItemDetails;
    /**
     * The CouponID
     * Meta information extracted from the WSDL
     * - documentation: Coupon ID Number
     * - minOccurs: 0
     * @var string
     */
    public $CouponID;
    /**
     * The CouponAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount Value of The Coupon
     * - minOccurs: 0
     * @var string
     */
    public $CouponAmount;
    /**
     * The CouponAmountCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency of the Coupon Amount
     * - minOccurs: 0
     * @var string
     */
    public $CouponAmountCurrency;
    /**
     * The LoyaltyCardDiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of Discount on this Loyalty Card
     * - minOccurs: 0
     * @var string
     */
    public $LoyaltyCardDiscountAmount;
    /**
     * The LoyaltyCardDiscountCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency of the Discount
     * - minOccurs: 0
     * @var string
     */
    public $LoyaltyCardDiscountCurrency;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Cost of item
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - documentation: Item options selected in PayPal shopping cart
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\OptionType[]
     */
    public $Options;
    /**
     * Constructor method for PaymentItemType
     * @uses PaymentItemType::setEbayItemTxnId()
     * @uses PaymentItemType::setName()
     * @uses PaymentItemType::setNumber()
     * @uses PaymentItemType::setQuantity()
     * @uses PaymentItemType::setSalesTax()
     * @uses PaymentItemType::setShippingAmount()
     * @uses PaymentItemType::setHandlingAmount()
     * @uses PaymentItemType::setInvoiceItemDetails()
     * @uses PaymentItemType::setCouponID()
     * @uses PaymentItemType::setCouponAmount()
     * @uses PaymentItemType::setCouponAmountCurrency()
     * @uses PaymentItemType::setLoyaltyCardDiscountAmount()
     * @uses PaymentItemType::setLoyaltyCardDiscountCurrency()
     * @uses PaymentItemType::setAmount()
     * @uses PaymentItemType::setOptions()
     * @param string $ebayItemTxnId
     * @param string $name
     * @param string $number
     * @param string $quantity
     * @param string $salesTax
     * @param string $shippingAmount
     * @param string $handlingAmount
     * @param \PayPal\StructType\InvoiceItemType $invoiceItemDetails
     * @param string $couponID
     * @param string $couponAmount
     * @param string $couponAmountCurrency
     * @param string $loyaltyCardDiscountAmount
     * @param string $loyaltyCardDiscountCurrency
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param \PayPal\StructType\OptionType[] $options
     */
    public function __construct($ebayItemTxnId = null, $name = null, $number = null, $quantity = null, $salesTax = null, $shippingAmount = null, $handlingAmount = null, \PayPal\StructType\InvoiceItemType $invoiceItemDetails = null, $couponID = null, $couponAmount = null, $couponAmountCurrency = null, $loyaltyCardDiscountAmount = null, $loyaltyCardDiscountCurrency = null, \PayPal\StructType\BasicAmountType $amount = null, array $options = array())
    {
        $this
            ->setEbayItemTxnId($ebayItemTxnId)
            ->setName($name)
            ->setNumber($number)
            ->setQuantity($quantity)
            ->setSalesTax($salesTax)
            ->setShippingAmount($shippingAmount)
            ->setHandlingAmount($handlingAmount)
            ->setInvoiceItemDetails($invoiceItemDetails)
            ->setCouponID($couponID)
            ->setCouponAmount($couponAmount)
            ->setCouponAmountCurrency($couponAmountCurrency)
            ->setLoyaltyCardDiscountAmount($loyaltyCardDiscountAmount)
            ->setLoyaltyCardDiscountCurrency($loyaltyCardDiscountCurrency)
            ->setAmount($amount)
            ->setOptions($options);
    }
    /**
     * Get EbayItemTxnId value
     * @return string|null
     */
    public function getEbayItemTxnId()
    {
        return $this->EbayItemTxnId;
    }
    /**
     * Set EbayItemTxnId value
     * @param string $ebayItemTxnId
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setEbayItemTxnId($ebayItemTxnId = null)
    {
        // validation for constraint: string
        if (!is_null($ebayItemTxnId) && !is_string($ebayItemTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ebayItemTxnId, true), gettype($ebayItemTxnId)), __LINE__);
        }
        $this->EbayItemTxnId = $ebayItemTxnId;
        return $this;
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
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get SalesTax value
     * @return string|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param string $salesTax
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setSalesTax($salesTax = null)
    {
        // validation for constraint: string
        if (!is_null($salesTax) && !is_string($salesTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesTax, true), gettype($salesTax)), __LINE__);
        }
        $this->SalesTax = $salesTax;
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
     * @return \PayPal\StructType\PaymentItemType
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
     * Get HandlingAmount value
     * @return string|null
     */
    public function getHandlingAmount()
    {
        return $this->HandlingAmount;
    }
    /**
     * Set HandlingAmount value
     * @param string $handlingAmount
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setHandlingAmount($handlingAmount = null)
    {
        // validation for constraint: string
        if (!is_null($handlingAmount) && !is_string($handlingAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlingAmount, true), gettype($handlingAmount)), __LINE__);
        }
        $this->HandlingAmount = $handlingAmount;
        return $this;
    }
    /**
     * Get InvoiceItemDetails value
     * @return \PayPal\StructType\InvoiceItemType|null
     */
    public function getInvoiceItemDetails()
    {
        return $this->InvoiceItemDetails;
    }
    /**
     * Set InvoiceItemDetails value
     * @param \PayPal\StructType\InvoiceItemType $invoiceItemDetails
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setInvoiceItemDetails(\PayPal\StructType\InvoiceItemType $invoiceItemDetails = null)
    {
        $this->InvoiceItemDetails = $invoiceItemDetails;
        return $this;
    }
    /**
     * Get CouponID value
     * @return string|null
     */
    public function getCouponID()
    {
        return $this->CouponID;
    }
    /**
     * Set CouponID value
     * @param string $couponID
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setCouponID($couponID = null)
    {
        // validation for constraint: string
        if (!is_null($couponID) && !is_string($couponID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($couponID, true), gettype($couponID)), __LINE__);
        }
        $this->CouponID = $couponID;
        return $this;
    }
    /**
     * Get CouponAmount value
     * @return string|null
     */
    public function getCouponAmount()
    {
        return $this->CouponAmount;
    }
    /**
     * Set CouponAmount value
     * @param string $couponAmount
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setCouponAmount($couponAmount = null)
    {
        // validation for constraint: string
        if (!is_null($couponAmount) && !is_string($couponAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($couponAmount, true), gettype($couponAmount)), __LINE__);
        }
        $this->CouponAmount = $couponAmount;
        return $this;
    }
    /**
     * Get CouponAmountCurrency value
     * @return string|null
     */
    public function getCouponAmountCurrency()
    {
        return $this->CouponAmountCurrency;
    }
    /**
     * Set CouponAmountCurrency value
     * @param string $couponAmountCurrency
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setCouponAmountCurrency($couponAmountCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($couponAmountCurrency) && !is_string($couponAmountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($couponAmountCurrency, true), gettype($couponAmountCurrency)), __LINE__);
        }
        $this->CouponAmountCurrency = $couponAmountCurrency;
        return $this;
    }
    /**
     * Get LoyaltyCardDiscountAmount value
     * @return string|null
     */
    public function getLoyaltyCardDiscountAmount()
    {
        return $this->LoyaltyCardDiscountAmount;
    }
    /**
     * Set LoyaltyCardDiscountAmount value
     * @param string $loyaltyCardDiscountAmount
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setLoyaltyCardDiscountAmount($loyaltyCardDiscountAmount = null)
    {
        // validation for constraint: string
        if (!is_null($loyaltyCardDiscountAmount) && !is_string($loyaltyCardDiscountAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyCardDiscountAmount, true), gettype($loyaltyCardDiscountAmount)), __LINE__);
        }
        $this->LoyaltyCardDiscountAmount = $loyaltyCardDiscountAmount;
        return $this;
    }
    /**
     * Get LoyaltyCardDiscountCurrency value
     * @return string|null
     */
    public function getLoyaltyCardDiscountCurrency()
    {
        return $this->LoyaltyCardDiscountCurrency;
    }
    /**
     * Set LoyaltyCardDiscountCurrency value
     * @param string $loyaltyCardDiscountCurrency
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setLoyaltyCardDiscountCurrency($loyaltyCardDiscountCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($loyaltyCardDiscountCurrency) && !is_string($loyaltyCardDiscountCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loyaltyCardDiscountCurrency, true), gettype($loyaltyCardDiscountCurrency)), __LINE__);
        }
        $this->LoyaltyCardDiscountCurrency = $loyaltyCardDiscountCurrency;
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
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Options value
     * @return \PayPal\StructType\OptionType[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * This method is responsible for validating the values passed to the setOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionsForArrayConstraintsFromSetOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentItemTypeOptionsItem) {
            // validation for constraint: itemType
            if (!$paymentItemTypeOptionsItem instanceof \PayPal\StructType\OptionType) {
                $invalidValues[] = is_object($paymentItemTypeOptionsItem) ? get_class($paymentItemTypeOptionsItem) : sprintf('%s(%s)', gettype($paymentItemTypeOptionsItem), var_export($paymentItemTypeOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Options property can only contain items of type \PayPal\StructType\OptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Options value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionType[] $options
     * @return \PayPal\StructType\PaymentItemType
     */
    public function setOptions(array $options = array())
    {
        // validation for constraint: array
        if ('' !== ($optionsArrayErrorMessage = self::validateOptionsForArrayConstraintsFromSetOptions($options))) {
            throw new \InvalidArgumentException($optionsArrayErrorMessage, __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionType $item
     * @return \PayPal\StructType\PaymentItemType
     */
    public function addToOptions(\PayPal\StructType\OptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\OptionType) {
            throw new \InvalidArgumentException(sprintf('The Options property can only contain items of type \PayPal\StructType\OptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentItemType
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
