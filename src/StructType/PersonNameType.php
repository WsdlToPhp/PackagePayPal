<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonNameType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PersonNameType extends AbstractStructBase
{
    /**
     * The Salutation
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * @var string
     */
    public $Salutation;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Suffix
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
     * - minOccurs: 0
     * @var string
     */
    public $Suffix;
    /**
     * Constructor method for PersonNameType
     * @uses PersonNameType::setSalutation()
     * @uses PersonNameType::setFirstName()
     * @uses PersonNameType::setMiddleName()
     * @uses PersonNameType::setLastName()
     * @uses PersonNameType::setSuffix()
     * @param string $salutation
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $suffix
     */
    public function __construct($salutation = null, $firstName = null, $middleName = null, $lastName = null, $suffix = null)
    {
        $this
            ->setSalutation($salutation)
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setLastName($lastName)
            ->setSuffix($suffix);
    }
    /**
     * Get Salutation value
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->Salutation;
    }
    /**
     * Set Salutation value
     * @param string $salutation
     * @return \PayPal\StructType\PersonNameType
     */
    public function setSalutation($salutation = null)
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($salutation) && mb_strlen($salutation) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($salutation)), __LINE__);
        }
        $this->Salutation = $salutation;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \PayPal\StructType\PersonNameType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($firstName) && mb_strlen($firstName) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \PayPal\StructType\PersonNameType
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($middleName) && mb_strlen($middleName) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen($middleName)), __LINE__);
        }
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \PayPal\StructType\PersonNameType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($lastName) && mb_strlen($lastName) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \PayPal\StructType\PersonNameType
     */
    public function setSuffix($suffix = null)
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suffix, true), gettype($suffix)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($suffix) && mb_strlen($suffix) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen($suffix)), __LINE__);
        }
        $this->Suffix = $suffix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PersonNameType
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
