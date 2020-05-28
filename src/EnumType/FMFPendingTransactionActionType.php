<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FMFPendingTransactionActionType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This is various actions that a merchant can take on a FMF Pending Transaction.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FMFPendingTransactionActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Accept'
     * @return string 'Accept'
     */
    const VALUE_ACCEPT = 'Accept';
    /**
     * Constant for value 'Deny'
     * @return string 'Deny'
     */
    const VALUE_DENY = 'Deny';
    /**
     * Return allowed values
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DENY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPT,
            self::VALUE_DENY,
        );
    }
}
