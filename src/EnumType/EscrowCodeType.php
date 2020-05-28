<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EscrowCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: EscrowCodeType These are the possible codes to describe Escrow options.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EscrowCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ByBuyer'
     * Meta information extracted from the WSDL
     * - documentation: By Buyer
     * @return string 'ByBuyer'
     */
    const VALUE_BY_BUYER = 'ByBuyer';
    /**
     * Constant for value 'BySeller'
     * Meta information extracted from the WSDL
     * - documentation: By Seller.
     * @return string 'BySeller'
     */
    const VALUE_BY_SELLER = 'BySeller';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: None.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BY_BUYER
     * @uses self::VALUE_BY_SELLER
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_BUYER,
            self::VALUE_BY_SELLER,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
