<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AmountType extends AbstractStructBase
{
    /**
     * The currencyID
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $currencyID;
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for AmountType
     * @uses AmountType::setCurrencyID()
     * @uses AmountType::set_()
     * @param string $currencyID
     * @param float $_
     */
    public function __construct($currencyID = null, $_ = null)
    {
        $this
            ->setCurrencyID($currencyID)
            ->set_($_);
    }
    /**
     * Get currencyID value
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }
    /**
     * Set currencyID value
     * @uses \PayPal\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyID
     * @return \PayPal\StructType\AmountType
     */
    public function setCurrencyID($currencyID = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CurrencyCodeType::valueIsValid($currencyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CurrencyCodeType', is_array($currencyID) ? implode(', ', $currencyID) : var_export($currencyID, true), implode(', ', \PayPal\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->currencyID = $currencyID;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \PayPal\StructType\AmountType
     */
    public function set_($_ = null)
    {
        // validation for constraint: float
        if (!is_null($_) && !(is_float($_) || is_numeric($_))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AmountType
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
