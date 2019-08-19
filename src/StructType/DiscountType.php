<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes discount information
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DiscountType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: amount discountedOptional
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Item nameOptional Character length and limits: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: description of the discountOptional Character length and limits: 127 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The RedeemedOfferType
     * Meta information extracted from the WSDL
     * - documentation: offer typeOptional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedeemedOfferType;
    /**
     * The RedeemedOfferID
     * Meta information extracted from the WSDL
     * - documentation: offer IDOptional Character length and limits: 64 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RedeemedOfferID;
    /**
     * Constructor method for DiscountType
     * @uses DiscountType::setAmount()
     * @uses DiscountType::setName()
     * @uses DiscountType::setDescription()
     * @uses DiscountType::setRedeemedOfferType()
     * @uses DiscountType::setRedeemedOfferID()
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $name
     * @param string $description
     * @param string $redeemedOfferType
     * @param string $redeemedOfferID
     */
    public function __construct(\PayPal\StructType\BasicAmountType $amount = null, $name = null, $description = null, $redeemedOfferType = null, $redeemedOfferID = null)
    {
        $this
            ->setAmount($amount)
            ->setName($name)
            ->setDescription($description)
            ->setRedeemedOfferType($redeemedOfferType)
            ->setRedeemedOfferID($redeemedOfferID);
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\DiscountType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
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
     * @return \PayPal\StructType\DiscountType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \PayPal\StructType\DiscountType
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
     * @return \PayPal\StructType\DiscountType
     */
    public function setRedeemedOfferType($redeemedOfferType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RedeemedOfferType::valueIsValid($redeemedOfferType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\RedeemedOfferType', is_array($redeemedOfferType) ? implode(', ', $redeemedOfferType) : var_export($redeemedOfferType, true), implode(', ', \PayPal\EnumType\RedeemedOfferType::getValidValues())), __LINE__);
        }
        $this->RedeemedOfferType = $redeemedOfferType;
        return $this;
    }
    /**
     * Get RedeemedOfferID value
     * @return string|null
     */
    public function getRedeemedOfferID()
    {
        return $this->RedeemedOfferID;
    }
    /**
     * Set RedeemedOfferID value
     * @param string $redeemedOfferID
     * @return \PayPal\StructType\DiscountType
     */
    public function setRedeemedOfferID($redeemedOfferID = null)
    {
        // validation for constraint: string
        if (!is_null($redeemedOfferID) && !is_string($redeemedOfferID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redeemedOfferID, true), gettype($redeemedOfferID)), __LINE__);
        }
        $this->RedeemedOfferID = $redeemedOfferID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DiscountType
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
