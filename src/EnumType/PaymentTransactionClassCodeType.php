<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentTransactionClassCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentTransactionClassCodeType The Type of PayPal payment.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentTransactionClassCodeType
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Sent'
     * @return string 'Sent'
     */
    const VALUE_SENT = 'Sent';
    /**
     * Constant for value 'Received'
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'MassPay'
     * @return string 'MassPay'
     */
    const VALUE_MASS_PAY = 'MassPay';
    /**
     * Constant for value 'MoneyRequest'
     * @return string 'MoneyRequest'
     */
    const VALUE_MONEY_REQUEST = 'MoneyRequest';
    /**
     * Constant for value 'FundsAdded'
     * @return string 'FundsAdded'
     */
    const VALUE_FUNDS_ADDED = 'FundsAdded';
    /**
     * Constant for value 'FundsWithdrawn'
     * @return string 'FundsWithdrawn'
     */
    const VALUE_FUNDS_WITHDRAWN = 'FundsWithdrawn';
    /**
     * Constant for value 'PayPalDebitCard'
     * @return string 'PayPalDebitCard'
     */
    const VALUE_PAY_PAL_DEBIT_CARD = 'PayPalDebitCard';
    /**
     * Constant for value 'Referral'
     * @return string 'Referral'
     */
    const VALUE_REFERRAL = 'Referral';
    /**
     * Constant for value 'Fee'
     * @return string 'Fee'
     */
    const VALUE_FEE = 'Fee';
    /**
     * Constant for value 'Subscription'
     * @return string 'Subscription'
     */
    const VALUE_SUBSCRIPTION = 'Subscription';
    /**
     * Constant for value 'Dividend'
     * @return string 'Dividend'
     */
    const VALUE_DIVIDEND = 'Dividend';
    /**
     * Constant for value 'Billpay'
     * @return string 'Billpay'
     */
    const VALUE_BILLPAY = 'Billpay';
    /**
     * Constant for value 'Refund'
     * @return string 'Refund'
     */
    const VALUE_REFUND = 'Refund';
    /**
     * Constant for value 'CurrencyConversions'
     * @return string 'CurrencyConversions'
     */
    const VALUE_CURRENCY_CONVERSIONS = 'CurrencyConversions';
    /**
     * Constant for value 'BalanceTransfer'
     * @return string 'BalanceTransfer'
     */
    const VALUE_BALANCE_TRANSFER = 'BalanceTransfer';
    /**
     * Constant for value 'Reversal'
     * @return string 'Reversal'
     */
    const VALUE_REVERSAL = 'Reversal';
    /**
     * Constant for value 'Shipping'
     * @return string 'Shipping'
     */
    const VALUE_SHIPPING = 'Shipping';
    /**
     * Constant for value 'BalanceAffecting'
     * @return string 'BalanceAffecting'
     */
    const VALUE_BALANCE_AFFECTING = 'BalanceAffecting';
    /**
     * Constant for value 'ECheck'
     * @return string 'ECheck'
     */
    const VALUE_ECHECK = 'ECheck';
    /**
     * Constant for value 'ForcedPostTransaction'
     * @return string 'ForcedPostTransaction'
     */
    const VALUE_FORCED_POST_TRANSACTION = 'ForcedPostTransaction';
    /**
     * Constant for value 'NonReferencedRefunds'
     * @return string 'NonReferencedRefunds'
     */
    const VALUE_NON_REFERENCED_REFUNDS = 'NonReferencedRefunds';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_SENT
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_MASS_PAY
     * @uses self::VALUE_MONEY_REQUEST
     * @uses self::VALUE_FUNDS_ADDED
     * @uses self::VALUE_FUNDS_WITHDRAWN
     * @uses self::VALUE_PAY_PAL_DEBIT_CARD
     * @uses self::VALUE_REFERRAL
     * @uses self::VALUE_FEE
     * @uses self::VALUE_SUBSCRIPTION
     * @uses self::VALUE_DIVIDEND
     * @uses self::VALUE_BILLPAY
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_CURRENCY_CONVERSIONS
     * @uses self::VALUE_BALANCE_TRANSFER
     * @uses self::VALUE_REVERSAL
     * @uses self::VALUE_SHIPPING
     * @uses self::VALUE_BALANCE_AFFECTING
     * @uses self::VALUE_ECHECK
     * @uses self::VALUE_FORCED_POST_TRANSACTION
     * @uses self::VALUE_NON_REFERENCED_REFUNDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_SENT,
            self::VALUE_RECEIVED,
            self::VALUE_MASS_PAY,
            self::VALUE_MONEY_REQUEST,
            self::VALUE_FUNDS_ADDED,
            self::VALUE_FUNDS_WITHDRAWN,
            self::VALUE_PAY_PAL_DEBIT_CARD,
            self::VALUE_REFERRAL,
            self::VALUE_FEE,
            self::VALUE_SUBSCRIPTION,
            self::VALUE_DIVIDEND,
            self::VALUE_BILLPAY,
            self::VALUE_REFUND,
            self::VALUE_CURRENCY_CONVERSIONS,
            self::VALUE_BALANCE_TRANSFER,
            self::VALUE_REVERSAL,
            self::VALUE_SHIPPING,
            self::VALUE_BALANCE_AFFECTING,
            self::VALUE_ECHECK,
            self::VALUE_FORCED_POST_TRANSACTION,
            self::VALUE_NON_REFERENCED_REFUNDS,
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
