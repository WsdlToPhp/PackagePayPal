<?php

namespace PayPal\EnumType;

/**
 * This class stands for DetailLevelCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: DetailLevelCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DetailLevelCodeType
{
    /**
     * Constant for value 'ReturnAll'
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ItemReturnDescription'
     * @return string 'ItemReturnDescription'
     */
    const VALUE_ITEM_RETURN_DESCRIPTION = 'ItemReturnDescription';
    /**
     * Constant for value 'ItemReturnAttributes'
     * @return string 'ItemReturnAttributes'
     */
    const VALUE_ITEM_RETURN_ATTRIBUTES = 'ItemReturnAttributes';
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
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_ITEM_RETURN_DESCRIPTION
     * @uses self::VALUE_ITEM_RETURN_ATTRIBUTES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURN_ALL,
            self::VALUE_ITEM_RETURN_DESCRIPTION,
            self::VALUE_ITEM_RETURN_ATTRIBUTES,
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
