<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveDetailsType extends AbstractStructBase
{
    /**
     * The UniqueIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Unique Identifier consisting of redemption code, user friendly descripotion, incentive type, campaign code, incenitve application order and site redeemed on.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueIdentifier;
    /**
     * The SiteAppliedOn
     * Meta informations extracted from the WSDL
     * - documentation: Defines if the incentive has been applied on Ebay or PayPal.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteAppliedOn;
    /**
     * The TotalDiscountAmount
     * Meta informations extracted from the WSDL
     * - documentation: The total discount amount for the incentive, summation of discounts up across all the buckets/items.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TotalDiscountAmount;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Status of incentive processing. Sussess or Error.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - documentation: Error code if there are any errors. Zero otherwise.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ErrorCode;
    /**
     * The IncentiveAppliedDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details of incentive application on individual bucket/item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveAppliedDetailsType[]
     */
    public $IncentiveAppliedDetails;
    /**
     * Constructor method for IncentiveDetailsType
     * @uses IncentiveDetailsType::setUniqueIdentifier()
     * @uses IncentiveDetailsType::setSiteAppliedOn()
     * @uses IncentiveDetailsType::setTotalDiscountAmount()
     * @uses IncentiveDetailsType::setStatus()
     * @uses IncentiveDetailsType::setErrorCode()
     * @uses IncentiveDetailsType::setIncentiveAppliedDetails()
     * @param string $uniqueIdentifier
     * @param string $siteAppliedOn
     * @param \PayPal\StructType\BasicAmountType $totalDiscountAmount
     * @param string $status
     * @param int $errorCode
     * @param \PayPal\StructType\IncentiveAppliedDetailsType[] $incentiveAppliedDetails
     */
    public function __construct($uniqueIdentifier = null, $siteAppliedOn = null, \PayPal\StructType\BasicAmountType $totalDiscountAmount = null, $status = null, $errorCode = null, array $incentiveAppliedDetails = array())
    {
        $this
            ->setUniqueIdentifier($uniqueIdentifier)
            ->setSiteAppliedOn($siteAppliedOn)
            ->setTotalDiscountAmount($totalDiscountAmount)
            ->setStatus($status)
            ->setErrorCode($errorCode)
            ->setIncentiveAppliedDetails($incentiveAppliedDetails);
    }
    /**
     * Get UniqueIdentifier value
     * @return string|null
     */
    public function getUniqueIdentifier()
    {
        return $this->UniqueIdentifier;
    }
    /**
     * Set UniqueIdentifier value
     * @param string $uniqueIdentifier
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function setUniqueIdentifier($uniqueIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueIdentifier) && !is_string($uniqueIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueIdentifier)), __LINE__);
        }
        $this->UniqueIdentifier = $uniqueIdentifier;
        return $this;
    }
    /**
     * Get SiteAppliedOn value
     * @return string|null
     */
    public function getSiteAppliedOn()
    {
        return $this->SiteAppliedOn;
    }
    /**
     * Set SiteAppliedOn value
     * @uses \PayPal\EnumType\IncentiveSiteAppliedOnType::valueIsValid()
     * @uses \PayPal\EnumType\IncentiveSiteAppliedOnType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $siteAppliedOn
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function setSiteAppliedOn($siteAppliedOn = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\IncentiveSiteAppliedOnType::valueIsValid($siteAppliedOn)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $siteAppliedOn, implode(', ', \PayPal\EnumType\IncentiveSiteAppliedOnType::getValidValues())), __LINE__);
        }
        $this->SiteAppliedOn = $siteAppliedOn;
        return $this;
    }
    /**
     * Get TotalDiscountAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTotalDiscountAmount()
    {
        return $this->TotalDiscountAmount;
    }
    /**
     * Set TotalDiscountAmount value
     * @param \PayPal\StructType\BasicAmountType $totalDiscountAmount
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function setTotalDiscountAmount(\PayPal\StructType\BasicAmountType $totalDiscountAmount = null)
    {
        $this->TotalDiscountAmount = $totalDiscountAmount;
        return $this;
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
     * @uses \PayPal\EnumType\IncentiveAppliedStatusType::valueIsValid()
     * @uses \PayPal\EnumType\IncentiveAppliedStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\IncentiveAppliedStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \PayPal\EnumType\IncentiveAppliedStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !is_numeric($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get IncentiveAppliedDetails value
     * @return \PayPal\StructType\IncentiveAppliedDetailsType[]|null
     */
    public function getIncentiveAppliedDetails()
    {
        return $this->IncentiveAppliedDetails;
    }
    /**
     * Set IncentiveAppliedDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveAppliedDetailsType[] $incentiveAppliedDetails
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function setIncentiveAppliedDetails(array $incentiveAppliedDetails = array())
    {
        foreach ($incentiveAppliedDetails as $incentiveDetailsTypeIncentiveAppliedDetailsItem) {
            // validation for constraint: itemType
            if (!$incentiveDetailsTypeIncentiveAppliedDetailsItem instanceof \PayPal\StructType\IncentiveAppliedDetailsType) {
                throw new \InvalidArgumentException(sprintf('The IncentiveAppliedDetails property can only contain items of \PayPal\StructType\IncentiveAppliedDetailsType, "%s" given', is_object($incentiveDetailsTypeIncentiveAppliedDetailsItem) ? get_class($incentiveDetailsTypeIncentiveAppliedDetailsItem) : gettype($incentiveDetailsTypeIncentiveAppliedDetailsItem)), __LINE__);
            }
        }
        $this->IncentiveAppliedDetails = $incentiveAppliedDetails;
        return $this;
    }
    /**
     * Add item to IncentiveAppliedDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveAppliedDetailsType $item
     * @return \PayPal\StructType\IncentiveDetailsType
     */
    public function addToIncentiveAppliedDetails(\PayPal\StructType\IncentiveAppliedDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveAppliedDetailsType) {
            throw new \InvalidArgumentException(sprintf('The IncentiveAppliedDetails property can only contain items of \PayPal\StructType\IncentiveAppliedDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IncentiveAppliedDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveDetailsType
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
