<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MatchStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: MatchStatusCodeType This is the PayPal (street/zip) match code
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MatchStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Matched'
     * @return string 'Matched'
     */
    const VALUE_MATCHED = 'Matched';
    /**
     * Constant for value 'Unmatched'
     * @return string 'Unmatched'
     */
    const VALUE_UNMATCHED = 'Unmatched';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MATCHED
     * @uses self::VALUE_UNMATCHED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MATCHED,
            self::VALUE_UNMATCHED,
        );
    }
}
