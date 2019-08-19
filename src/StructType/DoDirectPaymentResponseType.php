<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoDirectPaymentResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoDirectPaymentResponseType extends AbstractResponseType
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the payment as specified by you on DoDirectPaymentRequest.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The AVSCode
     * Meta information extracted from the WSDL
     * - documentation: Address Verification System response code. Character limit: One single-byte alphanumeric character AVS CodeMeaningMatched Details A AddressAddress only (no ZIP) B International “A”Address only (no ZIP) CInternational “N” None
     * DInternational “X” Address and Postal Code E Not allowed for MOTO (Internet/Phone) transactions Not applicable F UK-specific “X”Address and Postal Code G Global Unavailable Not applicable I International UnavailableNot applicable N NoNone
     * PPostal (International “Z”)Postal Code only (no Address) RRetryNot applicable S Service not Supported Not applicable U UnavailableNot applicable W Whole ZIPNine-digit ZIP code (no Address) X Exact match Address and nine-digit ZIP code Y
     * YesAddress and five-digit ZIP Z ZIP Five-digit ZIP code (no Address) All others Error Not applicable
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AVSCode;
    /**
     * The CVV2Code
     * Meta information extracted from the WSDL
     * - documentation: Result of the CVV2 check by PayPal. CVV2 CodeMeaningMatched Details M MatchCVV2 N No match None P Not ProcessedNot applicable SService not SupportedNot applicable U UnavailableNot applicable XNo response Not applicable All others
     * ErrorNot applicable
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CVV2Code;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Transaction identification number. Character length and limitations: 19 characters maximum. | TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The TransactionPendingReason
     * Meta information extracted from the WSDL
     * - documentation: pending reason for IC+ interchange plus
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionPendingReason;
    /**
     * The PendingReason
     * Meta information extracted from the WSDL
     * - documentation: The reason why a particular transaction went in pending.
     * - minOccurs: 0
     * @var string
     */
    public $PendingReason;
    /**
     * The PaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: This will identify the actual transaction status.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentStatus;
    /**
     * The FMFDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FMFDetailsType
     */
    public $FMFDetails;
    /**
     * The ThreeDSecureResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ThreeDSecureResponseType
     */
    public $ThreeDSecureResponse;
    /**
     * The PaymentAdviceCode
     * Meta information extracted from the WSDL
     * - documentation: Response code from the processor when a recurring transaction is declined.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentAdviceCode;
    /**
     * Constructor method for DoDirectPaymentResponseType
     * @uses DoDirectPaymentResponseType::setAmount()
     * @uses DoDirectPaymentResponseType::setAVSCode()
     * @uses DoDirectPaymentResponseType::setCVV2Code()
     * @uses DoDirectPaymentResponseType::setTransactionID()
     * @uses DoDirectPaymentResponseType::setTransactionPendingReason()
     * @uses DoDirectPaymentResponseType::setPendingReason()
     * @uses DoDirectPaymentResponseType::setPaymentStatus()
     * @uses DoDirectPaymentResponseType::setFMFDetails()
     * @uses DoDirectPaymentResponseType::setThreeDSecureResponse()
     * @uses DoDirectPaymentResponseType::setPaymentAdviceCode()
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $aVSCode
     * @param string $cVV2Code
     * @param string $transactionID
     * @param string $transactionPendingReason
     * @param string $pendingReason
     * @param string $paymentStatus
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @param \PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse
     * @param string $paymentAdviceCode
     */
    public function __construct(\PayPal\StructType\BasicAmountType $amount = null, $aVSCode = null, $cVV2Code = null, $transactionID = null, $transactionPendingReason = null, $pendingReason = null, $paymentStatus = null, \PayPal\StructType\FMFDetailsType $fMFDetails = null, \PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse = null, $paymentAdviceCode = null)
    {
        $this
            ->setAmount($amount)
            ->setAVSCode($aVSCode)
            ->setCVV2Code($cVV2Code)
            ->setTransactionID($transactionID)
            ->setTransactionPendingReason($transactionPendingReason)
            ->setPendingReason($pendingReason)
            ->setPaymentStatus($paymentStatus)
            ->setFMFDetails($fMFDetails)
            ->setThreeDSecureResponse($threeDSecureResponse)
            ->setPaymentAdviceCode($paymentAdviceCode);
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get AVSCode value
     * @return string
     */
    public function getAVSCode()
    {
        return $this->AVSCode;
    }
    /**
     * Set AVSCode value
     * @param string $aVSCode
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setAVSCode($aVSCode = null)
    {
        // validation for constraint: string
        if (!is_null($aVSCode) && !is_string($aVSCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aVSCode, true), gettype($aVSCode)), __LINE__);
        }
        $this->AVSCode = $aVSCode;
        return $this;
    }
    /**
     * Get CVV2Code value
     * @return string
     */
    public function getCVV2Code()
    {
        return $this->CVV2Code;
    }
    /**
     * Set CVV2Code value
     * @param string $cVV2Code
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setCVV2Code($cVV2Code = null)
    {
        // validation for constraint: string
        if (!is_null($cVV2Code) && !is_string($cVV2Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVV2Code, true), gettype($cVV2Code)), __LINE__);
        }
        $this->CVV2Code = $cVV2Code;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get TransactionPendingReason value
     * @return string|null
     */
    public function getTransactionPendingReason()
    {
        return $this->TransactionPendingReason;
    }
    /**
     * Set TransactionPendingReason value
     * @param string $transactionPendingReason
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setTransactionPendingReason($transactionPendingReason = null)
    {
        // validation for constraint: string
        if (!is_null($transactionPendingReason) && !is_string($transactionPendingReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionPendingReason, true), gettype($transactionPendingReason)), __LINE__);
        }
        $this->TransactionPendingReason = $transactionPendingReason;
        return $this;
    }
    /**
     * Get PendingReason value
     * @return string|null
     */
    public function getPendingReason()
    {
        return $this->PendingReason;
    }
    /**
     * Set PendingReason value
     * @uses \PayPal\EnumType\PendingStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PendingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pendingReason
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setPendingReason($pendingReason = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PendingStatusCodeType::valueIsValid($pendingReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PendingStatusCodeType', is_array($pendingReason) ? implode(', ', $pendingReason) : var_export($pendingReason, true), implode(', ', \PayPal\EnumType\PendingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PendingReason = $pendingReason;
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \PayPal\EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentStatus
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentStatusCodeType::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentStatusCodeType', is_array($paymentStatus) ? implode(', ', $paymentStatus) : var_export($paymentStatus, true), implode(', ', \PayPal\EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get FMFDetails value
     * @return \PayPal\StructType\FMFDetailsType|null
     */
    public function getFMFDetails()
    {
        return $this->FMFDetails;
    }
    /**
     * Set FMFDetails value
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setFMFDetails(\PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this->FMFDetails = $fMFDetails;
        return $this;
    }
    /**
     * Get ThreeDSecureResponse value
     * @return \PayPal\StructType\ThreeDSecureResponseType|null
     */
    public function getThreeDSecureResponse()
    {
        return $this->ThreeDSecureResponse;
    }
    /**
     * Set ThreeDSecureResponse value
     * @param \PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setThreeDSecureResponse(\PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse = null)
    {
        $this->ThreeDSecureResponse = $threeDSecureResponse;
        return $this;
    }
    /**
     * Get PaymentAdviceCode value
     * @return string|null
     */
    public function getPaymentAdviceCode()
    {
        return $this->PaymentAdviceCode;
    }
    /**
     * Set PaymentAdviceCode value
     * @param string $paymentAdviceCode
     * @return \PayPal\StructType\DoDirectPaymentResponseType
     */
    public function setPaymentAdviceCode($paymentAdviceCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentAdviceCode) && !is_string($paymentAdviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentAdviceCode, true), gettype($paymentAdviceCode)), __LINE__);
        }
        $this->PaymentAdviceCode = $paymentAdviceCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoDirectPaymentResponseType
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
