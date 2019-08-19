<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScheduleDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ScheduleDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Schedule details for the Recurring Payment
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Description;
    /**
     * The PaymentPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BillingPeriodDetailsType
     */
    public $PaymentPeriod;
    /**
     * The TrialPeriod
     * Meta information extracted from the WSDL
     * - documentation: Trial period of this schedule
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingPeriodDetailsType
     */
    public $TrialPeriod;
    /**
     * The MaxFailedPayments
     * Meta information extracted from the WSDL
     * - documentation: The max number of payments the buyer can fail before this Recurring Payments profile is cancelled
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxFailedPayments;
    /**
     * The ActivationDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ActivationDetailsType
     */
    public $ActivationDetails;
    /**
     * The AutoBillOutstandingAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AutoBillOutstandingAmount;
    /**
     * Constructor method for ScheduleDetailsType
     * @uses ScheduleDetailsType::setDescription()
     * @uses ScheduleDetailsType::setPaymentPeriod()
     * @uses ScheduleDetailsType::setTrialPeriod()
     * @uses ScheduleDetailsType::setMaxFailedPayments()
     * @uses ScheduleDetailsType::setActivationDetails()
     * @uses ScheduleDetailsType::setAutoBillOutstandingAmount()
     * @param string $description
     * @param \PayPal\StructType\BillingPeriodDetailsType $paymentPeriod
     * @param \PayPal\StructType\BillingPeriodDetailsType $trialPeriod
     * @param int $maxFailedPayments
     * @param \PayPal\StructType\ActivationDetailsType $activationDetails
     * @param string $autoBillOutstandingAmount
     */
    public function __construct($description = null, \PayPal\StructType\BillingPeriodDetailsType $paymentPeriod = null, \PayPal\StructType\BillingPeriodDetailsType $trialPeriod = null, $maxFailedPayments = null, \PayPal\StructType\ActivationDetailsType $activationDetails = null, $autoBillOutstandingAmount = null)
    {
        $this
            ->setDescription($description)
            ->setPaymentPeriod($paymentPeriod)
            ->setTrialPeriod($trialPeriod)
            ->setMaxFailedPayments($maxFailedPayments)
            ->setActivationDetails($activationDetails)
            ->setAutoBillOutstandingAmount($autoBillOutstandingAmount);
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get PaymentPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType
     */
    public function getPaymentPeriod()
    {
        return $this->PaymentPeriod;
    }
    /**
     * Set PaymentPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType $paymentPeriod
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function setPaymentPeriod(\PayPal\StructType\BillingPeriodDetailsType $paymentPeriod = null)
    {
        $this->PaymentPeriod = $paymentPeriod;
        return $this;
    }
    /**
     * Get TrialPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType|null
     */
    public function getTrialPeriod()
    {
        return $this->TrialPeriod;
    }
    /**
     * Set TrialPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType $trialPeriod
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function setTrialPeriod(\PayPal\StructType\BillingPeriodDetailsType $trialPeriod = null)
    {
        $this->TrialPeriod = $trialPeriod;
        return $this;
    }
    /**
     * Get MaxFailedPayments value
     * @return int|null
     */
    public function getMaxFailedPayments()
    {
        return $this->MaxFailedPayments;
    }
    /**
     * Set MaxFailedPayments value
     * @param int $maxFailedPayments
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function setMaxFailedPayments($maxFailedPayments = null)
    {
        // validation for constraint: int
        if (!is_null($maxFailedPayments) && !(is_int($maxFailedPayments) || ctype_digit($maxFailedPayments))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxFailedPayments, true), gettype($maxFailedPayments)), __LINE__);
        }
        $this->MaxFailedPayments = $maxFailedPayments;
        return $this;
    }
    /**
     * Get ActivationDetails value
     * @return \PayPal\StructType\ActivationDetailsType|null
     */
    public function getActivationDetails()
    {
        return $this->ActivationDetails;
    }
    /**
     * Set ActivationDetails value
     * @param \PayPal\StructType\ActivationDetailsType $activationDetails
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function setActivationDetails(\PayPal\StructType\ActivationDetailsType $activationDetails = null)
    {
        $this->ActivationDetails = $activationDetails;
        return $this;
    }
    /**
     * Get AutoBillOutstandingAmount value
     * @return string|null
     */
    public function getAutoBillOutstandingAmount()
    {
        return $this->AutoBillOutstandingAmount;
    }
    /**
     * Set AutoBillOutstandingAmount value
     * @uses \PayPal\EnumType\AutoBillType::valueIsValid()
     * @uses \PayPal\EnumType\AutoBillType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $autoBillOutstandingAmount
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function setAutoBillOutstandingAmount($autoBillOutstandingAmount = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AutoBillType::valueIsValid($autoBillOutstandingAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AutoBillType', is_array($autoBillOutstandingAmount) ? implode(', ', $autoBillOutstandingAmount) : var_export($autoBillOutstandingAmount, true), implode(', ', \PayPal\EnumType\AutoBillType::getValidValues())), __LINE__);
        }
        $this->AutoBillOutstandingAmount = $autoBillOutstandingAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ScheduleDetailsType
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
