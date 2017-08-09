<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Includes account summary for the user. | Amount past due, 0.00 if not past due. | User's current balance. Can be 0.00, positive, or negative.
 * - mixed: true
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountSummaryType extends AbstractStructBase
{
    /**
     * The AccountState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountState;
    /**
     * The AdditionalAccount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\AdditionalAccountType[]
     */
    public $AdditionalAccount;
    /**
     * The AdditionalAccountsCount
     * Meta informations extracted from the WSDL
     * - documentation: Number of additional accounts.
     * @var int
     */
    public $AdditionalAccountsCount;
    /**
     * The AmountPastDue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:AmountPastDue
     * @var \PayPal\StructType\AmountType
     */
    public $AmountPastDue;
    /**
     * The BankAccountInfo
     * Meta informations extracted from the WSDL
     * - documentation: First four digits (with remainder Xed-out). This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
     * @var string
     */
    public $BankAccountInfo;
    /**
     * The BankModifyDate
     * Meta informations extracted from the WSDL
     * - documentation: Last time/day BankAccountInfo and/or BankRoutingInfo was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
     * @var string
     */
    public $BankModifyDate;
    /**
     * The BillingCycleDate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the billing cycle in which eBay sends a billing invoice to the specified user. Possible values: 0 = On the last day of the month. 15 = On the 15th day of the month.
     * @var string
     */
    public $BillingCycleDate;
    /**
     * The CCExp
     * Meta informations extracted from the WSDL
     * - documentation: Expiration date for the credit card selected as payment method, in GMT. Empty string if no credit card is on file or if account is inactive -- even if there is a credit card on file.
     * @var string
     */
    public $CCExp;
    /**
     * The CCInfo
     * Meta informations extracted from the WSDL
     * - documentation: Last four digits of user's credit card selected as payment type. Empty string if no credit is on file. This may be an empty string depending upon the value of the payment type for the user account (e.g, if no debit-card specified).
     * @var string
     */
    public $CCInfo;
    /**
     * The CCModifyDate
     * Meta informations extracted from the WSDL
     * - documentation: Last date credit card or credit card expiration date was modified, in GMT. This may be an empty string depending upon the value of the payment type for the user account (e.g, Empty string if no credit card is on file.
     * @var string
     */
    public $CCModifyDate;
    /**
     * The CurrentBalance
     * Meta informations extracted from the WSDL
     * - ref: ns:CurrentBalance
     * @var \PayPal\StructType\AmountType
     */
    public $CurrentBalance;
    /**
     * The LastAmountPaid
     * Meta informations extracted from the WSDL
     * - documentation: Amount of last payment posted, 0.00 if no payments posted.
     * @var \PayPal\StructType\AmountType
     */
    public $LastAmountPaid;
    /**
     * The LastInvoiceAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of last invoice. 0.00 if account not yet invoiced.
     * @var \PayPal\StructType\AmountType
     */
    public $LastInvoiceAmount;
    /**
     * The LastInvoiceDate
     * Meta informations extracted from the WSDL
     * - documentation: Date of last invoice sent by eBay to the user, in GMT. Empty string if this account has not been invoiced yet.
     * @var string
     */
    public $LastInvoiceDate;
    /**
     * The LastPaymentDate
     * Meta informations extracted from the WSDL
     * - documentation: Date of last payment by specified user to eBay, in GMT. Empty string if no payments posted.
     * @var string
     */
    public $LastPaymentDate;
    /**
     * The PastDue
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the account has past due amounts outstanding. Possible values: true = Account is past due. false = Account is current.
     * @var bool
     */
    public $PastDue;
    /**
     * The PaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the method the specified user selected for paying eBay. The values for PaymentType vary for each SiteID.
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
        return $this->AccountState;
    }
    /**
     * Set AccountState value
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accountState, implode(', ', \PayPal\EnumType\AccountStateCodeType::getValidValues())), __LINE__);
        }
        $this->AccountState = $accountState;
        return $this;
    }
    /**
     * Get AdditionalAccount value
     * @return \PayPal\StructType\AdditionalAccountType[]|null
     */
    public function getAdditionalAccount()
    {
        return $this->AdditionalAccount;
    }
    /**
     * Set AdditionalAccount value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AdditionalAccountType[] $additionalAccount
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAdditionalAccount(array $additionalAccount = array())
    {
        foreach ($additionalAccount as $accountSummaryTypeAdditionalAccountItem) {
            // validation for constraint: itemType
            if (!$accountSummaryTypeAdditionalAccountItem instanceof \PayPal\StructType\AdditionalAccountType) {
                throw new \InvalidArgumentException(sprintf('The AdditionalAccount property can only contain items of \PayPal\StructType\AdditionalAccountType, "%s" given', is_object($accountSummaryTypeAdditionalAccountItem) ? get_class($accountSummaryTypeAdditionalAccountItem) : gettype($accountSummaryTypeAdditionalAccountItem)), __LINE__);
            }
        }
        $this->AdditionalAccount = $additionalAccount;
        return $this;
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
            throw new \InvalidArgumentException(sprintf('The AdditionalAccount property can only contain items of \PayPal\StructType\AdditionalAccountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
        return $this->AdditionalAccountsCount;
    }
    /**
     * Set AdditionalAccountsCount value
     * @param int $additionalAccountsCount
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAdditionalAccountsCount($additionalAccountsCount = null)
    {
        // validation for constraint: int
        if (!is_null($additionalAccountsCount) && !is_numeric($additionalAccountsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalAccountsCount)), __LINE__);
        }
        $this->AdditionalAccountsCount = $additionalAccountsCount;
        return $this;
    }
    /**
     * Get AmountPastDue value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getAmountPastDue()
    {
        return $this->AmountPastDue;
    }
    /**
     * Set AmountPastDue value
     * @param \PayPal\StructType\AmountType $amountPastDue
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setAmountPastDue(\PayPal\StructType\AmountType $amountPastDue = null)
    {
        $this->AmountPastDue = $amountPastDue;
        return $this;
    }
    /**
     * Get BankAccountInfo value
     * @return string|null
     */
    public function getBankAccountInfo()
    {
        return $this->BankAccountInfo;
    }
    /**
     * Set BankAccountInfo value
     * @param string $bankAccountInfo
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setBankAccountInfo($bankAccountInfo = null)
    {
        // validation for constraint: string
        if (!is_null($bankAccountInfo) && !is_string($bankAccountInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankAccountInfo)), __LINE__);
        }
        $this->BankAccountInfo = $bankAccountInfo;
        return $this;
    }
    /**
     * Get BankModifyDate value
     * @return string|null
     */
    public function getBankModifyDate()
    {
        return $this->BankModifyDate;
    }
    /**
     * Set BankModifyDate value
     * @param string $bankModifyDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setBankModifyDate($bankModifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($bankModifyDate) && !is_string($bankModifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankModifyDate)), __LINE__);
        }
        $this->BankModifyDate = $bankModifyDate;
        return $this;
    }
    /**
     * Get BillingCycleDate value
     * @return string|null
     */
    public function getBillingCycleDate()
    {
        return $this->BillingCycleDate;
    }
    /**
     * Set BillingCycleDate value
     * @param string $billingCycleDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setBillingCycleDate($billingCycleDate = null)
    {
        // validation for constraint: string
        if (!is_null($billingCycleDate) && !is_string($billingCycleDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingCycleDate)), __LINE__);
        }
        $this->BillingCycleDate = $billingCycleDate;
        return $this;
    }
    /**
     * Get CCExp value
     * @return string|null
     */
    public function getCCExp()
    {
        return $this->CCExp;
    }
    /**
     * Set CCExp value
     * @param string $cCExp
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCCExp($cCExp = null)
    {
        // validation for constraint: string
        if (!is_null($cCExp) && !is_string($cCExp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cCExp)), __LINE__);
        }
        $this->CCExp = $cCExp;
        return $this;
    }
    /**
     * Get CCInfo value
     * @return string|null
     */
    public function getCCInfo()
    {
        return $this->CCInfo;
    }
    /**
     * Set CCInfo value
     * @param string $cCInfo
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCCInfo($cCInfo = null)
    {
        // validation for constraint: string
        if (!is_null($cCInfo) && !is_string($cCInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cCInfo)), __LINE__);
        }
        $this->CCInfo = $cCInfo;
        return $this;
    }
    /**
     * Get CCModifyDate value
     * @return string|null
     */
    public function getCCModifyDate()
    {
        return $this->CCModifyDate;
    }
    /**
     * Set CCModifyDate value
     * @param string $cCModifyDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCCModifyDate($cCModifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($cCModifyDate) && !is_string($cCModifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cCModifyDate)), __LINE__);
        }
        $this->CCModifyDate = $cCModifyDate;
        return $this;
    }
    /**
     * Get CurrentBalance value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getCurrentBalance()
    {
        return $this->CurrentBalance;
    }
    /**
     * Set CurrentBalance value
     * @param \PayPal\StructType\AmountType $currentBalance
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setCurrentBalance(\PayPal\StructType\AmountType $currentBalance = null)
    {
        $this->CurrentBalance = $currentBalance;
        return $this;
    }
    /**
     * Get LastAmountPaid value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getLastAmountPaid()
    {
        return $this->LastAmountPaid;
    }
    /**
     * Set LastAmountPaid value
     * @param \PayPal\StructType\AmountType $lastAmountPaid
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastAmountPaid(\PayPal\StructType\AmountType $lastAmountPaid = null)
    {
        $this->LastAmountPaid = $lastAmountPaid;
        return $this;
    }
    /**
     * Get LastInvoiceAmount value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getLastInvoiceAmount()
    {
        return $this->LastInvoiceAmount;
    }
    /**
     * Set LastInvoiceAmount value
     * @param \PayPal\StructType\AmountType $lastInvoiceAmount
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastInvoiceAmount(\PayPal\StructType\AmountType $lastInvoiceAmount = null)
    {
        $this->LastInvoiceAmount = $lastInvoiceAmount;
        return $this;
    }
    /**
     * Get LastInvoiceDate value
     * @return string|null
     */
    public function getLastInvoiceDate()
    {
        return $this->LastInvoiceDate;
    }
    /**
     * Set LastInvoiceDate value
     * @param string $lastInvoiceDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastInvoiceDate($lastInvoiceDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastInvoiceDate) && !is_string($lastInvoiceDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastInvoiceDate)), __LINE__);
        }
        $this->LastInvoiceDate = $lastInvoiceDate;
        return $this;
    }
    /**
     * Get LastPaymentDate value
     * @return string|null
     */
    public function getLastPaymentDate()
    {
        return $this->LastPaymentDate;
    }
    /**
     * Set LastPaymentDate value
     * @param string $lastPaymentDate
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setLastPaymentDate($lastPaymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastPaymentDate) && !is_string($lastPaymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastPaymentDate)), __LINE__);
        }
        $this->LastPaymentDate = $lastPaymentDate;
        return $this;
    }
    /**
     * Get PastDue value
     * @return bool|null
     */
    public function getPastDue()
    {
        return $this->PastDue;
    }
    /**
     * Set PastDue value
     * @param bool $pastDue
     * @return \PayPal\StructType\AccountSummaryType
     */
    public function setPastDue($pastDue = null)
    {
        // validation for constraint: boolean
        if (!is_null($pastDue) && !is_bool($pastDue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($pastDue)), __LINE__);
        }
        $this->PastDue = $pastDue;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentMethod, implode(', ', \PayPal\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
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
