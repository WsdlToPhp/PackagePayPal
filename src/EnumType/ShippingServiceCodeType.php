<?php

namespace PayPal\EnumType;

/**
 * This class stands for ShippingServiceCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ShippingServiceCodeType These are the possible codes to describe insurance option as part of shipping service.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingServiceCodeType
{
    /**
     * Constant for value 'UPSGround'
     * @return string 'UPSGround'
     */
    const VALUE_UPSGROUND = 'UPSGround';
    /**
     * Constant for value 'UPS3rdDay'
     * @return string 'UPS3rdDay'
     */
    const VALUE_UPS_3_RD_DAY = 'UPS3rdDay';
    /**
     * Constant for value 'UPS2ndDay'
     * @return string 'UPS2ndDay'
     */
    const VALUE_UPS_2_ND_DAY = 'UPS2ndDay';
    /**
     * Constant for value 'UPSNextDay'
     * @return string 'UPSNextDay'
     */
    const VALUE_UPSNEXT_DAY = 'UPSNextDay';
    /**
     * Constant for value 'USPSPriority'
     * @return string 'USPSPriority'
     */
    const VALUE_USPSPRIORITY = 'USPSPriority';
    /**
     * Constant for value 'USPSParcel'
     * @return string 'USPSParcel'
     */
    const VALUE_USPSPARCEL = 'USPSParcel';
    /**
     * Constant for value 'USPSMedia'
     * @return string 'USPSMedia'
     */
    const VALUE_USPSMEDIA = 'USPSMedia';
    /**
     * Constant for value 'USPSFirstClass'
     * @return string 'USPSFirstClass'
     */
    const VALUE_USPSFIRST_CLASS = 'USPSFirstClass';
    /**
     * Constant for value 'ShippingMethodStandard'
     * @return string 'ShippingMethodStandard'
     */
    const VALUE_SHIPPING_METHOD_STANDARD = 'ShippingMethodStandard';
    /**
     * Constant for value 'ShippingMethodExpress'
     * @return string 'ShippingMethodExpress'
     */
    const VALUE_SHIPPING_METHOD_EXPRESS = 'ShippingMethodExpress';
    /**
     * Constant for value 'ShippingMethodNextDay'
     * @return string 'ShippingMethodNextDay'
     */
    const VALUE_SHIPPING_METHOD_NEXT_DAY = 'ShippingMethodNextDay';
    /**
     * Constant for value 'USPSExpressMail'
     * @return string 'USPSExpressMail'
     */
    const VALUE_USPSEXPRESS_MAIL = 'USPSExpressMail';
    /**
     * Constant for value 'USPSGround'
     * @return string 'USPSGround'
     */
    const VALUE_USPSGROUND = 'USPSGround';
    /**
     * Constant for value 'Download'
     * @return string 'Download'
     */
    const VALUE_DOWNLOAD = 'Download';
    /**
     * Constant for value 'WillCall_Or_Pickup'
     * @return string 'WillCall_Or_Pickup'
     */
    const VALUE_WILL_CALL_OR_PICKUP = 'WillCall_Or_Pickup';
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
     * @uses self::VALUE_UPSGROUND
     * @uses self::VALUE_UPS_3_RD_DAY
     * @uses self::VALUE_UPS_2_ND_DAY
     * @uses self::VALUE_UPSNEXT_DAY
     * @uses self::VALUE_USPSPRIORITY
     * @uses self::VALUE_USPSPARCEL
     * @uses self::VALUE_USPSMEDIA
     * @uses self::VALUE_USPSFIRST_CLASS
     * @uses self::VALUE_SHIPPING_METHOD_STANDARD
     * @uses self::VALUE_SHIPPING_METHOD_EXPRESS
     * @uses self::VALUE_SHIPPING_METHOD_NEXT_DAY
     * @uses self::VALUE_USPSEXPRESS_MAIL
     * @uses self::VALUE_USPSGROUND
     * @uses self::VALUE_DOWNLOAD
     * @uses self::VALUE_WILL_CALL_OR_PICKUP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UPSGROUND,
            self::VALUE_UPS_3_RD_DAY,
            self::VALUE_UPS_2_ND_DAY,
            self::VALUE_UPSNEXT_DAY,
            self::VALUE_USPSPRIORITY,
            self::VALUE_USPSPARCEL,
            self::VALUE_USPSMEDIA,
            self::VALUE_USPSFIRST_CLASS,
            self::VALUE_SHIPPING_METHOD_STANDARD,
            self::VALUE_SHIPPING_METHOD_EXPRESS,
            self::VALUE_SHIPPING_METHOD_NEXT_DAY,
            self::VALUE_USPSEXPRESS_MAIL,
            self::VALUE_USPSGROUND,
            self::VALUE_DOWNLOAD,
            self::VALUE_WILL_CALL_OR_PICKUP,
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
