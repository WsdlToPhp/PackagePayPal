<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoNonReferencedCreditRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoNonReferencedCreditRequestDetailsType extends AbstractStructBase
{
    /**
     * The Amount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The NetAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $NetAmount;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxAmount;
    /**
     * The ShippingAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingAmount;
    /**
     * The CreditCard
     * @var \PayPal\StructType\CreditCardDetailsType
     */
    public $CreditCard;
    /**
     * The ReceiverEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReceiverEmail;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for DoNonReferencedCreditRequestDetailsType
     * @uses DoNonReferencedCreditRequestDetailsType::setAmount()
     * @uses DoNonReferencedCreditRequestDetailsType::setNetAmount()
     * @uses DoNonReferencedCreditRequestDetailsType::setTaxAmount()
     * @uses DoNonReferencedCreditRequestDetailsType::setShippingAmount()
     * @uses DoNonReferencedCreditRequestDetailsType::setCreditCard()
     * @uses DoNonReferencedCreditRequestDetailsType::setReceiverEmail()
     * @uses DoNonReferencedCreditRequestDetailsType::setComment()
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param \PayPal\StructType\BasicAmountType $netAmount
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @param string $receiverEmail
     * @param string $comment
     */
    public function __construct(\PayPal\StructType\BasicAmountType $amount = null, \PayPal\StructType\BasicAmountType $netAmount = null, \PayPal\StructType\BasicAmountType $taxAmount = null, \PayPal\StructType\BasicAmountType $shippingAmount = null, \PayPal\StructType\CreditCardDetailsType $creditCard = null, $receiverEmail = null, $comment = null)
    {
        $this
            ->setAmount($amount)
            ->setNetAmount($netAmount)
            ->setTaxAmount($taxAmount)
            ->setShippingAmount($shippingAmount)
            ->setCreditCard($creditCard)
            ->setReceiverEmail($receiverEmail)
            ->setComment($comment);
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
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get NetAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param \PayPal\StructType\BasicAmountType $netAmount
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setNetAmount(\PayPal\StructType\BasicAmountType $netAmount = null)
    {
        $this->NetAmount = $netAmount;
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
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setTaxAmount(\PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
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
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setShippingAmount(\PayPal\StructType\BasicAmountType $shippingAmount = null)
    {
        $this->ShippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \PayPal\StructType\CreditCardDetailsType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setCreditCard(\PayPal\StructType\CreditCardDetailsType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get ReceiverEmail value
     * @return string|null
     */
    public function getReceiverEmail()
    {
        return $this->ReceiverEmail;
    }
    /**
     * Set ReceiverEmail value
     * @param string $receiverEmail
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setReceiverEmail($receiverEmail = null)
    {
        // validation for constraint: string
        if (!is_null($receiverEmail) && !is_string($receiverEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverEmail, true), gettype($receiverEmail)), __LINE__);
        }
        $this->ReceiverEmail = $receiverEmail;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
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
