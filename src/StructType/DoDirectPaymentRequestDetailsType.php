<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoDirectPaymentRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoDirectPaymentRequestDetailsType extends AbstractStructBase
{
    /**
     * The PaymentAction
     * Meta informations extracted from the WSDL
     * - documentation: How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are
     * requesting payment. NOTE: Order is not allowed for Direct Payment. Character length and limit: Up to 13 single-byte alphabetic characters
     * @var string
     */
    public $PaymentAction;
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about the payment Required
     * @var \PayPal\StructType\PaymentDetailsType
     */
    public $PaymentDetails;
    /**
     * The CreditCard
     * Meta informations extracted from the WSDL
     * - documentation: Information about the credit card to be charged. Required
     * @var \PayPal\StructType\CreditCardDetailsType
     */
    public $CreditCard;
    /**
     * The IPAddress
     * Meta informations extracted from the WSDL
     * - documentation: IP address of the payer's browser as recorded in its HTTP request to your website. PayPal records this IP addresses as a means to detect possible fraud. Required Character length and limitations: 15 single-byte characters, including
     * periods, in dotted-quad format: ???.???.???.???
     * @var string
     */
    public $IPAddress;
    /**
     * The MerchantSessionId
     * Meta informations extracted from the WSDL
     * - documentation: Your customer session identification token. PayPal records this optional session identification token as an additional means to detect possible fraud. Optional Character length and limitations: 64 single-byte numeric characters
     * - minOccurs: 0
     * @var string
     */
    public $MerchantSessionId;
    /**
     * The ReturnFMFDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnFMFDetails;
    /**
     * The SoftDescriptor
     * Meta informations extracted from the WSDL
     * - documentation: Use this optional parameter to pass in your business name and other data describing the transaction. Optional This information is usually displayed in the account holder's statement. Example: RedCross Haiti, RedCross Uganda,
     * Realtor.com dues, Realtor.com list fee Length 25 characters. Alphanumeric characters and dash(-), dot(.), asterisk(*), space( ) On the customer's statement, an asterisk is used to separate the DBA name and product name. The asterisk delimiter can
     * appear in position 4, 8, or 13.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * The SoftDescriptorCity
     * Meta informations extracted from the WSDL
     * - documentation: Use this optional parameter to pass information about how consumer should contact the merchant. Optional This information is usually displayed in the account holder's statement. For Ecom trx: phone, email or URL is allowed For Retail
     * trx: only the actual city is allowed For details on allowed characters in Soft Descriptor City refer to the API documentation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptorCity;
    /**
     * Constructor method for DoDirectPaymentRequestDetailsType
     * @uses DoDirectPaymentRequestDetailsType::setPaymentAction()
     * @uses DoDirectPaymentRequestDetailsType::setPaymentDetails()
     * @uses DoDirectPaymentRequestDetailsType::setCreditCard()
     * @uses DoDirectPaymentRequestDetailsType::setIPAddress()
     * @uses DoDirectPaymentRequestDetailsType::setMerchantSessionId()
     * @uses DoDirectPaymentRequestDetailsType::setReturnFMFDetails()
     * @uses DoDirectPaymentRequestDetailsType::setSoftDescriptor()
     * @uses DoDirectPaymentRequestDetailsType::setSoftDescriptorCity()
     * @param string $paymentAction
     * @param \PayPal\StructType\PaymentDetailsType $paymentDetails
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @param string $iPAddress
     * @param string $merchantSessionId
     * @param bool $returnFMFDetails
     * @param string $softDescriptor
     * @param string $softDescriptorCity
     */
    public function __construct($paymentAction = null, \PayPal\StructType\PaymentDetailsType $paymentDetails = null, \PayPal\StructType\CreditCardDetailsType $creditCard = null, $iPAddress = null, $merchantSessionId = null, $returnFMFDetails = null, $softDescriptor = null, $softDescriptorCity = null)
    {
        $this
            ->setPaymentAction($paymentAction)
            ->setPaymentDetails($paymentDetails)
            ->setCreditCard($creditCard)
            ->setIPAddress($iPAddress)
            ->setMerchantSessionId($merchantSessionId)
            ->setReturnFMFDetails($returnFMFDetails)
            ->setSoftDescriptor($softDescriptor)
            ->setSoftDescriptorCity($softDescriptorCity);
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
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
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
     * Get PaymentDetails value
     * @return \PayPal\StructType\PaymentDetailsType|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \PayPal\StructType\PaymentDetailsType $paymentDetails
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function setPaymentDetails(\PayPal\StructType\PaymentDetailsType $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
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
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function setCreditCard(\PayPal\StructType\CreditCardDetailsType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $iPAddress
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iPAddress)), __LINE__);
        }
        $this->IPAddress = $iPAddress;
        return $this;
    }
    /**
     * Get MerchantSessionId value
     * @return string|null
     */
    public function getMerchantSessionId()
    {
        return $this->MerchantSessionId;
    }
    /**
     * Set MerchantSessionId value
     * @param string $merchantSessionId
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function setMerchantSessionId($merchantSessionId = null)
    {
        // validation for constraint: string
        if (!is_null($merchantSessionId) && !is_string($merchantSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchantSessionId)), __LINE__);
        }
        $this->MerchantSessionId = $merchantSessionId;
        return $this;
    }
    /**
     * Get ReturnFMFDetails value
     * @return bool|null
     */
    public function getReturnFMFDetails()
    {
        return $this->ReturnFMFDetails;
    }
    /**
     * Set ReturnFMFDetails value
     * @param bool $returnFMFDetails
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function setReturnFMFDetails($returnFMFDetails = null)
    {
        $this->ReturnFMFDetails = $returnFMFDetails;
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
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
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
     * Get SoftDescriptorCity value
     * @return string|null
     */
    public function getSoftDescriptorCity()
    {
        return $this->SoftDescriptorCity;
    }
    /**
     * Set SoftDescriptorCity value
     * @param string $softDescriptorCity
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function setSoftDescriptorCity($softDescriptorCity = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptorCity) && !is_string($softDescriptorCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softDescriptorCity)), __LINE__);
        }
        $this->SoftDescriptorCity = $softDescriptorCity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
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
