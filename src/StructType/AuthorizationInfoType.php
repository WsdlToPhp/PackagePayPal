<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizationInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Authorization details
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AuthorizationInfoType extends AbstractStructBase
{
    /**
     * The PaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: The status of the payment: Pending: The payment is pending. See "PendingReason" for more information.
     * @var string
     */
    public $PaymentStatus;
    /**
     * The PendingReason
     * Meta informations extracted from the WSDL
     * - documentation: The reason the payment is pending:none: No pending reason address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually
     * accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. authorization: The authorization is pending at time of creation if payment is not under review echeck: The payment is pending because it
     * was made by an eCheck that has not yet cleared. intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview. multi-currency: You do
     * not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. unilateral: The payment is pending because it was
     * made to an email address that is not yet registered or confirmed. upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean
     * that you have reached the monthly limit for transactions on your account. verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment. payment_review: The payment is pending because
     * it is under payment review. other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
     * - minOccurs: 0
     * @var string
     */
    public $PendingReason;
    /**
     * The ProtectionEligibility
     * Meta informations extracted from the WSDL
     * - documentation: Protection Eligibility for this Transaction - None, SPP or ESPP
     * - minOccurs: 0
     * @var string
     */
    public $ProtectionEligibility;
    /**
     * The ProtectionEligibilityType
     * Meta informations extracted from the WSDL
     * - documentation: Protection Eligibility Type for this Transaction
     * - minOccurs: 0
     * @var string
     */
    public $ProtectionEligibilityType;
    /**
     * Constructor method for AuthorizationInfoType
     * @uses AuthorizationInfoType::setPaymentStatus()
     * @uses AuthorizationInfoType::setPendingReason()
     * @uses AuthorizationInfoType::setProtectionEligibility()
     * @uses AuthorizationInfoType::setProtectionEligibilityType()
     * @param string $paymentStatus
     * @param string $pendingReason
     * @param string $protectionEligibility
     * @param string $protectionEligibilityType
     */
    public function __construct($paymentStatus = null, $pendingReason = null, $protectionEligibility = null, $protectionEligibilityType = null)
    {
        $this
            ->setPaymentStatus($paymentStatus)
            ->setPendingReason($pendingReason)
            ->setProtectionEligibility($protectionEligibility)
            ->setProtectionEligibilityType($protectionEligibilityType);
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
     * @return \PayPal\StructType\AuthorizationInfoType
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentStatusCodeType::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentStatus, implode(', ', \PayPal\EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
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
     * @return \PayPal\StructType\AuthorizationInfoType
     */
    public function setPendingReason($pendingReason = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PendingStatusCodeType::valueIsValid($pendingReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pendingReason, implode(', ', \PayPal\EnumType\PendingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PendingReason = $pendingReason;
        return $this;
    }
    /**
     * Get ProtectionEligibility value
     * @return string|null
     */
    public function getProtectionEligibility()
    {
        return $this->ProtectionEligibility;
    }
    /**
     * Set ProtectionEligibility value
     * @param string $protectionEligibility
     * @return \PayPal\StructType\AuthorizationInfoType
     */
    public function setProtectionEligibility($protectionEligibility = null)
    {
        // validation for constraint: string
        if (!is_null($protectionEligibility) && !is_string($protectionEligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protectionEligibility)), __LINE__);
        }
        $this->ProtectionEligibility = $protectionEligibility;
        return $this;
    }
    /**
     * Get ProtectionEligibilityType value
     * @return string|null
     */
    public function getProtectionEligibilityType()
    {
        return $this->ProtectionEligibilityType;
    }
    /**
     * Set ProtectionEligibilityType value
     * @param string $protectionEligibilityType
     * @return \PayPal\StructType\AuthorizationInfoType
     */
    public function setProtectionEligibilityType($protectionEligibilityType = null)
    {
        // validation for constraint: string
        if (!is_null($protectionEligibilityType) && !is_string($protectionEligibilityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protectionEligibilityType)), __LINE__);
        }
        $this->ProtectionEligibilityType = $protectionEligibilityType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AuthorizationInfoType
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
