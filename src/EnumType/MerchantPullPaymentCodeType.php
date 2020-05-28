<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MerchantPullPaymentCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: MerchantPullPaymentCodeType Type of Payment to be initiated by the merchant
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantPullPaymentCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Any'
     * @return string 'Any'
     */
    const VALUE_ANY = 'Any';
    /**
     * Constant for value 'InstantOnly'
     * @return string 'InstantOnly'
     */
    const VALUE_INSTANT_ONLY = 'InstantOnly';
    /**
     * Constant for value 'EcheckOnly'
     * @return string 'EcheckOnly'
     */
    const VALUE_ECHECK_ONLY = 'EcheckOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_ANY
     * @uses self::VALUE_INSTANT_ONLY
     * @uses self::VALUE_ECHECK_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_INSTANT_ONLY,
            self::VALUE_ECHECK_ONLY,
        );
    }
}
