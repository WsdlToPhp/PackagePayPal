<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreVisibilityStatusType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This is to validate input if store should be visible/invisible in the store locator. If Merchant wants a store to be ENABLED, input should be "E". If Merchant wants a store to be DISABLED, input should be "D". If Merchant is not
 * giving any input, it will be taken as "DISABLED"
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class StoreVisibilityStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DISABLE'
     * @return string 'DISABLE'
     */
    const VALUE_DISABLE = 'DISABLE';
    /**
     * Constant for value 'ENABLE'
     * @return string 'ENABLE'
     */
    const VALUE_ENABLE = 'ENABLE';
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLE
     * @uses self::VALUE_ENABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLE,
            self::VALUE_ENABLE,
        );
    }
}
