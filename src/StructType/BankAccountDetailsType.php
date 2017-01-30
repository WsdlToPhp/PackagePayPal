<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAccountDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: BankAccountDetailsType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BankAccountDetailsType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Name of bank Character length and limitations: 192 alphanumeric characters
     * @var string
     */
    public $Name;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type of bank account: Checking or Savings
     * @var string
     */
    public $Type;
    /**
     * The RoutingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Merchantâs bank routing number Character length and limitations: 23 alphanumeric characters
     * @var string
     */
    public $RoutingNumber;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: Merchantâs bank account number Character length and limitations: 256 alphanumeric characters
     * @var string
     */
    public $AccountNumber;
    /**
     * Constructor method for BankAccountDetailsType
     * @uses BankAccountDetailsType::setName()
     * @uses BankAccountDetailsType::setType()
     * @uses BankAccountDetailsType::setRoutingNumber()
     * @uses BankAccountDetailsType::setAccountNumber()
     * @param string $name
     * @param string $type
     * @param string $routingNumber
     * @param string $accountNumber
     */
    public function __construct($name = null, $type = null, $routingNumber = null, $accountNumber = null)
    {
        $this
            ->setName($name)
            ->setType($type)
            ->setRoutingNumber($routingNumber)
            ->setAccountNumber($accountNumber);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \PayPal\StructType\BankAccountDetailsType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \PayPal\EnumType\BankAccountTypeType::valueIsValid()
     * @uses \PayPal\EnumType\BankAccountTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \PayPal\StructType\BankAccountDetailsType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BankAccountTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \PayPal\EnumType\BankAccountTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RoutingNumber value
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }
    /**
     * Set RoutingNumber value
     * @param string $routingNumber
     * @return \PayPal\StructType\BankAccountDetailsType
     */
    public function setRoutingNumber($routingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($routingNumber) && !is_string($routingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingNumber)), __LINE__);
        }
        $this->RoutingNumber = $routingNumber;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \PayPal\StructType\BankAccountDetailsType
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BankAccountDetailsType
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
