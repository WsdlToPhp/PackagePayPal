<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRecurringPaymentsProfileRequestDetailsType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateRecurringPaymentsProfileRequestDetailsType extends AbstractStructBase
{
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileID;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The SubscriberName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SubscriberName;
    /**
     * The SubscriberShippingAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $SubscriberShippingAddress;
    /**
     * The ProfileReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileReference;
    /**
     * The AdditionalBillingCycles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalBillingCycles;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The ShippingAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingAmount;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxAmount;
    /**
     * The OutstandingBalance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $OutstandingBalance;
    /**
     * The AutoBillOutstandingAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AutoBillOutstandingAmount;
    /**
     * The MaxFailedPayments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxFailedPayments;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - documentation: Information about the credit card to be charged (required if Direct Payment)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\CreditCardDetailsType
     */
    public $CreditCard;
    /**
     * The BillingStartDate
     * Meta information extracted from the WSDL
     * - documentation: When does this Profile begin billing?
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingStartDate;
    /**
     * The TrialPeriod
     * Meta information extracted from the WSDL
     * - documentation: Trial period of this schedule
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingPeriodDetailsType_Update
     */
    public $TrialPeriod;
    /**
     * The PaymentPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingPeriodDetailsType_Update
     */
    public $PaymentPeriod;
    /**
     * Constructor method for UpdateRecurringPaymentsProfileRequestDetailsType
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setProfileID()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setNote()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setDescription()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setSubscriberName()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setSubscriberShippingAddress()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setProfileReference()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setAdditionalBillingCycles()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setAmount()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setShippingAmount()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setTaxAmount()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setOutstandingBalance()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setAutoBillOutstandingAmount()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setMaxFailedPayments()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setCreditCard()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setBillingStartDate()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setTrialPeriod()
     * @uses UpdateRecurringPaymentsProfileRequestDetailsType::setPaymentPeriod()
     * @param string $profileID
     * @param string $note
     * @param string $description
     * @param string $subscriberName
     * @param \PayPal\StructType\AddressType $subscriberShippingAddress
     * @param string $profileReference
     * @param int $additionalBillingCycles
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @param \PayPal\StructType\BasicAmountType $outstandingBalance
     * @param string $autoBillOutstandingAmount
     * @param int $maxFailedPayments
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @param string $billingStartDate
     * @param \PayPal\StructType\BillingPeriodDetailsType_Update $trialPeriod
     * @param \PayPal\StructType\BillingPeriodDetailsType_Update $paymentPeriod
     */
    public function __construct($profileID = null, $note = null, $description = null, $subscriberName = null, \PayPal\StructType\AddressType $subscriberShippingAddress = null, $profileReference = null, $additionalBillingCycles = null, \PayPal\StructType\BasicAmountType $amount = null, \PayPal\StructType\BasicAmountType $shippingAmount = null, \PayPal\StructType\BasicAmountType $taxAmount = null, \PayPal\StructType\BasicAmountType $outstandingBalance = null, $autoBillOutstandingAmount = null, $maxFailedPayments = null, \PayPal\StructType\CreditCardDetailsType $creditCard = null, $billingStartDate = null, \PayPal\StructType\BillingPeriodDetailsType_Update $trialPeriod = null, \PayPal\StructType\BillingPeriodDetailsType_Update $paymentPeriod = null)
    {
        $this
            ->setProfileID($profileID)
            ->setNote($note)
            ->setDescription($description)
            ->setSubscriberName($subscriberName)
            ->setSubscriberShippingAddress($subscriberShippingAddress)
            ->setProfileReference($profileReference)
            ->setAdditionalBillingCycles($additionalBillingCycles)
            ->setAmount($amount)
            ->setShippingAmount($shippingAmount)
            ->setTaxAmount($taxAmount)
            ->setOutstandingBalance($outstandingBalance)
            ->setAutoBillOutstandingAmount($autoBillOutstandingAmount)
            ->setMaxFailedPayments($maxFailedPayments)
            ->setCreditCard($creditCard)
            ->setBillingStartDate($billingStartDate)
            ->setTrialPeriod($trialPeriod)
            ->setPaymentPeriod($paymentPeriod);
    }
    /**
     * Get ProfileID value
     * @return string
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
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
     * Get SubscriberName value
     * @return string|null
     */
    public function getSubscriberName()
    {
        return $this->SubscriberName;
    }
    /**
     * Set SubscriberName value
     * @param string $subscriberName
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setSubscriberName($subscriberName = null)
    {
        // validation for constraint: string
        if (!is_null($subscriberName) && !is_string($subscriberName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriberName, true), gettype($subscriberName)), __LINE__);
        }
        $this->SubscriberName = $subscriberName;
        return $this;
    }
    /**
     * Get SubscriberShippingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getSubscriberShippingAddress()
    {
        return $this->SubscriberShippingAddress;
    }
    /**
     * Set SubscriberShippingAddress value
     * @param \PayPal\StructType\AddressType $subscriberShippingAddress
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setSubscriberShippingAddress(\PayPal\StructType\AddressType $subscriberShippingAddress = null)
    {
        $this->SubscriberShippingAddress = $subscriberShippingAddress;
        return $this;
    }
    /**
     * Get ProfileReference value
     * @return string|null
     */
    public function getProfileReference()
    {
        return $this->ProfileReference;
    }
    /**
     * Set ProfileReference value
     * @param string $profileReference
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setProfileReference($profileReference = null)
    {
        // validation for constraint: string
        if (!is_null($profileReference) && !is_string($profileReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileReference, true), gettype($profileReference)), __LINE__);
        }
        $this->ProfileReference = $profileReference;
        return $this;
    }
    /**
     * Get AdditionalBillingCycles value
     * @return int|null
     */
    public function getAdditionalBillingCycles()
    {
        return $this->AdditionalBillingCycles;
    }
    /**
     * Set AdditionalBillingCycles value
     * @param int $additionalBillingCycles
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setAdditionalBillingCycles($additionalBillingCycles = null)
    {
        // validation for constraint: int
        if (!is_null($additionalBillingCycles) && !(is_int($additionalBillingCycles) || ctype_digit($additionalBillingCycles))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionalBillingCycles, true), gettype($additionalBillingCycles)), __LINE__);
        }
        $this->AdditionalBillingCycles = $additionalBillingCycles;
        return $this;
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ShippingAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingAmount()
    {
        return $this->ShippingAmount;
    }
    /**
     * Set ShippingAmount value
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setShippingAmount(\PayPal\StructType\BasicAmountType $shippingAmount = null)
    {
        $this->ShippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setTaxAmount(\PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get OutstandingBalance value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getOutstandingBalance()
    {
        return $this->OutstandingBalance;
    }
    /**
     * Set OutstandingBalance value
     * @param \PayPal\StructType\BasicAmountType $outstandingBalance
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setOutstandingBalance(\PayPal\StructType\BasicAmountType $outstandingBalance = null)
    {
        $this->OutstandingBalance = $outstandingBalance;
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
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
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
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
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
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setCreditCard(\PayPal\StructType\CreditCardDetailsType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get BillingStartDate value
     * @return string|null
     */
    public function getBillingStartDate()
    {
        return $this->BillingStartDate;
    }
    /**
     * Set BillingStartDate value
     * @param string $billingStartDate
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setBillingStartDate($billingStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($billingStartDate) && !is_string($billingStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingStartDate, true), gettype($billingStartDate)), __LINE__);
        }
        $this->BillingStartDate = $billingStartDate;
        return $this;
    }
    /**
     * Get TrialPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType_Update|null
     */
    public function getTrialPeriod()
    {
        return $this->TrialPeriod;
    }
    /**
     * Set TrialPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType_Update $trialPeriod
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setTrialPeriod(\PayPal\StructType\BillingPeriodDetailsType_Update $trialPeriod = null)
    {
        $this->TrialPeriod = $trialPeriod;
        return $this;
    }
    /**
     * Get PaymentPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType_Update|null
     */
    public function getPaymentPeriod()
    {
        return $this->PaymentPeriod;
    }
    /**
     * Set PaymentPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType_Update $paymentPeriod
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public function setPaymentPeriod(\PayPal\StructType\BillingPeriodDetailsType_Update $paymentPeriod = null)
    {
        $this->PaymentPeriod = $paymentPeriod;
        return $this;
    }
}
