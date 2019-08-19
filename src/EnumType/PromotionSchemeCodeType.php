<?php

namespace PayPal\EnumType;

/**
 * This class stands for PromotionSchemeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Cross Promotion Context Promotion Scheme.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotionSchemeCodeType
{
    /**
     * Constant for value 'ItemToItem'
     * Meta information extracted from the WSDL
     * - documentation: Item to Item Promotional Scheme
     * @return string 'ItemToItem'
     */
    const VALUE_ITEM_TO_ITEM = 'ItemToItem';
    /**
     * Constant for value 'ItemToStoreCat'
     * Meta information extracted from the WSDL
     * - documentation: Item to Item Store Scheme
     * @return string 'ItemToStoreCat'
     */
    const VALUE_ITEM_TO_STORE_CAT = 'ItemToStoreCat';
    /**
     * Constant for value 'StoreToStoreCat'
     * Meta information extracted from the WSDL
     * - documentation: Store to Store Scheme
     * @return string 'StoreToStoreCat'
     */
    const VALUE_STORE_TO_STORE_CAT = 'StoreToStoreCat';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved. Do not use.
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
     * @uses self::VALUE_ITEM_TO_ITEM
     * @uses self::VALUE_ITEM_TO_STORE_CAT
     * @uses self::VALUE_STORE_TO_STORE_CAT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_TO_ITEM,
            self::VALUE_ITEM_TO_STORE_CAT,
            self::VALUE_STORE_TO_STORE_CAT,
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
