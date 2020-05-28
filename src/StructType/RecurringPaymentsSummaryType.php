<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringPaymentsSummaryType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RecurringPaymentsSummaryType extends AbstractStructBase
{
    /**
     * The NumberCyclesCompleted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NumberCyclesCompleted;
    /**
     * The NumberCyclesRemaining
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NumberCyclesRemaining;
    /**
     * The OutstandingBalance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $OutstandingBalance;
    /**
     * The FailedPaymentCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $FailedPaymentCount;
    /**
     * The NextBillingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NextBillingDate;
    /**
     * The LastPaymentDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastPaymentDate;
    /**
     * The LastPaymentAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $LastPaymentAmount;
    /**
     * Constructor method for RecurringPaymentsSummaryType
     * @uses RecurringPaymentsSummaryType::setNumberCyclesCompleted()
     * @uses RecurringPaymentsSummaryType::setNumberCyclesRemaining()
     * @uses RecurringPaymentsSummaryType::setOutstandingBalance()
     * @uses RecurringPaymentsSummaryType::setFailedPaymentCount()
     * @uses RecurringPaymentsSummaryType::setNextBillingDate()
     * @uses RecurringPaymentsSummaryType::setLastPaymentDate()
     * @uses RecurringPaymentsSummaryType::setLastPaymentAmount()
     * @param int $numberCyclesCompleted
     * @param int $numberCyclesRemaining
     * @param \PayPal\StructType\BasicAmountType $outstandingBalance
     * @param int $failedPaymentCount
     * @param string $nextBillingDate
     * @param string $lastPaymentDate
     * @param \PayPal\StructType\BasicAmountType $lastPaymentAmount
     */
    public function __construct($numberCyclesCompleted = null, $numberCyclesRemaining = null, \PayPal\StructType\BasicAmountType $outstandingBalance = null, $failedPaymentCount = null, $nextBillingDate = null, $lastPaymentDate = null, \PayPal\StructType\BasicAmountType $lastPaymentAmount = null)
    {
        $this
            ->setNumberCyclesCompleted($numberCyclesCompleted)
            ->setNumberCyclesRemaining($numberCyclesRemaining)
            ->setOutstandingBalance($outstandingBalance)
            ->setFailedPaymentCount($failedPaymentCount)
            ->setNextBillingDate($nextBillingDate)
            ->setLastPaymentDate($lastPaymentDate)
            ->setLastPaymentAmount($lastPaymentAmount);
    }
    /**
     * Get NumberCyclesCompleted value
     * @return int
     */
    public function getNumberCyclesCompleted()
    {
        return $this->NumberCyclesCompleted;
    }
    /**
     * Set NumberCyclesCompleted value
     * @param int $numberCyclesCompleted
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setNumberCyclesCompleted($numberCyclesCompleted = null)
    {
        // validation for constraint: int
        if (!is_null($numberCyclesCompleted) && !(is_int($numberCyclesCompleted) || ctype_digit($numberCyclesCompleted))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberCyclesCompleted, true), gettype($numberCyclesCompleted)), __LINE__);
        }
        $this->NumberCyclesCompleted = $numberCyclesCompleted;
        return $this;
    }
    /**
     * Get NumberCyclesRemaining value
     * @return int
     */
    public function getNumberCyclesRemaining()
    {
        return $this->NumberCyclesRemaining;
    }
    /**
     * Set NumberCyclesRemaining value
     * @param int $numberCyclesRemaining
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setNumberCyclesRemaining($numberCyclesRemaining = null)
    {
        // validation for constraint: int
        if (!is_null($numberCyclesRemaining) && !(is_int($numberCyclesRemaining) || ctype_digit($numberCyclesRemaining))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberCyclesRemaining, true), gettype($numberCyclesRemaining)), __LINE__);
        }
        $this->NumberCyclesRemaining = $numberCyclesRemaining;
        return $this;
    }
    /**
     * Get OutstandingBalance value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getOutstandingBalance()
    {
        return $this->OutstandingBalance;
    }
    /**
     * Set OutstandingBalance value
     * @param \PayPal\StructType\BasicAmountType $outstandingBalance
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setOutstandingBalance(\PayPal\StructType\BasicAmountType $outstandingBalance = null)
    {
        $this->OutstandingBalance = $outstandingBalance;
        return $this;
    }
    /**
     * Get FailedPaymentCount value
     * @return int
     */
    public function getFailedPaymentCount()
    {
        return $this->FailedPaymentCount;
    }
    /**
     * Set FailedPaymentCount value
     * @param int $failedPaymentCount
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setFailedPaymentCount($failedPaymentCount = null)
    {
        // validation for constraint: int
        if (!is_null($failedPaymentCount) && !(is_int($failedPaymentCount) || ctype_digit($failedPaymentCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($failedPaymentCount, true), gettype($failedPaymentCount)), __LINE__);
        }
        $this->FailedPaymentCount = $failedPaymentCount;
        return $this;
    }
    /**
     * Get NextBillingDate value
     * @return string|null
     */
    public function getNextBillingDate()
    {
        return $this->NextBillingDate;
    }
    /**
     * Set NextBillingDate value
     * @param string $nextBillingDate
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setNextBillingDate($nextBillingDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextBillingDate) && !is_string($nextBillingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextBillingDate, true), gettype($nextBillingDate)), __LINE__);
        }
        $this->NextBillingDate = $nextBillingDate;
        return $this;
    }
    /**
     * Get LastPaymentDate value
     * @return string|null
     */
    public function getLastPaymentDate()
    {
        return $this->LastPaymentDate;
    }
    /**
     * Set LastPaymentDate value
     * @param string $lastPaymentDate
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setLastPaymentDate($lastPaymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastPaymentDate) && !is_string($lastPaymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastPaymentDate, true), gettype($lastPaymentDate)), __LINE__);
        }
        $this->LastPaymentDate = $lastPaymentDate;
        return $this;
    }
    /**
     * Get LastPaymentAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getLastPaymentAmount()
    {
        return $this->LastPaymentAmount;
    }
    /**
     * Set LastPaymentAmount value
     * @param \PayPal\StructType\BasicAmountType $lastPaymentAmount
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function setLastPaymentAmount(\PayPal\StructType\BasicAmountType $lastPaymentAmount = null)
    {
        $this->LastPaymentAmount = $lastPaymentAmount;
        return $this;
    }
}
