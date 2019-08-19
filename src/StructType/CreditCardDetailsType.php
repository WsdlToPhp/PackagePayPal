<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: CreditCardDetailsType Information about a Credit Card.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreditCardDetailsType extends AbstractStructBase
{
    /**
     * The CreditCardType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardType;
    /**
     * The CreditCardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardNumber;
    /**
     * The ExpMonth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ExpMonth;
    /**
     * The ExpYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ExpYear;
    /**
     * The CardOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\PayerInfoType
     */
    public $CardOwner;
    /**
     * The CVV2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CVV2;
    /**
     * The StartMonth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartMonth;
    /**
     * The StartYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartYear;
    /**
     * The IssueNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueNumber;
    /**
     * The ThreeDSecureRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\ThreeDSecureRequestType
     */
    public $ThreeDSecureRequest;
    /**
     * Constructor method for CreditCardDetailsType
     * @uses CreditCardDetailsType::setCreditCardType()
     * @uses CreditCardDetailsType::setCreditCardNumber()
     * @uses CreditCardDetailsType::setExpMonth()
     * @uses CreditCardDetailsType::setExpYear()
     * @uses CreditCardDetailsType::setCardOwner()
     * @uses CreditCardDetailsType::setCVV2()
     * @uses CreditCardDetailsType::setStartMonth()
     * @uses CreditCardDetailsType::setStartYear()
     * @uses CreditCardDetailsType::setIssueNumber()
     * @uses CreditCardDetailsType::setThreeDSecureRequest()
     * @param string $creditCardType
     * @param string $creditCardNumber
     * @param int $expMonth
     * @param int $expYear
     * @param \PayPal\StructType\PayerInfoType $cardOwner
     * @param string $cVV2
     * @param int $startMonth
     * @param int $startYear
     * @param string $issueNumber
     * @param \PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest
     */
    public function __construct($creditCardType = null, $creditCardNumber = null, $expMonth = null, $expYear = null, \PayPal\StructType\PayerInfoType $cardOwner = null, $cVV2 = null, $startMonth = null, $startYear = null, $issueNumber = null, \PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest = null)
    {
        $this
            ->setCreditCardType($creditCardType)
            ->setCreditCardNumber($creditCardNumber)
            ->setExpMonth($expMonth)
            ->setExpYear($expYear)
            ->setCardOwner($cardOwner)
            ->setCVV2($cVV2)
            ->setStartMonth($startMonth)
            ->setStartYear($startYear)
            ->setIssueNumber($issueNumber)
            ->setThreeDSecureRequest($threeDSecureRequest);
    }
    /**
     * Get CreditCardType value
     * @return string|null
     */
    public function getCreditCardType()
    {
        return $this->CreditCardType;
    }
    /**
     * Set CreditCardType value
     * @uses \PayPal\EnumType\CreditCardTypeType::valueIsValid()
     * @uses \PayPal\EnumType\CreditCardTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $creditCardType
     * @return \PayPal\StructType\CreditCardDetailsType
     */
    public function setCreditCardType($creditCardType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CreditCardTypeType::valueIsValid($creditCardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CreditCardTypeType', is_array($creditCardType) ? implode(', ', $creditCardType) : var_export($creditCardType, true), implode(', ', \PayPal\EnumType\CreditCardTypeType::getValidValues())), __LINE__);
        }
        $this->CreditCardType = $creditCardType;
        return $this;
    }
    /**
     * Get CreditCardNumber value
     * @return string|null
     */
    public function getCreditCardNumber()
    {
        return $this->CreditCardNumber;
    }
    /**
     * Set CreditCardNumber value
     * @param string $creditCardNumber
     * @return \PayPal\StructType\CreditCardDetailsType
     */
    public function setCreditCardNumber($creditCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardNumber) && !is_string($creditCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardNumber, true), gettype($creditCardNumber)), __LINE__);
        }
        $this->CreditCardNumber = $creditCardNumber;
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
     * @return \PayPal\StructType\CreditCardDetailsType
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
     * @return \PayPal\StructType\CreditCardDetailsType
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
     * Get CardOwner value
     * @return \PayPal\StructType\PayerInfoType|null
     */
    public function getCardOwner()
    {
        return $this->CardOwner;
    }
    /**
     * Set CardOwner value
     * @param \PayPal\StructType\PayerInfoType $cardOwner
     * @return \PayPal\StructType\CreditCardDetailsType
     */
    public function setCardOwner(\PayPal\StructType\PayerInfoType $cardOwner = null)
    {
        $this->CardOwner = $cardOwner;
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
     * @return \PayPal\StructType\CreditCardDetailsType
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
     * @return \PayPal\StructType\CreditCardDetailsType
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
     * @return \PayPal\StructType\CreditCardDetailsType
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
     * @return \PayPal\StructType\CreditCardDetailsType
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
    /**
     * Get ThreeDSecureRequest value
     * @return \PayPal\StructType\ThreeDSecureRequestType|null
     */
    public function getThreeDSecureRequest()
    {
        return $this->ThreeDSecureRequest;
    }
    /**
     * Set ThreeDSecureRequest value
     * @param \PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest
     * @return \PayPal\StructType\CreditCardDetailsType
     */
    public function setThreeDSecureRequest(\PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest = null)
    {
        $this->ThreeDSecureRequest = $threeDSecureRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CreditCardDetailsType
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
