<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentCategoryType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Category of payment like international shipping
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentCategoryType
{
    /**
     * Constant for value 'InternationalShipping'
     * @return string 'InternationalShipping'
     */
    const VALUE_INTERNATIONAL_SHIPPING = 'InternationalShipping';
    /**
     * Constant for value 'LocalDelivery'
     * @return string 'LocalDelivery'
     */
    const VALUE_LOCAL_DELIVERY = 'LocalDelivery';
    /**
     * Constant for value 'BOPIS'
     * @return string 'BOPIS'
     */
    const VALUE_BOPIS = 'BOPIS';
    /**
     * Constant for value 'PUDO'
     * @return string 'PUDO'
     */
    const VALUE_PUDO = 'PUDO';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
