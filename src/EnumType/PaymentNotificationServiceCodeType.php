<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentNotificationServiceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentNotificationService For SetPaymentStatus API, this value should always be eBayCN.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentNotificationServiceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'eBayCN'
     * @return string 'eBayCN'
     */
    const VALUE_E_BAY_CN = 'eBayCN';
    /**
     * Return allowed values
     * @uses self::VALUE_E_BAY_CN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_BAY_CN,
        );
    }
}
