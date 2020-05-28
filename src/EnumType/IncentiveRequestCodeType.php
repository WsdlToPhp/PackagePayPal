<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncentiveRequestCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: IncentiveRequestType This identifies the type of request for the API call. The type of request may be used to determine whether the request is for evaluating incentives in pre-checkout or in-checkout phase.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveRequestCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'InCheckout'
     * @return string 'InCheckout'
     */
    const VALUE_IN_CHECKOUT = 'InCheckout';
    /**
     * Constant for value 'PreCheckout'
     * @return string 'PreCheckout'
     */
    const VALUE_PRE_CHECKOUT = 'PreCheckout';
    /**
     * Return allowed values
     * @uses self::VALUE_IN_CHECKOUT
     * @uses self::VALUE_PRE_CHECKOUT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_CHECKOUT,
            self::VALUE_PRE_CHECKOUT,
        );
    }
}
