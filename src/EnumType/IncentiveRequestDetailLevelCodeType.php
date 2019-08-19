<?php

namespace PayPal\EnumType;

/**
 * This class stands for IncentiveRequestDetailLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: IncentiveRequestDetailLevelType This identifies the granularity of information requested by the client application. This information will be used to define the contents and details of the response.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveRequestDetailLevelCodeType
{
    /**
     * Constant for value 'Aggregated'
     * @return string 'Aggregated'
     */
    const VALUE_AGGREGATED = 'Aggregated';
    /**
     * Constant for value 'Detail'
     * @return string 'Detail'
     */
    const VALUE_DETAIL = 'Detail';
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
     * @uses self::VALUE_AGGREGATED
     * @uses self::VALUE_DETAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AGGREGATED,
            self::VALUE_DETAIL,
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
