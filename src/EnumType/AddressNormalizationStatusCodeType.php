<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressNormalizationStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Normalization Status of the Address
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressNormalizationStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Normalized'
     * @return string 'Normalized'
     */
    const VALUE_NORMALIZED = 'Normalized';
    /**
     * Constant for value 'Unnormalized'
     * @return string 'Unnormalized'
     */
    const VALUE_UNNORMALIZED = 'Unnormalized';
    /**
     * Constant for value 'UserPreferred'
     * @return string 'UserPreferred'
     */
    const VALUE_USER_PREFERRED = 'UserPreferred';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_NORMALIZED
     * @uses self::VALUE_UNNORMALIZED
     * @uses self::VALUE_USER_PREFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NORMALIZED,
            self::VALUE_UNNORMALIZED,
            self::VALUE_USER_PREFERRED,
        );
    }
}
