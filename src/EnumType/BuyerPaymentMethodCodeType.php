<?php

namespace PayPal\EnumType;

/**
 * This class stands for BuyerPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BuyerPaymentMethodCodeType - Type declaration to be used by other schema. The includes the codes for payment methods used by buyers to pay sellers.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyerPaymentMethodCodeType
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No payment method specified
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MOCC'
     * Meta information extracted from the WSDL
     * - documentation: Money order/cashiers check
     * @return string 'MOCC'
     */
    const VALUE_MOCC = 'MOCC';
    /**
     * Constant for value 'AmEx'
     * Meta information extracted from the WSDL
     * - documentation: American Express
     * @return string 'AmEx'
     */
    const VALUE_AM_EX = 'AmEx';
    /**
     * Constant for value 'PaymentSeeDescription'
     * Meta information extracted from the WSDL
     * - documentation: Payment See Description
     * @return string 'PaymentSeeDescription'
     */
    const VALUE_PAYMENT_SEE_DESCRIPTION = 'PaymentSeeDescription';
    /**
     * Constant for value 'CCAccepted'
     * Meta information extracted from the WSDL
     * - documentation: American Express
     * @return string 'CCAccepted'
     */
    const VALUE_CCACCEPTED = 'CCAccepted';
    /**
     * Constant for value 'PersonalCheck'
     * Meta information extracted from the WSDL
     * - documentation: Personal check
     * @return string 'PersonalCheck'
     */
    const VALUE_PERSONAL_CHECK = 'PersonalCheck';
    /**
     * Constant for value 'COD'
     * Meta information extracted from the WSDL
     * - documentation: COD
     * @return string 'COD'
     */
    const VALUE_COD = 'COD';
    /**
     * Constant for value 'VisaMC'
     * Meta information extracted from the WSDL
     * - documentation: Visa/Mastercard
     * @return string 'VisaMC'
     */
    const VALUE_VISA_MC = 'VisaMC';
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Other forms of payment. Some custom method is accepted by seller as payment method in the transaction. For Motors vehicle items, this field refers to the Deposit payment method.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: PayPal
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'Discover'
     * Meta information extracted from the WSDL
     * - documentation: Discover
     * @return string 'Discover'
     */
    const VALUE_DISCOVER = 'Discover';
    /**
     * Constant for value 'CashOnPickup'
     * Meta information extracted from the WSDL
     * - documentation: Payment on delivery acceptable payment term.
     * @return string 'CashOnPickup'
     */
    const VALUE_CASH_ON_PICKUP = 'CashOnPickup';
    /**
     * Constant for value 'MoneyXferAccepted'
     * Meta information extracted from the WSDL
     * - documentation: Direct transfer of money acceptable payment term.
     * @return string 'MoneyXferAccepted'
     */
    const VALUE_MONEY_XFER_ACCEPTED = 'MoneyXferAccepted';
    /**
     * Constant for value 'MoneyXferAcceptedinCheckout'
     * Meta information extracted from the WSDL
     * - documentation: If the seller has bank account information on file, and MoneyXferAcceptedinCheckout = true, then the bank account information will be displayed in Checkout. Applicable to German site only.
     * @return string 'MoneyXferAcceptedinCheckout'
     */
    const VALUE_MONEY_XFER_ACCEPTEDIN_CHECKOUT = 'MoneyXferAcceptedinCheckout';
    /**
     * Constant for value 'OtherOnlinePayments'
     * Meta information extracted from the WSDL
     * - documentation: Online Escrow paid for by seller.
     * @return string 'OtherOnlinePayments'
     */
    const VALUE_OTHER_ONLINE_PAYMENTS = 'OtherOnlinePayments';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_MOCC
     * @uses self::VALUE_AM_EX
     * @uses self::VALUE_PAYMENT_SEE_DESCRIPTION
     * @uses self::VALUE_CCACCEPTED
     * @uses self::VALUE_PERSONAL_CHECK
     * @uses self::VALUE_COD
     * @uses self::VALUE_VISA_MC
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_DISCOVER
     * @uses self::VALUE_CASH_ON_PICKUP
     * @uses self::VALUE_MONEY_XFER_ACCEPTED
     * @uses self::VALUE_MONEY_XFER_ACCEPTEDIN_CHECKOUT
     * @uses self::VALUE_OTHER_ONLINE_PAYMENTS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MOCC,
            self::VALUE_AM_EX,
            self::VALUE_PAYMENT_SEE_DESCRIPTION,
            self::VALUE_CCACCEPTED,
            self::VALUE_PERSONAL_CHECK,
            self::VALUE_COD,
            self::VALUE_VISA_MC,
            self::VALUE_OTHER,
            self::VALUE_PAY_PAL,
            self::VALUE_DISCOVER,
            self::VALUE_CASH_ON_PICKUP,
            self::VALUE_MONEY_XFER_ACCEPTED,
            self::VALUE_MONEY_XFER_ACCEPTEDIN_CHECKOUT,
            self::VALUE_OTHER_ONLINE_PAYMENTS,
            self::VALUE_CUSTOM_CODE,
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
