<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BAUpdateRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BAUpdateRequestType extends AbstractRequestType
{
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReferenceID;
    /**
     * The BillingAgreementDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementDescription;
    /**
     * The BillingAgreementStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementStatus;
    /**
     * The BillingAgreementCustom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementCustom;
    /**
     * Constructor method for BAUpdateRequestType
     * @uses BAUpdateRequestType::setReferenceID()
     * @uses BAUpdateRequestType::setBillingAgreementDescription()
     * @uses BAUpdateRequestType::setBillingAgreementStatus()
     * @uses BAUpdateRequestType::setBillingAgreementCustom()
     * @param string $referenceID
     * @param string $billingAgreementDescription
     * @param string $billingAgreementStatus
     * @param string $billingAgreementCustom
     */
    public function __construct($referenceID = null, $billingAgreementDescription = null, $billingAgreementStatus = null, $billingAgreementCustom = null)
    {
        $this
            ->setReferenceID($referenceID)
            ->setBillingAgreementDescription($billingAgreementDescription)
            ->setBillingAgreementStatus($billingAgreementStatus)
            ->setBillingAgreementCustom($billingAgreementCustom);
    }
    /**
     * Get ReferenceID value
     * @return string
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \PayPal\StructType\BAUpdateRequestType
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get BillingAgreementDescription value
     * @return string|null
     */
    public function getBillingAgreementDescription()
    {
        return $this->BillingAgreementDescription;
    }
    /**
     * Set BillingAgreementDescription value
     * @param string $billingAgreementDescription
     * @return \PayPal\StructType\BAUpdateRequestType
     */
    public function setBillingAgreementDescription($billingAgreementDescription = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementDescription) && !is_string($billingAgreementDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAgreementDescription)), __LINE__);
        }
        $this->BillingAgreementDescription = $billingAgreementDescription;
        return $this;
    }
    /**
     * Get BillingAgreementStatus value
     * @return string|null
     */
    public function getBillingAgreementStatus()
    {
        return $this->BillingAgreementStatus;
    }
    /**
     * Set BillingAgreementStatus value
     * @uses \PayPal\EnumType\MerchantPullStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MerchantPullStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingAgreementStatus
     * @return \PayPal\StructType\BAUpdateRequestType
     */
    public function setBillingAgreementStatus($billingAgreementStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MerchantPullStatusCodeType::valueIsValid($billingAgreementStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $billingAgreementStatus, implode(', ', \PayPal\EnumType\MerchantPullStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BillingAgreementStatus = $billingAgreementStatus;
        return $this;
    }
    /**
     * Get BillingAgreementCustom value
     * @return string|null
     */
    public function getBillingAgreementCustom()
    {
        return $this->BillingAgreementCustom;
    }
    /**
     * Set BillingAgreementCustom value
     * @param string $billingAgreementCustom
     * @return \PayPal\StructType\BAUpdateRequestType
     */
    public function setBillingAgreementCustom($billingAgreementCustom = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementCustom) && !is_string($billingAgreementCustom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAgreementCustom)), __LINE__);
        }
        $this->BillingAgreementCustom = $billingAgreementCustom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BAUpdateRequestType
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
