<?php

namespace PayPal\EnumType;

/**
 * This class stands for AverageMonthlyVolumeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: AverageMonthlyVolumeType Enumeration Meaning AverageMonthlyVolume-Not-Applicable AverageMonthlyVolume-Range1 Less than $1,000 USD AverageMonthlyVolume-Range2 $1,000 USD to $5,000 USD AverageMonthlyVolume-Range3 $5,000 USD to $25,000
 * USD AverageMonthlyVolume-Range4 $25,000 USD to $100,000 USD AverageMonthlyVolume-Range5 $100,000 USD to $1,000,000 USD AverageMonthlyVolume-Range6 More than $1,000,000 USD
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AverageMonthlyVolumeType
{
    /**
     * Constant for value 'AverageMonthlyVolume-Not-Applicable'
     * @return string 'AverageMonthlyVolume-Not-Applicable'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_NOT_APPLICABLE = 'AverageMonthlyVolume-Not-Applicable';
    /**
     * Constant for value 'AverageMonthlyVolume-Range1'
     * @return string 'AverageMonthlyVolume-Range1'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_1 = 'AverageMonthlyVolume-Range1';
    /**
     * Constant for value 'AverageMonthlyVolume-Range2'
     * @return string 'AverageMonthlyVolume-Range2'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_2 = 'AverageMonthlyVolume-Range2';
    /**
     * Constant for value 'AverageMonthlyVolume-Range3'
     * @return string 'AverageMonthlyVolume-Range3'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_3 = 'AverageMonthlyVolume-Range3';
    /**
     * Constant for value 'AverageMonthlyVolume-Range4'
     * @return string 'AverageMonthlyVolume-Range4'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_4 = 'AverageMonthlyVolume-Range4';
    /**
     * Constant for value 'AverageMonthlyVolume-Range5'
     * @return string 'AverageMonthlyVolume-Range5'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_5 = 'AverageMonthlyVolume-Range5';
    /**
     * Constant for value 'AverageMonthlyVolume-Range6'
     * @return string 'AverageMonthlyVolume-Range6'
     */
    const VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_6 = 'AverageMonthlyVolume-Range6';
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
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_NOT_APPLICABLE
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_1
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_2
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_3
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_4
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_5
     * @uses self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_6
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AVERAGE_MONTHLY_VOLUME_NOT_APPLICABLE,
            self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_1,
            self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_2,
            self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_3,
            self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_4,
            self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_5,
            self::VALUE_AVERAGE_MONTHLY_VOLUME_RANGE_6,
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
