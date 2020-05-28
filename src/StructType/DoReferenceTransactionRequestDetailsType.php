<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReferenceTransactionRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReferenceTransactionRequestDetailsType extends AbstractStructBase
{
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReferenceID;
    /**
     * The PaymentAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PaymentAction;
    /**
     * The PaymentDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\PaymentDetailsType
     */
    public $PaymentDetails;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public $CreditCard;
    /**
     * The IPAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IPAddress;
    /**
     * The RiskSessionCorrelationID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RiskSessionCorrelationID;
    /**
     * The MerchantSessionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchantSessionId;
    /**
     * The ReqConfirmShipping
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReqConfirmShipping;
    /**
     * The SoftDescriptor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * The SoftDescriptorCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptorCity;
    /**
     * The SenderDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\SenderDetailsType
     */
    public $SenderDetails;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
     * - documentation: Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * Constructor method for DoReferenceTransactionRequestDetailsType
     * @uses DoReferenceTransactionRequestDetailsType::setReferenceID()
     * @uses DoReferenceTransactionRequestDetailsType::setPaymentAction()
     * @uses DoReferenceTransactionRequestDetailsType::setPaymentDetails()
     * @uses DoReferenceTransactionRequestDetailsType::setPaymentType()
     * @uses DoReferenceTransactionRequestDetailsType::setCreditCard()
     * @uses DoReferenceTransactionRequestDetailsType::setIPAddress()
     * @uses DoReferenceTransactionRequestDetailsType::setRiskSessionCorrelationID()
     * @uses DoReferenceTransactionRequestDetailsType::setMerchantSessionId()
     * @uses DoReferenceTransactionRequestDetailsType::setReqConfirmShipping()
     * @uses DoReferenceTransactionRequestDetailsType::setSoftDescriptor()
     * @uses DoReferenceTransactionRequestDetailsType::setSoftDescriptorCity()
     * @uses DoReferenceTransactionRequestDetailsType::setSenderDetails()
     * @uses DoReferenceTransactionRequestDetailsType::setMsgSubID()
     * @param string $referenceID
     * @param string $paymentAction
     * @param \PayPal\StructType\PaymentDetailsType $paymentDetails
     * @param string $paymentType
     * @param \PayPal\StructType\ReferenceCreditCardDetailsType $creditCard
     * @param string $iPAddress
     * @param string $riskSessionCorrelationID
     * @param string $merchantSessionId
     * @param string $reqConfirmShipping
     * @param string $softDescriptor
     * @param string $softDescriptorCity
     * @param \PayPal\StructType\SenderDetailsType $senderDetails
     * @param string $msgSubID
     */
    public function __construct($referenceID = null, $paymentAction = null, \PayPal\StructType\PaymentDetailsType $paymentDetails = null, $paymentType = null, \PayPal\StructType\ReferenceCreditCardDetailsType $creditCard = null, $iPAddress = null, $riskSessionCorrelationID = null, $merchantSessionId = null, $reqConfirmShipping = null, $softDescriptor = null, $softDescriptorCity = null, \PayPal\StructType\SenderDetailsType $senderDetails = null, $msgSubID = null)
    {
        $this
            ->setReferenceID($referenceID)
            ->setPaymentAction($paymentAction)
            ->setPaymentDetails($paymentDetails)
            ->setPaymentType($paymentType)
            ->setCreditCard($creditCard)
            ->setIPAddress($iPAddress)
            ->setRiskSessionCorrelationID($riskSessionCorrelationID)
            ->setMerchantSessionId($merchantSessionId)
            ->setReqConfirmShipping($reqConfirmShipping)
            ->setSoftDescriptor($softDescriptor)
            ->setSoftDescriptorCity($softDescriptorCity)
            ->setSenderDetails($senderDetails)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get ReferenceID value
     * @return string
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceID, true), gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get PaymentAction value
     * @return string
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
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
     * Get PaymentDetails value
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \PayPal\StructType\PaymentDetailsType $paymentDetails
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setPaymentDetails(\PayPal\StructType\PaymentDetailsType $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
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
     * Get CreditCard value
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \PayPal\StructType\ReferenceCreditCardDetailsType $creditCard
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setCreditCard(\PayPal\StructType\ReferenceCreditCardDetailsType $creditCard = null)
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPAddress, true), gettype($iPAddress)), __LINE__);
        }
        $this->IPAddress = $iPAddress;
        return $this;
    }
    /**
     * Get RiskSessionCorrelationID value
     * @return string|null
     */
    public function getRiskSessionCorrelationID()
    {
        return $this->RiskSessionCorrelationID;
    }
    /**
     * Set RiskSessionCorrelationID value
     * @param string $riskSessionCorrelationID
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setRiskSessionCorrelationID($riskSessionCorrelationID = null)
    {
        // validation for constraint: string
        if (!is_null($riskSessionCorrelationID) && !is_string($riskSessionCorrelationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($riskSessionCorrelationID, true), gettype($riskSessionCorrelationID)), __LINE__);
        }
        $this->RiskSessionCorrelationID = $riskSessionCorrelationID;
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setMerchantSessionId($merchantSessionId = null)
    {
        // validation for constraint: string
        if (!is_null($merchantSessionId) && !is_string($merchantSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantSessionId, true), gettype($merchantSessionId)), __LINE__);
        }
        $this->MerchantSessionId = $merchantSessionId;
        return $this;
    }
    /**
     * Get ReqConfirmShipping value
     * @return string|null
     */
    public function getReqConfirmShipping()
    {
        return $this->ReqConfirmShipping;
    }
    /**
     * Set ReqConfirmShipping value
     * @param string $reqConfirmShipping
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setReqConfirmShipping($reqConfirmShipping = null)
    {
        // validation for constraint: string
        if (!is_null($reqConfirmShipping) && !is_string($reqConfirmShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reqConfirmShipping, true), gettype($reqConfirmShipping)), __LINE__);
        }
        $this->ReqConfirmShipping = $reqConfirmShipping;
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setSoftDescriptorCity($softDescriptorCity = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptorCity) && !is_string($softDescriptorCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softDescriptorCity, true), gettype($softDescriptorCity)), __LINE__);
        }
        $this->SoftDescriptorCity = $softDescriptorCity;
        return $this;
    }
    /**
     * Get SenderDetails value
     * @return \PayPal\StructType\SenderDetailsType|null
     */
    public function getSenderDetails()
    {
        return $this->SenderDetails;
    }
    /**
     * Set SenderDetails value
     * @param \PayPal\StructType\SenderDetailsType $senderDetails
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setSenderDetails(\PayPal\StructType\SenderDetailsType $senderDetails = null)
    {
        $this->SenderDetails = $senderDetails;
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
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgSubID, true), gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
}
