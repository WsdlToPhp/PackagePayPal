<?php

namespace PayPal\EnumType;

/**
 * This class stands for AverageTransactionPriceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: AverageTransactionPriceType Enumeration Meaning AverageTransactionPrice-Not-Applicable AverageTransactionPrice-Range1 Less than $25 USD AverageTransactionPrice-Range2 $25 USD to $50 USD AverageTransactionPrice-Range3 $50 USD to $100
 * USD AverageTransactionPrice-Range4 $100 USD to $250 USD AverageTransactionPrice-Range5 $250 USD to $500 USD AverageTransactionPrice-Range6 $500 USD to $1,000 USD AverageTransactionPrice-Range7 $1,000 USD to $2,000 USD AverageTransactionPrice-Range8
 * $2,000 USD to $5,000 USD AverageTransactionPrice-Range9 $5,000 USD to $10,000 USD AverageTransactionPrice-Range10 More than $10,000 USD
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AverageTransactionPriceType
{
    /**
     * Constant for value 'AverageTransactionPrice-Not-Applicable'
     * @return string 'AverageTransactionPrice-Not-Applicable'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_NOT_APPLICABLE = 'AverageTransactionPrice-Not-Applicable';
    /**
     * Constant for value 'AverageTransactionPrice-Range1'
     * @return string 'AverageTransactionPrice-Range1'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_1 = 'AverageTransactionPrice-Range1';
    /**
     * Constant for value 'AverageTransactionPrice-Range2'
     * @return string 'AverageTransactionPrice-Range2'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_2 = 'AverageTransactionPrice-Range2';
    /**
     * Constant for value 'AverageTransactionPrice-Range3'
     * @return string 'AverageTransactionPrice-Range3'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_3 = 'AverageTransactionPrice-Range3';
    /**
     * Constant for value 'AverageTransactionPrice-Range4'
     * @return string 'AverageTransactionPrice-Range4'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_4 = 'AverageTransactionPrice-Range4';
    /**
     * Constant for value 'AverageTransactionPrice-Range5'
     * @return string 'AverageTransactionPrice-Range5'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_5 = 'AverageTransactionPrice-Range5';
    /**
     * Constant for value 'AverageTransactionPrice-Range6'
     * @return string 'AverageTransactionPrice-Range6'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_6 = 'AverageTransactionPrice-Range6';
    /**
     * Constant for value 'AverageTransactionPrice-Range7'
     * @return string 'AverageTransactionPrice-Range7'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_7 = 'AverageTransactionPrice-Range7';
    /**
     * Constant for value 'AverageTransactionPrice-Range8'
     * @return string 'AverageTransactionPrice-Range8'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_8 = 'AverageTransactionPrice-Range8';
    /**
     * Constant for value 'AverageTransactionPrice-Range9'
     * @return string 'AverageTransactionPrice-Range9'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_9 = 'AverageTransactionPrice-Range9';
    /**
     * Constant for value 'AverageTransactionPrice-Range10'
     * @return string 'AverageTransactionPrice-Range10'
     */
    const VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_10 = 'AverageTransactionPrice-Range10';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_NOT_APPLICABLE
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_1
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_2
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_3
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_4
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_5
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_6
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_7
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_8
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_9
     * @uses self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_10
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AVERAGE_TRANSACTION_PRICE_NOT_APPLICABLE,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_1,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_2,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_3,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_4,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_5,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_6,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_7,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_8,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_9,
            self::VALUE_AVERAGE_TRANSACTION_PRICE_RANGE_10,
        );
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
