<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about the buyer's account passed in by the merchant or partner. Optional.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyerDetailsType extends AbstractStructBase
{
    /**
     * The BuyerId
     * Meta information extracted from the WSDL
     * - documentation: The client's unique ID for this user.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerId;
    /**
     * The BuyerUserName
     * Meta information extracted from the WSDL
     * - documentation: The user name of the user at the marketplaces site.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerUserName;
    /**
     * The BuyerRegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: Date when the user registered with the marketplace.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerRegistrationDate;
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
     * The IdentificationInfo
     * Meta information extracted from the WSDL
     * - documentation: Contains information that identifies the buyer. e.g. email address or the external remember me id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\IdentificationInfoType
     */
    public $IdentificationInfo;
    /**
     * Constructor method for BuyerDetailsType
     * @uses BuyerDetailsType::setBuyerId()
     * @uses BuyerDetailsType::setBuyerUserName()
     * @uses BuyerDetailsType::setBuyerRegistrationDate()
     * @uses BuyerDetailsType::setTaxIdDetails()
     * @uses BuyerDetailsType::setIdentificationInfo()
     * @param string $buyerId
     * @param string $buyerUserName
     * @param string $buyerRegistrationDate
     * @param \PayPal\StructType\TaxIdDetailsType $taxIdDetails
     * @param \PayPal\StructType\IdentificationInfoType $identificationInfo
     */
    public function __construct($buyerId = null, $buyerUserName = null, $buyerRegistrationDate = null, \PayPal\StructType\TaxIdDetailsType $taxIdDetails = null, \PayPal\StructType\IdentificationInfoType $identificationInfo = null)
    {
        $this
            ->setBuyerId($buyerId)
            ->setBuyerUserName($buyerUserName)
            ->setBuyerRegistrationDate($buyerRegistrationDate)
            ->setTaxIdDetails($taxIdDetails)
            ->setIdentificationInfo($identificationInfo);
    }
    /**
     * Get BuyerId value
     * @return string|null
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }
    /**
     * Set BuyerId value
     * @param string $buyerId
     * @return \PayPal\StructType\BuyerDetailsType
     */
    public function setBuyerId($buyerId = null)
    {
        // validation for constraint: string
        if (!is_null($buyerId) && !is_string($buyerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerId, true), gettype($buyerId)), __LINE__);
        }
        $this->BuyerId = $buyerId;
        return $this;
    }
    /**
     * Get BuyerUserName value
     * @return string|null
     */
    public function getBuyerUserName()
    {
        return $this->BuyerUserName;
    }
    /**
     * Set BuyerUserName value
     * @param string $buyerUserName
     * @return \PayPal\StructType\BuyerDetailsType
     */
    public function setBuyerUserName($buyerUserName = null)
    {
        // validation for constraint: string
        if (!is_null($buyerUserName) && !is_string($buyerUserName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerUserName, true), gettype($buyerUserName)), __LINE__);
        }
        $this->BuyerUserName = $buyerUserName;
        return $this;
    }
    /**
     * Get BuyerRegistrationDate value
     * @return string|null
     */
    public function getBuyerRegistrationDate()
    {
        return $this->BuyerRegistrationDate;
    }
    /**
     * Set BuyerRegistrationDate value
     * @param string $buyerRegistrationDate
     * @return \PayPal\StructType\BuyerDetailsType
     */
    public function setBuyerRegistrationDate($buyerRegistrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($buyerRegistrationDate) && !is_string($buyerRegistrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerRegistrationDate, true), gettype($buyerRegistrationDate)), __LINE__);
        }
        $this->BuyerRegistrationDate = $buyerRegistrationDate;
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
     * @return \PayPal\StructType\BuyerDetailsType
     */
    public function setTaxIdDetails(\PayPal\StructType\TaxIdDetailsType $taxIdDetails = null)
    {
        $this->TaxIdDetails = $taxIdDetails;
        return $this;
    }
    /**
     * Get IdentificationInfo value
     * @return \PayPal\StructType\IdentificationInfoType|null
     */
    public function getIdentificationInfo()
    {
        return $this->IdentificationInfo;
    }
    /**
     * Set IdentificationInfo value
     * @param \PayPal\StructType\IdentificationInfoType $identificationInfo
     * @return \PayPal\StructType\BuyerDetailsType
     */
    public function setIdentificationInfo(\PayPal\StructType\IdentificationInfoType $identificationInfo = null)
    {
        $this->IdentificationInfo = $identificationInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BuyerDetailsType
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
