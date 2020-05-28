<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PayerInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: PayerInfoType Payer information
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PayerInfoType extends AbstractStructBase
{
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - documentation: Email address of payer Character length and limitations: 127 single-byte characters
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $Payer;
    /**
     * The PayerID
     * Meta information extracted from the WSDL
     * - documentation: Unique customer ID Character length and limitations: 17 single-byte characters
     * - base: xs:string
     * - maxLength: 127
     * - minOccurs: 0
     * @var string
     */
    public $PayerID;
    /**
     * The PayerStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of payer's email address
     * - minOccurs: 0
     * @var string
     */
    public $PayerStatus;
    /**
     * The PayerName
     * Meta information extracted from the WSDL
     * - documentation: Name of payer
     * @var \PayPal\StructType\PersonNameType
     */
    public $PayerName;
    /**
     * The PayerCountry
     * Meta information extracted from the WSDL
     * - documentation: Payment sender's country of residence using standard two-character ISO 3166 country codes. Character length and limitations: Two single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $PayerCountry;
    /**
     * The PayerBusiness
     * Meta information extracted from the WSDL
     * - documentation: Payer's business name. Character length and limitations: 127 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $PayerBusiness;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: Payer's business address
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $Address;
    /**
     * The ContactPhone
     * Meta information extracted from the WSDL
     * - documentation: Business contact telephone number
     * - minOccurs: 0
     * @var string
     */
    public $ContactPhone;
    /**
     * The WalletItems
     * Meta information extracted from the WSDL
     * - documentation: Items such as merchant coupons, loyalty cards, and manufacturer coupons in the PayPal wallet.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\WalletItemsType[]
     */
    public $WalletItems;
    /**
     * The TaxIdDetails
     * Meta information extracted from the WSDL
     * - documentation: Details about payer's tax info. Refer to the TaxIdDetailsType for more details.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\TaxIdDetailsType
     */
    public $TaxIdDetails;
    /**
     * The EnhancedPayerInfo
     * Meta information extracted from the WSDL
     * - documentation: Holds any enhanced information about the payer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\EnhancedPayerInfoType
     */
    public $EnhancedPayerInfo;
    /**
     * Constructor method for PayerInfoType
     * @uses PayerInfoType::setPayer()
     * @uses PayerInfoType::setPayerID()
     * @uses PayerInfoType::setPayerStatus()
     * @uses PayerInfoType::setPayerName()
     * @uses PayerInfoType::setPayerCountry()
     * @uses PayerInfoType::setPayerBusiness()
     * @uses PayerInfoType::setAddress()
     * @uses PayerInfoType::setContactPhone()
     * @uses PayerInfoType::setWalletItems()
     * @uses PayerInfoType::setTaxIdDetails()
     * @uses PayerInfoType::setEnhancedPayerInfo()
     * @param string $payer
     * @param string $payerID
     * @param string $payerStatus
     * @param \PayPal\StructType\PersonNameType $payerName
     * @param string $payerCountry
     * @param string $payerBusiness
     * @param \PayPal\StructType\AddressType $address
     * @param string $contactPhone
     * @param \PayPal\StructType\WalletItemsType[] $walletItems
     * @param \PayPal\StructType\TaxIdDetailsType $taxIdDetails
     * @param \PayPal\StructType\EnhancedPayerInfoType $enhancedPayerInfo
     */
    public function __construct($payer = null, $payerID = null, $payerStatus = null, \PayPal\StructType\PersonNameType $payerName = null, $payerCountry = null, $payerBusiness = null, \PayPal\StructType\AddressType $address = null, $contactPhone = null, array $walletItems = array(), \PayPal\StructType\TaxIdDetailsType $taxIdDetails = null, \PayPal\StructType\EnhancedPayerInfoType $enhancedPayerInfo = null)
    {
        $this
            ->setPayer($payer)
            ->setPayerID($payerID)
            ->setPayerStatus($payerStatus)
            ->setPayerName($payerName)
            ->setPayerCountry($payerCountry)
            ->setPayerBusiness($payerBusiness)
            ->setAddress($address)
            ->setContactPhone($contactPhone)
            ->setWalletItems($walletItems)
            ->setTaxIdDetails($taxIdDetails)
            ->setEnhancedPayerInfo($enhancedPayerInfo);
    }
    /**
     * Get Payer value
     * @return string|null
     */
    public function getPayer()
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param string $payer
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setPayer($payer = null)
    {
        // validation for constraint: string
        if (!is_null($payer) && !is_string($payer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payer, true), gettype($payer)), __LINE__);
        }
        $this->Payer = $payer;
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
     * @return \PayPal\StructType\PayerInfoType
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
    /**
     * Get PayerStatus value
     * @return string|null
     */
    public function getPayerStatus()
    {
        return $this->PayerStatus;
    }
    /**
     * Set PayerStatus value
     * @uses \PayPal\EnumType\PayPalUserStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PayPalUserStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payerStatus
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setPayerStatus($payerStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PayPalUserStatusCodeType::valueIsValid($payerStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PayPalUserStatusCodeType', is_array($payerStatus) ? implode(', ', $payerStatus) : var_export($payerStatus, true), implode(', ', \PayPal\EnumType\PayPalUserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PayerStatus = $payerStatus;
        return $this;
    }
    /**
     * Get PayerName value
     * @return \PayPal\StructType\PersonNameType|null
     */
    public function getPayerName()
    {
        return $this->PayerName;
    }
    /**
     * Set PayerName value
     * @param \PayPal\StructType\PersonNameType $payerName
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setPayerName(\PayPal\StructType\PersonNameType $payerName = null)
    {
        $this->PayerName = $payerName;
        return $this;
    }
    /**
     * Get PayerCountry value
     * @return string|null
     */
    public function getPayerCountry()
    {
        return $this->PayerCountry;
    }
    /**
     * Set PayerCountry value
     * @uses \PayPal\EnumType\CountryCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payerCountry
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setPayerCountry($payerCountry = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CountryCodeType::valueIsValid($payerCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CountryCodeType', is_array($payerCountry) ? implode(', ', $payerCountry) : var_export($payerCountry, true), implode(', ', \PayPal\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->PayerCountry = $payerCountry;
        return $this;
    }
    /**
     * Get PayerBusiness value
     * @return string|null
     */
    public function getPayerBusiness()
    {
        return $this->PayerBusiness;
    }
    /**
     * Set PayerBusiness value
     * @param string $payerBusiness
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setPayerBusiness($payerBusiness = null)
    {
        // validation for constraint: string
        if (!is_null($payerBusiness) && !is_string($payerBusiness)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerBusiness, true), gettype($payerBusiness)), __LINE__);
        }
        $this->PayerBusiness = $payerBusiness;
        return $this;
    }
    /**
     * Get Address value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \PayPal\StructType\AddressType $address
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setAddress(\PayPal\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get ContactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->ContactPhone;
    }
    /**
     * Set ContactPhone value
     * @param string $contactPhone
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setContactPhone($contactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($contactPhone) && !is_string($contactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPhone, true), gettype($contactPhone)), __LINE__);
        }
        $this->ContactPhone = $contactPhone;
        return $this;
    }
    /**
     * Get WalletItems value
     * @return \PayPal\StructType\WalletItemsType[]|null
     */
    public function getWalletItems()
    {
        return $this->WalletItems;
    }
    /**
     * This method is responsible for validating the values passed to the setWalletItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWalletItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWalletItemsForArrayConstraintsFromSetWalletItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $payerInfoTypeWalletItemsItem) {
            // validation for constraint: itemType
            if (!$payerInfoTypeWalletItemsItem instanceof \PayPal\StructType\WalletItemsType) {
                $invalidValues[] = is_object($payerInfoTypeWalletItemsItem) ? get_class($payerInfoTypeWalletItemsItem) : sprintf('%s(%s)', gettype($payerInfoTypeWalletItemsItem), var_export($payerInfoTypeWalletItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WalletItems property can only contain items of type \PayPal\StructType\WalletItemsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WalletItems value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\WalletItemsType[] $walletItems
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setWalletItems(array $walletItems = array())
    {
        // validation for constraint: array
        if ('' !== ($walletItemsArrayErrorMessage = self::validateWalletItemsForArrayConstraintsFromSetWalletItems($walletItems))) {
            throw new \InvalidArgumentException($walletItemsArrayErrorMessage, __LINE__);
        }
        $this->WalletItems = $walletItems;
        return $this;
    }
    /**
     * Add item to WalletItems value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\WalletItemsType $item
     * @return \PayPal\StructType\PayerInfoType
     */
    public function addToWalletItems(\PayPal\StructType\WalletItemsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\WalletItemsType) {
            throw new \InvalidArgumentException(sprintf('The WalletItems property can only contain items of type \PayPal\StructType\WalletItemsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WalletItems[] = $item;
        return $this;
    }
    /**
     * Get TaxIdDetails value
     * @return \PayPal\StructType\TaxIdDetailsType|null
     */
    public function getTaxIdDetails()
    {
        return $this->TaxIdDetails;
    }
    /**
     * Set TaxIdDetails value
     * @param \PayPal\StructType\TaxIdDetailsType $taxIdDetails
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setTaxIdDetails(\PayPal\StructType\TaxIdDetailsType $taxIdDetails = null)
    {
        $this->TaxIdDetails = $taxIdDetails;
        return $this;
    }
    /**
     * Get EnhancedPayerInfo value
     * @return \PayPal\StructType\EnhancedPayerInfoType|null
     */
    public function getEnhancedPayerInfo()
    {
        return $this->EnhancedPayerInfo;
    }
    /**
     * Set EnhancedPayerInfo value
     * @param \PayPal\StructType\EnhancedPayerInfoType $enhancedPayerInfo
     * @return \PayPal\StructType\PayerInfoType
     */
    public function setEnhancedPayerInfo(\PayPal\StructType\EnhancedPayerInfoType $enhancedPayerInfo = null)
    {
        $this->EnhancedPayerInfo = $enhancedPayerInfo;
        return $this;
    }
}
