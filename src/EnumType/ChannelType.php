<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ChannelType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ChannelType - Type declaration to be used by other schemas. This is the PayPal Channel type (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ChannelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Merchant'
     * @return string 'Merchant'
     */
    const VALUE_MERCHANT = 'Merchant';
    /**
     * Constant for value 'eBayItem'
     * @return string 'eBayItem'
     */
    const VALUE_E_BAY_ITEM = 'eBayItem';
    /**
     * Return allowed values
     * @uses self::VALUE_MERCHANT
     * @uses self::VALUE_E_BAY_ITEM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MERCHANT,
            self::VALUE_E_BAY_ITEM,
        );
    }
}
