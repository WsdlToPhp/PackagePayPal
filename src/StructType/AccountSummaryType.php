<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: User's current balance. Can be 0.00, positive, or negative. | Amount past due, 0.00 if not past due. | Includes account summary for the user.
 * - mixed: true
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountSummaryType extends AbstractStructBase
{
    /**
     * The AccountState
     * Meta information extracted from the WSDL
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * @var string
     */
    public $AccountState;
    /**
     * The AdditionalAccount
     * Meta information extracted from the WSDL
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\AdditionalAccountType[]
     */
    public $AdditionalAccount;
    /**
     * The AdditionalAccountsCount
     * Meta information extracted from the WSDL
     * - documentation: Number of additional accounts.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var int
     */
    public $AdditionalAccountsCount;
    /**
     * The AmountPastDue
     * Meta information extracted from the WSDL
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: ns:AmountPastDue
     * @var \PayPal\StructType\AmountType
     */
    public $AmountPastDue;
    /**
     * The BankAccountInfo
     * Meta information extracted from the WSDL
     * - documentation: First four digits (with remainder Xed-out). This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $BankAccountInfo;
    /**
     * The BankModifyDate
     * Meta information extracted from the WSDL
     * - documentation: Last time/day BankAccountInfo and/or BankRoutingInfo was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $BankModifyDate;
    /**
     * The BillingCycleDate
     * Meta information extracted from the WSDL
     * - documentation: Indicates the billing cycle in which eBay sends a billing invoice to the specified user. Possible values: 0 = On the last day of the month. 15 = On the 15th day of the month.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $BillingCycleDate;
    /**
     * The CCExp
     * Meta information extracted from the WSDL
     * - documentation: Expiration date for the credit card selected as payment method, in GMT. Empty string if no credit card is on file or if account is inactive -- even if there is a credit card on file.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $CCExp;
    /**
     * The CCInfo
     * Meta information extracted from the WSDL
     * - documentation: Last four digits of user's credit card selected as payment type. Empty string if no credit is on file. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $CCInfo;
    /**
     * The CCModifyDate
     * Meta information extracted from the WSDL
     * - documentation: Last date credit card or credit card expiration date was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, Empty string if no credit card is on file.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $CCModifyDate;
    /**
     * The CurrentBalance
     * Meta information extracted from the WSDL
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * - ref: ns:CurrentBalance
     * @var \PayPal\StructType\AmountType
     */
    public $CurrentBalance;
    /**
     * The LastAmountPaid
     * Meta information extracted from the WSDL
     * - documentation: Amount of last payment posted, 0.00 if no payments posted.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $LastAmountPaid;
    /**
     * The LastInvoiceAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of last invoice. 0.00 if account not yet invoiced.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $LastInvoiceAmount;
    /**
     * The LastInvoiceDate
     * Meta information extracted from the WSDL
     * - documentation: Date of last invoice sent by eBay to the user, in GMT. Empty string if this account has not been invoiced yet.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $LastInvoiceDate;
    /**
     * The LastPaymentDate
     * Meta information extracted from the WSDL
     * - documentation: Date of last payment by specified user to eBay, in GMT. Empty string if no payments posted.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $LastPaymentDate;
    /**
     * The PastDue
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the account has past due amounts outstanding. Possible values: true = Account is past due. false = Account is current.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var bool
     */
    public $PastDue;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: Indicates the method the specified user selected for paying eBay. The values for PaymentType vary for each SiteID.
     * - choice: AccountState | AdditionalAccount | AdditionalAccountsCount | AmountPastDue | BankAccountInfo | BankModifyDate | BillingCycleDate | CCExp | CCInfo | CCModifyDate | CurrentBalance | LastAmountPaid | LastInvoiceAmount | LastInvoiceDate |
     * LastPaymentDate | PastDue | PaymentMethod
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var string
     */
    public $PaymentMethod;
    /**
     * Constructor method for AccountSummaryType
     * @uses AccountSummaryType::setAccountState()
     * @uses AccountSummaryType::setAdditionalAccount()
     * @uses AccountSummaryType::setAdditionalAccountsCount()
     * @uses AccountSummaryType::setAmountPastDue()
     * @uses AccountSummaryType::setBankAccountInfo()
     * @uses AccountSummaryType::setBankModifyDate()
     * @uses AccountSummaryType::setBillingCycleDate()
     * @uses AccountSummaryType::setCCExp()
     * @uses AccountSummaryType::setCCInfo()
     * @uses AccountSummaryType::setCCModifyDate()
     * @uses AccountSummaryType::setCurrentBalance()
     * @uses AccountSummaryType::setLastAmountPaid()
     * @uses AccountSummaryType::setLastInvoiceAmount()
     * @uses AccountSummaryType::setLastInvoiceDate()
     * @uses AccountSummaryType::setLastPaymentDate()
     * @uses AccountSummaryType::setPastDue()
     * @uses AccountSummaryType::setPaymentMethod()
     * @param string $accountState
     * @param \PayPal\StructType\AdditionalAccountType[] $additionalAccount
     * @param int $additionalAccountsCount
     * @param \PayPal\StructType\AmountType $amountPastDue
     * @param string $bankAccountInfo
     * @param string $bankModifyDate
     * @param string $billingCycleDate
     * @param string $cCExp
     * @param string $cCInfo
     * @param string $cCModifyDate
     * @param \PayPal\StructType\AmountType $currentBalance
     * @param \PayPal\StructType\AmountType $lastAmountPaid
     * @param \PayPal\StructType\AmountType $lastInvoiceAmount
     * @param string $lastInvoiceDate
     * @param string $lastPaymentDate
     * @param bool $pastDue
     * @param string $paymentMethod
     */
    public function __construct($accountState = null, array $additionalAccount = array(), $additionalAccountsCount = null, \PayPal\StructType\AmountType $amountPastDue = null, $bankAccountInfo = null, $bankModifyDate = null, $billingCycleDate = null, $cCExp = null, $cCInfo = null, $cCModifyDate = null, \PayPal\StructType\AmountType $currentBalance = null, \PayPal\StructType\AmountType $lastAmountPaid = null, \PayPal\StructType\AmountType $lastInvoiceAmount = null, $lastInvoiceDate = null, $lastPaymentDate = null, $pastDue = null, $paymentMethod = null)
    {
        $this
            ->setAccountState($accountState)
            ->setAdditionalAccount($additionalAccount)
            ->setAdditionalAccountsCount($additionalAccountsCount)
            ->setAmountPastDue($amountPastDue)
            ->setBankAccountInfo($bankAccountInfo)
            ->setBankModifyDate($bankModifyDate)
            ->setBillingCycleDate($billingCycleDate)
            ->setCCExp($cCExp)
            ->setCCInfo($cCInfo)
            ->setCCModifyDate($cCModifyDate)
            ->setCurrentBalance($currentBalance)
            ->setLastAmountPaid($lastAmountPaid)
            ->setLastInvoiceAmount($lastInvoiceAmount)
            ->setLastInvoiceDate($lastInvoiceDate)
            ->setLastPaymentDate($lastPaymentDate)
            ->setPastDue($pastDue)
            ->setPaymentMethod($paymentMethod);
    }
    /**
     * Get AccountState value
     * @return string|null
     */
    public function getAccountState()
    {
        return isset($this->AccountState) ? $this->AccountState : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAccountState method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountState method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAccountStateForChoiceConstraintsFromSetAccountState($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AccountState can\'t be set as the property %s is already set. Only one property must be set among these properties: AccountState, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AccountState value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @uses \PayPal\EnumType\AccountStateCodeType::valueIsValid()
     * @uses \PayPal\EnumType\AccountStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accountState
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAccountState($accountState = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AccountStateCodeType::valueIsValid($accountState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AccountStateCodeType', is_array($accountState) ? implode(', ', $accountState) : var_export($accountState, true), implode(', ', \PayPal\EnumType\AccountStateCodeType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($accountStateChoiceErrorMessage = self::validateAccountStateForChoiceConstraintsFromSetAccountState($accountState))) {
            throw new \InvalidArgumentException($accountStateChoiceErrorMessage, __LINE__);
        }
        if (is_null($accountState) || (is_array($accountState) && empty($accountState))) {
            unset($this->AccountState);
        } else {
            $this->AccountState = $accountState;
        }
        return $this;
    }
    /**
     * Get AdditionalAccount value
     * @return \PayPal\StructType\AdditionalAccountType[]|null
     */
    public function getAdditionalAccount()
    {
        return isset($this->AdditionalAccount) ? $this->AdditionalAccount : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalAccountForArrayConstraintsFromSetAdditionalAccount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountSummaryTypeAdditionalAccountItem) {
            // validation for constraint: itemType
            if (!$accountSummaryTypeAdditionalAccountItem instanceof \PayPal\StructType\AdditionalAccountType) {
                $invalidValues[] = is_object($accountSummaryTypeAdditionalAccountItem) ? get_class($accountSummaryTypeAdditionalAccountItem) : sprintf('%s(%s)', gettype($accountSummaryTypeAdditionalAccountItem), var_export($accountSummaryTypeAdditionalAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalAccount property can only contain items of type \PayPal\StructType\AdditionalAccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setAdditionalAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalAccount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAdditionalAccountForChoiceConstraintsFromSetAdditionalAccount($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AdditionalAccount can\'t be set as the property %s is already set. Only one property must be set among these properties: AdditionalAccount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AdditionalAccount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AdditionalAccountType[] $additionalAccount
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAdditionalAccount(array $additionalAccount = array())
    {
        // validation for constraint: array
        if ('' !== ($additionalAccountArrayErrorMessage = self::validateAdditionalAccountForArrayConstraintsFromSetAdditionalAccount($additionalAccount))) {
            throw new \InvalidArgumentException($additionalAccountArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($additionalAccountChoiceErrorMessage = self::validateAdditionalAccountForChoiceConstraintsFromSetAdditionalAccount($additionalAccount))) {
            throw new \InvalidArgumentException($additionalAccountChoiceErrorMessage, __LINE__);
        }
        if (is_null($additionalAccount) || (is_array($additionalAccount) && empty($additionalAccount))) {
            unset($this->AdditionalAccount);
        } else {
            $this->AdditionalAccount = $additionalAccount;
        }
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToAdditionalAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAdditionalAccount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToAdditionalAccount($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AdditionalAccount can\'t be set as the property %s is already set. Only one property must be set among these properties: AdditionalAccount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Add item to AdditionalAccount value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AdditionalAccountType $item
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function addToAdditionalAccount(\PayPal\StructType\AdditionalAccountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\AdditionalAccountType) {
            throw new \InvalidArgumentException(sprintf('The AdditionalAccount property can only contain items of type \PayPal\StructType\AdditionalAccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToAdditionalAccount($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->AdditionalAccount[] = $item;
        return $this;
    }
    /**
     * Get AdditionalAccountsCount value
     * @return int|null
     */
    public function getAdditionalAccountsCount()
    {
        return isset($this->AdditionalAccountsCount) ? $this->AdditionalAccountsCount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAdditionalAccountsCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalAccountsCount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAdditionalAccountsCountForChoiceConstraintsFromSetAdditionalAccountsCount($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AdditionalAccountsCount can\'t be set as the property %s is already set. Only one property must be set among these properties: AdditionalAccountsCount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AdditionalAccountsCount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param int $additionalAccountsCount
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAdditionalAccountsCount($additionalAccountsCount = null)
    {
        // validation for constraint: int
        if (!is_null($additionalAccountsCount) && !(is_int($additionalAccountsCount) || ctype_digit($additionalAccountsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionalAccountsCount, true), gettype($additionalAccountsCount)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($additionalAccountsCountChoiceErrorMessage = self::validateAdditionalAccountsCountForChoiceConstraintsFromSetAdditionalAccountsCount($additionalAccountsCount))) {
            throw new \InvalidArgumentException($additionalAccountsCountChoiceErrorMessage, __LINE__);
        }
        if (is_null($additionalAccountsCount) || (is_array($additionalAccountsCount) && empty($additionalAccountsCount))) {
            unset($this->AdditionalAccountsCount);
        } else {
            $this->AdditionalAccountsCount = $additionalAccountsCount;
        }
        return $this;
    }
    /**
     * Get AmountPastDue value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getAmountPastDue()
    {
        return isset($this->AmountPastDue) ? $this->AmountPastDue : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAmountPastDue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmountPastDue method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAmountPastDueForChoiceConstraintsFromSetAmountPastDue($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AmountPastDue can\'t be set as the property %s is already set. Only one property must be set among these properties: AmountPastDue, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AmountPastDue value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AmountType $amountPastDue
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAmountPastDue(\PayPal\StructType\AmountType $amountPastDue = null)
    {
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($amountPastDueChoiceErrorMessage = self::validateAmountPastDueForChoiceConstraintsFromSetAmountPastDue($amountPastDue))) {
            throw new \InvalidArgumentException($amountPastDueChoiceErrorMessage, __LINE__);
        }
        if (is_null($amountPastDue) || (is_array($amountPastDue) && empty($amountPastDue))) {
            unset($this->AmountPastDue);
        } else {
            $this->AmountPastDue = $amountPastDue;
        }
        return $this;
    }
    /**
     * Get BankAccountInfo value
     * @return string|null
     */
    public function getBankAccountInfo()
    {
        return isset($this->BankAccountInfo) ? $this->BankAccountInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBankAccountInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankAccountInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBankAccountInfoForChoiceConstraintsFromSetBankAccountInfo($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property BankAccountInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: BankAccountInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set BankAccountInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $bankAccountInfo
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setBankAccountInfo($bankAccountInfo = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountInfo) && !is_string($bankAccountInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountInfo, true), gettype($bankAccountInfo)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($bankAccountInfoChoiceErrorMessage = self::validateBankAccountInfoForChoiceConstraintsFromSetBankAccountInfo($bankAccountInfo))) {
            throw new \InvalidArgumentException($bankAccountInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($bankAccountInfo) || (is_array($bankAccountInfo) && empty($bankAccountInfo))) {
            unset($this->BankAccountInfo);
        } else {
            $this->BankAccountInfo = $bankAccountInfo;
        }
        return $this;
    }
    /**
     * Get BankModifyDate value
     * @return string|null
     */
    public function getBankModifyDate()
    {
        return isset($this->BankModifyDate) ? $this->BankModifyDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBankModifyDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankModifyDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBankModifyDateForChoiceConstraintsFromSetBankModifyDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property BankModifyDate can\'t be set as the property %s is already set. Only one property must be set among these properties: BankModifyDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set BankModifyDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $bankModifyDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setBankModifyDate($bankModifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($bankModifyDate) && !is_string($bankModifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankModifyDate, true), gettype($bankModifyDate)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($bankModifyDateChoiceErrorMessage = self::validateBankModifyDateForChoiceConstraintsFromSetBankModifyDate($bankModifyDate))) {
            throw new \InvalidArgumentException($bankModifyDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($bankModifyDate) || (is_array($bankModifyDate) && empty($bankModifyDate))) {
            unset($this->BankModifyDate);
        } else {
            $this->BankModifyDate = $bankModifyDate;
        }
        return $this;
    }
    /**
     * Get BillingCycleDate value
     * @return string|null
     */
    public function getBillingCycleDate()
    {
        return isset($this->BillingCycleDate) ? $this->BillingCycleDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setBillingCycleDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingCycleDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBillingCycleDateForChoiceConstraintsFromSetBillingCycleDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property BillingCycleDate can\'t be set as the property %s is already set. Only one property must be set among these properties: BillingCycleDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set BillingCycleDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $billingCycleDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setBillingCycleDate($billingCycleDate = null)
    {
        // validation for constraint: string
        if (!is_null($billingCycleDate) && !is_string($billingCycleDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingCycleDate, true), gettype($billingCycleDate)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($billingCycleDateChoiceErrorMessage = self::validateBillingCycleDateForChoiceConstraintsFromSetBillingCycleDate($billingCycleDate))) {
            throw new \InvalidArgumentException($billingCycleDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($billingCycleDate) || (is_array($billingCycleDate) && empty($billingCycleDate))) {
            unset($this->BillingCycleDate);
        } else {
            $this->BillingCycleDate = $billingCycleDate;
        }
        return $this;
    }
    /**
     * Get CCExp value
     * @return string|null
     */
    public function getCCExp()
    {
        return isset($this->CCExp) ? $this->CCExp : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCCExp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCCExp method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCCExpForChoiceConstraintsFromSetCCExp($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CCExp can\'t be set as the property %s is already set. Only one property must be set among these properties: CCExp, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CCExp value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $cCExp
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCCExp($cCExp = null)
    {
        // validation for constraint: string
        if (!is_null($cCExp) && !is_string($cCExp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCExp, true), gettype($cCExp)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($cCExpChoiceErrorMessage = self::validateCCExpForChoiceConstraintsFromSetCCExp($cCExp))) {
            throw new \InvalidArgumentException($cCExpChoiceErrorMessage, __LINE__);
        }
        if (is_null($cCExp) || (is_array($cCExp) && empty($cCExp))) {
            unset($this->CCExp);
        } else {
            $this->CCExp = $cCExp;
        }
        return $this;
    }
    /**
     * Get CCInfo value
     * @return string|null
     */
    public function getCCInfo()
    {
        return isset($this->CCInfo) ? $this->CCInfo : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCCInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCCInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCCInfoForChoiceConstraintsFromSetCCInfo($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CCInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: CCInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CCInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $cCInfo
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCCInfo($cCInfo = null)
    {
        // validation for constraint: string
        if (!is_null($cCInfo) && !is_string($cCInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCInfo, true), gettype($cCInfo)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($cCInfoChoiceErrorMessage = self::validateCCInfoForChoiceConstraintsFromSetCCInfo($cCInfo))) {
            throw new \InvalidArgumentException($cCInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($cCInfo) || (is_array($cCInfo) && empty($cCInfo))) {
            unset($this->CCInfo);
        } else {
            $this->CCInfo = $cCInfo;
        }
        return $this;
    }
    /**
     * Get CCModifyDate value
     * @return string|null
     */
    public function getCCModifyDate()
    {
        return isset($this->CCModifyDate) ? $this->CCModifyDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCCModifyDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCCModifyDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCCModifyDateForChoiceConstraintsFromSetCCModifyDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CCModifyDate can\'t be set as the property %s is already set. Only one property must be set among these properties: CCModifyDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CCModifyDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $cCModifyDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCCModifyDate($cCModifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($cCModifyDate) && !is_string($cCModifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cCModifyDate, true), gettype($cCModifyDate)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($cCModifyDateChoiceErrorMessage = self::validateCCModifyDateForChoiceConstraintsFromSetCCModifyDate($cCModifyDate))) {
            throw new \InvalidArgumentException($cCModifyDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($cCModifyDate) || (is_array($cCModifyDate) && empty($cCModifyDate))) {
            unset($this->CCModifyDate);
        } else {
            $this->CCModifyDate = $cCModifyDate;
        }
        return $this;
    }
    /**
     * Get CurrentBalance value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getCurrentBalance()
    {
        return isset($this->CurrentBalance) ? $this->CurrentBalance : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCurrentBalance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrentBalance method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCurrentBalanceForChoiceConstraintsFromSetCurrentBalance($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CurrentBalance can\'t be set as the property %s is already set. Only one property must be set among these properties: CurrentBalance, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CurrentBalance value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AmountType $currentBalance
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCurrentBalance(\PayPal\StructType\AmountType $currentBalance = null)
    {
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($currentBalanceChoiceErrorMessage = self::validateCurrentBalanceForChoiceConstraintsFromSetCurrentBalance($currentBalance))) {
            throw new \InvalidArgumentException($currentBalanceChoiceErrorMessage, __LINE__);
        }
        if (is_null($currentBalance) || (is_array($currentBalance) && empty($currentBalance))) {
            unset($this->CurrentBalance);
        } else {
            $this->CurrentBalance = $currentBalance;
        }
        return $this;
    }
    /**
     * Get LastAmountPaid value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getLastAmountPaid()
    {
        return isset($this->LastAmountPaid) ? $this->LastAmountPaid : null;
    }
    /**
     * This method is responsible for validating the value passed to the setLastAmountPaid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLastAmountPaid method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLastAmountPaidForChoiceConstraintsFromSetLastAmountPaid($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property LastAmountPaid can\'t be set as the property %s is already set. Only one property must be set among these properties: LastAmountPaid, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set LastAmountPaid value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AmountType $lastAmountPaid
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastAmountPaid(\PayPal\StructType\AmountType $lastAmountPaid = null)
    {
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($lastAmountPaidChoiceErrorMessage = self::validateLastAmountPaidForChoiceConstraintsFromSetLastAmountPaid($lastAmountPaid))) {
            throw new \InvalidArgumentException($lastAmountPaidChoiceErrorMessage, __LINE__);
        }
        if (is_null($lastAmountPaid) || (is_array($lastAmountPaid) && empty($lastAmountPaid))) {
            unset($this->LastAmountPaid);
        } else {
            $this->LastAmountPaid = $lastAmountPaid;
        }
        return $this;
    }
    /**
     * Get LastInvoiceAmount value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getLastInvoiceAmount()
    {
        return isset($this->LastInvoiceAmount) ? $this->LastInvoiceAmount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setLastInvoiceAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLastInvoiceAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLastInvoiceAmountForChoiceConstraintsFromSetLastInvoiceAmount($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property LastInvoiceAmount can\'t be set as the property %s is already set. Only one property must be set among these properties: LastInvoiceAmount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set LastInvoiceAmount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AmountType $lastInvoiceAmount
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastInvoiceAmount(\PayPal\StructType\AmountType $lastInvoiceAmount = null)
    {
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($lastInvoiceAmountChoiceErrorMessage = self::validateLastInvoiceAmountForChoiceConstraintsFromSetLastInvoiceAmount($lastInvoiceAmount))) {
            throw new \InvalidArgumentException($lastInvoiceAmountChoiceErrorMessage, __LINE__);
        }
        if (is_null($lastInvoiceAmount) || (is_array($lastInvoiceAmount) && empty($lastInvoiceAmount))) {
            unset($this->LastInvoiceAmount);
        } else {
            $this->LastInvoiceAmount = $lastInvoiceAmount;
        }
        return $this;
    }
    /**
     * Get LastInvoiceDate value
     * @return string|null
     */
    public function getLastInvoiceDate()
    {
        return isset($this->LastInvoiceDate) ? $this->LastInvoiceDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setLastInvoiceDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLastInvoiceDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLastInvoiceDateForChoiceConstraintsFromSetLastInvoiceDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastPaymentDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property LastInvoiceDate can\'t be set as the property %s is already set. Only one property must be set among these properties: LastInvoiceDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set LastInvoiceDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $lastInvoiceDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastInvoiceDate($lastInvoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastInvoiceDate) && !is_string($lastInvoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastInvoiceDate, true), gettype($lastInvoiceDate)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($lastInvoiceDateChoiceErrorMessage = self::validateLastInvoiceDateForChoiceConstraintsFromSetLastInvoiceDate($lastInvoiceDate))) {
            throw new \InvalidArgumentException($lastInvoiceDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($lastInvoiceDate) || (is_array($lastInvoiceDate) && empty($lastInvoiceDate))) {
            unset($this->LastInvoiceDate);
        } else {
            $this->LastInvoiceDate = $lastInvoiceDate;
        }
        return $this;
    }
    /**
     * Get LastPaymentDate value
     * @return string|null
     */
    public function getLastPaymentDate()
    {
        return isset($this->LastPaymentDate) ? $this->LastPaymentDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setLastPaymentDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLastPaymentDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLastPaymentDateForChoiceConstraintsFromSetLastPaymentDate($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'PastDue',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property LastPaymentDate can\'t be set as the property %s is already set. Only one property must be set among these properties: LastPaymentDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set LastPaymentDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $lastPaymentDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastPaymentDate($lastPaymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastPaymentDate) && !is_string($lastPaymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastPaymentDate, true), gettype($lastPaymentDate)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($lastPaymentDateChoiceErrorMessage = self::validateLastPaymentDateForChoiceConstraintsFromSetLastPaymentDate($lastPaymentDate))) {
            throw new \InvalidArgumentException($lastPaymentDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($lastPaymentDate) || (is_array($lastPaymentDate) && empty($lastPaymentDate))) {
            unset($this->LastPaymentDate);
        } else {
            $this->LastPaymentDate = $lastPaymentDate;
        }
        return $this;
    }
    /**
     * Get PastDue value
     * @return bool|null
     */
    public function getPastDue()
    {
        return isset($this->PastDue) ? $this->PastDue : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPastDue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPastDue method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePastDueForChoiceConstraintsFromSetPastDue($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PaymentMethod',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PastDue can\'t be set as the property %s is already set. Only one property must be set among these properties: PastDue, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PastDue value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $pastDue
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setPastDue($pastDue = null)
    {
        // validation for constraint: boolean
        if (!is_null($pastDue) && !is_bool($pastDue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pastDue, true), gettype($pastDue)), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($pastDueChoiceErrorMessage = self::validatePastDueForChoiceConstraintsFromSetPastDue($pastDue))) {
            throw new \InvalidArgumentException($pastDueChoiceErrorMessage, __LINE__);
        }
        if (is_null($pastDue) || (is_array($pastDue) && empty($pastDue))) {
            unset($this->PastDue);
        } else {
            $this->PastDue = $pastDue;
        }
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return isset($this->PaymentMethod) ? $this->PaymentMethod : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPaymentMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethod method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePaymentMethodForChoiceConstraintsFromSetPaymentMethod($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AccountState',
            'AdditionalAccount',
            'AdditionalAccountsCount',
            'AmountPastDue',
            'BankAccountInfo',
            'BankModifyDate',
            'BillingCycleDate',
            'CCExp',
            'CCInfo',
            'CCModifyDate',
            'CurrentBalance',
            'LastAmountPaid',
            'LastInvoiceAmount',
            'LastInvoiceDate',
            'LastPaymentDate',
            'PastDue',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PaymentMethod can\'t be set as the property %s is already set. Only one property must be set among these properties: PaymentMethod, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PaymentMethod value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @uses \PayPal\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \PayPal\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethod
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SellerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\SellerPaymentMethodCodeType', is_array($paymentMethod) ? implode(', ', $paymentMethod) : var_export($paymentMethod, true), implode(', ', \PayPal\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(AccountState, AdditionalAccount, AdditionalAccountsCount, AmountPastDue, BankAccountInfo, BankModifyDate, BillingCycleDate, CCExp, CCInfo, CCModifyDate, CurrentBalance, LastAmountPaid, LastInvoiceAmount, LastInvoiceDate, LastPaymentDate, PastDue, PaymentMethod)
        if ('' !== ($paymentMethodChoiceErrorMessage = self::validatePaymentMethodForChoiceConstraintsFromSetPaymentMethod($paymentMethod))) {
            throw new \InvalidArgumentException($paymentMethodChoiceErrorMessage, __LINE__);
        }
        if (is_null($paymentMethod) || (is_array($paymentMethod) && empty($paymentMethod))) {
            unset($this->PaymentMethod);
        } else {
            $this->PaymentMethod = $paymentMethod;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AccountSummaryType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
