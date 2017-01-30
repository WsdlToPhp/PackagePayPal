<?php

namespace PayPal\EnumType;

/**
 * This class stands for ShippingTermsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ShippingTermsCodeType - Type declaration to be used by other schema's. Shipping terms code describes who pays for the shipping of an item. These are the standard shipping terms, i.e., terms of delivery of an item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingTermsCodeType
{
    /**
     * Constant for value 'SellerPays'
     * @return string 'SellerPays'
     */
    const VALUE_SELLER_PAYS = 'SellerPays';
    /**
     * Constant for value 'BuyerPays'
     * @return string 'BuyerPays'
     */
    const VALUE_BUYER_PAYS = 'BuyerPays';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_SELLER_PAYS
     * @uses self::VALUE_BUYER_PAYS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SELLER_PAYS,
            self::VALUE_BUYER_PAYS,
            self::VALUE_CUSTOM_CODE,
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
