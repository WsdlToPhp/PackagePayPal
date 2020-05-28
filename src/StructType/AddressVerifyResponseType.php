<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressVerifyResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressVerifyResponseType extends AbstractResponseType
{
    /**
     * The ConfirmationCode
     * Meta information extracted from the WSDL
     * - documentation: Confirmation of a match, with one of the following tokens: None: The input value of the Email object does not match any email address on file at PayPal. Confirmed: If the value of the StreetMatch object is Matched, PayPal responds
     * that the entire postal address is confirmed. Unconfirmed: PayPal responds that the postal address is unconfirmed
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ConfirmationCode;
    /**
     * The StreetMatch
     * Meta information extracted from the WSDL
     * - documentation: PayPal has compared the postal address you want to verify with the postal address on file at PayPal. None: The input value of the Email object does not match any email address on file at PayPal. In addition, an error response is
     * returned. No further comparison of other input values has been made. Matched: The street address matches the street address on file at PayPal. Unmatched: The street address does not match the street address on file at PayPal.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StreetMatch;
    /**
     * The ZipMatch
     * Meta information extracted from the WSDL
     * - documentation: PayPal has compared the zip code you want to verify with the zip code on file for the email address. None: The street address was unmatched. No further comparison of other input values has been made. Matched: The zip code matches the
     * zip code on file at PayPal. Unmatched: The zip code does not match the zip code on file at PayPal.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ZipMatch;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Two-character country code (ISO 3166) on file for the PayPal email address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The PayPalToken
     * Meta information extracted from the WSDL
     * - documentation: The token prevents a buyer from using any street address other than the address on file at PayPal during additional purchases he might make from the merchant. It contains encrypted information about the user’s street address and
     * email address. You can pass the value of the token with the Buy Now button HTML address_api_token variable so that PayPal prevents the buyer from using any street address or email address other than those verified by PayPal. The token is valid for 24
     * hours. Character length and limitations: 94 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PayPalToken;
    /**
     * Constructor method for AddressVerifyResponseType
     * @uses AddressVerifyResponseType::setConfirmationCode()
     * @uses AddressVerifyResponseType::setStreetMatch()
     * @uses AddressVerifyResponseType::setZipMatch()
     * @uses AddressVerifyResponseType::setCountryCode()
     * @uses AddressVerifyResponseType::setPayPalToken()
     * @param string $confirmationCode
     * @param string $streetMatch
     * @param string $zipMatch
     * @param string $countryCode
     * @param string $payPalToken
     */
    public function __construct($confirmationCode = null, $streetMatch = null, $zipMatch = null, $countryCode = null, $payPalToken = null)
    {
        $this
            ->setConfirmationCode($confirmationCode)
            ->setStreetMatch($streetMatch)
            ->setZipMatch($zipMatch)
            ->setCountryCode($countryCode)
            ->setPayPalToken($payPalToken);
    }
    /**
     * Get ConfirmationCode value
     * @return string
     */
    public function getConfirmationCode()
    {
        return $this->ConfirmationCode;
    }
    /**
     * Set ConfirmationCode value
     * @uses \PayPal\EnumType\AddressStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\AddressStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $confirmationCode
     * @return \PayPal\StructType\AddressVerifyResponseType
     */
    public function setConfirmationCode($confirmationCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AddressStatusCodeType::valueIsValid($confirmationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AddressStatusCodeType', is_array($confirmationCode) ? implode(', ', $confirmationCode) : var_export($confirmationCode, true), implode(', ', \PayPal\EnumType\AddressStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ConfirmationCode = $confirmationCode;
        return $this;
    }
    /**
     * Get StreetMatch value
     * @return string
     */
    public function getStreetMatch()
    {
        return $this->StreetMatch;
    }
    /**
     * Set StreetMatch value
     * @uses \PayPal\EnumType\MatchStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MatchStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $streetMatch
     * @return \PayPal\StructType\AddressVerifyResponseType
     */
    public function setStreetMatch($streetMatch = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MatchStatusCodeType::valueIsValid($streetMatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MatchStatusCodeType', is_array($streetMatch) ? implode(', ', $streetMatch) : var_export($streetMatch, true), implode(', ', \PayPal\EnumType\MatchStatusCodeType::getValidValues())), __LINE__);
        }
        $this->StreetMatch = $streetMatch;
        return $this;
    }
    /**
     * Get ZipMatch value
     * @return string|null
     */
    public function getZipMatch()
    {
        return $this->ZipMatch;
    }
    /**
     * Set ZipMatch value
     * @uses \PayPal\EnumType\MatchStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MatchStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $zipMatch
     * @return \PayPal\StructType\AddressVerifyResponseType
     */
    public function setZipMatch($zipMatch = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MatchStatusCodeType::valueIsValid($zipMatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MatchStatusCodeType', is_array($zipMatch) ? implode(', ', $zipMatch) : var_export($zipMatch, true), implode(', ', \PayPal\EnumType\MatchStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ZipMatch = $zipMatch;
        return $this;
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
     * @uses \PayPal\EnumType\CountryCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $countryCode
     * @return \PayPal\StructType\AddressVerifyResponseType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CountryCodeType::valueIsValid($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CountryCodeType', is_array($countryCode) ? implode(', ', $countryCode) : var_export($countryCode, true), implode(', ', \PayPal\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get PayPalToken value
     * @return string|null
     */
    public function getPayPalToken()
    {
        return $this->PayPalToken;
    }
    /**
     * Set PayPalToken value
     * @param string $payPalToken
     * @return \PayPal\StructType\AddressVerifyResponseType
     */
    public function setPayPalToken($payPalToken = null)
    {
        // validation for constraint: string
        if (!is_null($payPalToken) && !is_string($payPalToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalToken, true), gettype($payPalToken)), __LINE__);
        }
        $this->PayPalToken = $payPalToken;
        return $this;
    }
}
