<?php

namespace PayPal\EnumType;

/**
 * This class stands for MobilePaymentCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: MobilePaymentCodeType These are the accepted types of mobile payments
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MobilePaymentCodeType
{
    /**
     * Constant for value 'P2P'
     * @return string 'P2P'
     */
    const VALUE_P_2_P = 'P2P';
    /**
     * Constant for value 'HardGoods'
     * @return string 'HardGoods'
     */
    const VALUE_HARD_GOODS = 'HardGoods';
    /**
     * Constant for value 'Donation'
     * @return string 'Donation'
     */
    const VALUE_DONATION = 'Donation';
    /**
     * Constant for value 'TopUp'
     * @return string 'TopUp'
     */
    const VALUE_TOP_UP = 'TopUp';
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
     * @uses self::VALUE_P_2_P
     * @uses self::VALUE_HARD_GOODS
     * @uses self::VALUE_DONATION
     * @uses self::VALUE_TOP_UP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_P_2_P,
            self::VALUE_HARD_GOODS,
            self::VALUE_DONATION,
            self::VALUE_TOP_UP,
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
