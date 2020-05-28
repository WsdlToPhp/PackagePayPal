<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MobilePaymentCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: MobilePaymentCodeType These are the accepted types of mobile payments
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MobilePaymentCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'P2P'
     * @return string 'P2P'
     */
    const VALUE_P_2_P = 'P2P';
    /**
     * Constant for value 'HardGoods'
     * @return string 'HardGoods'
     */
    const VALUE_HARD_GOODS = 'HardGoods';
    /**
     * Constant for value 'Donation'
     * @return string 'Donation'
     */
    const VALUE_DONATION = 'Donation';
    /**
     * Constant for value 'TopUp'
     * @return string 'TopUp'
     */
    const VALUE_TOP_UP = 'TopUp';
    /**
     * Return allowed values
     * @uses self::VALUE_P_2_P
     * @uses self::VALUE_HARD_GOODS
     * @uses self::VALUE_DONATION
     * @uses self::VALUE_TOP_UP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_P_2_P,
            self::VALUE_HARD_GOODS,
            self::VALUE_DONATION,
            self::VALUE_TOP_UP,
        );
    }
}
