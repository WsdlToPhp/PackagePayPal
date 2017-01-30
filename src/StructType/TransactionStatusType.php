<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionStatusType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionStatusType extends AbstractStructBase
{
    /**
     * The eBayPaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the success or failure of an eBay Online Payment for the transaction. If the payment failed, the value returned indicates the reason for the failure. Possible values: 0 = No payment failure. 3 = Buyer's eCheck bounced. 4 =
     * Buyer's credit card failed. 5 = Buyer failed payment as reported by seller. 7 = Payment from buyer to seller is in PayPal process, but has not yet been completed.
     * - minOccurs: 0
     * @var int
     */
    public $eBayPaymentStatus;
    /**
     * The IncompleteState
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the current state of the checkout process for the transaction. Possible values: 0 = Checkout complete. 1 = Checkout incomplete. No details specified. 2 = Buyer requests total. 3 = Seller responded to buyer's request.
     * - minOccurs: 0
     * @var int
     */
    public $IncompleteState;
    /**
     * The LastTimeModified
     * Meta informations extracted from the WSDL
     * - documentation: Indicates last date and time checkout status or incomplete state was updated (in GMT).
     * - minOccurs: 0
     * @var string
     */
    public $LastTimeModified;
    /**
     * The PaymentMethodUsed
     * Meta informations extracted from the WSDL
     * - documentation: Payment method used by the buyer. (See BuyerPaymentCodeList/Type).
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodUsed;
    /**
     * The StatusIs
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the transaction process complete or incomplete. Possible values: 1 = Incomplete 2 = Complete
     * - minOccurs: 0
     * @var int
     */
    public $StatusIs;
    /**
     * Constructor method for TransactionStatusType
     * @uses TransactionStatusType::setEBayPaymentStatus()
     * @uses TransactionStatusType::setIncompleteState()
     * @uses TransactionStatusType::setLastTimeModified()
     * @uses TransactionStatusType::setPaymentMethodUsed()
     * @uses TransactionStatusType::setStatusIs()
     * @param int $eBayPaymentStatus
     * @param int $incompleteState
     * @param string $lastTimeModified
     * @param string $paymentMethodUsed
     * @param int $statusIs
     */
    public function __construct($eBayPaymentStatus = null, $incompleteState = null, $lastTimeModified = null, $paymentMethodUsed = null, $statusIs = null)
    {
        $this
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setIncompleteState($incompleteState)
            ->setLastTimeModified($lastTimeModified)
            ->setPaymentMethodUsed($paymentMethodUsed)
            ->setStatusIs($statusIs);
    }
    /**
     * Get eBayPaymentStatus value
     * @return int|null
     */
    public function getEBayPaymentStatus()
    {
        return $this->eBayPaymentStatus;
    }
    /**
     * Set eBayPaymentStatus value
     * @param int $eBayPaymentStatus
     * @return \PayPal\StructType\TransactionStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus = null)
    {
        // validation for constraint: int
        if (!is_null($eBayPaymentStatus) && !is_numeric($eBayPaymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($eBayPaymentStatus)), __LINE__);
        }
        $this->eBayPaymentStatus = $eBayPaymentStatus;
        return $this;
    }
    /**
     * Get IncompleteState value
     * @return int|null
     */
    public function getIncompleteState()
    {
        return $this->IncompleteState;
    }
    /**
     * Set IncompleteState value
     * @param int $incompleteState
     * @return \PayPal\StructType\TransactionStatusType
     */
    public function setIncompleteState($incompleteState = null)
    {
        // validation for constraint: int
        if (!is_null($incompleteState) && !is_numeric($incompleteState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($incompleteState)), __LINE__);
        }
        $this->IncompleteState = $incompleteState;
        return $this;
    }
    /**
     * Get LastTimeModified value
     * @return string|null
     */
    public function getLastTimeModified()
    {
        return $this->LastTimeModified;
    }
    /**
     * Set LastTimeModified value
     * @param string $lastTimeModified
     * @return \PayPal\StructType\TransactionStatusType
     */
    public function setLastTimeModified($lastTimeModified = null)
    {
        // validation for constraint: string
        if (!is_null($lastTimeModified) && !is_string($lastTimeModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTimeModified)), __LINE__);
        }
        $this->LastTimeModified = $lastTimeModified;
        return $this;
    }
    /**
     * Get PaymentMethodUsed value
     * @return string|null
     */
    public function getPaymentMethodUsed()
    {
        return $this->PaymentMethodUsed;
    }
    /**
     * Set PaymentMethodUsed value
     * @uses \PayPal\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethodUsed
     * @return \PayPal\StructType\TransactionStatusType
     */
    public function setPaymentMethodUsed($paymentMethodUsed = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethodUsed)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentMethodUsed, implode(', ', \PayPal\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodUsed = $paymentMethodUsed;
        return $this;
    }
    /**
     * Get StatusIs value
     * @return int|null
     */
    public function getStatusIs()
    {
        return $this->StatusIs;
    }
    /**
     * Set StatusIs value
     * @param int $statusIs
     * @return \PayPal\StructType\TransactionStatusType
     */
    public function setStatusIs($statusIs = null)
    {
        // validation for constraint: int
        if (!is_null($statusIs) && !is_numeric($statusIs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusIs)), __LINE__);
        }
        $this->StatusIs = $statusIs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TransactionStatusType
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
