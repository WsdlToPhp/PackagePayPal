<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingAgreementDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingAgreementDetailsType extends AbstractStructBase
{
    /**
     * The BillingType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingType;
    /**
     * The BillingAgreementDescription
     * Meta information extracted from the WSDL
     * - documentation: Only needed for AutoBill billinng type.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementDescription;
    /**
     * The PaymentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The BillingAgreementCustom
     * Meta information extracted from the WSDL
     * - documentation: Custom annotation field for your exclusive use.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementCustom;
    /**
     * The ProductCode
     * Meta information extracted from the WSDL
     * - documentation: Businesses will define a code for a product service. In v2/vault endpoint, product_label should be set to the value of product code to retrieve name and desc in the Risk OOB Data request
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductCode;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Free flowing text, a product service name that Business wants to be identify the product service to its buyers. Used in 8Ball for display purpose against the BA/PMT.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ChargePattern
     * Meta information extracted from the WSDL
     * - documentation: The chargePattern attribute determines the type of FIs to display while setting up Billing Agreement
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChargePattern;
    /**
     * Constructor method for BillingAgreementDetailsType
     * @uses BillingAgreementDetailsType::setBillingType()
     * @uses BillingAgreementDetailsType::setBillingAgreementDescription()
     * @uses BillingAgreementDetailsType::setPaymentType()
     * @uses BillingAgreementDetailsType::setBillingAgreementCustom()
     * @uses BillingAgreementDetailsType::setProductCode()
     * @uses BillingAgreementDetailsType::setName()
     * @uses BillingAgreementDetailsType::setChargePattern()
     * @param string $billingType
     * @param string $billingAgreementDescription
     * @param string $paymentType
     * @param string $billingAgreementCustom
     * @param string $productCode
     * @param string $name
     * @param string $chargePattern
     */
    public function __construct($billingType = null, $billingAgreementDescription = null, $paymentType = null, $billingAgreementCustom = null, $productCode = null, $name = null, $chargePattern = null)
    {
        $this
            ->setBillingType($billingType)
            ->setBillingAgreementDescription($billingAgreementDescription)
            ->setPaymentType($paymentType)
            ->setBillingAgreementCustom($billingAgreementCustom)
            ->setProductCode($productCode)
            ->setName($name)
            ->setChargePattern($chargePattern);
    }
    /**
     * Get BillingType value
     * @return string
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }
    /**
     * Set BillingType value
     * @uses \PayPal\EnumType\BillingCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BillingCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingType
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setBillingType($billingType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BillingCodeType::valueIsValid($billingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BillingCodeType', is_array($billingType) ? implode(', ', $billingType) : var_export($billingType, true), implode(', ', \PayPal\EnumType\BillingCodeType::getValidValues())), __LINE__);
        }
        $this->BillingType = $billingType;
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
     * @return \PayPal\StructType\BillingAgreementDetailsType
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
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \PayPal\EnumType\MerchantPullPaymentCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MerchantPullPaymentCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MerchantPullPaymentCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MerchantPullPaymentCodeType', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \PayPal\EnumType\MerchantPullPaymentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
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
     * @return \PayPal\StructType\BillingAgreementDetailsType
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
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
        return $this;
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
     * @return \PayPal\StructType\BillingAgreementDetailsType
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
     * Get ChargePattern value
     * @return string|null
     */
    public function getChargePattern()
    {
        return $this->ChargePattern;
    }
    /**
     * Set ChargePattern value
     * @uses \PayPal\EnumType\ChargePatternType::valueIsValid()
     * @uses \PayPal\EnumType\ChargePatternType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $chargePattern
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function setChargePattern($chargePattern = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ChargePatternType::valueIsValid($chargePattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ChargePatternType', is_array($chargePattern) ? implode(', ', $chargePattern) : var_export($chargePattern, true), implode(', ', \PayPal\EnumType\ChargePatternType::getValidValues())), __LINE__);
        }
        $this->ChargePattern = $chargePattern;
        return $this;
    }
}
