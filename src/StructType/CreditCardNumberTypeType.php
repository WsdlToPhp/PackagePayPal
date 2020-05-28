<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardNumberTypeType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreditCardNumberTypeType extends AbstractStructBase
{
    /**
     * The CreditCardType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardType;
    /**
     * The CreditCardNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardNumber;
    /**
     * Constructor method for CreditCardNumberTypeType
     * @uses CreditCardNumberTypeType::setCreditCardType()
     * @uses CreditCardNumberTypeType::setCreditCardNumber()
     * @param string $creditCardType
     * @param string $creditCardNumber
     */
    public function __construct($creditCardType = null, $creditCardNumber = null)
    {
        $this
            ->setCreditCardType($creditCardType)
            ->setCreditCardNumber($creditCardNumber);
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
     * @return \PayPal\StructType\CreditCardNumberTypeType
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
     * @return \PayPal\StructType\CreditCardNumberTypeType
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
}
