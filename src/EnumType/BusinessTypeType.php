<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BusinessTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BusinessTypeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BusinessTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Individual'
     * @return string 'Individual'
     */
    const VALUE_INDIVIDUAL = 'Individual';
    /**
     * Constant for value 'Proprietorship'
     * @return string 'Proprietorship'
     */
    const VALUE_PROPRIETORSHIP = 'Proprietorship';
    /**
     * Constant for value 'Partnership'
     * @return string 'Partnership'
     */
    const VALUE_PARTNERSHIP = 'Partnership';
    /**
     * Constant for value 'Corporation'
     * @return string 'Corporation'
     */
    const VALUE_CORPORATION = 'Corporation';
    /**
     * Constant for value 'Nonprofit'
     * @return string 'Nonprofit'
     */
    const VALUE_NONPROFIT = 'Nonprofit';
    /**
     * Constant for value 'Government'
     * @return string 'Government'
     */
    const VALUE_GOVERNMENT = 'Government';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_INDIVIDUAL
     * @uses self::VALUE_PROPRIETORSHIP
     * @uses self::VALUE_PARTNERSHIP
     * @uses self::VALUE_CORPORATION
     * @uses self::VALUE_NONPROFIT
     * @uses self::VALUE_GOVERNMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_INDIVIDUAL,
            self::VALUE_PROPRIETORSHIP,
            self::VALUE_PARTNERSHIP,
            self::VALUE_CORPORATION,
            self::VALUE_NONPROFIT,
            self::VALUE_GOVERNMENT,
        );
    }
}
