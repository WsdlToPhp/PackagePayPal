<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FundingSourceDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FundingSourceDetailsType extends AbstractStructBase
{
    /**
     * The AllowPushFunding
     * Meta informations extracted from the WSDL
     * - documentation: Allowable values: 0,1 The value 1 indicates that the customer can accept push funding, and 0 means they cannot. Optional Character length and limitations: One single-byte numeric character.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowPushFunding;
    /**
     * The UserSelectedFundingSource
     * Meta informations extracted from the WSDL
     * - documentation: Allowable values: ELV, CreditCard, ChinaUnionPay, BML, Finance, Qiwi This element could be used to specify the perered funding option for a guest users. It has effect only if LandingPage element is set to Billing. Otherwise it will
     * be ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserSelectedFundingSource;
    /**
     * Constructor method for FundingSourceDetailsType
     * @uses FundingSourceDetailsType::setAllowPushFunding()
     * @uses FundingSourceDetailsType::setUserSelectedFundingSource()
     * @param string $allowPushFunding
     * @param string $userSelectedFundingSource
     */
    public function __construct($allowPushFunding = null, $userSelectedFundingSource = null)
    {
        $this
            ->setAllowPushFunding($allowPushFunding)
            ->setUserSelectedFundingSource($userSelectedFundingSource);
    }
    /**
     * Get AllowPushFunding value
     * @return string|null
     */
    public function getAllowPushFunding()
    {
        return $this->AllowPushFunding;
    }
    /**
     * Set AllowPushFunding value
     * @param string $allowPushFunding
     * @return \PayPal\StructType\FundingSourceDetailsType
     */
    public function setAllowPushFunding($allowPushFunding = null)
    {
        // validation for constraint: string
        if (!is_null($allowPushFunding) && !is_string($allowPushFunding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allowPushFunding)), __LINE__);
        }
        $this->AllowPushFunding = $allowPushFunding;
        return $this;
    }
    /**
     * Get UserSelectedFundingSource value
     * @return string|null
     */
    public function getUserSelectedFundingSource()
    {
        return $this->UserSelectedFundingSource;
    }
    /**
     * Set UserSelectedFundingSource value
     * @uses \PayPal\EnumType\UserSelectedFundingSourceType::valueIsValid()
     * @uses \PayPal\EnumType\UserSelectedFundingSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userSelectedFundingSource
     * @return \PayPal\StructType\FundingSourceDetailsType
     */
    public function setUserSelectedFundingSource($userSelectedFundingSource = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\UserSelectedFundingSourceType::valueIsValid($userSelectedFundingSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $userSelectedFundingSource, implode(', ', \PayPal\EnumType\UserSelectedFundingSourceType::getValidValues())), __LINE__);
        }
        $this->UserSelectedFundingSource = $userSelectedFundingSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FundingSourceDetailsType
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
