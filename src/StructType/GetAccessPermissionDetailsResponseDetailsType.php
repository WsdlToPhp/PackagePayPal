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
     * Meta information extracted from the WSDL
     * - documentation: The first name of the User. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - documentation: The Last name of the user. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: The email address of the user. Character length and limitations: 256 single-byte alphanumeric characters.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The AccessPermissionName
     * Meta information extracted from the WSDL
     * - documentation: contains information about API Services
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AccessPermissionName;
    /**
     * The AccessPermissionStatus
     * Meta information extracted from the WSDL
     * - documentation: contains information about API Services
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AccessPermissionStatus;
    /**
     * The PayerID
     * Meta information extracted from the WSDL
     * - documentation: Encrypted PayPal customer account identification number. Required Character length and limitations: 127 single-byte characters.
     * - base: xs:string
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
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
     * This method is responsible for validating the values passed to the setAccessPermissionName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccessPermissionName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccessPermissionNameForArrayConstraintsFromSetAccessPermissionName(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem) {
            // validation for constraint: itemType
            if (!is_string($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem)) {
                $invalidValues[] = is_object($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem) ? get_class($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem) : sprintf('%s(%s)', gettype($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem), var_export($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccessPermissionName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccessPermissionName value
     * @throws \InvalidArgumentException
     * @param string[] $accessPermissionName
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function setAccessPermissionName(array $accessPermissionName = array())
    {
        // validation for constraint: array
        if ('' !== ($accessPermissionNameArrayErrorMessage = self::validateAccessPermissionNameForArrayConstraintsFromSetAccessPermissionName($accessPermissionName))) {
            throw new \InvalidArgumentException($accessPermissionNameArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The AccessPermissionName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * This method is responsible for validating the values passed to the setAccessPermissionStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccessPermissionStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccessPermissionStatusForArrayConstraintsFromSetAccessPermissionStatus(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem) {
            // validation for constraint: itemType
            if (!is_string($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem)) {
                $invalidValues[] = is_object($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem) ? get_class($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem) : sprintf('%s(%s)', gettype($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem), var_export($getAccessPermissionDetailsResponseDetailsTypeAccessPermissionStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccessPermissionStatus property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccessPermissionStatus value
     * @throws \InvalidArgumentException
     * @param string[] $accessPermissionStatus
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function setAccessPermissionStatus(array $accessPermissionStatus = array())
    {
        // validation for constraint: array
        if ('' !== ($accessPermissionStatusArrayErrorMessage = self::validateAccessPermissionStatusForArrayConstraintsFromSetAccessPermissionStatus($accessPermissionStatus))) {
            throw new \InvalidArgumentException($accessPermissionStatusArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The AccessPermissionStatus property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
        // validation for constraint: string
        if (!is_null($payerID) && !is_string($payerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerID, true), gettype($payerID)), __LINE__);
        }
        // validation for constraint: maxLength(127)
        if (!is_null($payerID) && mb_strlen($payerID) > 127) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 127', mb_strlen($payerID)), __LINE__);
        }
        $this->PayerID = $payerID;
        return $this;
    }
}
