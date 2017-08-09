<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoExpressCheckoutPaymentRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoExpressCheckoutPaymentRequestDetailsType extends AbstractStructBase
{
    /**
     * The PaymentAction
     * Meta informations extracted from the WSDL
     * - documentation: How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization
     * subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to
     * Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentAction;
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - documentation: The timestamped token value that was returned by SetExpressCheckoutResponse and passed on GetExpressCheckoutDetailsRequest. Required Character length and limitations: 20 single-byte characters
     * @var string
     */
    public $Token;
    /**
     * The PayerID
     * Meta informations extracted from the WSDL
     * - documentation: Encrypted PayPal customer account identification number as returned by GetExpressCheckoutDetailsResponse. Required Character length and limitations: 127 single-byte characters.
     * - maxLength: 127
     * @var string
     */
    public $PayerID;
    /**
     * The OrderURL
     * Meta informations extracted from the WSDL
     * - documentation: URL on Merchant site pertaining to this invoice. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderURL;
    /**
     * The MsgSubID
     * Meta informations extracted from the WSDL
     * - documentation: Unique id for each API request to prevent duplicate payments on merchant side. Passed directly back to merchant in response. Optional Character length and limits: 38 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about the payment Required
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsType[]
     */
    public $PaymentDetails;
    /**
     * The PromoOverrideFlag
     * Meta informations extracted from the WSDL
     * - documentation: Flag to indicate if previously set promoCode shall be overriden. Value 1 indicates overriding.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PromoOverrideFlag;
    /**
     * The PromoCode
     * Meta informations extracted from the WSDL
     * - documentation: Promotional financing code for item. Overrides any previous PromoCode setting.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PromoCode;
    /**
     * The EnhancedData
     * Meta informations extracted from the WSDL
     * - documentation: Contains data for enhanced data like Airline Itinerary Data. This tag became Obsolete on or after 62 version, use EnhancedPaymentData instead.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\EnhancedDataType
     */
    public $EnhancedData;
    /**
     * The SoftDescriptor
     * Meta informations extracted from the WSDL
     * - documentation: Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
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
     * The ButtonSource
     * Meta informations extracted from the WSDL
     * - documentation: An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ButtonSource;
    /**
     * The SkipBACreation
     * Meta informations extracted from the WSDL
     * - documentation: Merchant specified flag which indicates whether to create billing agreement as part of DoEC or not. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SkipBACreation;
    /**
     * The UseSessionPaymentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Merchant specified flag which indicates to use payment details from session if available. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UseSessionPaymentDetails;
    /**
     * The CoupledBuckets
     * Meta informations extracted from the WSDL
     * - documentation: Optional element that defines relationship between buckets
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \PayPal\StructType\CoupledBucketsType[]
     */
    public $CoupledBuckets;
    /**
     * The ClientID
     * Meta informations extracted from the WSDL
     * - documentation: Optional element for the passing client id
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClientID;
    /**
     * The ProductLine
     * Meta informations extracted from the WSDL
     * - documentation: Optional element for the passing product lines
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductLine;
    /**
     * Constructor method for DoExpressCheckoutPaymentRequestDetailsType
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setPaymentAction()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setToken()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setPayerID()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setOrderURL()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setMsgSubID()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setPaymentDetails()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setPromoOverrideFlag()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setPromoCode()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setEnhancedData()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setSoftDescriptor()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setUserSelectedOptions()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setGiftMessage()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setGiftReceiptEnable()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setGiftWrapName()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setGiftWrapAmount()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setBuyerMarketingEmail()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setSurveyQuestion()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setSurveyChoiceSelected()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setButtonSource()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setSkipBACreation()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setUseSessionPaymentDetails()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setCoupledBuckets()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setClientID()
     * @uses DoExpressCheckoutPaymentRequestDetailsType::setProductLine()
     * @param string $paymentAction
     * @param string $token
     * @param string $payerID
     * @param string $orderURL
     * @param string $msgSubID
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @param string $promoOverrideFlag
     * @param string $promoCode
     * @param \PayPal\StructType\EnhancedDataType $enhancedData
     * @param string $softDescriptor
     * @param \PayPal\StructType\UserSelectedOptionType $userSelectedOptions
     * @param string $giftMessage
     * @param string $giftReceiptEnable
     * @param string $giftWrapName
     * @param \PayPal\StructType\BasicAmountType $giftWrapAmount
     * @param string $buyerMarketingEmail
     * @param string $surveyQuestion
     * @param string[] $surveyChoiceSelected
     * @param string $buttonSource
     * @param bool $skipBACreation
     * @param string $useSessionPaymentDetails
     * @param \PayPal\StructType\CoupledBucketsType[] $coupledBuckets
     * @param string $clientID
     * @param string $productLine
     */
    public function __construct($paymentAction = null, $token = null, $payerID = null, $orderURL = null, $msgSubID = null, array $paymentDetails = array(), $promoOverrideFlag = null, $promoCode = null, \PayPal\StructType\EnhancedDataType $enhancedData = null, $softDescriptor = null, \PayPal\StructType\UserSelectedOptionType $userSelectedOptions = null, $giftMessage = null, $giftReceiptEnable = null, $giftWrapName = null, \PayPal\StructType\BasicAmountType $giftWrapAmount = null, $buyerMarketingEmail = null, $surveyQuestion = null, array $surveyChoiceSelected = array(), $buttonSource = null, $skipBACreation = null, $useSessionPaymentDetails = null, array $coupledBuckets = array(), $clientID = null, $productLine = null)
    {
        $this
            ->setPaymentAction($paymentAction)
            ->setToken($token)
            ->setPayerID($payerID)
            ->setOrderURL($orderURL)
            ->setMsgSubID($msgSubID)
            ->setPaymentDetails($paymentDetails)
            ->setPromoOverrideFlag($promoOverrideFlag)
            ->setPromoCode($promoCode)
            ->setEnhancedData($enhancedData)
            ->setSoftDescriptor($softDescriptor)
            ->setUserSelectedOptions($userSelectedOptions)
            ->setGiftMessage($giftMessage)
            ->setGiftReceiptEnable($giftReceiptEnable)
            ->setGiftWrapName($giftWrapName)
            ->setGiftWrapAmount($giftWrapAmount)
            ->setBuyerMarketingEmail($buyerMarketingEmail)
            ->setSurveyQuestion($surveyQuestion)
            ->setSurveyChoiceSelected($surveyChoiceSelected)
            ->setButtonSource($buttonSource)
            ->setSkipBACreation($skipBACreation)
            ->setUseSessionPaymentDetails($useSessionPaymentDetails)
            ->setCoupledBuckets($coupledBuckets)
            ->setClientID($clientID)
            ->setProductLine($productLine);
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setPaymentAction($paymentAction = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentActionCodeType::valueIsValid($paymentAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentAction, implode(', ', \PayPal\EnumType\PaymentActionCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAction = $paymentAction;
        return $this;
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * Get PayerID value
     * @return string|null
     */
    public function getPayerID()
    {
        return $this->PayerID;
    }
    /**
     * Set PayerID value
     * @param string $payerID
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setPayerID($payerID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($payerID) && strlen($payerID) > 127) || (is_array($payerID) && count($payerID) > 127)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 127 element(s) or a scalar of 127 character(s) at most, "%d" length given', is_scalar($payerID) ? strlen($payerID) : count($payerID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($payerID) && !is_string($payerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payerID)), __LINE__);
        }
        $this->PayerID = $payerID;
        return $this;
    }
    /**
     * Get OrderURL value
     * @return string|null
     */
    public function getOrderURL()
    {
        return $this->OrderURL;
    }
    /**
     * Set OrderURL value
     * @param string $orderURL
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setOrderURL($orderURL = null)
    {
        // validation for constraint: string
        if (!is_null($orderURL) && !is_string($orderURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderURL)), __LINE__);
        }
        $this->OrderURL = $orderURL;
        return $this;
    }
    /**
     * Get MsgSubID value
     * @return string|null
     */
    public function getMsgSubID()
    {
        return $this->MsgSubID;
    }
    /**
     * Set MsgSubID value
     * @param string $msgSubID
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setPaymentDetails(array $paymentDetails = array())
    {
        foreach ($paymentDetails as $doExpressCheckoutPaymentRequestDetailsTypePaymentDetailsItem) {
            // validation for constraint: itemType
            if (!$doExpressCheckoutPaymentRequestDetailsTypePaymentDetailsItem instanceof \PayPal\StructType\PaymentDetailsType) {
                throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of \PayPal\StructType\PaymentDetailsType, "%s" given', is_object($doExpressCheckoutPaymentRequestDetailsTypePaymentDetailsItem) ? get_class($doExpressCheckoutPaymentRequestDetailsTypePaymentDetailsItem) : gettype($doExpressCheckoutPaymentRequestDetailsTypePaymentDetailsItem)), __LINE__);
            }
        }
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Add item to PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType $item
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * Get PromoOverrideFlag value
     * @return string|null
     */
    public function getPromoOverrideFlag()
    {
        return $this->PromoOverrideFlag;
    }
    /**
     * Set PromoOverrideFlag value
     * @param string $promoOverrideFlag
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setPromoOverrideFlag($promoOverrideFlag = null)
    {
        // validation for constraint: string
        if (!is_null($promoOverrideFlag) && !is_string($promoOverrideFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promoOverrideFlag)), __LINE__);
        }
        $this->PromoOverrideFlag = $promoOverrideFlag;
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * Get EnhancedData value
     * @return \PayPal\StructType\EnhancedDataType|null
     */
    public function getEnhancedData()
    {
        return $this->EnhancedData;
    }
    /**
     * Set EnhancedData value
     * @param \PayPal\StructType\EnhancedDataType $enhancedData
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setEnhancedData(\PayPal\StructType\EnhancedDataType $enhancedData = null)
    {
        $this->EnhancedData = $enhancedData;
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setSoftDescriptor($softDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softDescriptor)), __LINE__);
        }
        $this->SoftDescriptor = $softDescriptor;
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setSurveyChoiceSelected(array $surveyChoiceSelected = array())
    {
        foreach ($surveyChoiceSelected as $doExpressCheckoutPaymentRequestDetailsTypeSurveyChoiceSelectedItem) {
            // validation for constraint: itemType
            if (!is_string($doExpressCheckoutPaymentRequestDetailsTypeSurveyChoiceSelectedItem)) {
                throw new \InvalidArgumentException(sprintf('The SurveyChoiceSelected property can only contain items of string, "%s" given', is_object($doExpressCheckoutPaymentRequestDetailsTypeSurveyChoiceSelectedItem) ? get_class($doExpressCheckoutPaymentRequestDetailsTypeSurveyChoiceSelectedItem) : gettype($doExpressCheckoutPaymentRequestDetailsTypeSurveyChoiceSelectedItem)), __LINE__);
            }
        }
        $this->SurveyChoiceSelected = $surveyChoiceSelected;
        return $this;
    }
    /**
     * Add item to SurveyChoiceSelected value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setButtonSource($buttonSource = null)
    {
        // validation for constraint: string
        if (!is_null($buttonSource) && !is_string($buttonSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buttonSource)), __LINE__);
        }
        $this->ButtonSource = $buttonSource;
        return $this;
    }
    /**
     * Get SkipBACreation value
     * @return bool|null
     */
    public function getSkipBACreation()
    {
        return $this->SkipBACreation;
    }
    /**
     * Set SkipBACreation value
     * @param bool $skipBACreation
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setSkipBACreation($skipBACreation = null)
    {
        // validation for constraint: boolean
        if (!is_null($skipBACreation) && !is_bool($skipBACreation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($skipBACreation)), __LINE__);
        }
        $this->SkipBACreation = $skipBACreation;
        return $this;
    }
    /**
     * Get UseSessionPaymentDetails value
     * @return string|null
     */
    public function getUseSessionPaymentDetails()
    {
        return $this->UseSessionPaymentDetails;
    }
    /**
     * Set UseSessionPaymentDetails value
     * @param string $useSessionPaymentDetails
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setUseSessionPaymentDetails($useSessionPaymentDetails = null)
    {
        // validation for constraint: string
        if (!is_null($useSessionPaymentDetails) && !is_string($useSessionPaymentDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($useSessionPaymentDetails)), __LINE__);
        }
        $this->UseSessionPaymentDetails = $useSessionPaymentDetails;
        return $this;
    }
    /**
     * Get CoupledBuckets value
     * @return \PayPal\StructType\CoupledBucketsType[]|null
     */
    public function getCoupledBuckets()
    {
        return $this->CoupledBuckets;
    }
    /**
     * Set CoupledBuckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledBucketsType[] $coupledBuckets
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setCoupledBuckets(array $coupledBuckets = array())
    {
        foreach ($coupledBuckets as $doExpressCheckoutPaymentRequestDetailsTypeCoupledBucketsItem) {
            // validation for constraint: itemType
            if (!$doExpressCheckoutPaymentRequestDetailsTypeCoupledBucketsItem instanceof \PayPal\StructType\CoupledBucketsType) {
                throw new \InvalidArgumentException(sprintf('The CoupledBuckets property can only contain items of \PayPal\StructType\CoupledBucketsType, "%s" given', is_object($doExpressCheckoutPaymentRequestDetailsTypeCoupledBucketsItem) ? get_class($doExpressCheckoutPaymentRequestDetailsTypeCoupledBucketsItem) : gettype($doExpressCheckoutPaymentRequestDetailsTypeCoupledBucketsItem)), __LINE__);
            }
        }
        $this->CoupledBuckets = $coupledBuckets;
        return $this;
    }
    /**
     * Add item to CoupledBuckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledBucketsType $item
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function addToCoupledBuckets(\PayPal\StructType\CoupledBucketsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\CoupledBucketsType) {
            throw new \InvalidArgumentException(sprintf('The CoupledBuckets property can only contain items of \PayPal\StructType\CoupledBucketsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoupledBuckets[] = $item;
        return $this;
    }
    /**
     * Get ClientID value
     * @return string|null
     */
    public function getClientID()
    {
        return $this->ClientID;
    }
    /**
     * Set ClientID value
     * @param string $clientID
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setClientID($clientID = null)
    {
        // validation for constraint: string
        if (!is_null($clientID) && !is_string($clientID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientID)), __LINE__);
        }
        $this->ClientID = $clientID;
        return $this;
    }
    /**
     * Get ProductLine value
     * @return string|null
     */
    public function getProductLine()
    {
        return $this->ProductLine;
    }
    /**
     * Set ProductLine value
     * @param string $productLine
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
     */
    public function setProductLine($productLine = null)
    {
        // validation for constraint: string
        if (!is_null($productLine) && !is_string($productLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productLine)), __LINE__);
        }
        $this->ProductLine = $productLine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestDetailsType
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
