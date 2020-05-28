<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModifyCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ModifyCodeType This code identifies the types of modification you can make on an object. account.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ModifyCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Dropped'
     * Meta information extracted from the WSDL
     * - documentation: Indicate filed is to be dropped.
     * @return string 'Dropped'
     */
    const VALUE_DROPPED = 'Dropped';
    /**
     * Constant for value 'Modify'
     * Meta information extracted from the WSDL
     * - documentation: Indicate filed is to be modified.
     * @return string 'Modify'
     */
    const VALUE_MODIFY = 'Modify';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DROPPED
     * @uses self::VALUE_MODIFY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DROPPED,
            self::VALUE_MODIFY,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
