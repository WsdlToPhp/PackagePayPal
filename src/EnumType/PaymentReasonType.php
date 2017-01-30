<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentReasonType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentReasonType This is the Payment Reason type (used by DoRT and SetEC for Refund of PI transaction, eBay return shipment, external dispute)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentReasonType
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
     * @return string 'ReturnShipment'
     */
    const VALUE_RETURN_SHIPMENT = 'ReturnShipment';
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
