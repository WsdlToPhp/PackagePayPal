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
     * Meta information extracted from the WSDL
     * - documentation: The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Character length and limitations: 20 single-byte characters
     * - base: xs:string
     * @var string
     */
    public $Token;
    /**
     * The PayerInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the payer
     * @var \PayPal\StructType\PayerInfoType
     */
    public $PayerInfo;
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: A free-form field for your own use, as set by you in the Custom element of SetExpressCheckoutRequest. Character length and limitations: 256 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Your own invoice or tracking number, as set by you in the InvoiceID element of SetExpressCheckoutRequest. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The ContactPhone
     * Meta information extracted from the WSDL
     * - documentation: Payer's contact telephone number. PayPal returns a contact telephone number only if your Merchant account profile settings require that the buyer enter one.
     * - minOccurs: 0
     * @var string
     */
    public $ContactPhone;
    /**
     * The BillingAgreementAcceptedStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $BillingAgreementAcceptedStatus;
    /**
     * The RedirectRequired
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedirectRequired;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - documentation: Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in
     * GetExpressCheckoutDetailsResponse.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $BillingAddress;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Text note entered by the buyer in PayPal flow.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: Returns the status of the EC checkout session. Values include 'PaymentActionNotInitiated', 'PaymentActionFailed', 'PaymentActionInProgress', 'PaymentCompleted'.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutStatus;
    /**
     * The PayPalAdjustment
     * Meta information extracted from the WSDL
     * - documentation: PayPal may offer a discount or gift certificate to the buyer, which will be represented by a negativeamount. If the buyer has a negative balance, PayPal will add that amount to the current charges, which will be represented as a
     * positive amount.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $PayPalAdjustment;
    /**
     * The PaymentDetails
     * Meta information extracted from the WSDL
     * - documentation: Information about the individual purchased items.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsType[]
     */
    public $PaymentDetails;
    /**
     * The UserSelectedOptions
     * Meta information extracted from the WSDL
     * - documentation: Information about the user selected options.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\UserSelectedOptionType
     */
    public $UserSelectedOptions;
    /**
     * The IncentiveDetails
     * Meta information extracted from the WSDL
     * - documentation: Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveDetailsType[]
     */
    public $IncentiveDetails;
    /**
     * The GiftMessage
     * Meta information extracted from the WSDL
     * - documentation: Information about the Gift message.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftMessage;
    /**
     * The GiftReceiptEnable
     * Meta information extracted from the WSDL
     * - documentation: Information about the Gift receipt enable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftReceiptEnable;
    /**
     * The GiftWrapName
     * Meta information extracted from the WSDL
     * - documentation: Information about the Gift Wrap name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftWrapName;
    /**
     * The GiftWrapAmount
     * Meta information extracted from the WSDL
     * - documentation: Information about the Gift Wrap amount.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $GiftWrapAmount;
    /**
     * The BuyerMarketingEmail
     * Meta information extracted from the WSDL
     * - documentation: Information about the Buyer marketing email.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerMarketingEmail;
    /**
     * The SurveyQuestion
     * Meta information extracted from the WSDL
     * - documentation: Information about the survey question.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SurveyQuestion;
    /**
     * The SurveyChoiceSelected
     * Meta information extracted from the WSDL
     * - documentation: Information about the survey choice selected by the user.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SurveyChoiceSelected;
    /**
     * The PaymentRequestInfo
     * Meta information extracted from the WSDL
     * - documentation: Contains payment request information about each bucket in the cart.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentRequestInfoType[]
     */
    public $PaymentRequestInfo;
    /**
     * The ExternalRememberMeStatusDetails
     * Meta information extracted from the WSDL
     * - documentation: Response information resulting from opt-in operation or current login bypass status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalRememberMeStatusDetailsType
     */
    public $ExternalRememberMeStatusDetails;
    /**
     * The RefreshTokenStatusDetails
     * Meta information extracted from the WSDL
     * - documentation: Response information resulting from opt-in operation or current login bypass status.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\RefreshTokenStatusDetailsType
     */
    public $RefreshTokenStatusDetails;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the transaction
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentInfoType[]
     */
    public $PaymentInfo;
    /**
     * The CartChangeTolerance
     * Meta information extracted from the WSDL
     * - documentation: Indicate the tolerance a cart can be changed. Possible values are NONE = cart cannot be changed (since financing was used and country is DE). FLEXIBLE = cart can be changed If this parameter does not exist, then assume cart can be
     * modified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CartChangeTolerance;
    /**
     * The InstrumentDetails
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom, true), gettype($custom)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceID, true), gettype($invoiceID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPhone, true), gettype($contactPhone)), __LINE__);
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
        // validation for constraint: boolean
        if (!is_null($billingAgreementAcceptedStatus) && !is_bool($billingAgreementAcceptedStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($billingAgreementAcceptedStatus, true), gettype($billingAgreementAcceptedStatus)), __LINE__);
        }
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirectRequired, true), gettype($redirectRequired)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkoutStatus, true), gettype($checkoutStatus)), __LINE__);
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
     * This method is responsible for validating the values passed to the setPaymentDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentDetailsForArrayConstraintsFromSetPaymentDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem instanceof \PayPal\StructType\PaymentDetailsType) {
                $invalidValues[] = is_object($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem) : sprintf('%s(%s)', gettype($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem), var_export($getExpressCheckoutDetailsResponseDetailsTypePaymentDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentDetails property can only contain items of type \PayPal\StructType\PaymentDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPaymentDetails(array $paymentDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentDetailsArrayErrorMessage = self::validatePaymentDetailsForArrayConstraintsFromSetPaymentDetails($paymentDetails))) {
            throw new \InvalidArgumentException($paymentDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentDetails) && count($paymentDetails) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentDetails)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of type \PayPal\StructType\PaymentDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentDetails) && count($this->PaymentDetails) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentDetails)), __LINE__);
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
     * This method is responsible for validating the values passed to the setIncentiveDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncentiveDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncentiveDetailsForArrayConstraintsFromSetIncentiveDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem instanceof \PayPal\StructType\IncentiveDetailsType) {
                $invalidValues[] = is_object($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem) : sprintf('%s(%s)', gettype($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem), var_export($getExpressCheckoutDetailsResponseDetailsTypeIncentiveDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncentiveDetails property can only contain items of type \PayPal\StructType\IncentiveDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set IncentiveDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveDetailsType[] $incentiveDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setIncentiveDetails(array $incentiveDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($incentiveDetailsArrayErrorMessage = self::validateIncentiveDetailsForArrayConstraintsFromSetIncentiveDetails($incentiveDetails))) {
            throw new \InvalidArgumentException($incentiveDetailsArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The IncentiveDetails property can only contain items of type \PayPal\StructType\IncentiveDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($giftMessage, true), gettype($giftMessage)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($giftReceiptEnable, true), gettype($giftReceiptEnable)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($giftWrapName, true), gettype($giftWrapName)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerMarketingEmail, true), gettype($buyerMarketingEmail)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surveyQuestion, true), gettype($surveyQuestion)), __LINE__);
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
     * This method is responsible for validating the values passed to the setSurveyChoiceSelected method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSurveyChoiceSelected method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSurveyChoiceSelectedForArrayConstraintsFromSetSurveyChoiceSelected(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem) {
            // validation for constraint: itemType
            if (!is_string($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem)) {
                $invalidValues[] = is_object($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem) : sprintf('%s(%s)', gettype($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem), var_export($getExpressCheckoutDetailsResponseDetailsTypeSurveyChoiceSelectedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SurveyChoiceSelected property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SurveyChoiceSelected value
     * @throws \InvalidArgumentException
     * @param string[] $surveyChoiceSelected
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setSurveyChoiceSelected(array $surveyChoiceSelected = array())
    {
        // validation for constraint: array
        if ('' !== ($surveyChoiceSelectedArrayErrorMessage = self::validateSurveyChoiceSelectedForArrayConstraintsFromSetSurveyChoiceSelected($surveyChoiceSelected))) {
            throw new \InvalidArgumentException($surveyChoiceSelectedArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The SurveyChoiceSelected property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * This method is responsible for validating the values passed to the setPaymentRequestInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentRequestInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentRequestInfoForArrayConstraintsFromSetPaymentRequestInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem instanceof \PayPal\StructType\PaymentRequestInfoType) {
                $invalidValues[] = is_object($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem) : sprintf('%s(%s)', gettype($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem), var_export($getExpressCheckoutDetailsResponseDetailsTypePaymentRequestInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentRequestInfo property can only contain items of type \PayPal\StructType\PaymentRequestInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentRequestInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentRequestInfoType[] $paymentRequestInfo
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPaymentRequestInfo(array $paymentRequestInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentRequestInfoArrayErrorMessage = self::validatePaymentRequestInfoForArrayConstraintsFromSetPaymentRequestInfo($paymentRequestInfo))) {
            throw new \InvalidArgumentException($paymentRequestInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentRequestInfo) && count($paymentRequestInfo) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentRequestInfo)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PaymentRequestInfo property can only contain items of type \PayPal\StructType\PaymentRequestInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentRequestInfo) && count($this->PaymentRequestInfo) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentRequestInfo)), __LINE__);
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
     * This method is responsible for validating the values passed to the setPaymentInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentInfoForArrayConstraintsFromSetPaymentInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem) {
            // validation for constraint: itemType
            if (!$getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem instanceof \PayPal\StructType\PaymentInfoType) {
                $invalidValues[] = is_object($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem) ? get_class($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem) : sprintf('%s(%s)', gettype($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem), var_export($getExpressCheckoutDetailsResponseDetailsTypePaymentInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentInfo property can only contain items of type \PayPal\StructType\PaymentInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentInfo value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentInfoType[] $paymentInfo
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function setPaymentInfo(array $paymentInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentInfoArrayErrorMessage = self::validatePaymentInfoForArrayConstraintsFromSetPaymentInfo($paymentInfo))) {
            throw new \InvalidArgumentException($paymentInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentInfo) && count($paymentInfo) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentInfo)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PaymentInfo property can only contain items of type \PayPal\StructType\PaymentInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentInfo) && count($this->PaymentInfo) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentInfo)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cartChangeTolerance, true), gettype($cartChangeTolerance)), __LINE__);
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
