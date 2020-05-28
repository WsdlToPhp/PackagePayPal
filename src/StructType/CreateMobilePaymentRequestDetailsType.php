<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMobilePaymentRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateMobilePaymentRequestDetailsType extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - documentation: Type of the payment Required
     * @var string
     */
    public $PaymentType;
    /**
     * The PaymentAction
     * Meta information extracted from the WSDL
     * - documentation: How you want to obtain payment. Defaults to Sale. Optional Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for
     * which you are requesting payment.
     * @var string
     */
    public $PaymentAction;
    /**
     * The SenderPhone
     * Meta information extracted from the WSDL
     * - documentation: Phone number of the user making the payment. Required
     * @var \PayPal\StructType\PhoneNumberType
     */
    public $SenderPhone;
    /**
     * The RecipientType
     * Meta information extracted from the WSDL
     * - documentation: Type of recipient specified, i.e., phone number or email address Required
     * @var string
     */
    public $RecipientType;
    /**
     * The RecipientEmail
     * Meta information extracted from the WSDL
     * - documentation: Email address of the recipient
     * - minOccurs: 0
     * @var string
     */
    public $RecipientEmail;
    /**
     * The RecipientPhone
     * Meta information extracted from the WSDL
     * - documentation: Phone number of the recipipent Required
     * - minOccurs: 0
     * @var \PayPal\StructType\PhoneNumberType
     */
    public $RecipientPhone;
    /**
     * The ItemAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of item before tax and shipping
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemAmount;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: The tax charged on the transactionTax Optional
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
     * The ItemName
     * Meta information extracted from the WSDL
     * - documentation: Name of the item being ordered Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ItemName;
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: SKU of the item being ordered Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Memo entered by sender in PayPal Website Payments note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The CustomID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID for the order. Required for non-P2P transactions Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $CustomID;
    /**
     * The SharePhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the sender's phone number will be shared with recipient Optional
     * - minOccurs: 0
     * @var int
     */
    public $SharePhoneNumber;
    /**
     * The ShareHomeAddress
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the sender's home address will be shared with recipient Optional
     * - minOccurs: 0
     * @var int
     */
    public $ShareHomeAddress;
    /**
     * Constructor method for CreateMobilePaymentRequestDetailsType
     * @uses CreateMobilePaymentRequestDetailsType::setPaymentType()
     * @uses CreateMobilePaymentRequestDetailsType::setPaymentAction()
     * @uses CreateMobilePaymentRequestDetailsType::setSenderPhone()
     * @uses CreateMobilePaymentRequestDetailsType::setRecipientType()
     * @uses CreateMobilePaymentRequestDetailsType::setRecipientEmail()
     * @uses CreateMobilePaymentRequestDetailsType::setRecipientPhone()
     * @uses CreateMobilePaymentRequestDetailsType::setItemAmount()
     * @uses CreateMobilePaymentRequestDetailsType::setTax()
     * @uses CreateMobilePaymentRequestDetailsType::setShipping()
     * @uses CreateMobilePaymentRequestDetailsType::setItemName()
     * @uses CreateMobilePaymentRequestDetailsType::setItemNumber()
     * @uses CreateMobilePaymentRequestDetailsType::setNote()
     * @uses CreateMobilePaymentRequestDetailsType::setCustomID()
     * @uses CreateMobilePaymentRequestDetailsType::setSharePhoneNumber()
     * @uses CreateMobilePaymentRequestDetailsType::setShareHomeAddress()
     * @param string $paymentType
     * @param string $paymentAction
     * @param \PayPal\StructType\PhoneNumberType $senderPhone
     * @param string $recipientType
     * @param string $recipientEmail
     * @param \PayPal\StructType\PhoneNumberType $recipientPhone
     * @param \PayPal\StructType\BasicAmountType $itemAmount
     * @param \PayPal\StructType\BasicAmountType $tax
     * @param \PayPal\StructType\BasicAmountType $shipping
     * @param string $itemName
     * @param string $itemNumber
     * @param string $note
     * @param string $customID
     * @param int $sharePhoneNumber
     * @param int $shareHomeAddress
     */
    public function __construct($paymentType = null, $paymentAction = null, \PayPal\StructType\PhoneNumberType $senderPhone = null, $recipientType = null, $recipientEmail = null, \PayPal\StructType\PhoneNumberType $recipientPhone = null, \PayPal\StructType\BasicAmountType $itemAmount = null, \PayPal\StructType\BasicAmountType $tax = null, \PayPal\StructType\BasicAmountType $shipping = null, $itemName = null, $itemNumber = null, $note = null, $customID = null, $sharePhoneNumber = null, $shareHomeAddress = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPaymentAction($paymentAction)
            ->setSenderPhone($senderPhone)
            ->setRecipientType($recipientType)
            ->setRecipientEmail($recipientEmail)
            ->setRecipientPhone($recipientPhone)
            ->setItemAmount($itemAmount)
            ->setTax($tax)
            ->setShipping($shipping)
            ->setItemName($itemName)
            ->setItemNumber($itemNumber)
            ->setNote($note)
            ->setCustomID($customID)
            ->setSharePhoneNumber($sharePhoneNumber)
            ->setShareHomeAddress($shareHomeAddress);
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
     * @uses \PayPal\EnumType\MobilePaymentCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MobilePaymentCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MobilePaymentCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MobilePaymentCodeType', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \PayPal\EnumType\MobilePaymentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get PaymentAction value
     * @return string|null
     */
    public function getPaymentAction()
    {
        return $this->PaymentAction;
    }
    /**
     * Set PaymentAction value
     * @uses \PayPal\EnumType\PaymentActionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentAction
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setPaymentAction($paymentAction = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentActionCodeType::valueIsValid($paymentAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentActionCodeType', is_array($paymentAction) ? implode(', ', $paymentAction) : var_export($paymentAction, true), implode(', ', \PayPal\EnumType\PaymentActionCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAction = $paymentAction;
        return $this;
    }
    /**
     * Get SenderPhone value
     * @return \PayPal\StructType\PhoneNumberType|null
     */
    public function getSenderPhone()
    {
        return $this->SenderPhone;
    }
    /**
     * Set SenderPhone value
     * @param \PayPal\StructType\PhoneNumberType $senderPhone
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setSenderPhone(\PayPal\StructType\PhoneNumberType $senderPhone = null)
    {
        $this->SenderPhone = $senderPhone;
        return $this;
    }
    /**
     * Get RecipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    /**
     * Set RecipientType value
     * @uses \PayPal\EnumType\MobileRecipientCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MobileRecipientCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $recipientType
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setRecipientType($recipientType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MobileRecipientCodeType::valueIsValid($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MobileRecipientCodeType', is_array($recipientType) ? implode(', ', $recipientType) : var_export($recipientType, true), implode(', ', \PayPal\EnumType\MobileRecipientCodeType::getValidValues())), __LINE__);
        }
        $this->RecipientType = $recipientType;
        return $this;
    }
    /**
     * Get RecipientEmail value
     * @return string|null
     */
    public function getRecipientEmail()
    {
        return $this->RecipientEmail;
    }
    /**
     * Set RecipientEmail value
     * @param string $recipientEmail
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setRecipientEmail($recipientEmail = null)
    {
        // validation for constraint: string
        if (!is_null($recipientEmail) && !is_string($recipientEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientEmail, true), gettype($recipientEmail)), __LINE__);
        }
        $this->RecipientEmail = $recipientEmail;
        return $this;
    }
    /**
     * Get RecipientPhone value
     * @return \PayPal\StructType\PhoneNumberType|null
     */
    public function getRecipientPhone()
    {
        return $this->RecipientPhone;
    }
    /**
     * Set RecipientPhone value
     * @param \PayPal\StructType\PhoneNumberType $recipientPhone
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setRecipientPhone(\PayPal\StructType\PhoneNumberType $recipientPhone = null)
    {
        $this->RecipientPhone = $recipientPhone;
        return $this;
    }
    /**
     * Get ItemAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getItemAmount()
    {
        return $this->ItemAmount;
    }
    /**
     * Set ItemAmount value
     * @param \PayPal\StructType\BasicAmountType $itemAmount
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setItemAmount(\PayPal\StructType\BasicAmountType $itemAmount = null)
    {
        $this->ItemAmount = $itemAmount;
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
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
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
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setShipping(\PayPal\StructType\BasicAmountType $shipping = null)
    {
        $this->Shipping = $shipping;
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
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
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
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
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
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Get CustomID value
     * @return string|null
     */
    public function getCustomID()
    {
        return $this->CustomID;
    }
    /**
     * Set CustomID value
     * @param string $customID
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setCustomID($customID = null)
    {
        // validation for constraint: string
        if (!is_null($customID) && !is_string($customID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customID, true), gettype($customID)), __LINE__);
        }
        $this->CustomID = $customID;
        return $this;
    }
    /**
     * Get SharePhoneNumber value
     * @return int|null
     */
    public function getSharePhoneNumber()
    {
        return $this->SharePhoneNumber;
    }
    /**
     * Set SharePhoneNumber value
     * @param int $sharePhoneNumber
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setSharePhoneNumber($sharePhoneNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sharePhoneNumber) && !(is_int($sharePhoneNumber) || ctype_digit($sharePhoneNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sharePhoneNumber, true), gettype($sharePhoneNumber)), __LINE__);
        }
        $this->SharePhoneNumber = $sharePhoneNumber;
        return $this;
    }
    /**
     * Get ShareHomeAddress value
     * @return int|null
     */
    public function getShareHomeAddress()
    {
        return $this->ShareHomeAddress;
    }
    /**
     * Set ShareHomeAddress value
     * @param int $shareHomeAddress
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function setShareHomeAddress($shareHomeAddress = null)
    {
        // validation for constraint: int
        if (!is_null($shareHomeAddress) && !(is_int($shareHomeAddress) || ctype_digit($shareHomeAddress))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shareHomeAddress, true), gettype($shareHomeAddress)), __LINE__);
        }
        $this->ShareHomeAddress = $shareHomeAddress;
        return $this;
    }
}
