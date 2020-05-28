<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBoardingDetailsResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBoardingDetailsResponseDetailsType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of merchant's onboarding process: CompletedCancelledPending Character length and limitations: Eight alphabetic characters
     * @var string
     */
    public $Status;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: Date the boarding process started
     * @var string
     */
    public $StartDate;
    /**
     * The LastUpdated
     * Meta information extracted from the WSDL
     * - documentation: Date the merchantâs status or progress was last updated
     * @var string
     */
    public $LastUpdated;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason for merchantâs cancellation of sign-up. Character length and limitations: 1,024 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The ProgramName
     * @var string
     */
    public $ProgramName;
    /**
     * The ProgramCode
     * @var string
     */
    public $ProgramCode;
    /**
     * The CampaignID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CampaignID;
    /**
     * The UserWithdrawalLimit
     * Meta information extracted from the WSDL
     * - documentation: Indicates if there is a limitation on the amount of money the business can withdraw from PayPal
     * - minOccurs: 0
     * @var string
     */
    public $UserWithdrawalLimit;
    /**
     * The PartnerCustom
     * Meta information extracted from the WSDL
     * - documentation: Custom information you set on the EnterBoarding API call Character length and limitations: 256 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $PartnerCustom;
    /**
     * The AccountOwner
     * Meta information extracted from the WSDL
     * - documentation: Details about the owner of the account
     * - minOccurs: 0
     * @var \PayPal\StructType\PayerInfoType
     */
    public $AccountOwner;
    /**
     * The Credentials
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs PayPal API credentials
     * - minOccurs: 0
     * @var \PayPal\StructType\APICredentialsType
     */
    public $Credentials;
    /**
     * The ConfigureAPIs
     * Meta information extracted from the WSDL
     * - documentation: The APIs that this merchant has granted the business partner permission to call on his behalf. For example: SetExpressCheckout,GetExpressCheckoutDetails,DoExpressCheckoutPayment
     * - minOccurs: 0
     * @var string
     */
    public $ConfigureAPIs;
    /**
     * The EmailVerificationStatus
     * Meta information extracted from the WSDL
     * - documentation: Primary email verification status. Confirmed, Unconfirmed
     * - minOccurs: 0
     * @var string
     */
    public $EmailVerificationStatus;
    /**
     * The VettingStatus
     * Meta information extracted from the WSDL
     * - documentation: Gives VettingStatus - Pending, Cancelled, Approved, UnderReview Character length and limitations: 256 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $VettingStatus;
    /**
     * The BankAccountVerificationStatus
     * Meta information extracted from the WSDL
     * - documentation: Gives BankAccountVerificationStatus - Added, Confirmed Character length and limitations: 256 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $BankAccountVerificationStatus;
    /**
     * Constructor method for GetBoardingDetailsResponseDetailsType
     * @uses GetBoardingDetailsResponseDetailsType::setStatus()
     * @uses GetBoardingDetailsResponseDetailsType::setStartDate()
     * @uses GetBoardingDetailsResponseDetailsType::setLastUpdated()
     * @uses GetBoardingDetailsResponseDetailsType::setReason()
     * @uses GetBoardingDetailsResponseDetailsType::setProgramName()
     * @uses GetBoardingDetailsResponseDetailsType::setProgramCode()
     * @uses GetBoardingDetailsResponseDetailsType::setCampaignID()
     * @uses GetBoardingDetailsResponseDetailsType::setUserWithdrawalLimit()
     * @uses GetBoardingDetailsResponseDetailsType::setPartnerCustom()
     * @uses GetBoardingDetailsResponseDetailsType::setAccountOwner()
     * @uses GetBoardingDetailsResponseDetailsType::setCredentials()
     * @uses GetBoardingDetailsResponseDetailsType::setConfigureAPIs()
     * @uses GetBoardingDetailsResponseDetailsType::setEmailVerificationStatus()
     * @uses GetBoardingDetailsResponseDetailsType::setVettingStatus()
     * @uses GetBoardingDetailsResponseDetailsType::setBankAccountVerificationStatus()
     * @param string $status
     * @param string $startDate
     * @param string $lastUpdated
     * @param string $reason
     * @param string $programName
     * @param string $programCode
     * @param string $campaignID
     * @param string $userWithdrawalLimit
     * @param string $partnerCustom
     * @param \PayPal\StructType\PayerInfoType $accountOwner
     * @param \PayPal\StructType\APICredentialsType $credentials
     * @param string $configureAPIs
     * @param string $emailVerificationStatus
     * @param string $vettingStatus
     * @param string $bankAccountVerificationStatus
     */
    public function __construct($status = null, $startDate = null, $lastUpdated = null, $reason = null, $programName = null, $programCode = null, $campaignID = null, $userWithdrawalLimit = null, $partnerCustom = null, \PayPal\StructType\PayerInfoType $accountOwner = null, \PayPal\StructType\APICredentialsType $credentials = null, $configureAPIs = null, $emailVerificationStatus = null, $vettingStatus = null, $bankAccountVerificationStatus = null)
    {
        $this
            ->setStatus($status)
            ->setStartDate($startDate)
            ->setLastUpdated($lastUpdated)
            ->setReason($reason)
            ->setProgramName($programName)
            ->setProgramCode($programCode)
            ->setCampaignID($campaignID)
            ->setUserWithdrawalLimit($userWithdrawalLimit)
            ->setPartnerCustom($partnerCustom)
            ->setAccountOwner($accountOwner)
            ->setCredentials($credentials)
            ->setConfigureAPIs($configureAPIs)
            ->setEmailVerificationStatus($emailVerificationStatus)
            ->setVettingStatus($vettingStatus)
            ->setBankAccountVerificationStatus($bankAccountVerificationStatus);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \PayPal\EnumType\BoardingStatusType::valueIsValid()
     * @uses \PayPal\EnumType\BoardingStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BoardingStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BoardingStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \PayPal\EnumType\BoardingStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdated, true), gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setProgramName($programName = null)
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programName, true), gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        return $this;
    }
    /**
     * Get ProgramCode value
     * @return string|null
     */
    public function getProgramCode()
    {
        return $this->ProgramCode;
    }
    /**
     * Set ProgramCode value
     * @param string $programCode
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setProgramCode($programCode = null)
    {
        // validation for constraint: string
        if (!is_null($programCode) && !is_string($programCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programCode, true), gettype($programCode)), __LINE__);
        }
        $this->ProgramCode = $programCode;
        return $this;
    }
    /**
     * Get CampaignID value
     * @return string|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param string $campaignID
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: string
        if (!is_null($campaignID) && !is_string($campaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignID, true), gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
    }
    /**
     * Get UserWithdrawalLimit value
     * @return string|null
     */
    public function getUserWithdrawalLimit()
    {
        return $this->UserWithdrawalLimit;
    }
    /**
     * Set UserWithdrawalLimit value
     * @uses \PayPal\EnumType\UserWithdrawalLimitTypeType::valueIsValid()
     * @uses \PayPal\EnumType\UserWithdrawalLimitTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userWithdrawalLimit
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setUserWithdrawalLimit($userWithdrawalLimit = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\UserWithdrawalLimitTypeType::valueIsValid($userWithdrawalLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\UserWithdrawalLimitTypeType', is_array($userWithdrawalLimit) ? implode(', ', $userWithdrawalLimit) : var_export($userWithdrawalLimit, true), implode(', ', \PayPal\EnumType\UserWithdrawalLimitTypeType::getValidValues())), __LINE__);
        }
        $this->UserWithdrawalLimit = $userWithdrawalLimit;
        return $this;
    }
    /**
     * Get PartnerCustom value
     * @return string|null
     */
    public function getPartnerCustom()
    {
        return $this->PartnerCustom;
    }
    /**
     * Set PartnerCustom value
     * @param string $partnerCustom
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setPartnerCustom($partnerCustom = null)
    {
        // validation for constraint: string
        if (!is_null($partnerCustom) && !is_string($partnerCustom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCustom, true), gettype($partnerCustom)), __LINE__);
        }
        $this->PartnerCustom = $partnerCustom;
        return $this;
    }
    /**
     * Get AccountOwner value
     * @return \PayPal\StructType\PayerInfoType|null
     */
    public function getAccountOwner()
    {
        return $this->AccountOwner;
    }
    /**
     * Set AccountOwner value
     * @param \PayPal\StructType\PayerInfoType $accountOwner
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setAccountOwner(\PayPal\StructType\PayerInfoType $accountOwner = null)
    {
        $this->AccountOwner = $accountOwner;
        return $this;
    }
    /**
     * Get Credentials value
     * @return \PayPal\StructType\APICredentialsType|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \PayPal\StructType\APICredentialsType $credentials
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setCredentials(\PayPal\StructType\APICredentialsType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get ConfigureAPIs value
     * @return string|null
     */
    public function getConfigureAPIs()
    {
        return $this->ConfigureAPIs;
    }
    /**
     * Set ConfigureAPIs value
     * @param string $configureAPIs
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setConfigureAPIs($configureAPIs = null)
    {
        // validation for constraint: string
        if (!is_null($configureAPIs) && !is_string($configureAPIs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configureAPIs, true), gettype($configureAPIs)), __LINE__);
        }
        $this->ConfigureAPIs = $configureAPIs;
        return $this;
    }
    /**
     * Get EmailVerificationStatus value
     * @return string|null
     */
    public function getEmailVerificationStatus()
    {
        return $this->EmailVerificationStatus;
    }
    /**
     * Set EmailVerificationStatus value
     * @param string $emailVerificationStatus
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setEmailVerificationStatus($emailVerificationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($emailVerificationStatus) && !is_string($emailVerificationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailVerificationStatus, true), gettype($emailVerificationStatus)), __LINE__);
        }
        $this->EmailVerificationStatus = $emailVerificationStatus;
        return $this;
    }
    /**
     * Get VettingStatus value
     * @return string|null
     */
    public function getVettingStatus()
    {
        return $this->VettingStatus;
    }
    /**
     * Set VettingStatus value
     * @param string $vettingStatus
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setVettingStatus($vettingStatus = null)
    {
        // validation for constraint: string
        if (!is_null($vettingStatus) && !is_string($vettingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vettingStatus, true), gettype($vettingStatus)), __LINE__);
        }
        $this->VettingStatus = $vettingStatus;
        return $this;
    }
    /**
     * Get BankAccountVerificationStatus value
     * @return string|null
     */
    public function getBankAccountVerificationStatus()
    {
        return $this->BankAccountVerificationStatus;
    }
    /**
     * Set BankAccountVerificationStatus value
     * @param string $bankAccountVerificationStatus
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function setBankAccountVerificationStatus($bankAccountVerificationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountVerificationStatus) && !is_string($bankAccountVerificationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountVerificationStatus, true), gettype($bankAccountVerificationStatus)), __LINE__);
        }
        $this->BankAccountVerificationStatus = $bankAccountVerificationStatus;
        return $this;
    }
}
