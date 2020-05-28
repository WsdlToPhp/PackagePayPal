<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncentiveTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: IncentiveType This identifies the type of INCENTIVE for the redemption code.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Coupon'
     * @return string 'Coupon'
     */
    const VALUE_COUPON = 'Coupon';
    /**
     * Constant for value 'eBayGiftCertificate'
     * @return string 'eBayGiftCertificate'
     */
    const VALUE_E_BAY_GIFT_CERTIFICATE = 'eBayGiftCertificate';
    /**
     * Constant for value 'eBayGiftCard'
     * @return string 'eBayGiftCard'
     */
    const VALUE_E_BAY_GIFT_CARD = 'eBayGiftCard';
    /**
     * Constant for value 'PayPalRewardVoucher'
     * @return string 'PayPalRewardVoucher'
     */
    const VALUE_PAY_PAL_REWARD_VOUCHER = 'PayPalRewardVoucher';
    /**
     * Constant for value 'MerchantGiftCertificate'
     * @return string 'MerchantGiftCertificate'
     */
    const VALUE_MERCHANT_GIFT_CERTIFICATE = 'MerchantGiftCertificate';
    /**
     * Constant for value 'eBayRewardVoucher'
     * @return string 'eBayRewardVoucher'
     */
    const VALUE_E_BAY_REWARD_VOUCHER = 'eBayRewardVoucher';
    /**
     * Return allowed values
     * @uses self::VALUE_COUPON
     * @uses self::VALUE_E_BAY_GIFT_CERTIFICATE
     * @uses self::VALUE_E_BAY_GIFT_CARD
     * @uses self::VALUE_PAY_PAL_REWARD_VOUCHER
     * @uses self::VALUE_MERCHANT_GIFT_CERTIFICATE
     * @uses self::VALUE_E_BAY_REWARD_VOUCHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COUPON,
            self::VALUE_E_BAY_GIFT_CERTIFICATE,
            self::VALUE_E_BAY_GIFT_CARD,
            self::VALUE_PAY_PAL_REWARD_VOUCHER,
            self::VALUE_MERCHANT_GIFT_CERTIFICATE,
            self::VALUE_E_BAY_REWARD_VOUCHER,
        );
    }
}
