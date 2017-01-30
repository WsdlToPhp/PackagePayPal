<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentTransactionType Information about a PayPal payment from the seller side
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentTransactionType extends AbstractStructBase
{
    /**
     * The ReceiverInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the recipient of the payment
     * @var \PayPal\StructType\ReceiverInfoType
     */
    public $ReceiverInfo;
    /**
     * The PayerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the payer
     * @var \PayPal\StructType\PayerInfoType
     */
    public $PayerInfo;
    /**
     * The TPLReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: This field is for holding ReferenceId for shippment sent from Merchant to the 3rd Party
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TPLReferenceID;
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the transaction
     * @var \PayPal\StructType\PaymentInfoType
     */
    public $PaymentInfo;
    /**
     * The PaymentItemInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about an individual item in the transaction
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentItemInfoType
     */
    public $PaymentItemInfo;
    /**
     * The OfferCouponInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about an individual Offer and Coupon information in the transaction
     * - minOccurs: 0
     * @var \PayPal\StructType\OfferCouponInfoType
     */
    public $OfferCouponInfo;
    /**
     * The SecondaryAddress
     * Meta informations extracted from the WSDL
     * - documentation: Information about Secondary Address
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $SecondaryAddress;
    /**
     * The UserSelectedOptions
     * Meta informations extracted from the WSDL
     * - documentation: Information about the user selected options.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\UserSelectedOptionType
     */
    public $UserSelectedOptions;
    /**
     * The GiftMessage
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift message.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftMessage;
    /**
     * The GiftReceipt
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift receipt.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftReceipt;
    /**
     * The GiftWrapName
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift Wrap name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftWrapName;
    /**
     * The GiftWrapAmount
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift Wrap amount.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $GiftWrapAmount;
    /**
     * The BuyerEmailOptIn
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Buyer email.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmailOptIn;
    /**
     * The SurveyQuestion
     * Meta informations extracted from the WSDL
     * - documentation: Information about the survey question.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SurveyQuestion;
    /**
     * The SurveyChoiceSelected
     * Meta informations extracted from the WSDL
     * - documentation: Information about the survey choice selected by the user.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SurveyChoiceSelected;
    /**
     * Constructor method for PaymentTransactionType
     * @uses PaymentTransactionType::setReceiverInfo()
     * @uses PaymentTransactionType::setPayerInfo()
     * @uses PaymentTransactionType::setTPLReferenceID()
     * @uses PaymentTransactionType::setPaymentInfo()
     * @uses PaymentTransactionType::setPaymentItemInfo()
     * @uses PaymentTransactionType::setOfferCouponInfo()
     * @uses PaymentTransactionType::setSecondaryAddress()
     * @uses PaymentTransactionType::setUserSelectedOptions()
     * @uses PaymentTransactionType::setGiftMessage()
     * @uses PaymentTransactionType::setGiftReceipt()
     * @uses PaymentTransactionType::setGiftWrapName()
     * @uses PaymentTransactionType::setGiftWrapAmount()
     * @uses PaymentTransactionType::setBuyerEmailOptIn()
     * @uses PaymentTransactionType::setSurveyQuestion()
     * @uses PaymentTransactionType::setSurveyChoiceSelected()
     * @param \PayPal\StructType\ReceiverInfoType $receiverInfo
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @param string $tPLReferenceID
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @param \PayPal\StructType\PaymentItemInfoType $paymentItemInfo
     * @param \PayPal\StructType\OfferCouponInfoType $offerCouponInfo
     * @param \PayPal\StructType\AddressType $secondaryAddress
     * @param \PayPal\StructType\UserSelectedOptionType $userSelectedOptions
     * @param string $giftMessage
     * @param string $giftReceipt
     * @param string $giftWrapName
     * @param \PayPal\StructType\BasicAmountType $giftWrapAmount
     * @param string $buyerEmailOptIn
     * @param string $surveyQuestion
     * @param string[] $surveyChoiceSelected
     */
    public function __construct(\PayPal\StructType\ReceiverInfoType $receiverInfo = null, \PayPal\StructType\PayerInfoType $payerInfo = null, $tPLReferenceID = null, \PayPal\StructType\PaymentInfoType $paymentInfo = null, \PayPal\StructType\PaymentItemInfoType $paymentItemInfo = null, \PayPal\StructType\OfferCouponInfoType $offerCouponInfo = null, \PayPal\StructType\AddressType $secondaryAddress = null, \PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null, $giftMessage = null, $giftReceipt = null, $giftWrapName = null, \PayPal\StructType\BasicAmountType $giftWrapAmount = null, $buyerEmailOptIn = null, $surveyQuestion = null, array $surveyChoiceSelected = array())
    {
        $this
            ->setReceiverInfo($receiverInfo)
            ->setPayerInfo($payerInfo)
            ->setTPLReferenceID($tPLReferenceID)
            ->setPaymentInfo($paymentInfo)
            ->setPaymentItemInfo($paymentItemInfo)
            ->setOfferCouponInfo($offerCouponInfo)
            ->setSecondaryAddress($secondaryAddress)
            ->setUserSelectedOptions($userSelectedOptions)
            ->setGiftMessage($giftMessage)
            ->setGiftReceipt($giftReceipt)
            ->setGiftWrapName($giftWrapName)
            ->setGiftWrapAmount($giftWrapAmount)
            ->setBuyerEmailOptIn($buyerEmailOptIn)
            ->setSurveyQuestion($surveyQuestion)
            ->setSurveyChoiceSelected($surveyChoiceSelected);
    }
    /**
     * Get ReceiverInfo value
     * @return \PayPal\StructType\ReceiverInfoType|null
     */
    public function getReceiverInfo()
    {
        return $this->ReceiverInfo;
    }
    /**
     * Set ReceiverInfo value
     * @param \PayPal\StructType\ReceiverInfoType $receiverInfo
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setReceiverInfo(\PayPal\StructType\ReceiverInfoType $receiverInfo = null)
    {
        $this->ReceiverInfo = $receiverInfo;
        return $this;
    }
    /**
     * Get PayerInfo value
     * @return \PayPal\StructType\PayerInfoType|null
     */
    public function getPayerInfo()
    {
        return $this->PayerInfo;
    }
    /**
     * Set PayerInfo value
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setPayerInfo(\PayPal\StructType\PayerInfoType $payerInfo = null)
    {
        $this->PayerInfo = $payerInfo;
        return $this;
    }
    /**
     * Get TPLReferenceID value
     * @return string|null
     */
    public function getTPLReferenceID()
    {
        return $this->TPLReferenceID;
    }
    /**
     * Set TPLReferenceID value
     * @param string $tPLReferenceID
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setTPLReferenceID($tPLReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($tPLReferenceID) && !is_string($tPLReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tPLReferenceID)), __LINE__);
        }
        $this->TPLReferenceID = $tPLReferenceID;
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return \PayPal\StructType\PaymentInfoType|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setPaymentInfo(\PayPal\StructType\PaymentInfoType $paymentInfo = null)
    {
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Get PaymentItemInfo value
     * @return \PayPal\StructType\PaymentItemInfoType|null
     */
    public function getPaymentItemInfo()
    {
        return $this->PaymentItemInfo;
    }
    /**
     * Set PaymentItemInfo value
     * @param \PayPal\StructType\PaymentItemInfoType $paymentItemInfo
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setPaymentItemInfo(\PayPal\StructType\PaymentItemInfoType $paymentItemInfo = null)
    {
        $this->PaymentItemInfo = $paymentItemInfo;
        return $this;
    }
    /**
     * Get OfferCouponInfo value
     * @return \PayPal\StructType\OfferCouponInfoType|null
     */
    public function getOfferCouponInfo()
    {
        return $this->OfferCouponInfo;
    }
    /**
     * Set OfferCouponInfo value
     * @param \PayPal\StructType\OfferCouponInfoType $offerCouponInfo
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setOfferCouponInfo(\PayPal\StructType\OfferCouponInfoType $offerCouponInfo = null)
    {
        $this->OfferCouponInfo = $offerCouponInfo;
        return $this;
    }
    /**
     * Get SecondaryAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getSecondaryAddress()
    {
        return $this->SecondaryAddress;
    }
    /**
     * Set SecondaryAddress value
     * @param \PayPal\StructType\AddressType $secondaryAddress
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setSecondaryAddress(\PayPal\StructType\AddressType $secondaryAddress = null)
    {
        $this->SecondaryAddress = $secondaryAddress;
        return $this;
    }
    /**
     * Get UserSelectedOptions value
     * @return \PayPal\StructType\UserSelectedOptionType|null
     */
    public function getUserSelectedOptions()
    {
        return $this->UserSelectedOptions;
    }
    /**
     * Set UserSelectedOptions value
     * @param \PayPal\StructType\UserSelectedOptionType $userSelectedOptions
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setUserSelectedOptions(\PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null)
    {
        $this->UserSelectedOptions = $userSelectedOptions;
        return $this;
    }
    /**
     * Get GiftMessage value
     * @return string|null
     */
    public function getGiftMessage()
    {
        return $this->GiftMessage;
    }
    /**
     * Set GiftMessage value
     * @param string $giftMessage
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setGiftMessage($giftMessage = null)
    {
        // validation for constraint: string
        if (!is_null($giftMessage) && !is_string($giftMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftMessage)), __LINE__);
        }
        $this->GiftMessage = $giftMessage;
        return $this;
    }
    /**
     * Get GiftReceipt value
     * @return string|null
     */
    public function getGiftReceipt()
    {
        return $this->GiftReceipt;
    }
    /**
     * Set GiftReceipt value
     * @param string $giftReceipt
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setGiftReceipt($giftReceipt = null)
    {
        // validation for constraint: string
        if (!is_null($giftReceipt) && !is_string($giftReceipt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftReceipt)), __LINE__);
        }
        $this->GiftReceipt = $giftReceipt;
        return $this;
    }
    /**
     * Get GiftWrapName value
     * @return string|null
     */
    public function getGiftWrapName()
    {
        return $this->GiftWrapName;
    }
    /**
     * Set GiftWrapName value
     * @param string $giftWrapName
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setGiftWrapName($giftWrapName = null)
    {
        // validation for constraint: string
        if (!is_null($giftWrapName) && !is_string($giftWrapName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftWrapName)), __LINE__);
        }
        $this->GiftWrapName = $giftWrapName;
        return $this;
    }
    /**
     * Get GiftWrapAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getGiftWrapAmount()
    {
        return $this->GiftWrapAmount;
    }
    /**
     * Set GiftWrapAmount value
     * @param \PayPal\StructType\BasicAmountType $giftWrapAmount
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setGiftWrapAmount(\PayPal\StructType\BasicAmountType $giftWrapAmount = null)
    {
        $this->GiftWrapAmount = $giftWrapAmount;
        return $this;
    }
    /**
     * Get BuyerEmailOptIn value
     * @return string|null
     */
    public function getBuyerEmailOptIn()
    {
        return $this->BuyerEmailOptIn;
    }
    /**
     * Set BuyerEmailOptIn value
     * @param string $buyerEmailOptIn
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setBuyerEmailOptIn($buyerEmailOptIn = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmailOptIn) && !is_string($buyerEmailOptIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerEmailOptIn)), __LINE__);
        }
        $this->BuyerEmailOptIn = $buyerEmailOptIn;
        return $this;
    }
    /**
     * Get SurveyQuestion value
     * @return string|null
     */
    public function getSurveyQuestion()
    {
        return $this->SurveyQuestion;
    }
    /**
     * Set SurveyQuestion value
     * @param string $surveyQuestion
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setSurveyQuestion($surveyQuestion = null)
    {
        // validation for constraint: string
        if (!is_null($surveyQuestion) && !is_string($surveyQuestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyQuestion)), __LINE__);
        }
        $this->SurveyQuestion = $surveyQuestion;
        return $this;
    }
    /**
     * Get SurveyChoiceSelected value
     * @return string[]|null
     */
    public function getSurveyChoiceSelected()
    {
        return $this->SurveyChoiceSelected;
    }
    /**
     * Set SurveyChoiceSelected value
     * @throws \InvalidArgumentException
     * @param string[] $surveyChoiceSelected
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function setSurveyChoiceSelected(array $surveyChoiceSelected = array())
    {
        foreach ($surveyChoiceSelected as $paymentTransactionTypeSurveyChoiceSelectedItem) {
            // validation for constraint: itemType
            if (!is_string($paymentTransactionTypeSurveyChoiceSelectedItem)) {
                throw new \InvalidArgumentException(sprintf('The SurveyChoiceSelected property can only contain items of string, "%s" given', is_object($paymentTransactionTypeSurveyChoiceSelectedItem) ? get_class($paymentTransactionTypeSurveyChoiceSelectedItem) : gettype($paymentTransactionTypeSurveyChoiceSelectedItem)), __LINE__);
            }
        }
        $this->SurveyChoiceSelected = $surveyChoiceSelected;
        return $this;
    }
    /**
     * Add item to SurveyChoiceSelected value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\PaymentTransactionType
     */
    public function addToSurveyChoiceSelected($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SurveyChoiceSelected property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyChoiceSelected[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentTransactionType
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
