<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecurringPaymentsProfileDetailsResponseDetailsType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetRecurringPaymentsProfileDetailsResponseDetailsType extends AbstractStructBase
{
    /**
     * The ProfileID
     * Meta informations extracted from the WSDL
     * - documentation: Recurring Billing Profile ID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileID;
    /**
     * The ProfileStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileStatus;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Description;
    /**
     * The AutoBillOutstandingAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AutoBillOutstandingAmount;
    /**
     * The MaxFailedPayments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MaxFailedPayments;
    /**
     * The RecurringPaymentsProfileDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public $RecurringPaymentsProfileDetails;
    /**
     * The RecurringPaymentsSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public $RecurringPaymentsSummary;
    /**
     * The CurrentRecurringPaymentsPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingPeriodDetailsType
     */
    public $CurrentRecurringPaymentsPeriod;
    /**
     * The CreditCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\CreditCardDetailsType
     */
    public $CreditCard;
    /**
     * The TrialRecurringPaymentsPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingPeriodDetailsType
     */
    public $TrialRecurringPaymentsPeriod;
    /**
     * The RegularRecurringPaymentsPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingPeriodDetailsType
     */
    public $RegularRecurringPaymentsPeriod;
    /**
     * The TrialAmountPaid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TrialAmountPaid;
    /**
     * The RegularAmountPaid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $RegularAmountPaid;
    /**
     * The AggregateAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $AggregateAmount;
    /**
     * The AggregateOptionalAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $AggregateOptionalAmount;
    /**
     * The FinalPaymentDueDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FinalPaymentDueDate;
    /**
     * The SoftDescriptor
     * Meta informations extracted from the WSDL
     * - documentation: Use this optional parameter to pass in your business name and other data describing the transaction. Optional This information is usually displayed in the account holder's statement. Example: RedCross Haiti, RedCross Uganda,
     * Realtor.com dues, Realtor.com list fee Length 25 characters. Alphanumeric characters and dash(-), dot(.), asterisk(*), space( ) On the customer's statement, an asterisk is used to separate the DBA name and product name. The asterisk delimiter can
     * appear in position 4, 8, or 13.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * The SoftDescriptorCity
     * Meta informations extracted from the WSDL
     * - documentation: Use this optional parameter to pass information about how consumer should contact the merchant. Optional This information is usually displayed in the account holder's statement. For Ecom trx: phone, email or URL is allowed For Retail
     * trx: only the actual city is allowed For details on allowed characters in Soft Descriptor City refer to the API documentation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptorCity;
    /**
     * Constructor method for GetRecurringPaymentsProfileDetailsResponseDetailsType
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setProfileID()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setProfileStatus()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setDescription()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setAutoBillOutstandingAmount()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setMaxFailedPayments()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setRecurringPaymentsProfileDetails()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setRecurringPaymentsSummary()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setCurrentRecurringPaymentsPeriod()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setCreditCard()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setTrialRecurringPaymentsPeriod()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setRegularRecurringPaymentsPeriod()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setTrialAmountPaid()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setRegularAmountPaid()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setAggregateAmount()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setAggregateOptionalAmount()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setFinalPaymentDueDate()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setSoftDescriptor()
     * @uses GetRecurringPaymentsProfileDetailsResponseDetailsType::setSoftDescriptorCity()
     * @param string $profileID
     * @param string $profileStatus
     * @param string $description
     * @param string $autoBillOutstandingAmount
     * @param int $maxFailedPayments
     * @param \PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails
     * @param \PayPal\StructType\RecurringPaymentsSummaryType $recurringPaymentsSummary
     * @param \PayPal\StructType\BillingPeriodDetailsType $currentRecurringPaymentsPeriod
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @param \PayPal\StructType\BillingPeriodDetailsType $trialRecurringPaymentsPeriod
     * @param \PayPal\StructType\BillingPeriodDetailsType $regularRecurringPaymentsPeriod
     * @param \PayPal\StructType\BasicAmountType $trialAmountPaid
     * @param \PayPal\StructType\BasicAmountType $regularAmountPaid
     * @param \PayPal\StructType\BasicAmountType $aggregateAmount
     * @param \PayPal\StructType\BasicAmountType $aggregateOptionalAmount
     * @param string $finalPaymentDueDate
     * @param string $softDescriptor
     * @param string $softDescriptorCity
     */
    public function __construct($profileID = null, $profileStatus = null, $description = null, $autoBillOutstandingAmount = null, $maxFailedPayments = null, \PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails = null, \PayPal\StructType\RecurringPaymentsSummaryType $recurringPaymentsSummary = null, \PayPal\StructType\BillingPeriodDetailsType $currentRecurringPaymentsPeriod = null, \PayPal\StructType\CreditCardDetailsType $creditCard = null, \PayPal\StructType\BillingPeriodDetailsType $trialRecurringPaymentsPeriod = null, \PayPal\StructType\BillingPeriodDetailsType $regularRecurringPaymentsPeriod = null, \PayPal\StructType\BasicAmountType $trialAmountPaid = null, \PayPal\StructType\BasicAmountType $regularAmountPaid = null, \PayPal\StructType\BasicAmountType $aggregateAmount = null, \PayPal\StructType\BasicAmountType $aggregateOptionalAmount = null, $finalPaymentDueDate = null, $softDescriptor = null, $softDescriptorCity = null)
    {
        $this
            ->setProfileID($profileID)
            ->setProfileStatus($profileStatus)
            ->setDescription($description)
            ->setAutoBillOutstandingAmount($autoBillOutstandingAmount)
            ->setMaxFailedPayments($maxFailedPayments)
            ->setRecurringPaymentsProfileDetails($recurringPaymentsProfileDetails)
            ->setRecurringPaymentsSummary($recurringPaymentsSummary)
            ->setCurrentRecurringPaymentsPeriod($currentRecurringPaymentsPeriod)
            ->setCreditCard($creditCard)
            ->setTrialRecurringPaymentsPeriod($trialRecurringPaymentsPeriod)
            ->setRegularRecurringPaymentsPeriod($regularRecurringPaymentsPeriod)
            ->setTrialAmountPaid($trialAmountPaid)
            ->setRegularAmountPaid($regularAmountPaid)
            ->setAggregateAmount($aggregateAmount)
            ->setAggregateOptionalAmount($aggregateOptionalAmount)
            ->setFinalPaymentDueDate($finalPaymentDueDate)
            ->setSoftDescriptor($softDescriptor)
            ->setSoftDescriptorCity($softDescriptorCity);
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
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
    /**
     * Get ProfileStatus value
     * @return string
     */
    public function getProfileStatus()
    {
        return $this->ProfileStatus;
    }
    /**
     * Set ProfileStatus value
     * @uses \PayPal\EnumType\RecurringPaymentsProfileStatusType::valueIsValid()
     * @uses \PayPal\EnumType\RecurringPaymentsProfileStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $profileStatus
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setProfileStatus($profileStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RecurringPaymentsProfileStatusType::valueIsValid($profileStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $profileStatus, implode(', ', \PayPal\EnumType\RecurringPaymentsProfileStatusType::getValidValues())), __LINE__);
        }
        $this->ProfileStatus = $profileStatus;
        return $this;
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
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get AutoBillOutstandingAmount value
     * @return string
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
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setAutoBillOutstandingAmount($autoBillOutstandingAmount = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AutoBillType::valueIsValid($autoBillOutstandingAmount)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $autoBillOutstandingAmount, implode(', ', \PayPal\EnumType\AutoBillType::getValidValues())), __LINE__);
        }
        $this->AutoBillOutstandingAmount = $autoBillOutstandingAmount;
        return $this;
    }
    /**
     * Get MaxFailedPayments value
     * @return int
     */
    public function getMaxFailedPayments()
    {
        return $this->MaxFailedPayments;
    }
    /**
     * Set MaxFailedPayments value
     * @param int $maxFailedPayments
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setMaxFailedPayments($maxFailedPayments = null)
    {
        // validation for constraint: int
        if (!is_null($maxFailedPayments) && !is_numeric($maxFailedPayments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxFailedPayments)), __LINE__);
        }
        $this->MaxFailedPayments = $maxFailedPayments;
        return $this;
    }
    /**
     * Get RecurringPaymentsProfileDetails value
     * @return \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public function getRecurringPaymentsProfileDetails()
    {
        return $this->RecurringPaymentsProfileDetails;
    }
    /**
     * Set RecurringPaymentsProfileDetails value
     * @param \PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setRecurringPaymentsProfileDetails(\PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails = null)
    {
        $this->RecurringPaymentsProfileDetails = $recurringPaymentsProfileDetails;
        return $this;
    }
    /**
     * Get RecurringPaymentsSummary value
     * @return \PayPal\StructType\RecurringPaymentsSummaryType
     */
    public function getRecurringPaymentsSummary()
    {
        return $this->RecurringPaymentsSummary;
    }
    /**
     * Set RecurringPaymentsSummary value
     * @param \PayPal\StructType\RecurringPaymentsSummaryType $recurringPaymentsSummary
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setRecurringPaymentsSummary(\PayPal\StructType\RecurringPaymentsSummaryType $recurringPaymentsSummary = null)
    {
        $this->RecurringPaymentsSummary = $recurringPaymentsSummary;
        return $this;
    }
    /**
     * Get CurrentRecurringPaymentsPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType|null
     */
    public function getCurrentRecurringPaymentsPeriod()
    {
        return $this->CurrentRecurringPaymentsPeriod;
    }
    /**
     * Set CurrentRecurringPaymentsPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType $currentRecurringPaymentsPeriod
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setCurrentRecurringPaymentsPeriod(\PayPal\StructType\BillingPeriodDetailsType $currentRecurringPaymentsPeriod = null)
    {
        $this->CurrentRecurringPaymentsPeriod = $currentRecurringPaymentsPeriod;
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
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setCreditCard(\PayPal\StructType\CreditCardDetailsType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get TrialRecurringPaymentsPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType|null
     */
    public function getTrialRecurringPaymentsPeriod()
    {
        return $this->TrialRecurringPaymentsPeriod;
    }
    /**
     * Set TrialRecurringPaymentsPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType $trialRecurringPaymentsPeriod
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setTrialRecurringPaymentsPeriod(\PayPal\StructType\BillingPeriodDetailsType $trialRecurringPaymentsPeriod = null)
    {
        $this->TrialRecurringPaymentsPeriod = $trialRecurringPaymentsPeriod;
        return $this;
    }
    /**
     * Get RegularRecurringPaymentsPeriod value
     * @return \PayPal\StructType\BillingPeriodDetailsType|null
     */
    public function getRegularRecurringPaymentsPeriod()
    {
        return $this->RegularRecurringPaymentsPeriod;
    }
    /**
     * Set RegularRecurringPaymentsPeriod value
     * @param \PayPal\StructType\BillingPeriodDetailsType $regularRecurringPaymentsPeriod
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setRegularRecurringPaymentsPeriod(\PayPal\StructType\BillingPeriodDetailsType $regularRecurringPaymentsPeriod = null)
    {
        $this->RegularRecurringPaymentsPeriod = $regularRecurringPaymentsPeriod;
        return $this;
    }
    /**
     * Get TrialAmountPaid value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTrialAmountPaid()
    {
        return $this->TrialAmountPaid;
    }
    /**
     * Set TrialAmountPaid value
     * @param \PayPal\StructType\BasicAmountType $trialAmountPaid
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setTrialAmountPaid(\PayPal\StructType\BasicAmountType $trialAmountPaid = null)
    {
        $this->TrialAmountPaid = $trialAmountPaid;
        return $this;
    }
    /**
     * Get RegularAmountPaid value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getRegularAmountPaid()
    {
        return $this->RegularAmountPaid;
    }
    /**
     * Set RegularAmountPaid value
     * @param \PayPal\StructType\BasicAmountType $regularAmountPaid
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setRegularAmountPaid(\PayPal\StructType\BasicAmountType $regularAmountPaid = null)
    {
        $this->RegularAmountPaid = $regularAmountPaid;
        return $this;
    }
    /**
     * Get AggregateAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAggregateAmount()
    {
        return $this->AggregateAmount;
    }
    /**
     * Set AggregateAmount value
     * @param \PayPal\StructType\BasicAmountType $aggregateAmount
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setAggregateAmount(\PayPal\StructType\BasicAmountType $aggregateAmount = null)
    {
        $this->AggregateAmount = $aggregateAmount;
        return $this;
    }
    /**
     * Get AggregateOptionalAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAggregateOptionalAmount()
    {
        return $this->AggregateOptionalAmount;
    }
    /**
     * Set AggregateOptionalAmount value
     * @param \PayPal\StructType\BasicAmountType $aggregateOptionalAmount
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setAggregateOptionalAmount(\PayPal\StructType\BasicAmountType $aggregateOptionalAmount = null)
    {
        $this->AggregateOptionalAmount = $aggregateOptionalAmount;
        return $this;
    }
    /**
     * Get FinalPaymentDueDate value
     * @return string|null
     */
    public function getFinalPaymentDueDate()
    {
        return $this->FinalPaymentDueDate;
    }
    /**
     * Set FinalPaymentDueDate value
     * @param string $finalPaymentDueDate
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setFinalPaymentDueDate($finalPaymentDueDate = null)
    {
        // validation for constraint: string
        if (!is_null($finalPaymentDueDate) && !is_string($finalPaymentDueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($finalPaymentDueDate)), __LINE__);
        }
        $this->FinalPaymentDueDate = $finalPaymentDueDate;
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
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setSoftDescriptor($softDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softDescriptor)), __LINE__);
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
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public function setSoftDescriptorCity($softDescriptorCity = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptorCity) && !is_string($softDescriptorCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softDescriptorCity)), __LINE__);
        }
        $this->SoftDescriptorCity = $softDescriptorCity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
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
