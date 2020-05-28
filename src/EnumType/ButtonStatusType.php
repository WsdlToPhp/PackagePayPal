<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ButtonStatusType EnumType
 * Meta information extracted from the WSDL
 * - documentation: values for subscribe button text
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DELETE'
     * Meta information extracted from the WSDL
     * - documentation: Changes Button Status to DELETE
     * @return string 'DELETE'
     */
    const VALUE_DELETE = 'DELETE';
    /**
     * Return allowed values
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETE,
        );
    }
}
