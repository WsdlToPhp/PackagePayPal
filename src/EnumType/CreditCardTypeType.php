<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CreditCardTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type declaration to be used by other schemas. This is the credit card type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreditCardTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Visa'
     * @return string 'Visa'
     */
    const VALUE_VISA = 'Visa';
    /**
     * Constant for value 'MasterCard'
     * @return string 'MasterCard'
     */
    const VALUE_MASTER_CARD = 'MasterCard';
    /**
     * Constant for value 'Discover'
     * @return string 'Discover'
     */
    const VALUE_DISCOVER = 'Discover';
    /**
     * Constant for value 'Amex'
     * @return string 'Amex'
     */
    const VALUE_AMEX = 'Amex';
    /**
     * Constant for value 'Switch'
     * @return string 'Switch'
     */
    const VALUE_SWITCH = 'Switch';
    /**
     * Constant for value 'Solo'
     * @return string 'Solo'
     */
    const VALUE_SOLO = 'Solo';
    /**
     * Constant for value 'Maestro'
     * @return string 'Maestro'
     */
    const VALUE_MAESTRO = 'Maestro';
    /**
     * Return allowed values
     * @uses self::VALUE_VISA
     * @uses self::VALUE_MASTER_CARD
     * @uses self::VALUE_DISCOVER
     * @uses self::VALUE_AMEX
     * @uses self::VALUE_SWITCH
     * @uses self::VALUE_SOLO
     * @uses self::VALUE_MAESTRO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VISA,
            self::VALUE_MASTER_CARD,
            self::VALUE_DISCOVER,
            self::VALUE_AMEX,
            self::VALUE_SWITCH,
            self::VALUE_SOLO,
            self::VALUE_MAESTRO,
        );
    }
}
