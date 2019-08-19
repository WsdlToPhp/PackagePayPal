<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. This element should only be used in response elements and
 * typically should not be used in creating request messages which specify the name of a country using the Country element (which refers to a 2-letter country code). | ISO 3166 standard country code Character limit: Two single-byte characters.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Person's name associated with this address. Character length and limitations: 32 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Street1
     * Meta information extracted from the WSDL
     * - documentation: First street address. Character length and limitations: 300 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Street1;
    /**
     * The Street2
     * Meta information extracted from the WSDL
     * - documentation: Second street address. Character length and limitations: 300 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Street2;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - documentation: Name of city. Character length and limitations: 120 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The StateOrProvince
     * Meta information extracted from the WSDL
     * - documentation: State or province. Character length and limitations: 120 single-byte alphanumeric characters For Canada and the USA, StateOrProvince must be the standard 2-character abbreviation of a state or province. Canadian Provinces Alberta AB
     * British_Columbia BC Manitoba MB New_Brunswick NB Newfoundland NF Northwest_Territories NT Nova_Scotia NS Nunavut NU Ontario ON Prince_Edward_Island PE Quebec QC Saskatchewan SK Yukon YK United States Alabama AL Alaska AK American_Samoa AS Arizona AZ
     * Arkansas AR California CA Colorado CO Connecticut CT Delaware DE District_Of_Columbia DC Federated_States_Of_Micronesia FM Florida FL Georgia GA Guam GU Hawaii HI Idaho ID Illinois IL Indiana IN Iowa IA Kansas KS Kentucky KY Louisiana LA Maine ME
     * Marshall_Islands MH Maryland MD Massachusetts MA Michigan MI Minnesota MN Mississippi MS Missouri MO Montana MT Nebraska NE Nevada NV New_Hampshire NH New_Jersey NJ New_Mexico NM New_York NY North_Carolina NC North_Dakota ND Northern_Mariana_Islands
     * MP Ohio OH Oklahoma OK Oregon OR Palau PW Pennsylvania PA Puerto_Rico PR Rhode_Island RI South_Carolina SC South_Dakota SD Tennessee TN Texas TX Utah UT Vermont VT Virgin_Islands VI Virginia VA Washington WA West_Virginia WV Wisconsin WI Wyoming WY
     * Armed_Forces_Americas AA Armed_Forces AE Armed_Forces_Pacific AP
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvince;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:Country
     * @var string
     */
    public $Country;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:CountryName
     * @var string
     */
    public $CountryName;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - documentation: Telephone number associated with this address
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The AddressID
     * Meta information extracted from the WSDL
     * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile, or UpdateRecurringPaymentsProfile.
     * - minOccurs: 0
     * @var string
     */
    public $AddressID;
    /**
     * The AddressOwner
     * Meta information extracted from the WSDL
     * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
     * - minOccurs: 0
     * @var string
     */
    public $AddressOwner;
    /**
     * The ExternalAddressID
     * Meta information extracted from the WSDL
     * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalAddressID;
    /**
     * The InternationalName
     * Meta information extracted from the WSDL
     * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. Seller's
     * international name that is associated with the payment address.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalName;
    /**
     * The InternationalStateAndCity
     * Meta information extracted from the WSDL
     * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. International
     * state and city for the seller's payment address.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalStateAndCity;
    /**
     * The InternationalStreet
     * Meta information extracted from the WSDL
     * - documentation: IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile. Only applicable to SellerPaymentAddress today. Seller's
     * international street address that is associated with the payment address.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalStreet;
    /**
     * The AddressStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the address on file with PayPal. IMPORTANT: Do not set this element for SetExpressCheckout, DoExpressCheckoutPayment, DoDirectPayment, CreateRecurringPaymentsProfile or UpdateRecurringPaymentsProfile.
     * - minOccurs: 0
     * @var string
     */
    public $AddressStatus;
    /**
     * The AddressNormalizationStatus
     * Meta information extracted from the WSDL
     * - documentation: Returns Normalization Status of the Address. Possible values are Normalized, Unnormalized, and None.
     * - minOccurs: 0
     * @var string
     */
    public $AddressNormalizationStatus;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setName()
     * @uses AddressType::setStreet1()
     * @uses AddressType::setStreet2()
     * @uses AddressType::setCityName()
     * @uses AddressType::setStateOrProvince()
     * @uses AddressType::setCountry()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setPhone()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setAddressID()
     * @uses AddressType::setAddressOwner()
     * @uses AddressType::setExternalAddressID()
     * @uses AddressType::setInternationalName()
     * @uses AddressType::setInternationalStateAndCity()
     * @uses AddressType::setInternationalStreet()
     * @uses AddressType::setAddressStatus()
     * @uses AddressType::setAddressNormalizationStatus()
     * @param string $name
     * @param string $street1
     * @param string $street2
     * @param string $cityName
     * @param string $stateOrProvince
     * @param string $country
     * @param string $countryName
     * @param string $phone
     * @param string $postalCode
     * @param string $addressID
     * @param string $addressOwner
     * @param string $externalAddressID
     * @param string $internationalName
     * @param string $internationalStateAndCity
     * @param string $internationalStreet
     * @param string $addressStatus
     * @param string $addressNormalizationStatus
     */
    public function __construct($name = null, $street1 = null, $street2 = null, $cityName = null, $stateOrProvince = null, $country = null, $countryName = null, $phone = null, $postalCode = null, $addressID = null, $addressOwner = null, $externalAddressID = null, $internationalName = null, $internationalStateAndCity = null, $internationalStreet = null, $addressStatus = null, $addressNormalizationStatus = null)
    {
        $this
            ->setName($name)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setCityName($cityName)
            ->setStateOrProvince($stateOrProvince)
            ->setCountry($country)
            ->setCountryName($countryName)
            ->setPhone($phone)
            ->setPostalCode($postalCode)
            ->setAddressID($addressID)
            ->setAddressOwner($addressOwner)
            ->setExternalAddressID($externalAddressID)
            ->setInternationalName($internationalName)
            ->setInternationalStateAndCity($internationalStateAndCity)
            ->setInternationalStreet($internationalStreet)
            ->setAddressStatus($addressStatus)
            ->setAddressNormalizationStatus($addressNormalizationStatus);
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
     * @return \PayPal\StructType\AddressType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Street1 value
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->Street1;
    }
    /**
     * Set Street1 value
     * @param string $street1
     * @return \PayPal\StructType\AddressType
     */
    public function setStreet1($street1 = null)
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street1, true), gettype($street1)), __LINE__);
        }
        $this->Street1 = $street1;
        return $this;
    }
    /**
     * Get Street2 value
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->Street2;
    }
    /**
     * Set Street2 value
     * @param string $street2
     * @return \PayPal\StructType\AddressType
     */
    public function setStreet2($street2 = null)
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street2, true), gettype($street2)), __LINE__);
        }
        $this->Street2 = $street2;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \PayPal\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get StateOrProvince value
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->StateOrProvince;
    }
    /**
     * Set StateOrProvince value
     * @param string $stateOrProvince
     * @return \PayPal\StructType\AddressType
     */
    public function setStateOrProvince($stateOrProvince = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvince) && !is_string($stateOrProvince)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOrProvince, true), gettype($stateOrProvince)), __LINE__);
        }
        $this->StateOrProvince = $stateOrProvince;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \PayPal\EnumType\CountryCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $country
     * @return \PayPal\StructType\AddressType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CountryCodeType', is_array($country) ? implode(', ', $country) : var_export($country, true), implode(', ', \PayPal\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \PayPal\StructType\AddressType
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryName, true), gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \PayPal\StructType\AddressType
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \PayPal\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get AddressID value
     * @return string|null
     */
    public function getAddressID()
    {
        return $this->AddressID;
    }
    /**
     * Set AddressID value
     * @param string $addressID
     * @return \PayPal\StructType\AddressType
     */
    public function setAddressID($addressID = null)
    {
        // validation for constraint: string
        if (!is_null($addressID) && !is_string($addressID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressID, true), gettype($addressID)), __LINE__);
        }
        $this->AddressID = $addressID;
        return $this;
    }
    /**
     * Get AddressOwner value
     * @return string|null
     */
    public function getAddressOwner()
    {
        return $this->AddressOwner;
    }
    /**
     * Set AddressOwner value
     * @uses \PayPal\EnumType\AddressOwnerCodeType::valueIsValid()
     * @uses \PayPal\EnumType\AddressOwnerCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressOwner
     * @return \PayPal\StructType\AddressType
     */
    public function setAddressOwner($addressOwner = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AddressOwnerCodeType::valueIsValid($addressOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AddressOwnerCodeType', is_array($addressOwner) ? implode(', ', $addressOwner) : var_export($addressOwner, true), implode(', ', \PayPal\EnumType\AddressOwnerCodeType::getValidValues())), __LINE__);
        }
        $this->AddressOwner = $addressOwner;
        return $this;
    }
    /**
     * Get ExternalAddressID value
     * @return string|null
     */
    public function getExternalAddressID()
    {
        return $this->ExternalAddressID;
    }
    /**
     * Set ExternalAddressID value
     * @param string $externalAddressID
     * @return \PayPal\StructType\AddressType
     */
    public function setExternalAddressID($externalAddressID = null)
    {
        // validation for constraint: string
        if (!is_null($externalAddressID) && !is_string($externalAddressID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalAddressID, true), gettype($externalAddressID)), __LINE__);
        }
        $this->ExternalAddressID = $externalAddressID;
        return $this;
    }
    /**
     * Get InternationalName value
     * @return string|null
     */
    public function getInternationalName()
    {
        return $this->InternationalName;
    }
    /**
     * Set InternationalName value
     * @param string $internationalName
     * @return \PayPal\StructType\AddressType
     */
    public function setInternationalName($internationalName = null)
    {
        // validation for constraint: string
        if (!is_null($internationalName) && !is_string($internationalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalName, true), gettype($internationalName)), __LINE__);
        }
        $this->InternationalName = $internationalName;
        return $this;
    }
    /**
     * Get InternationalStateAndCity value
     * @return string|null
     */
    public function getInternationalStateAndCity()
    {
        return $this->InternationalStateAndCity;
    }
    /**
     * Set InternationalStateAndCity value
     * @param string $internationalStateAndCity
     * @return \PayPal\StructType\AddressType
     */
    public function setInternationalStateAndCity($internationalStateAndCity = null)
    {
        // validation for constraint: string
        if (!is_null($internationalStateAndCity) && !is_string($internationalStateAndCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalStateAndCity, true), gettype($internationalStateAndCity)), __LINE__);
        }
        $this->InternationalStateAndCity = $internationalStateAndCity;
        return $this;
    }
    /**
     * Get InternationalStreet value
     * @return string|null
     */
    public function getInternationalStreet()
    {
        return $this->InternationalStreet;
    }
    /**
     * Set InternationalStreet value
     * @param string $internationalStreet
     * @return \PayPal\StructType\AddressType
     */
    public function setInternationalStreet($internationalStreet = null)
    {
        // validation for constraint: string
        if (!is_null($internationalStreet) && !is_string($internationalStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalStreet, true), gettype($internationalStreet)), __LINE__);
        }
        $this->InternationalStreet = $internationalStreet;
        return $this;
    }
    /**
     * Get AddressStatus value
     * @return string|null
     */
    public function getAddressStatus()
    {
        return $this->AddressStatus;
    }
    /**
     * Set AddressStatus value
     * @uses \PayPal\EnumType\AddressStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\AddressStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressStatus
     * @return \PayPal\StructType\AddressType
     */
    public function setAddressStatus($addressStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AddressStatusCodeType::valueIsValid($addressStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AddressStatusCodeType', is_array($addressStatus) ? implode(', ', $addressStatus) : var_export($addressStatus, true), implode(', ', \PayPal\EnumType\AddressStatusCodeType::getValidValues())), __LINE__);
        }
        $this->AddressStatus = $addressStatus;
        return $this;
    }
    /**
     * Get AddressNormalizationStatus value
     * @return string|null
     */
    public function getAddressNormalizationStatus()
    {
        return $this->AddressNormalizationStatus;
    }
    /**
     * Set AddressNormalizationStatus value
     * @uses \PayPal\EnumType\AddressNormalizationStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\AddressNormalizationStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressNormalizationStatus
     * @return \PayPal\StructType\AddressType
     */
    public function setAddressNormalizationStatus($addressNormalizationStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AddressNormalizationStatusCodeType::valueIsValid($addressNormalizationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AddressNormalizationStatusCodeType', is_array($addressNormalizationStatus) ? implode(', ', $addressNormalizationStatus) : var_export($addressNormalizationStatus, true), implode(', ', \PayPal\EnumType\AddressNormalizationStatusCodeType::getValidValues())), __LINE__);
        }
        $this->AddressNormalizationStatus = $addressNormalizationStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AddressType
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
