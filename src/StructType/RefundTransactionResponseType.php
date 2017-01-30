<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains Refund Payment status information.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundTransactionResponseType extends AbstractResponseType
{
    /**
     * The RefundTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique transaction ID of the refund. Character length and limitations:17 single-byte characters | TransactionId - Type for a PayPal Transaction ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RefundTransactionID;
    /**
     * The NetRefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount subtracted from PayPal balance of original recipient of payment to make this refund
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $NetRefundAmount;
    /**
     * The FeeRefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: Transaction fee refunded to original recipient of payment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $FeeRefundAmount;
    /**
     * The GrossRefundAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of money refunded to original payer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $GrossRefundAmount;
    /**
     * The TotalRefundedAmount
     * Meta informations extracted from the WSDL
     * - documentation: Total of all previous refunds
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TotalRefundedAmount;
    /**
     * The RefundInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:RefundInfo
     * @var \PayPal\StructType\RefundInfoType
     */
    public $RefundInfo;
    /**
     * The ReceiptData
     * Meta informations extracted from the WSDL
     * - documentation: Any general information like offer details that is reinstated or any other marketing data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiptData;
    /**
     * The MsgSubID
     * Meta informations extracted from the WSDL
     * - documentation: Return msgsubid back to merchant
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * Constructor method for RefundTransactionResponseType
     * @uses RefundTransactionResponseType::setRefundTransactionID()
     * @uses RefundTransactionResponseType::setNetRefundAmount()
     * @uses RefundTransactionResponseType::setFeeRefundAmount()
     * @uses RefundTransactionResponseType::setGrossRefundAmount()
     * @uses RefundTransactionResponseType::setTotalRefundedAmount()
     * @uses RefundTransactionResponseType::setRefundInfo()
     * @uses RefundTransactionResponseType::setReceiptData()
     * @uses RefundTransactionResponseType::setMsgSubID()
     * @param string $refundTransactionID
     * @param \PayPal\StructType\BasicAmountType $netRefundAmount
     * @param \PayPal\StructType\BasicAmountType $feeRefundAmount
     * @param \PayPal\StructType\BasicAmountType $grossRefundAmount
     * @param \PayPal\StructType\BasicAmountType $totalRefundedAmount
     * @param \PayPal\StructType\RefundInfoType $refundInfo
     * @param string $receiptData
     * @param string $msgSubID
     */
    public function __construct($refundTransactionID = null, \PayPal\StructType\BasicAmountType $netRefundAmount = null, \PayPal\StructType\BasicAmountType $feeRefundAmount = null, \PayPal\StructType\BasicAmountType $grossRefundAmount = null, \PayPal\StructType\BasicAmountType $totalRefundedAmount = null, \PayPal\StructType\RefundInfoType $refundInfo = null, $receiptData = null, $msgSubID = null)
    {
        $this
            ->setRefundTransactionID($refundTransactionID)
            ->setNetRefundAmount($netRefundAmount)
            ->setFeeRefundAmount($feeRefundAmount)
            ->setGrossRefundAmount($grossRefundAmount)
            ->setTotalRefundedAmount($totalRefundedAmount)
            ->setRefundInfo($refundInfo)
            ->setReceiptData($receiptData)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get RefundTransactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefundTransactionID()
    {
        return isset($this->RefundTransactionID) ? $this->RefundTransactionID : null;
    }
    /**
     * Set RefundTransactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refundTransactionID
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setRefundTransactionID($refundTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($refundTransactionID) && !is_string($refundTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundTransactionID)), __LINE__);
        }
        if (is_null($refundTransactionID) || (is_array($refundTransactionID) && empty($refundTransactionID))) {
            unset($this->RefundTransactionID);
        } else {
            $this->RefundTransactionID = $refundTransactionID;
        }
        return $this;
    }
    /**
     * Get NetRefundAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getNetRefundAmount()
    {
        return $this->NetRefundAmount;
    }
    /**
     * Set NetRefundAmount value
     * @param \PayPal\StructType\BasicAmountType $netRefundAmount
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setNetRefundAmount(\PayPal\StructType\BasicAmountType $netRefundAmount = null)
    {
        $this->NetRefundAmount = $netRefundAmount;
        return $this;
    }
    /**
     * Get FeeRefundAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFeeRefundAmount()
    {
        return $this->FeeRefundAmount;
    }
    /**
     * Set FeeRefundAmount value
     * @param \PayPal\StructType\BasicAmountType $feeRefundAmount
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setFeeRefundAmount(\PayPal\StructType\BasicAmountType $feeRefundAmount = null)
    {
        $this->FeeRefundAmount = $feeRefundAmount;
        return $this;
    }
    /**
     * Get GrossRefundAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getGrossRefundAmount()
    {
        return $this->GrossRefundAmount;
    }
    /**
     * Set GrossRefundAmount value
     * @param \PayPal\StructType\BasicAmountType $grossRefundAmount
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setGrossRefundAmount(\PayPal\StructType\BasicAmountType $grossRefundAmount = null)
    {
        $this->GrossRefundAmount = $grossRefundAmount;
        return $this;
    }
    /**
     * Get TotalRefundedAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTotalRefundedAmount()
    {
        return $this->TotalRefundedAmount;
    }
    /**
     * Set TotalRefundedAmount value
     * @param \PayPal\StructType\BasicAmountType $totalRefundedAmount
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setTotalRefundedAmount(\PayPal\StructType\BasicAmountType $totalRefundedAmount = null)
    {
        $this->TotalRefundedAmount = $totalRefundedAmount;
        return $this;
    }
    /**
     * Get RefundInfo value
     * @return \PayPal\StructType\RefundInfoType|null
     */
    public function getRefundInfo()
    {
        return $this->RefundInfo;
    }
    /**
     * Set RefundInfo value
     * @param \PayPal\StructType\RefundInfoType $refundInfo
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setRefundInfo(\PayPal\StructType\RefundInfoType $refundInfo = null)
    {
        $this->RefundInfo = $refundInfo;
        return $this;
    }
    /**
     * Get ReceiptData value
     * @return string|null
     */
    public function getReceiptData()
    {
        return $this->ReceiptData;
    }
    /**
     * Set ReceiptData value
     * @param string $receiptData
     * @return \PayPal\StructType\RefundTransactionResponseType
     */
    public function setReceiptData($receiptData = null)
    {
        // validation for constraint: string
        if (!is_null($receiptData) && !is_string($receiptData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiptData)), __LINE__);
        }
        $this->ReceiptData = $receiptData;
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
     * @return \PayPal\StructType\RefundTransactionResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RefundTransactionResponseType
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
