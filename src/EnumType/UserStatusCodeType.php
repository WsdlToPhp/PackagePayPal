<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: UserStatusCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: User properties have never been set. This value should seldom, if ever, be returned and typically represents a problem.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Suspended'
     * Meta information extracted from the WSDL
     * - documentation: User has been suspended from selling and buying, such as for violations of eBay terms or agreement.
     * @return string 'Suspended'
     */
    const VALUE_SUSPENDED = 'Suspended';
    /**
     * Constant for value 'Confirmed'
     * Meta information extracted from the WSDL
     * - documentation: User has completed online registration and has properly responded to confirmation email. Most users should fall in this category.
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Unconfirmed'
     * Meta information extracted from the WSDL
     * - documentation: User has completed online registration, but has either not responded to confirmation email or has not yet been sent the confirmation email. .
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
    /**
     * Constant for value 'Ghost'
     * Meta information extracted from the WSDL
     * - documentation: Registered users of AuctionWeb (pre-eBay) who never re-registered on eBay.
     * @return string 'Ghost'
     */
    const VALUE_GHOST = 'Ghost';
    /**
     * Constant for value 'InMaintenance'
     * Meta information extracted from the WSDL
     * - documentation: Temporary user record state indicating the record is in the process of being changed by eBay. Query user information again to get new status.
     * @return string 'InMaintenance'
     */
    const VALUE_IN_MAINTENANCE = 'InMaintenance';
    /**
     * Constant for value 'Deleted'
     * Meta information extracted from the WSDL
     * - documentation: Records for the specified user have been deleted.
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
    /**
     * Constant for value 'CreditCardVerify'
     * Meta information extracted from the WSDL
     * - documentation: User has completed registration and confirmation, but is pending a verification of credit card information.
     * @return string 'CreditCardVerify'
     */
    const VALUE_CREDIT_CARD_VERIFY = 'CreditCardVerify';
    /**
     * Constant for value 'AccountOnHold'
     * Meta information extracted from the WSDL
     * - documentation: User's account is on hold, such as for non-payment of amounts due eBay. User cannot sell or buy items.
     * @return string 'AccountOnHold'
     */
    const VALUE_ACCOUNT_ON_HOLD = 'AccountOnHold';
    /**
     * Constant for value 'Merged'
     * Meta information extracted from the WSDL
     * - documentation: User record has been merged with another account record for the same user.
     * @return string 'Merged'
     */
    const VALUE_MERGED = 'Merged';
    /**
     * Constant for value 'RegistrationCodeMailOut'
     * Meta information extracted from the WSDL
     * - documentation: User has completed online registration and has been sent the confirmation email, but has not yet responded to the confirmation email.
     * @return string 'RegistrationCodeMailOut'
     */
    const VALUE_REGISTRATION_CODE_MAIL_OUT = 'RegistrationCodeMailOut';
    /**
     * Constant for value 'TermPending'
     * Meta information extracted from the WSDL
     * - documentation: User has been scheduled for account closure (typically when a user has requested to have their account closed.) A user in this state should not be considered an active user.
     * @return string 'TermPending'
     */
    const VALUE_TERM_PENDING = 'TermPending';
    /**
     * Constant for value 'UnconfirmedHalfOptIn'
     * Meta information extracted from the WSDL
     * - documentation: User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the registration confirmation is still pending.
     * @return string 'UnconfirmedHalfOptIn'
     */
    const VALUE_UNCONFIRMED_HALF_OPT_IN = 'UnconfirmedHalfOptIn';
    /**
     * Constant for value 'CreditCardVerifyHalfOptIn'
     * Meta information extracted from the WSDL
     * - documentation: User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the verification of credit card information is still pending.
     * @return string 'CreditCardVerifyHalfOptIn'
     */
    const VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN = 'CreditCardVerifyHalfOptIn';
    /**
     * Constant for value 'UnconfirmedPassport'
     * Meta information extracted from the WSDL
     * - documentation: Passport User. User has completed the registration process, but the registration confirmation is still pending.
     * @return string 'UnconfirmedPassport'
     */
    const VALUE_UNCONFIRMED_PASSPORT = 'UnconfirmedPassport';
    /**
     * Constant for value 'CreditCardVerifyPassport'
     * Meta information extracted from the WSDL
     * - documentation: Passport User Requiring Credit Card Verification. User has completed the registration process with credit card verification, but the registration confirmation is still pending.
     * @return string 'CreditCardVerifyPassport'
     */
    const VALUE_CREDIT_CARD_VERIFY_PASSPORT = 'CreditCardVerifyPassport';
    /**
     * Constant for value 'UnconfirmedExpress'
     * Meta information extracted from the WSDL
     * - documentation: Half.com User. User has completed the registration for Half.com and opted to automatically also be registered with eBay, but the registration confirmation is still pending.
     * @return string 'UnconfirmedExpress'
     */
    const VALUE_UNCONFIRMED_EXPRESS = 'UnconfirmedExpress';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_SUSPENDED
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_UNCONFIRMED
     * @uses self::VALUE_GHOST
     * @uses self::VALUE_IN_MAINTENANCE
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_CREDIT_CARD_VERIFY
     * @uses self::VALUE_ACCOUNT_ON_HOLD
     * @uses self::VALUE_MERGED
     * @uses self::VALUE_REGISTRATION_CODE_MAIL_OUT
     * @uses self::VALUE_TERM_PENDING
     * @uses self::VALUE_UNCONFIRMED_HALF_OPT_IN
     * @uses self::VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN
     * @uses self::VALUE_UNCONFIRMED_PASSPORT
     * @uses self::VALUE_CREDIT_CARD_VERIFY_PASSPORT
     * @uses self::VALUE_UNCONFIRMED_EXPRESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_SUSPENDED,
            self::VALUE_CONFIRMED,
            self::VALUE_UNCONFIRMED,
            self::VALUE_GHOST,
            self::VALUE_IN_MAINTENANCE,
            self::VALUE_DELETED,
            self::VALUE_CREDIT_CARD_VERIFY,
            self::VALUE_ACCOUNT_ON_HOLD,
            self::VALUE_MERGED,
            self::VALUE_REGISTRATION_CODE_MAIL_OUT,
            self::VALUE_TERM_PENDING,
            self::VALUE_UNCONFIRMED_HALF_OPT_IN,
            self::VALUE_CREDIT_CARD_VERIFY_HALF_OPT_IN,
            self::VALUE_UNCONFIRMED_PASSPORT,
            self::VALUE_CREDIT_CARD_VERIFY_PASSPORT,
            self::VALUE_UNCONFIRMED_EXPRESS,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
