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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReferenceID;
    /**
     * The BillingAgreementDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementDescription;
    /**
     * The BillingAgreementStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementStatus;
    /**
     * The BillingAgreementCustom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementCustom;
    /**
     * The BillingAgreementType
     * Meta information extracted from the WSDL
     * - documentation: Billing Agreement Type to change the billing agreement type to. ChannelInitiatedBillingAgreement is the only valid value. All other values are ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementType;
    /**
     * Constructor method for BAUpdateRequestType
     * @uses BAUpdateRequestType::setReferenceID()
     * @uses BAUpdateRequestType::setBillingAgreementDescription()
     * @uses BAUpdateRequestType::setBillingAgreementStatus()
     * @uses BAUpdateRequestType::setBillingAgreementCustom()
     * @uses BAUpdateRequestType::setBillingAgreementType()
     * @param string $referenceID
     * @param string $billingAgreementDescription
     * @param string $billingAgreementStatus
     * @param string $billingAgreementCustom
     * @param string $billingAgreementType
     */
    public function __construct($referenceID = null, $billingAgreementDescription = null, $billingAgreementStatus = null, $billingAgreementCustom = null, $billingAgreementType = null)
    {
        $this
            ->setReferenceID($referenceID)
            ->setBillingAgreementDescription($billingAgreementDescription)
            ->setBillingAgreementStatus($billingAgreementStatus)
            ->setBillingAgreementCustom($billingAgreementCustom)
            ->setBillingAgreementType($billingAgreementType);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceID, true), gettype($referenceID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementDescription, true), gettype($billingAgreementDescription)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MerchantPullStatusCodeType', is_array($billingAgreementStatus) ? implode(', ', $billingAgreementStatus) : var_export($billingAgreementStatus, true), implode(', ', \PayPal\EnumType\MerchantPullStatusCodeType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementCustom, true), gettype($billingAgreementCustom)), __LINE__);
        }
        $this->BillingAgreementCustom = $billingAgreementCustom;
        return $this;
    }
    /**
     * Get BillingAgreementType value
     * @return string|null
     */
    public function getBillingAgreementType()
    {
        return $this->BillingAgreementType;
    }
    /**
     * Set BillingAgreementType value
     * @uses \PayPal\EnumType\BillingCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BillingCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingAgreementType
     * @return \PayPal\StructType\BAUpdateRequestType
     */
    public function setBillingAgreementType($billingAgreementType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BillingCodeType::valueIsValid($billingAgreementType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BillingCodeType', is_array($billingAgreementType) ? implode(', ', $billingAgreementType) : var_export($billingAgreementType, true), implode(', ', \PayPal\EnumType\BillingCodeType::getValidValues())), __LINE__);
        }
        $this->BillingAgreementType = $billingAgreementType;
        return $this;
    }
}
