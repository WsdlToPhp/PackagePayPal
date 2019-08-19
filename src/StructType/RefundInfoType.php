<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Holds refunds payment status information
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundInfoType extends AbstractStructBase
{
    /**
     * The RefundStatus
     * Meta information extracted from the WSDL
     * - documentation: Refund status whether it is Instant or Delayed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefundStatus;
    /**
     * The PendingReason
     * Meta information extracted from the WSDL
     * - documentation: Tells us the reason when refund payment status is Delayed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PendingReason;
    /**
     * Constructor method for RefundInfoType
     * @uses RefundInfoType::setRefundStatus()
     * @uses RefundInfoType::setPendingReason()
     * @param string $refundStatus
     * @param string $pendingReason
     */
    public function __construct($refundStatus = null, $pendingReason = null)
    {
        $this
            ->setRefundStatus($refundStatus)
            ->setPendingReason($pendingReason);
    }
    /**
     * Get RefundStatus value
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->RefundStatus;
    }
    /**
     * Set RefundStatus value
     * @uses \PayPal\EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundStatus
     * @return \PayPal\StructType\RefundInfoType
     */
    public function setRefundStatus($refundStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentStatusCodeType::valueIsValid($refundStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentStatusCodeType', is_array($refundStatus) ? implode(', ', $refundStatus) : var_export($refundStatus, true), implode(', ', \PayPal\EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RefundStatus = $refundStatus;
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
     * @return \PayPal\StructType\RefundInfoType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RefundInfoType
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
