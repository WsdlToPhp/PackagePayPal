<?php

namespace PayPal\EnumType;

/**
 * This class stands for BuyerProtectionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BuyerProtectionCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyerProtectionCodeType
{
    /**
     * Constant for value 'ItemIneligible'
     * Meta information extracted from the WSDL
     * - documentation: Item is ineligible (e.g., category not applicable).
     * @return string 'ItemIneligible'
     */
    const VALUE_ITEM_INELIGIBLE = 'ItemIneligible';
    /**
     * Constant for value 'ItemEligible'
     * Meta information extracted from the WSDL
     * - documentation: Item is eligible per standard criteria.
     * @return string 'ItemEligible'
     */
    const VALUE_ITEM_ELIGIBLE = 'ItemEligible';
    /**
     * Constant for value 'ItemMarkedIneligible'
     * Meta information extracted from the WSDL
     * - documentation: Item marked ineligible per special criteria (e.g., seller's account closed).
     * @return string 'ItemMarkedIneligible'
     */
    const VALUE_ITEM_MARKED_INELIGIBLE = 'ItemMarkedIneligible';
    /**
     * Constant for value 'ItemMarkedEligible'
     * Meta information extracted from the WSDL
     * - documentation: Item marked eligible per other criteria.
     * @return string 'ItemMarkedEligible'
     */
    const VALUE_ITEM_MARKED_ELIGIBLE = 'ItemMarkedEligible';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
     * @uses self::VALUE_ITEM_INELIGIBLE
     * @uses self::VALUE_ITEM_ELIGIBLE
     * @uses self::VALUE_ITEM_MARKED_INELIGIBLE
     * @uses self::VALUE_ITEM_MARKED_ELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_INELIGIBLE,
            self::VALUE_ITEM_ELIGIBLE,
            self::VALUE_ITEM_MARKED_INELIGIBLE,
            self::VALUE_ITEM_MARKED_ELIGIBLE,
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
