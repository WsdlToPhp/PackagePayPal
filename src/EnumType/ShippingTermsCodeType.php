<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingTermsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ShippingTermsCodeType - Type declaration to be used by other schema's. Shipping terms code describes who pays for the shipping of an item. These are the standard shipping terms, i.e., terms of delivery of an item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingTermsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SellerPays'
     * Meta information extracted from the WSDL
     * - documentation: Seller pays all shipping costs.
     * @return string 'SellerPays'
     */
    const VALUE_SELLER_PAYS = 'SellerPays';
    /**
     * Constant for value 'BuyerPays'
     * Meta information extracted from the WSDL
     * - documentation: Buyer pays all shipping costs.
     * @return string 'BuyerPays'
     */
    const VALUE_BUYER_PAYS = 'BuyerPays';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SELLER_PAYS
     * @uses self::VALUE_BUYER_PAYS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SELLER_PAYS,
            self::VALUE_BUYER_PAYS,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
