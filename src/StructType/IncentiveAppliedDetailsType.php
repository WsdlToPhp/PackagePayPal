<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveAppliedDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of incentive application on individual bucket/item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveAppliedDetailsType extends AbstractStructBase
{
    /**
     * The PaymentRequestID
     * Meta information extracted from the WSDL
     * - documentation: PaymentRequestID uniquely identifies a bucket. It is the "bucket id" in the world of EC API.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentRequestID;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - documentation: The item id passed through by the merchant.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemId;
    /**
     * The ExternalTxnId
     * Meta information extracted from the WSDL
     * - documentation: The item transaction id passed through by the merchant.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTxnId;
    /**
     * The DiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: Discount offerred for this bucket or item.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $DiscountAmount;
    /**
     * The SubType
     * Meta information extracted from the WSDL
     * - documentation: SubType for coupon.
     * - minOccurs: 0
     * @var string
     */
    public $SubType;
    /**
     * Constructor method for IncentiveAppliedDetailsType
     * @uses IncentiveAppliedDetailsType::setPaymentRequestID()
     * @uses IncentiveAppliedDetailsType::setItemId()
     * @uses IncentiveAppliedDetailsType::setExternalTxnId()
     * @uses IncentiveAppliedDetailsType::setDiscountAmount()
     * @uses IncentiveAppliedDetailsType::setSubType()
     * @param string $paymentRequestID
     * @param string $itemId
     * @param string $externalTxnId
     * @param \PayPal\StructType\BasicAmountType $discountAmount
     * @param string $subType
     */
    public function __construct($paymentRequestID = null, $itemId = null, $externalTxnId = null, \PayPal\StructType\BasicAmountType $discountAmount = null, $subType = null)
    {
        $this
            ->setPaymentRequestID($paymentRequestID)
            ->setItemId($itemId)
            ->setExternalTxnId($externalTxnId)
            ->setDiscountAmount($discountAmount)
            ->setSubType($subType);
    }
    /**
     * Get PaymentRequestID value
     * @return string|null
     */
    public function getPaymentRequestID()
    {
        return $this->PaymentRequestID;
    }
    /**
     * Set PaymentRequestID value
     * @param string $paymentRequestID
     * @return \PayPal\StructType\IncentiveAppliedDetailsType
     */
    public function setPaymentRequestID($paymentRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($paymentRequestID) && !is_string($paymentRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRequestID, true), gettype($paymentRequestID)), __LINE__);
        }
        $this->PaymentRequestID = $paymentRequestID;
        return $this;
    }
    /**
     * Get ItemId value
     * @return string|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \PayPal\StructType\IncentiveAppliedDetailsType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ExternalTxnId value
     * @return string|null
     */
    public function getExternalTxnId()
    {
        return $this->ExternalTxnId;
    }
    /**
     * Set ExternalTxnId value
     * @param string $externalTxnId
     * @return \PayPal\StructType\IncentiveAppliedDetailsType
     */
    public function setExternalTxnId($externalTxnId = null)
    {
        // validation for constraint: string
        if (!is_null($externalTxnId) && !is_string($externalTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTxnId, true), gettype($externalTxnId)), __LINE__);
        }
        $this->ExternalTxnId = $externalTxnId;
        return $this;
    }
    /**
     * Get DiscountAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @param \PayPal\StructType\BasicAmountType $discountAmount
     * @return \PayPal\StructType\IncentiveAppliedDetailsType
     */
    public function setDiscountAmount(\PayPal\StructType\BasicAmountType $discountAmount = null)
    {
        $this->DiscountAmount = $discountAmount;
        return $this;
    }
    /**
     * Get SubType value
     * @return string|null
     */
    public function getSubType()
    {
        return $this->SubType;
    }
    /**
     * Set SubType value
     * @param string $subType
     * @return \PayPal\StructType\IncentiveAppliedDetailsType
     */
    public function setSubType($subType = null)
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->SubType = $subType;
        return $this;
    }
}
