<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransactionEntityType EnumType
 * Meta information extracted from the WSDL
 * - documentation: TransactionEntityType This is the PayPal DoAuthorization TransactionEntityType code
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionEntityType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Auth'
     * @return string 'Auth'
     */
    const VALUE_AUTH = 'Auth';
    /**
     * Constant for value 'Reauth'
     * @return string 'Reauth'
     */
    const VALUE_REAUTH = 'Reauth';
    /**
     * Constant for value 'Order'
     * @return string 'Order'
     */
    const VALUE_ORDER = 'Order';
    /**
     * Constant for value 'Payment'
     * @return string 'Payment'
     */
    const VALUE_PAYMENT = 'Payment';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_AUTH
     * @uses self::VALUE_REAUTH
     * @uses self::VALUE_ORDER
     * @uses self::VALUE_PAYMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AUTH,
            self::VALUE_REAUTH,
            self::VALUE_ORDER,
            self::VALUE_PAYMENT,
        );
    }
}
