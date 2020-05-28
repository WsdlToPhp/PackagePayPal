<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PercentageRevenueFromOnlineSalesType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PercentageRevenueFromOnlineSalesType Enumeration Meaning PercentageRevenueFromOnlineSales-Not-Applicable PercentageRevenueFromOnlineSales-Range1 Less than 25% PercentageRevenueFromOnlineSales-Range2 25% to 50%
 * PercentageRevenueFromOnlineSales-Range3 50% to 75% PercentageRevenueFromOnlineSales-Range4 75% to 100%
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PercentageRevenueFromOnlineSalesType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PercentageRevenueFromOnlineSales-Not-Applicable'
     * @return string 'PercentageRevenueFromOnlineSales-Not-Applicable'
     */
    const VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_NOT_APPLICABLE = 'PercentageRevenueFromOnlineSales-Not-Applicable';
    /**
     * Constant for value 'PercentageRevenueFromOnlineSales-Range1'
     * @return string 'PercentageRevenueFromOnlineSales-Range1'
     */
    const VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_1 = 'PercentageRevenueFromOnlineSales-Range1';
    /**
     * Constant for value 'PercentageRevenueFromOnlineSales-Range2'
     * @return string 'PercentageRevenueFromOnlineSales-Range2'
     */
    const VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_2 = 'PercentageRevenueFromOnlineSales-Range2';
    /**
     * Constant for value 'PercentageRevenueFromOnlineSales-Range3'
     * @return string 'PercentageRevenueFromOnlineSales-Range3'
     */
    const VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_3 = 'PercentageRevenueFromOnlineSales-Range3';
    /**
     * Constant for value 'PercentageRevenueFromOnlineSales-Range4'
     * @return string 'PercentageRevenueFromOnlineSales-Range4'
     */
    const VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_4 = 'PercentageRevenueFromOnlineSales-Range4';
    /**
     * Return allowed values
     * @uses self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_NOT_APPLICABLE
     * @uses self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_1
     * @uses self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_2
     * @uses self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_3
     * @uses self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_4
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_NOT_APPLICABLE,
            self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_1,
            self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_2,
            self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_3,
            self::VALUE_PERCENTAGE_REVENUE_FROM_ONLINE_SALES_RANGE_4,
        );
    }
}
