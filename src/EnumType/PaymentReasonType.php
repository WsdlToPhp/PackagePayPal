<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentReasonType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentReasonType This is the Payment Reason type (used by DoRT and SetEC for Refund of PI transaction, eBay return shipment, external dispute)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentReasonType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Refund'
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'ReturnShipment'
     * Meta information extracted from the WSDL
     * - documentation: Identifies a BA flow for return shipment
     * @return string 'ReturnShipment'
     */
    const VALUE_RETURN_SHIPMENT = 'ReturnShipment';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_RETURN_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_REFUND,
            self::VALUE_RETURN_SHIPMENT,
        );
    }
}
