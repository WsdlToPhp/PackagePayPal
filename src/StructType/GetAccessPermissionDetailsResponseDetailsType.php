<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessPermissionDetailsResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetAccessPermissionDetailsResponseDetailsType extends AbstractStructBase
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
     * The AccessPermissionName
     * Meta informations extracted from the WSDL
     * - documentation: contains information about API Services
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AccessPermissionName;
    /**
     * The AccessPermissionStatus
     * Meta informations extracted from the WSDL
     * - documentation: contains information about API Services
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AccessPermissionStatus;
    /**
     * The PayerID
     * Meta informations extracted from the WSDL
     * - documentation: Encrypted PayPal customer account identification number. Required Character length and limitations: 127 single-byte characters.
     * - maxLength: 127
     * @var string
     */
    public $PayerID;
    /**
     * Constructor method for GetAccessPermissionDetailsResponseDetailsType
     * @uses GetAccessPermissionDetailsResponseDetailsType::setFirstName()
     * @uses GetAccessPermissionDetailsResponseDetailsType::setLastName()
     * @uses GetAccessPermissionDetailsResponseDetailsType::setEmail()
     * @uses GetAccessPermissionDetailsResponseDetailsType::setAccessPermissionName()
     * @uses GetAccessPermissionDetailsResponseDetailsType::setAccessPermissionStatus()
     * @uses GetAccessPermissionDetailsResponseDetailsType::setPayerID()
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string[] $accessPermissionName
     * @param string[] $accessPermissionStatus
     * @param string $payerID
     */
    public function __construct($firstName = null, $lastName = null, $email = null, array $accessPermissionName = array(), array $accessPermissionStatus = array(), $payerID = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setEmail($email)
            ->setAccessPermissionName($accessPermissionName)
            ->setAccessPermissionStatus($accessPermissionStatus)
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
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
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
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
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
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
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
     * Get AccessPermissionName value
     * @return string[]|null
     */
    public function getAccessPermissionName()
    {
        return $this->AccessPermissionName;
    }
    /**
     * Set AccessPermissionName value
     * @throws \InvalidArgumentException
     * @param string[] $accessPermissionName
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function setAccessPermissionName(array $accessPermissionName = array())
    {
        foreach ($accessPermissionName as $getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem) {
            // validation for constraint: itemType
            if (!is_string($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem)) {
                throw new \InvalidArgumentException(sprintf('The AccessPermissionName property can only contain items of string, "%s" given', is_object($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem) ? get_class($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem) : gettype($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem)), __LINE__);
            }
        }
        $this->AccessPermissionName = $accessPermissionName;
        return $this;
    }
    /**
     * Add item to AccessPermissionName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function addToAccessPermissionName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AccessPermissionName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccessPermissionName[] = $item;
        return $this;
    }
    /**
     * Get AccessPermissionStatus value
     * @return string[]|null
     */
    public function getAccessPermissionStatus()
    {
        return $this->AccessPermissionStatus;
    }
    /**
     * Set AccessPermissionStatus value
     * @throws \InvalidArgumentException
     * @param string[] $accessPermissionStatus
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function setAccessPermissionStatus(array $accessPermissionStatus = array())
    {
        foreach ($accessPermissionStatus as $getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem) {
            // validation for constraint: itemType
            if (!is_string($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem)) {
                throw new \InvalidArgumentException(sprintf('The AccessPermissionStatus property can only contain items of string, "%s" given', is_object($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem) ? get_class($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem) : gettype($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem)), __LINE__);
            }
        }
        $this->AccessPermissionStatus = $accessPermissionStatus;
        return $this;
    }
    /**
     * Add item to AccessPermissionStatus value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function addToAccessPermissionStatus($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AccessPermissionStatus property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccessPermissionStatus[] = $item;
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
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
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
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
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
