<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAuthDetailsResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetAuthDetailsResponseDetailsType extends AbstractStructBase
{
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - documentation: The first name of the User. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - documentation: The Last name of the user. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: The email address of the user. Character length and limitations: 256 single-byte alphanumeric characters.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The PayerID
     * Meta informations extracted from the WSDL
     * - documentation: Encrypted PayPal customer account identification number. Required Character length and limitations: 127 single-byte characters.
     * - maxLength: 127
     * @var string
     */
    public $PayerID;
    /**
     * Constructor method for GetAuthDetailsResponseDetailsType
     * @uses GetAuthDetailsResponseDetailsType::setFirstName()
     * @uses GetAuthDetailsResponseDetailsType::setLastName()
     * @uses GetAuthDetailsResponseDetailsType::setEmail()
     * @uses GetAuthDetailsResponseDetailsType::setPayerID()
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $payerID
     */
    public function __construct($firstName = null, $lastName = null, $email = null, $payerID = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setPayerID($payerID);
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
     * @return \PayPal\StructType\GetAuthDetailsResponseDetailsType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
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
     * @return \PayPal\StructType\GetAuthDetailsResponseDetailsType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \PayPal\StructType\GetAuthDetailsResponseDetailsType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get PayerID value
     * @return string|null
     */
    public function getPayerID()
    {
        return $this->PayerID;
    }
    /**
     * Set PayerID value
     * @param string $payerID
     * @return \PayPal\StructType\GetAuthDetailsResponseDetailsType
     */
    public function setPayerID($payerID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($payerID) && strlen($payerID) > 127) || (is_array($payerID) && count($payerID) > 127)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 127 element(s) or a scalar of 127 character(s) at most, "%d" length given', is_scalar($payerID) ? strlen($payerID) : count($payerID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($payerID) && !is_string($payerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payerID)), __LINE__);
        }
        $this->PayerID = $payerID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetAuthDetailsResponseDetailsType
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
