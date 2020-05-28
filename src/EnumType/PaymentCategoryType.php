<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentCategoryType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Category of payment like international shipping
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentCategoryType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'InternationalShipping'
     * Meta information extracted from the WSDL
     * - documentation: Internalnation Shipping
     * @return string 'InternationalShipping'
     */
    const VALUE_INTERNATIONAL_SHIPPING = 'InternationalShipping';
    /**
     * Constant for value 'LocalDelivery'
     * Meta information extracted from the WSDL
     * - documentation: LocalDelivery
     * @return string 'LocalDelivery'
     */
    const VALUE_LOCAL_DELIVERY = 'LocalDelivery';
    /**
     * Constant for value 'BOPIS'
     * Meta information extracted from the WSDL
     * - documentation: BOPIS
     * @return string 'BOPIS'
     */
    const VALUE_BOPIS = 'BOPIS';
    /**
     * Constant for value 'PUDO'
     * Meta information extracted from the WSDL
     * - documentation: PUDO
     * @return string 'PUDO'
     */
    const VALUE_PUDO = 'PUDO';
    /**
     * Return allowed values
     * @uses self::VALUE_INTERNATIONAL_SHIPPING
     * @uses self::VALUE_LOCAL_DELIVERY
     * @uses self::VALUE_BOPIS
     * @uses self::VALUE_PUDO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INTERNATIONAL_SHIPPING,
            self::VALUE_LOCAL_DELIVERY,
            self::VALUE_BOPIS,
            self::VALUE_PUDO,
        );
    }
}
