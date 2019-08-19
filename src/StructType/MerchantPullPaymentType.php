<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantPullPaymentType StructType
 * Meta information extracted from the WSDL
 * - documentation: MerchantPullPayment Parameters to make initiate a pull payment
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantPullPaymentType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount to charge to the customer. Required Only numeric characters and a decimal separator are allowed. Limit: 10 single-byte characters, including two for decimals You must set the currencyID attribute to one of the
     * three-character currency code for any of the supported PayPal currencies.
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The MpID
     * Meta information extracted from the WSDL
     * - documentation: Preapproved Payments billing agreement identification number between the PayPal customer and you. Required Character limit: 19 single-byte alphanumeric characters. The format of a billing agreement identification number is the
     * single-character prefix B, followed by a hyphen and an alphanumeric character string: B-unique_alphanumeric_string
     * - base: xs:string
     * @var string
     */
    public $MpID;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - documentation: Specifies type of PayPal payment you require Optional
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The Memo
     * Meta information extracted from the WSDL
     * - documentation: Text entered by the customer in the Note field during enrollment Optional
     * - minOccurs: 0
     * @var string
     */
    public $Memo;
    /**
     * The EmailSubject
     * Meta information extracted from the WSDL
     * - documentation: Subject line of confirmation email sent to recipient Optional
     * - minOccurs: 0
     * @var string
     */
    public $EmailSubject;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: The tax charged on the transaction Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Tax;
    /**
     * The Shipping
     * Meta information extracted from the WSDL
     * - documentation: Per-transaction shipping charge Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Shipping;
    /**
     * The Handling
     * Meta information extracted from the WSDL
     * - documentation: Per-transaction handling charge Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Handling;
    /**
     * The ItemName
     * Meta information extracted from the WSDL
     * - documentation: Name of purchased item Optional
     * - minOccurs: 0
     * @var string
     */
    public $ItemName;
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Reference number of purchased item Optional
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The Invoice
     * Meta information extracted from the WSDL
     * - documentation: Your invoice number Optional
     * - minOccurs: 0
     * @var string
     */
    public $Invoice;
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: Custom annotation field for tracking or other use Optional
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The ButtonSource
     * Meta information extracted from the WSDL
     * - documentation: An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ButtonSource;
    /**
     * The SoftDescriptor
     * Meta information extracted from the WSDL
     * - documentation: Passed in soft descriptor string to be appended. Optional Character length and limitations: single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * Constructor method for MerchantPullPaymentType
     * @uses MerchantPullPaymentType::setAmount()
     * @uses MerchantPullPaymentType::setMpID()
     * @uses MerchantPullPaymentType::setPaymentType()
     * @uses MerchantPullPaymentType::setMemo()
     * @uses MerchantPullPaymentType::setEmailSubject()
     * @uses MerchantPullPaymentType::setTax()
     * @uses MerchantPullPaymentType::setShipping()
     * @uses MerchantPullPaymentType::setHandling()
     * @uses MerchantPullPaymentType::setItemName()
     * @uses MerchantPullPaymentType::setItemNumber()
     * @uses MerchantPullPaymentType::setInvoice()
     * @uses MerchantPullPaymentType::setCustom()
     * @uses MerchantPullPaymentType::setButtonSource()
     * @uses MerchantPullPaymentType::setSoftDescriptor()
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $mpID
     * @param string $paymentType
     * @param string $memo
     * @param string $emailSubject
     * @param \PayPal\StructType\BasicAmountType $tax
     * @param \PayPal\StructType\BasicAmountType $shipping
     * @param \PayPal\StructType\BasicAmountType $handling
     * @param string $itemName
     * @param string $itemNumber
     * @param string $invoice
     * @param string $custom
     * @param string $buttonSource
     * @param string $softDescriptor
     */
    public function __construct(\PayPal\StructType\BasicAmountType $amount = null, $mpID = null, $paymentType = null, $memo = null, $emailSubject = null, \PayPal\StructType\BasicAmountType $tax = null, \PayPal\StructType\BasicAmountType $shipping = null, \PayPal\StructType\BasicAmountType $handling = null, $itemName = null, $itemNumber = null, $invoice = null, $custom = null, $buttonSource = null, $softDescriptor = null)
    {
        $this
            ->setAmount($amount)
            ->setMpID($mpID)
            ->setPaymentType($paymentType)
            ->setMemo($memo)
            ->setEmailSubject($emailSubject)
            ->setTax($tax)
            ->setShipping($shipping)
            ->setHandling($handling)
            ->setItemName($itemName)
            ->setItemNumber($itemNumber)
            ->setInvoice($invoice)
            ->setCustom($custom)
            ->setButtonSource($buttonSource)
            ->setSoftDescriptor($softDescriptor);
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
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get MpID value
     * @return string|null
     */
    public function getMpID()
    {
        return $this->MpID;
    }
    /**
     * Set MpID value
     * @param string $mpID
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setMpID($mpID = null)
    {
        // validation for constraint: string
        if (!is_null($mpID) && !is_string($mpID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mpID, true), gettype($mpID)), __LINE__);
        }
        $this->MpID = $mpID;
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
     * @return \PayPal\StructType\MerchantPullPaymentType
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
     * Get Memo value
     * @return string|null
     */
    public function getMemo()
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $memo
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setMemo($memo = null)
    {
        // validation for constraint: string
        if (!is_null($memo) && !is_string($memo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memo, true), gettype($memo)), __LINE__);
        }
        $this->Memo = $memo;
        return $this;
    }
    /**
     * Get EmailSubject value
     * @return string|null
     */
    public function getEmailSubject()
    {
        return $this->EmailSubject;
    }
    /**
     * Set EmailSubject value
     * @param string $emailSubject
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setEmailSubject($emailSubject = null)
    {
        // validation for constraint: string
        if (!is_null($emailSubject) && !is_string($emailSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSubject, true), gettype($emailSubject)), __LINE__);
        }
        $this->EmailSubject = $emailSubject;
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
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setTax(\PayPal\StructType\BasicAmountType $tax = null)
    {
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Get Shipping value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShipping()
    {
        return $this->Shipping;
    }
    /**
     * Set Shipping value
     * @param \PayPal\StructType\BasicAmountType $shipping
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setShipping(\PayPal\StructType\BasicAmountType $shipping = null)
    {
        $this->Shipping = $shipping;
        return $this;
    }
    /**
     * Get Handling value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getHandling()
    {
        return $this->Handling;
    }
    /**
     * Set Handling value
     * @param \PayPal\StructType\BasicAmountType $handling
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setHandling(\PayPal\StructType\BasicAmountType $handling = null)
    {
        $this->Handling = $handling;
        return $this;
    }
    /**
     * Get ItemName value
     * @return string|null
     */
    public function getItemName()
    {
        return $this->ItemName;
    }
    /**
     * Set ItemName value
     * @param string $itemName
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setItemName($itemName = null)
    {
        // validation for constraint: string
        if (!is_null($itemName) && !is_string($itemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemName, true), gettype($itemName)), __LINE__);
        }
        $this->ItemName = $itemName;
        return $this;
    }
    /**
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get Invoice value
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }
    /**
     * Set Invoice value
     * @param string $invoice
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setInvoice($invoice = null)
    {
        // validation for constraint: string
        if (!is_null($invoice) && !is_string($invoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoice, true), gettype($invoice)), __LINE__);
        }
        $this->Invoice = $invoice;
        return $this;
    }
    /**
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get ButtonSource value
     * @return string|null
     */
    public function getButtonSource()
    {
        return $this->ButtonSource;
    }
    /**
     * Set ButtonSource value
     * @param string $buttonSource
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setButtonSource($buttonSource = null)
    {
        // validation for constraint: string
        if (!is_null($buttonSource) && !is_string($buttonSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buttonSource, true), gettype($buttonSource)), __LINE__);
        }
        $this->ButtonSource = $buttonSource;
        return $this;
    }
    /**
     * Get SoftDescriptor value
     * @return string|null
     */
    public function getSoftDescriptor()
    {
        return $this->SoftDescriptor;
    }
    /**
     * Set SoftDescriptor value
     * @param string $softDescriptor
     * @return \PayPal\StructType\MerchantPullPaymentType
     */
    public function setSoftDescriptor($softDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softDescriptor, true), gettype($softDescriptor)), __LINE__);
        }
        $this->SoftDescriptor = $softDescriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MerchantPullPaymentType
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
