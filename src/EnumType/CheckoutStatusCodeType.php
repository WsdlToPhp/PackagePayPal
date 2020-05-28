<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CheckoutStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: CheckoutStatusCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckoutStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CheckoutComplete'
     * Meta information extracted from the WSDL
     * - documentation: Checkout complete.
     * @return string 'CheckoutComplete'
     */
    const VALUE_CHECKOUT_COMPLETE = 'CheckoutComplete';
    /**
     * Constant for value 'CheckoutIncomplete'
     * Meta information extracted from the WSDL
     * - documentation: Checkout incomplete. No details specified.
     * @return string 'CheckoutIncomplete'
     */
    const VALUE_CHECKOUT_INCOMPLETE = 'CheckoutIncomplete';
    /**
     * Constant for value 'BuyerRequestsTotal'
     * Meta information extracted from the WSDL
     * - documentation: Buyer requests total.
     * @return string 'BuyerRequestsTotal'
     */
    const VALUE_BUYER_REQUESTS_TOTAL = 'BuyerRequestsTotal';
    /**
     * Constant for value 'SellerResponded'
     * Meta information extracted from the WSDL
     * - documentation: Seller responded to buyer's request.
     * @return string 'SellerResponded'
     */
    const VALUE_SELLER_RESPONDED = 'SellerResponded';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CHECKOUT_COMPLETE
     * @uses self::VALUE_CHECKOUT_INCOMPLETE
     * @uses self::VALUE_BUYER_REQUESTS_TOTAL
     * @uses self::VALUE_SELLER_RESPONDED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKOUT_COMPLETE,
            self::VALUE_CHECKOUT_INCOMPLETE,
            self::VALUE_BUYER_REQUESTS_TOTAL,
            self::VALUE_SELLER_RESPONDED,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
