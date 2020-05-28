<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceCreditCardDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: CreditCardDetailsType for DCC Reference Transaction Information about a Credit Card.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReferenceCreditCardDetailsType extends AbstractStructBase
{
    /**
     * The CreditCardNumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\CreditCardNumberTypeType
     */
    public $CreditCardNumberType;
    /**
     * The ExpMonth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExpMonth;
    /**
     * The ExpYear
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ExpYear;
    /**
     * The CardOwnerName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\PersonNameType
     */
    public $CardOwnerName;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $BillingAddress;
    /**
     * The CVV2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVV2;
    /**
     * The StartMonth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StartMonth;
    /**
     * The StartYear
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StartYear;
    /**
     * The IssueNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssueNumber;
    /**
     * Constructor method for ReferenceCreditCardDetailsType
     * @uses ReferenceCreditCardDetailsType::setCreditCardNumberType()
     * @uses ReferenceCreditCardDetailsType::setExpMonth()
     * @uses ReferenceCreditCardDetailsType::setExpYear()
     * @uses ReferenceCreditCardDetailsType::setCardOwnerName()
     * @uses ReferenceCreditCardDetailsType::setBillingAddress()
     * @uses ReferenceCreditCardDetailsType::setCVV2()
     * @uses ReferenceCreditCardDetailsType::setStartMonth()
     * @uses ReferenceCreditCardDetailsType::setStartYear()
     * @uses ReferenceCreditCardDetailsType::setIssueNumber()
     * @param \PayPal\StructType\CreditCardNumberTypeType $creditCardNumberType
     * @param int $expMonth
     * @param int $expYear
     * @param \PayPal\StructType\PersonNameType $cardOwnerName
     * @param \PayPal\StructType\AddressType $billingAddress
     * @param string $cVV2
     * @param int $startMonth
     * @param int $startYear
     * @param string $issueNumber
     */
    public function __construct(\PayPal\StructType\CreditCardNumberTypeType $creditCardNumberType = null, $expMonth = null, $expYear = null, \PayPal\StructType\PersonNameType $cardOwnerName = null, \PayPal\StructType\AddressType $billingAddress = null, $cVV2 = null, $startMonth = null, $startYear = null, $issueNumber = null)
    {
        $this
            ->setCreditCardNumberType($creditCardNumberType)
            ->setExpMonth($expMonth)
            ->setExpYear($expYear)
            ->setCardOwnerName($cardOwnerName)
            ->setBillingAddress($billingAddress)
            ->setCVV2($cVV2)
            ->setStartMonth($startMonth)
            ->setStartYear($startYear)
            ->setIssueNumber($issueNumber);
    }
    /**
     * Get CreditCardNumberType value
     * @return \PayPal\StructType\CreditCardNumberTypeType|null
     */
    public function getCreditCardNumberType()
    {
        return $this->CreditCardNumberType;
    }
    /**
     * Set CreditCardNumberType value
     * @param \PayPal\StructType\CreditCardNumberTypeType $creditCardNumberType
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setCreditCardNumberType(\PayPal\StructType\CreditCardNumberTypeType $creditCardNumberType = null)
    {
        $this->CreditCardNumberType = $creditCardNumberType;
        return $this;
    }
    /**
     * Get ExpMonth value
     * @return int|null
     */
    public function getExpMonth()
    {
        return $this->ExpMonth;
    }
    /**
     * Set ExpMonth value
     * @param int $expMonth
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setExpMonth($expMonth = null)
    {
        // validation for constraint: int
        if (!is_null($expMonth) && !(is_int($expMonth) || ctype_digit($expMonth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expMonth, true), gettype($expMonth)), __LINE__);
        }
        $this->ExpMonth = $expMonth;
        return $this;
    }
    /**
     * Get ExpYear value
     * @return int|null
     */
    public function getExpYear()
    {
        return $this->ExpYear;
    }
    /**
     * Set ExpYear value
     * @param int $expYear
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setExpYear($expYear = null)
    {
        // validation for constraint: int
        if (!is_null($expYear) && !(is_int($expYear) || ctype_digit($expYear))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expYear, true), gettype($expYear)), __LINE__);
        }
        $this->ExpYear = $expYear;
        return $this;
    }
    /**
     * Get CardOwnerName value
     * @return \PayPal\StructType\PersonNameType|null
     */
    public function getCardOwnerName()
    {
        return $this->CardOwnerName;
    }
    /**
     * Set CardOwnerName value
     * @param \PayPal\StructType\PersonNameType $cardOwnerName
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setCardOwnerName(\PayPal\StructType\PersonNameType $cardOwnerName = null)
    {
        $this->CardOwnerName = $cardOwnerName;
        return $this;
    }
    /**
     * Get BillingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param \PayPal\StructType\AddressType $billingAddress
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setBillingAddress(\PayPal\StructType\AddressType $billingAddress = null)
    {
        $this->BillingAddress = $billingAddress;
        return $this;
    }
    /**
     * Get CVV2 value
     * @return string|null
     */
    public function getCVV2()
    {
        return $this->CVV2;
    }
    /**
     * Set CVV2 value
     * @param string $cVV2
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setCVV2($cVV2 = null)
    {
        // validation for constraint: string
        if (!is_null($cVV2) && !is_string($cVV2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVV2, true), gettype($cVV2)), __LINE__);
        }
        $this->CVV2 = $cVV2;
        return $this;
    }
    /**
     * Get StartMonth value
     * @return int|null
     */
    public function getStartMonth()
    {
        return $this->StartMonth;
    }
    /**
     * Set StartMonth value
     * @param int $startMonth
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setStartMonth($startMonth = null)
    {
        // validation for constraint: int
        if (!is_null($startMonth) && !(is_int($startMonth) || ctype_digit($startMonth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startMonth, true), gettype($startMonth)), __LINE__);
        }
        $this->StartMonth = $startMonth;
        return $this;
    }
    /**
     * Get StartYear value
     * @return int|null
     */
    public function getStartYear()
    {
        return $this->StartYear;
    }
    /**
     * Set StartYear value
     * @param int $startYear
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setStartYear($startYear = null)
    {
        // validation for constraint: int
        if (!is_null($startYear) && !(is_int($startYear) || ctype_digit($startYear))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startYear, true), gettype($startYear)), __LINE__);
        }
        $this->StartYear = $startYear;
        return $this;
    }
    /**
     * Get IssueNumber value
     * @return string|null
     */
    public function getIssueNumber()
    {
        return $this->IssueNumber;
    }
    /**
     * Set IssueNumber value
     * @param string $issueNumber
     * @return \PayPal\StructType\ReferenceCreditCardDetailsType
     */
    public function setIssueNumber($issueNumber = null)
    {
        // validation for constraint: string
        if (!is_null($issueNumber) && !is_string($issueNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueNumber, true), gettype($issueNumber)), __LINE__);
        }
        $this->IssueNumber = $issueNumber;
        return $this;
    }
}
