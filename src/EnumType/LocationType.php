<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LocationType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Location Type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LocationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Consumer'
     * Meta information extracted from the WSDL
     * - documentation: Consumer
     * @return string 'Consumer'
     */
    const VALUE_CONSUMER = 'Consumer';
    /**
     * Constant for value 'Store'
     * Meta information extracted from the WSDL
     * - documentation: Store
     * @return string 'Store'
     */
    const VALUE_STORE = 'Store';
    /**
     * Constant for value 'PickupDropoff'
     * Meta information extracted from the WSDL
     * - documentation: PickupDropOff
     * @return string 'PickupDropoff'
     */
    const VALUE_PICKUP_DROPOFF = 'PickupDropoff';
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
}
