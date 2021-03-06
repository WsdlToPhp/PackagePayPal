<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRecurringPaymentsProfileResponseDetailsType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateRecurringPaymentsProfileResponseDetailsType extends AbstractStructBase
{
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: Recurring Billing Profile ID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileID;
    /**
     * The ProfileStatus
     * Meta information extracted from the WSDL
     * - documentation: Recurring Billing Profile Status
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileStatus;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Transaction id from DCC initial payment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The DCCProcessorResponse
     * Meta information extracted from the WSDL
     * - documentation: Response from DCC initial payment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DCCProcessorResponse;
    /**
     * The DCCReturnCode
     * Meta information extracted from the WSDL
     * - documentation: Return code if DCC initial payment fails
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DCCReturnCode;
    /**
     * The PendingReason
     * Meta information extracted from the WSDL
     * - documentation: Interchange Plus Pricing pending reason
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PendingReason;
    /**
     * Constructor method for CreateRecurringPaymentsProfileResponseDetailsType
     * @uses CreateRecurringPaymentsProfileResponseDetailsType::setProfileID()
     * @uses CreateRecurringPaymentsProfileResponseDetailsType::setProfileStatus()
     * @uses CreateRecurringPaymentsProfileResponseDetailsType::setTransactionID()
     * @uses CreateRecurringPaymentsProfileResponseDetailsType::setDCCProcessorResponse()
     * @uses CreateRecurringPaymentsProfileResponseDetailsType::setDCCReturnCode()
     * @uses CreateRecurringPaymentsProfileResponseDetailsType::setPendingReason()
     * @param string $profileID
     * @param string $profileStatus
     * @param string $transactionID
     * @param string $dCCProcessorResponse
     * @param string $dCCReturnCode
     * @param string $pendingReason
     */
    public function __construct($profileID = null, $profileStatus = null, $transactionID = null, $dCCProcessorResponse = null, $dCCReturnCode = null, $pendingReason = null)
    {
        $this
            ->setProfileID($profileID)
            ->setProfileStatus($profileStatus)
            ->setTransactionID($transactionID)
            ->setDCCProcessorResponse($dCCProcessorResponse)
            ->setDCCReturnCode($dCCReturnCode)
            ->setPendingReason($pendingReason);
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
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
     * Get ProfileStatus value
     * @return string|null
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
     */
    public function setProfileStatus($profileStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RecurringPaymentsProfileStatusType::valueIsValid($profileStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\RecurringPaymentsProfileStatusType', is_array($profileStatus) ? implode(', ', $profileStatus) : var_export($profileStatus, true), implode(', ', \PayPal\EnumType\RecurringPaymentsProfileStatusType::getValidValues())), __LINE__);
        }
        $this->ProfileStatus = $profileStatus;
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
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
     * Get DCCProcessorResponse value
     * @return string|null
     */
    public function getDCCProcessorResponse()
    {
        return $this->DCCProcessorResponse;
    }
    /**
     * Set DCCProcessorResponse value
     * @param string $dCCProcessorResponse
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
     */
    public function setDCCProcessorResponse($dCCProcessorResponse = null)
    {
        // validation for constraint: string
        if (!is_null($dCCProcessorResponse) && !is_string($dCCProcessorResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCCProcessorResponse, true), gettype($dCCProcessorResponse)), __LINE__);
        }
        $this->DCCProcessorResponse = $dCCProcessorResponse;
        return $this;
    }
    /**
     * Get DCCReturnCode value
     * @return string|null
     */
    public function getDCCReturnCode()
    {
        return $this->DCCReturnCode;
    }
    /**
     * Set DCCReturnCode value
     * @param string $dCCReturnCode
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
     */
    public function setDCCReturnCode($dCCReturnCode = null)
    {
        // validation for constraint: string
        if (!is_null($dCCReturnCode) && !is_string($dCCReturnCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCCReturnCode, true), gettype($dCCReturnCode)), __LINE__);
        }
        $this->DCCReturnCode = $dCCReturnCode;
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
     * @param string $pendingReason
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
     */
    public function setPendingReason($pendingReason = null)
    {
        // validation for constraint: string
        if (!is_null($pendingReason) && !is_string($pendingReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pendingReason, true), gettype($pendingReason)), __LINE__);
        }
        $this->PendingReason = $pendingReason;
        return $this;
    }
}
