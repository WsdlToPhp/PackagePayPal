<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes discount information.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DiscountInfoType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: (Optional)Item name. Character length and limits: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: (Optional)Description of the discount. Character length and limits: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: (Optional)Amount discounted. The value includes an amount and a 3-character currency code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The RedeemedOfferType
     * Meta informations extracted from the WSDL
     * - documentation: (Optional)Offer type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedeemedOfferType;
    /**
     * The RedeemedOfferId
     * Meta informations extracted from the WSDL
     * - documentation: (Optional)Offer ID. Character length and limits: 64 single-byte characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedeemedOfferId;
    /**
     * The PointsAccrued
     * Meta informations extracted from the WSDL
     * - documentation: (Optional)Loyalty points accrued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $PointsAccrued;
    /**
     * Constructor method for DiscountInfoType
     * @uses DiscountInfoType::setName()
     * @uses DiscountInfoType::setDescription()
     * @uses DiscountInfoType::setAmount()
     * @uses DiscountInfoType::setRedeemedOfferType()
     * @uses DiscountInfoType::setRedeemedOfferId()
     * @uses DiscountInfoType::setPointsAccrued()
     * @param string $name
     * @param string $description
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $redeemedOfferType
     * @param string $redeemedOfferId
     * @param float $pointsAccrued
     */
    public function __construct($name = null, $description = null, \PayPal\StructType\BasicAmountType $amount = null, $redeemedOfferType = null, $redeemedOfferId = null, $pointsAccrued = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setAmount($amount)
            ->setRedeemedOfferType($redeemedOfferType)
            ->setRedeemedOfferId($redeemedOfferId)
            ->setPointsAccrued($pointsAccrued);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \PayPal\StructType\DiscountInfoType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \PayPal\StructType\DiscountInfoType
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
     * @return \PayPal\StructType\DiscountInfoType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get RedeemedOfferType value
     * @return string|null
     */
    public function getRedeemedOfferType()
    {
        return $this->RedeemedOfferType;
    }
    /**
     * Set RedeemedOfferType value
     * @uses \PayPal\EnumType\RedeemedOfferType::valueIsValid()
     * @uses \PayPal\EnumType\RedeemedOfferType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $redeemedOfferType
     * @return \PayPal\StructType\DiscountInfoType
     */
    public function setRedeemedOfferType($redeemedOfferType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RedeemedOfferType::valueIsValid($redeemedOfferType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $redeemedOfferType, implode(', ', \PayPal\EnumType\RedeemedOfferType::getValidValues())), __LINE__);
        }
        $this->RedeemedOfferType = $redeemedOfferType;
        return $this;
    }
    /**
     * Get RedeemedOfferId value
     * @return string|null
     */
    public function getRedeemedOfferId()
    {
        return $this->RedeemedOfferId;
    }
    /**
     * Set RedeemedOfferId value
     * @param string $redeemedOfferId
     * @return \PayPal\StructType\DiscountInfoType
     */
    public function setRedeemedOfferId($redeemedOfferId = null)
    {
        // validation for constraint: string
        if (!is_null($redeemedOfferId) && !is_string($redeemedOfferId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redeemedOfferId)), __LINE__);
        }
        $this->RedeemedOfferId = $redeemedOfferId;
        return $this;
    }
    /**
     * Get PointsAccrued value
     * @return float|null
     */
    public function getPointsAccrued()
    {
        return $this->PointsAccrued;
    }
    /**
     * Set PointsAccrued value
     * @param float $pointsAccrued
     * @return \PayPal\StructType\DiscountInfoType
     */
    public function setPointsAccrued($pointsAccrued = null)
    {
        $this->PointsAccrued = $pointsAccrued;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DiscountInfoType
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