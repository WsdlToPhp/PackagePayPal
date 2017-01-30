<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExpressCheckoutDetailsResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetExpressCheckoutDetailsResponseDetailsType extends AbstractStructBase
{
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - documentation: The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations: 20 single-byte characters
     * @var string
     */
    public $Token;
    /**
     * The PayerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the payer
     * @var \PayPal\StructType\PayerInfoType
     */
    public $PayerInfo;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - documentation: A free-form field for your own use, as set by you in the Custom element of SetExpressCheckoutRequest. Character length and limitations: 256 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The InvoiceID
     * Meta informations extracted from the WSDL
     * - documentation: Your own invoice or tracking number, as set by you in the InvoiceID element of SetExpressCheckoutRequest. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The ContactPhone
     * Meta informations extracted from the WSDL
     * - documentation: Payer's contact telephone number. PayPal returns a contact telephone number only if your Merchant account profile settings require that the buyer enter one.
     * - minOccurs: 0
     * @var string
     */
    public $ContactPhone;
    /**
     * The BillingAgreementAcceptedStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $BillingAgreementAcceptedStatus;
    /**
     * The RedirectRequired
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedirectRequired;
    /**
     * The BillingAddress
     * Meta informations extracted from the WSDL
     * - documentation: Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in
     * GetExpressCheckoutDetailsResponse.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $BillingAddress;
    /**
     * The Note
     * Meta informations extracted from the WSDL
     * - documentation: Text note entered by the buyer in PayPal flow.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The CheckoutStatus
     * Meta informations extracted from the WSDL
     * - documentation: Returns the status of the EC checkout session. Values include 'PaymentActionNotInitiated', 'PaymentActionFailed', 'PaymentActionInProgress', 'PaymentCompleted'.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutStatus;
    /**
     * The PayPalAdjustment
     * Meta informations extracted from the WSDL
     * - documentation: PayPal may offer a discount or gift certificate to the buyer, which will be represented by a negativeamount. If the buyer has a negative balance, PayPal will add that amount to the current charges, which will be represented as a
     * positive amount.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $PayPalAdjustment;
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about the individual purchased items.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsType[]
     */
    public $PaymentDetails;
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
     * The IncentiveDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveDetailsType[]
     */
    public $IncentiveDetails;
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
     * The GiftReceiptEnable
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift receipt enable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftReceiptEnable;
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
     * The BuyerMarketingEmail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Buyer marketing email.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerMarketingEmail;
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
     * The PaymentRequestInfo
     * Meta informations extracted from the WSDL
     * - documentation: Contains payment request information about each bucket in the cart.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentRequestInfoType[]
     */
    public $PaymentRequestInfo;
    /**
     * The ExternalRememberMeStatusDetails
     * Meta informations extracted from the WSDL
     * - documentation: Response information resulting from opt-in operation or current login bypass status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalRememberMeStatusDetailsType
     */
    public $ExternalRememberMeStatusDetails;
    /**
     * The RefreshTokenStatusDetails
     * Meta informations extracted from the WSDL
     * - documentation: Response information resulting from opt-in operation or current login bypass status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RefreshTokenStatusDetailsType
     */
    public $RefreshTokenStatusDetails;
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information about the transaction
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentInfoType[]
     */
    public $PaymentInfo;
    /**
     * The CartChangeTolerance
     * Meta informations extracted from the WSDL
     * - documentation: Indicate the tolerance a cart can be changed. Possible values are NONE = cart cannot be changed (since financing was used and country is DE). FLEXIBLE = cart can be changed If this parameter does not exist, then assume cart can be
     * modified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CartChangeTolerance;
    /**
     * The InstrumentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Type of the payment instrument.
     * - minOccurs: 0
     * @var \PayPal\StructType\InstrumentDetailsType
     */
    public $InstrumentDetails;
    /**
     * Constructor method for GetExpressCheckoutDetailsResponseDetailsType
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setToken()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setPayerInfo()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setCustom()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setInvoiceID()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setContactPhone()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setBillingAgreementAcceptedStatus()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setRedirectRequired()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setBillingAddress()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setNote()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setCheckoutStatus()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setPayPalAdjustment()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setPaymentDetails()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setUserSelectedOptions()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setIncentiveDetails()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setGiftMessage()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setGiftReceiptEnable()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setGiftWrapName()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setGiftWrapAmount()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setBuyerMarketingEmail()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setSurveyQuestion()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setSurveyChoiceSelected()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setPaymentRequestInfo()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setExternalRememberMeStatusDetails()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setRefreshTokenStatusDetails()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setPaymentInfo()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setCartChangeTolerance()
     * @uses GetExpressCheckoutDetailsResponseDetailsType::setInstrumentDetails()
     * @param string $token
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @param string $custom
     * @param string $invoiceID
     * @param string $contactPhone
     * @param bool $billingAgreementAcceptedStatus
     * @param string $redirectRequired
     * @param \PayPal\StructType\AddressType $billingAddress
     * @param string $note
     * @param string $checkoutStatus
     * @param \PayPal\StructType\BasicAmountType $payPalAdjustment
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @param \PayPal\StructType\UserSelectedOptionType $userSelectedOptions
     * @param \PayPal\StructType\IncentiveDetailsType[] $incentiveDetails
     * @param string $giftMessage
     * @param string $giftReceiptEnable
     * @param string $giftWrapName
     * @param \PayPal\StructType\BasicAmountType $giftWrapAmount
     * @param string $buyerMarketingEmail
     * @param string $surveyQuestion
     * @param string[] $surveyChoiceSelected
     * @param \PayPal\StructType\PaymentRequestInfoType[] $paymentRequestInfo
     * @param \PayPal\StructType\ExternalRememberMeStatusDetailsType $externalRememberMeStatusDetails
     * @param \PayPal\StructType\RefreshTokenStatusDetailsType $refreshTokenStatusDetails
     * @param \PayPal\StructType\PaymentInfoType[] $paymentInfo
     * @param string $cartChangeTolerance
     * @param \PayPal\StructType\InstrumentDetailsType $instrumentDetails
     */
    public function __construct($token = null, \PayPal\StructType\PayerInfoType $payerInfo = null, $custom = null, $invoiceID = null, $contactPhone = null, $billingAgreementAcceptedStatus = null, $redirectRequired = null, \PayPal\StructType\AddressType $billingAddress = null, $note = null, $checkoutStatus = null, \PayPal\StructType\BasicAmountType $payPalAdjustment = null, array $paymentDetails = array(), \PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null, array $incentiveDetails = array(), $giftMessage = null, $giftReceiptEnable = null, $giftWrapName = null, \PayPal\StructType\BasicAmountType $giftWrapAmount = null, $buyerMarketingEmail = null, $surveyQuestion = null, array $surveyChoiceSelected = array(), array $paymentRequestInfo = array(), \PayPal\StructType\ExternalRememberMeStatusDetailsType $externalRememberMeStatusDetails = null, \PayPal\StructType\RefreshTokenStatusDetailsType $refreshTokenStatusDetails = null, array $paymentInfo = array(), $cartChangeTolerance = null, \PayPal\StructType\InstrumentDetailsType $instrumentDetails = null)
    {
        $this
            ->setToken($token)
            ->setPayerInfo($payerInfo)
            ->setCustom($custom)
            ->setInvoiceID($invoiceID)
            ->setContactPhone($contactPhone)
            ->setBillingAgreementAcceptedStatus($billingAgreementAcceptedStatus)
            ->setRedirectRequired($redirectRequired)
            ->setBillingAddress($billingAddress)
            ->setNote($note)
            ->setCheckoutStatus($checkoutStatus)
            ->setPayPalAdjustment($payPalAdjustment)
            ->setPaymentDetails($paymentDetails)
            ->setUserSelectedOptions($userSelectedOptions)
            ->setIncentiveDetails($incentiveDetails)
            ->setGiftMessage($giftMessage)
            ->setGiftReceiptEnable($giftReceiptEnable)
            ->setGiftWrapName($giftWrapName)
            ->setGiftWrapAmount($giftWrapAmount)
            ->setBuyerMarketingEmail($buyerMarketingEmail)
            ->setSurveyQuestion($surveyQuestion)
            ->setSurveyChoiceSelected($surveyChoiceSelected)
            ->setPaymentRequestInfo($paymentRequestInfo)
            ->setExternalRememberMeStatusDetails($externalRememberMeStatusDetails)
            ->setRefreshTokenStatusDetails($refreshTokenStatusDetails)
            ->setPaymentInfo($paymentInfo)
            ->setCartChangeTolerance($cartChangeTolerance)
            ->setInstrumentDetails($instrumentDetails);
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->Token = $token;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPayerInfo(\PayPal\StructType\PayerInfoType $payerInfo = null)
    {
        $this->PayerInfo = $payerInfo;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get InvoiceID value
     * @return string|null
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }
    /**
     * Set InvoiceID value
     * @param string $invoiceID
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setInvoiceID($invoiceID = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
        return $this;
    }
    /**
     * Get ContactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->ContactPhone;
    }
    /**
     * Set ContactPhone value
     * @param string $contactPhone
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setContactPhone($contactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($contactPhone) && !is_string($contactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactPhone)), __LINE__);
        }
        $this->ContactPhone = $contactPhone;
        return $this;
    }
    /**
     * Get BillingAgreementAcceptedStatus value
     * @return bool|null
     */
    public function getBillingAgreementAcceptedStatus()
    {
        return $this->BillingAgreementAcceptedStatus;
    }
    /**
     * Set BillingAgreementAcceptedStatus value
     * @param bool $billingAgreementAcceptedStatus
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setBillingAgreementAcceptedStatus($billingAgreementAcceptedStatus = null)
    {
        $this->BillingAgreementAcceptedStatus = $billingAgreementAcceptedStatus;
        return $this;
    }
    /**
     * Get RedirectRequired value
     * @return string|null
     */
    public function getRedirectRequired()
    {
        return $this->RedirectRequired;
    }
    /**
     * Set RedirectRequired value
     * @param string $redirectRequired
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setRedirectRequired($redirectRequired = null)
    {
        // validation for constraint: string
        if (!is_null($redirectRequired) && !is_string($redirectRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirectRequired)), __LINE__);
        }
        $this->RedirectRequired = $redirectRequired;
        return $this;
    }
    /**
     * Get BillingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param \PayPal\StructType\AddressType $billingAddress
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setBillingAddress(\PayPal\StructType\AddressType $billingAddress = null)
    {
        $this->BillingAddress = $billingAddress;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return string|null
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @param string $checkoutStatus
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setCheckoutStatus($checkoutStatus = null)
    {
        // validation for constraint: string
        if (!is_null($checkoutStatus) && !is_string($checkoutStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkoutStatus)), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        return $this;
    }
    /**
     * Get PayPalAdjustment value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getPayPalAdjustment()
    {
        return $this->PayPalAdjustment;
    }
    /**
     * Set PayPalAdjustment value
     * @param \PayPal\StructType\BasicAmountType $payPalAdjustment
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPayPalAdjustment(\PayPal\StructType\BasicAmountType $payPalAdjustment = null)
    {
        $this->PayPalAdjustment = $payPalAdjustment;
        return $this;
    }
    /**
     * Get PaymentDetails value
     * @return \PayPal\StructType\PaymentDetailsType[]|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPaymentDetails(array $paymentDetails = array())
    {
        foreach ($paymentDetails as $getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem instanceof \PayPal\StructType\PaymentDetailsType) {
                throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of \PayPal\StructType\PaymentDetailsType, "%s" given', is_object($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem) : gettype($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem)), __LINE__);
            }
        }
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Add item to PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType $item
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function addToPaymentDetails(\PayPal\StructType\PaymentDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of \PayPal\StructType\PaymentDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentDetails[] = $item;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setUserSelectedOptions(\PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null)
    {
        $this->UserSelectedOptions = $userSelectedOptions;
        return $this;
    }
    /**
     * Get IncentiveDetails value
     * @return \PayPal\StructType\IncentiveDetailsType[]|null
     */
    public function getIncentiveDetails()
    {
        return $this->IncentiveDetails;
    }
    /**
     * Set IncentiveDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveDetailsType[] $incentiveDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setIncentiveDetails(array $incentiveDetails = array())
    {
        foreach ($incentiveDetails as $getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem instanceof \PayPal\StructType\IncentiveDetailsType) {
                throw new \InvalidArgumentException(sprintf('The IncentiveDetails property can only contain items of \PayPal\StructType\IncentiveDetailsType, "%s" given', is_object($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem) : gettype($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem)), __LINE__);
            }
        }
        $this->IncentiveDetails = $incentiveDetails;
        return $this;
    }
    /**
     * Add item to IncentiveDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveDetailsType $item
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function addToIncentiveDetails(\PayPal\StructType\IncentiveDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveDetailsType) {
            throw new \InvalidArgumentException(sprintf('The IncentiveDetails property can only contain items of \PayPal\StructType\IncentiveDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IncentiveDetails[] = $item;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
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
     * Get GiftReceiptEnable value
     * @return string|null
     */
    public function getGiftReceiptEnable()
    {
        return $this->GiftReceiptEnable;
    }
    /**
     * Set GiftReceiptEnable value
     * @param string $giftReceiptEnable
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setGiftReceiptEnable($giftReceiptEnable = null)
    {
        // validation for constraint: string
        if (!is_null($giftReceiptEnable) && !is_string($giftReceiptEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftReceiptEnable)), __LINE__);
        }
        $this->GiftReceiptEnable = $giftReceiptEnable;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setGiftWrapAmount(\PayPal\StructType\BasicAmountType $giftWrapAmount = null)
    {
        $this->GiftWrapAmount = $giftWrapAmount;
        return $this;
    }
    /**
     * Get BuyerMarketingEmail value
     * @return string|null
     */
    public function getBuyerMarketingEmail()
    {
        return $this->BuyerMarketingEmail;
    }
    /**
     * Set BuyerMarketingEmail value
     * @param string $buyerMarketingEmail
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setBuyerMarketingEmail($buyerMarketingEmail = null)
    {
        // validation for constraint: string
        if (!is_null($buyerMarketingEmail) && !is_string($buyerMarketingEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerMarketingEmail)), __LINE__);
        }
        $this->BuyerMarketingEmail = $buyerMarketingEmail;
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
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
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setSurveyChoiceSelected(array $surveyChoiceSelected = array())
    {
        foreach ($surveyChoiceSelected as $getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem) {
            // validation for constraint: itemType
            if (!is_string($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem)) {
                throw new \InvalidArgumentException(sprintf('The SurveyChoiceSelected property can only contain items of string, "%s" given', is_object($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem) : gettype($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem)), __LINE__);
            }
        }
        $this->SurveyChoiceSelected = $surveyChoiceSelected;
        return $this;
    }
    /**
     * Add item to SurveyChoiceSelected value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
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
     * Get PaymentRequestInfo value
     * @return \PayPal\StructType\PaymentRequestInfoType[]|null
     */
    public function getPaymentRequestInfo()
    {
        return $this->PaymentRequestInfo;
    }
    /**
     * Set PaymentRequestInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentRequestInfoType[] $paymentRequestInfo
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPaymentRequestInfo(array $paymentRequestInfo = array())
    {
        foreach ($paymentRequestInfo as $getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem instanceof \PayPal\StructType\PaymentRequestInfoType) {
                throw new \InvalidArgumentException(sprintf('The PaymentRequestInfo property can only contain items of \PayPal\StructType\PaymentRequestInfoType, "%s" given', is_object($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem) : gettype($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem)), __LINE__);
            }
        }
        $this->PaymentRequestInfo = $paymentRequestInfo;
        return $this;
    }
    /**
     * Add item to PaymentRequestInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentRequestInfoType $item
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function addToPaymentRequestInfo(\PayPal\StructType\PaymentRequestInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentRequestInfoType) {
            throw new \InvalidArgumentException(sprintf('The PaymentRequestInfo property can only contain items of \PayPal\StructType\PaymentRequestInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentRequestInfo[] = $item;
        return $this;
    }
    /**
     * Get ExternalRememberMeStatusDetails value
     * @return \PayPal\StructType\ExternalRememberMeStatusDetailsType|null
     */
    public function getExternalRememberMeStatusDetails()
    {
        return $this->ExternalRememberMeStatusDetails;
    }
    /**
     * Set ExternalRememberMeStatusDetails value
     * @param \PayPal\StructType\ExternalRememberMeStatusDetailsType $externalRememberMeStatusDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setExternalRememberMeStatusDetails(\PayPal\StructType\ExternalRememberMeStatusDetailsType $externalRememberMeStatusDetails = null)
    {
        $this->ExternalRememberMeStatusDetails = $externalRememberMeStatusDetails;
        return $this;
    }
    /**
     * Get RefreshTokenStatusDetails value
     * @return \PayPal\StructType\RefreshTokenStatusDetailsType|null
     */
    public function getRefreshTokenStatusDetails()
    {
        return $this->RefreshTokenStatusDetails;
    }
    /**
     * Set RefreshTokenStatusDetails value
     * @param \PayPal\StructType\RefreshTokenStatusDetailsType $refreshTokenStatusDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setRefreshTokenStatusDetails(\PayPal\StructType\RefreshTokenStatusDetailsType $refreshTokenStatusDetails = null)
    {
        $this->RefreshTokenStatusDetails = $refreshTokenStatusDetails;
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return \PayPal\StructType\PaymentInfoType[]|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentInfoType[] $paymentInfo
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPaymentInfo(array $paymentInfo = array())
    {
        foreach ($paymentInfo as $getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem instanceof \PayPal\StructType\PaymentInfoType) {
                throw new \InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of \PayPal\StructType\PaymentInfoType, "%s" given', is_object($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem) : gettype($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem)), __LINE__);
            }
        }
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Add item to PaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentInfoType $item
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function addToPaymentInfo(\PayPal\StructType\PaymentInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentInfoType) {
            throw new \InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of \PayPal\StructType\PaymentInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentInfo[] = $item;
        return $this;
    }
    /**
     * Get CartChangeTolerance value
     * @return string|null
     */
    public function getCartChangeTolerance()
    {
        return $this->CartChangeTolerance;
    }
    /**
     * Set CartChangeTolerance value
     * @param string $cartChangeTolerance
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setCartChangeTolerance($cartChangeTolerance = null)
    {
        // validation for constraint: string
        if (!is_null($cartChangeTolerance) && !is_string($cartChangeTolerance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cartChangeTolerance)), __LINE__);
        }
        $this->CartChangeTolerance = $cartChangeTolerance;
        return $this;
    }
    /**
     * Get InstrumentDetails value
     * @return \PayPal\StructType\InstrumentDetailsType|null
     */
    public function getInstrumentDetails()
    {
        return $this->InstrumentDetails;
    }
    /**
     * Set InstrumentDetails value
     * @param \PayPal\StructType\InstrumentDetailsType $instrumentDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setInstrumentDetails(\PayPal\StructType\InstrumentDetailsType $instrumentDetails = null)
    {
        $this->InstrumentDetails = $instrumentDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
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
