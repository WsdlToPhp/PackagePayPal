<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumberType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PhoneNumberType extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Country code associated with this phone number.
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: Phone number associated with this phone.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The Extension
     * Meta information extracted from the WSDL
     * - documentation: Extension associated with this phone number.
     * - minOccurs: 0
     * @var string
     */
    public $Extension;
    /**
     * Constructor method for PhoneNumberType
     * @uses PhoneNumberType::setCountryCode()
     * @uses PhoneNumberType::setPhoneNumber()
     * @uses PhoneNumberType::setExtension()
     * @param string $countryCode
     * @param string $phoneNumber
     * @param string $extension
     */
    public function __construct($countryCode = null, $phoneNumber = null, $extension = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setPhoneNumber($phoneNumber)
            ->setExtension($extension);
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \PayPal\StructType\PhoneNumberType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \PayPal\StructType\PhoneNumberType
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get Extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param string $extension
     * @return \PayPal\StructType\PhoneNumberType
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PhoneNumberType
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
