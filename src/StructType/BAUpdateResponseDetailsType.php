<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BAUpdateResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BAUpdateResponseDetailsType extends AbstractStructBase
{
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingAgreementID;
    /**
     * The BillingAgreementStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingAgreementStatus;
    /**
     * The PayerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\PayerInfoType
     */
    public $PayerInfo;
    /**
     * The BillingAgreementDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementDescription;
    /**
     * The BillingAgreementCustom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementCustom;
    /**
     * The BillingAgreementMax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $BillingAgreementMax;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - documentation: Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in
     * BAUpdateResponseDetails.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $BillingAddress;
    /**
     * The PayeeInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the Merchant/Agreement Owner
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\PayeeInfoType
     */
    public $PayeeInfo;
    /**
     * Constructor method for BAUpdateResponseDetailsType
     * @uses BAUpdateResponseDetailsType::setBillingAgreementID()
     * @uses BAUpdateResponseDetailsType::setBillingAgreementStatus()
     * @uses BAUpdateResponseDetailsType::setPayerInfo()
     * @uses BAUpdateResponseDetailsType::setBillingAgreementDescription()
     * @uses BAUpdateResponseDetailsType::setBillingAgreementCustom()
     * @uses BAUpdateResponseDetailsType::setBillingAgreementMax()
     * @uses BAUpdateResponseDetailsType::setBillingAddress()
     * @uses BAUpdateResponseDetailsType::setPayeeInfo()
     * @param string $billingAgreementID
     * @param string $billingAgreementStatus
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @param string $billingAgreementDescription
     * @param string $billingAgreementCustom
     * @param \PayPal\StructType\BasicAmountType $billingAgreementMax
     * @param \PayPal\StructType\AddressType $billingAddress
     * @param \PayPal\StructType\PayeeInfoType $payeeInfo
     */
    public function __construct($billingAgreementID = null, $billingAgreementStatus = null, \PayPal\StructType\PayerInfoType $payerInfo = null, $billingAgreementDescription = null, $billingAgreementCustom = null, \PayPal\StructType\BasicAmountType $billingAgreementMax = null, \PayPal\StructType\AddressType $billingAddress = null, \PayPal\StructType\PayeeInfoType $payeeInfo = null)
    {
        $this
            ->setBillingAgreementID($billingAgreementID)
            ->setBillingAgreementStatus($billingAgreementStatus)
            ->setPayerInfo($payerInfo)
            ->setBillingAgreementDescription($billingAgreementDescription)
            ->setBillingAgreementCustom($billingAgreementCustom)
            ->setBillingAgreementMax($billingAgreementMax)
            ->setBillingAddress($billingAddress)
            ->setPayeeInfo($payeeInfo);
    }
    /**
     * Get BillingAgreementID value
     * @return string
     */
    public function getBillingAgreementID()
    {
        return $this->BillingAgreementID;
    }
    /**
     * Set BillingAgreementID value
     * @param string $billingAgreementID
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
     */
    public function setBillingAgreementID($billingAgreementID = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
        }
        $this->BillingAgreementID = $billingAgreementID;
        return $this;
    }
    /**
     * Get BillingAgreementStatus value
     * @return string
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
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
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
     * Get PayerInfo value
     * @return \PayPal\StructType\PayerInfoType
     */
    public function getPayerInfo()
    {
        return $this->PayerInfo;
    }
    /**
     * Set PayerInfo value
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
     */
    public function setPayerInfo(\PayPal\StructType\PayerInfoType $payerInfo = null)
    {
        $this->PayerInfo = $payerInfo;
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
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
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
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
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
     * Get BillingAgreementMax value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getBillingAgreementMax()
    {
        return $this->BillingAgreementMax;
    }
    /**
     * Set BillingAgreementMax value
     * @param \PayPal\StructType\BasicAmountType $billingAgreementMax
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
     */
    public function setBillingAgreementMax(\PayPal\StructType\BasicAmountType $billingAgreementMax = null)
    {
        $this->BillingAgreementMax = $billingAgreementMax;
        return $this;
    }
    /**
     * Get BillingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param \PayPal\StructType\AddressType $billingAddress
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
     */
    public function setBillingAddress(\PayPal\StructType\AddressType $billingAddress = null)
    {
        $this->BillingAddress = $billingAddress;
        return $this;
    }
    /**
     * Get PayeeInfo value
     * @return \PayPal\StructType\PayeeInfoType|null
     */
    public function getPayeeInfo()
    {
        return $this->PayeeInfo;
    }
    /**
     * Set PayeeInfo value
     * @param \PayPal\StructType\PayeeInfoType $payeeInfo
     * @return \PayPal\StructType\BAUpdateResponseDetailsType
     */
    public function setPayeeInfo(\PayPal\StructType\PayeeInfoType $payeeInfo = null)
    {
        $this->PayeeInfo = $payeeInfo;
        return $this;
    }
}
