<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressVerifyRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressVerifyRequestType extends AbstractRequestType
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: Email address of buyer to be verified. Required Maximum string length: 255 single-byte characters Input mask: ?@?.??
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Email;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - documentation: First line of buyer’s billing or shipping street address to be verified. Required For verification, input value of street address must match the first three single-byte characters of the street address on file for the PayPal
     * account. Maximum string length: 35 single-byte characters Alphanumeric plus - , . ‘ # \ Whitespace and case of input value are ignored.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Street;
    /**
     * The Zip
     * Meta informations extracted from the WSDL
     * - documentation: Postal code to be verified. Required For verification, input value of postal code must match the first five single-byte characters of the postal code on file for the PayPal account. Maximum string length: 16 single-byte characters
     * Whitespace and case of input value are ignored.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Zip;
    /**
     * Constructor method for AddressVerifyRequestType
     * @uses AddressVerifyRequestType::setEmail()
     * @uses AddressVerifyRequestType::setStreet()
     * @uses AddressVerifyRequestType::setZip()
     * @param string $email
     * @param string $street
     * @param string $zip
     */
    public function __construct($email = null, $street = null, $zip = null)
    {
        $this
            ->setEmail($email)
            ->setStreet($street)
            ->setZip($zip);
    }
    /**
     * Get Email value
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \PayPal\StructType\AddressVerifyRequestType
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
     * Get Street value
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \PayPal\StructType\AddressVerifyRequestType
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get Zip value
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }
    /**
     * Set Zip value
     * @param string $zip
     * @return \PayPal\StructType\AddressVerifyRequestType
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->Zip = $zip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AddressVerifyRequestType
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
