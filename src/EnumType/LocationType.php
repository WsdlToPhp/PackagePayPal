<?php

namespace PayPal\EnumType;

/**
 * This class stands for LocationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Location Type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LocationType
{
    /**
     * Constant for value 'Consumer'
     * @return string 'Consumer'
     */
    const VALUE_CONSUMER = 'Consumer';
    /**
     * Constant for value 'Store'
     * @return string 'Store'
     */
    const VALUE_STORE = 'Store';
    /**
     * Constant for value 'PickupDropoff'
     * @return string 'PickupDropoff'
     */
    const VALUE_PICKUP_DROPOFF = 'PickupDropoff';
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
     * @uses self::VALUE_CONSUMER
     * @uses self::VALUE_STORE
     * @uses self::VALUE_PICKUP_DROPOFF
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSUMER,
            self::VALUE_STORE,
            self::VALUE_PICKUP_DROPOFF,
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
