<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessOwnerInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: BusinessOwnerInfoType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BusinessOwnerInfoType extends AbstractStructBase
{
    /**
     * The Owner
     * Meta information extracted from the WSDL
     * - documentation: Details about the business owner
     * - minOccurs: 0
     * @var \PayPal\StructType\PayerInfoType
     */
    public $Owner;
    /**
     * The HomePhone
     * Meta information extracted from the WSDL
     * - documentation: Business ownerâs home telephone number Character length and limitations: 32 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $HomePhone;
    /**
     * The MobilePhone
     * Meta information extracted from the WSDL
     * - documentation: Business ownerâs mobile telephone number Character length and limitations: 32 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $MobilePhone;
    /**
     * The SSN
     * Meta information extracted from the WSDL
     * - documentation: Business ownerâs social security number Character length and limitations: 9 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $SSN;
    /**
     * Constructor method for BusinessOwnerInfoType
     * @uses BusinessOwnerInfoType::setOwner()
     * @uses BusinessOwnerInfoType::setHomePhone()
     * @uses BusinessOwnerInfoType::setMobilePhone()
     * @uses BusinessOwnerInfoType::setSSN()
     * @param \PayPal\StructType\PayerInfoType $owner
     * @param string $homePhone
     * @param string $mobilePhone
     * @param string $sSN
     */
    public function __construct(\PayPal\StructType\PayerInfoType $owner = null, $homePhone = null, $mobilePhone = null, $sSN = null)
    {
        $this
            ->setOwner($owner)
            ->setHomePhone($homePhone)
            ->setMobilePhone($mobilePhone)
            ->setSSN($sSN);
    }
    /**
     * Get Owner value
     * @return \PayPal\StructType\PayerInfoType|null
     */
    public function getOwner()
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param \PayPal\StructType\PayerInfoType $owner
     * @return \PayPal\StructType\BusinessOwnerInfoType
     */
    public function setOwner(\PayPal\StructType\PayerInfoType $owner = null)
    {
        $this->Owner = $owner;
        return $this;
    }
    /**
     * Get HomePhone value
     * @return string|null
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
    }
    /**
     * Set HomePhone value
     * @param string $homePhone
     * @return \PayPal\StructType\BusinessOwnerInfoType
     */
    public function setHomePhone($homePhone = null)
    {
        // validation for constraint: string
        if (!is_null($homePhone) && !is_string($homePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homePhone, true), gettype($homePhone)), __LINE__);
        }
        $this->HomePhone = $homePhone;
        return $this;
    }
    /**
     * Get MobilePhone value
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }
    /**
     * Set MobilePhone value
     * @param string $mobilePhone
     * @return \PayPal\StructType\BusinessOwnerInfoType
     */
    public function setMobilePhone($mobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        $this->MobilePhone = $mobilePhone;
        return $this;
    }
    /**
     * Get SSN value
     * @return string|null
     */
    public function getSSN()
    {
        return $this->SSN;
    }
    /**
     * Set SSN value
     * @param string $sSN
     * @return \PayPal\StructType\BusinessOwnerInfoType
     */
    public function setSSN($sSN = null)
    {
        // validation for constraint: string
        if (!is_null($sSN) && !is_string($sSN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSN, true), gettype($sSN)), __LINE__);
        }
        $this->SSN = $sSN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BusinessOwnerInfoType
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
