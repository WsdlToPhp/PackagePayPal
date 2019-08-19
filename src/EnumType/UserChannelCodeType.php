<?php

namespace PayPal\EnumType;

/**
 * This class stands for UserChannelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: It defines the enumerated types of the user channels defined in biz/User/value_object/Channel.oml
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserChannelCodeType
{
    /**
     * Constant for value 'WEB'
     * @return string 'WEB'
     */
    const VALUE_WEB = 'WEB';
    /**
     * Constant for value 'MOBILE'
     * @return string 'MOBILE'
     */
    const VALUE_MOBILE = 'MOBILE';
    /**
     * Constant for value 'POS'
     * @return string 'POS'
     */
    const VALUE_POS = 'POS';
    /**
     * Constant for value 'KIOSK'
     * @return string 'KIOSK'
     */
    const VALUE_KIOSK = 'KIOSK';
    /**
     * Constant for value 'IHSTB'
     * @return string 'IHSTB'
     */
    const VALUE_IHSTB = 'IHSTB';
    /**
     * Constant for value 'IVR'
     * @return string 'IVR'
     */
    const VALUE_IVR = 'IVR';
    /**
     * Constant for value 'ADMIN'
     * @return string 'ADMIN'
     */
    const VALUE_ADMIN = 'ADMIN';
    /**
     * Constant for value 'CSOPS'
     * @return string 'CSOPS'
     */
    const VALUE_CSOPS = 'CSOPS';
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
     * @uses self::VALUE_WEB
     * @uses self::VALUE_MOBILE
     * @uses self::VALUE_POS
     * @uses self::VALUE_KIOSK
     * @uses self::VALUE_IHSTB
     * @uses self::VALUE_IVR
     * @uses self::VALUE_ADMIN
     * @uses self::VALUE_CSOPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WEB,
            self::VALUE_MOBILE,
            self::VALUE_POS,
            self::VALUE_KIOSK,
            self::VALUE_IHSTB,
            self::VALUE_IVR,
            self::VALUE_ADMIN,
            self::VALUE_CSOPS,
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
