<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CoupleType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines couple relationship type between buckets
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CoupleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LifeTime'
     * Meta information extracted from the WSDL
     * - documentation: The relation between buckets are for lifetime. Any post-transaction action on one affects other as well.
     * @return string 'LifeTime'
     */
    const VALUE_LIFE_TIME = 'LifeTime';
    /**
     * Return allowed values
     * @uses self::VALUE_LIFE_TIME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIFE_TIME,
        );
    }
}
