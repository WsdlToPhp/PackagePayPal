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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 20
     * @var string
     */
    public $Salutation;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 25
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 25
     * @var string
     */
    public $MiddleName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 25
     * @var string
     */
    public $LastName;
    /**
     * The Suffix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 12
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
        // validation for constraint: maxLength
        if ((is_scalar($salutation) && strlen($salutation) > 20) || (is_array($salutation) && count($salutation) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($salutation) ? strlen($salutation) : count($salutation)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salutation)), __LINE__);
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
        // validation for constraint: maxLength
        if ((is_scalar($firstName) && strlen($firstName) > 25) || (is_array($firstName) && count($firstName) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($firstName) ? strlen($firstName) : count($firstName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
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
        // validation for constraint: maxLength
        if ((is_scalar($middleName) && strlen($middleName) > 25) || (is_array($middleName) && count($middleName) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($middleName) ? strlen($middleName) : count($middleName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
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
        // validation for constraint: maxLength
        if ((is_scalar($lastName) && strlen($lastName) > 25) || (is_array($lastName) && count($lastName) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($lastName) ? strlen($lastName) : count($lastName)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
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
        // validation for constraint: maxLength
        if ((is_scalar($suffix) && strlen($suffix) > 12) || (is_array($suffix) && count($suffix) > 12)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 12 element(s) or a scalar of 12 character(s) at most, "%d" length given', is_scalar($suffix) ? strlen($suffix) : count($suffix)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suffix)), __LINE__);
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
