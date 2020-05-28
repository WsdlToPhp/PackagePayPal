<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncentiveRequestDetailLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: IncentiveRequestDetailLevelType This identifies the granularity of information requested by the client application. This information will be used to define the contents and details of the response.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveRequestDetailLevelCodeType extends AbstractStructEnumBase
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
}
