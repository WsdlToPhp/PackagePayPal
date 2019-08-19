<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalAccountType StructType
 * Meta information extracted from the WSDL
 * - documentation: The AdditionalAccount component represents historical data related to accounts that the user held with a country of residency other than the current one. eBay users can have one active account at a time. For users who change their
 * country of residency and modify their eBay registration to reflect this change, the new country of residence becomes the currently active account. Any account associated with a previous country is treated as an additional account. Because the
 * currency for these additional accounts are different than the active account, each additional account includes an indicator of the currency for that account. Users who never change their country of residence will not have any additional accounts.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AdditionalAccountType extends AbstractStructBase
{
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - ref: ns:Balance
     * @var \PayPal\StructType\AmountType
     */
    public $Balance;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - ref: ns:Currency
     * @var string
     */
    public $Currency;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - ref: ns:AccountCode
     * @var string
     */
    public $AccountCode;
    /**
     * Constructor method for AdditionalAccountType
     * @uses AdditionalAccountType::setBalance()
     * @uses AdditionalAccountType::setCurrency()
     * @uses AdditionalAccountType::setAccountCode()
     * @param \PayPal\StructType\AmountType $balance
     * @param string $currency
     * @param string $accountCode
     */
    public function __construct(\PayPal\StructType\AmountType $balance = null, $currency = null, $accountCode = null)
    {
        $this
            ->setBalance($balance)
            ->setCurrency($currency)
            ->setAccountCode($accountCode);
    }
    /**
     * Get Balance value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \PayPal\StructType\AmountType $balance
     * @return \PayPal\StructType\AdditionalAccountType
     */
    public function setBalance(\PayPal\StructType\AmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \PayPal\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \PayPal\StructType\AdditionalAccountType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CurrencyCodeType', is_array($currency) ? implode(', ', $currency) : var_export($currency, true), implode(', ', \PayPal\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \PayPal\StructType\AdditionalAccountType
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AdditionalAccountType
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
