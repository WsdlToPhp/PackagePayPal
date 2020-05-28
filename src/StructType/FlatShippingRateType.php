<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatShippingRateType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FlatShippingRateType extends AbstractStructBase
{
    /**
     * The AdditionalShippingCosts
     * Meta information extracted from the WSDL
     * - documentation: Any additional shipping costs for the item.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $AdditionalShippingCosts;
    /**
     * The FlatShippingHandlingCosts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $FlatShippingHandlingCosts;
    /**
     * The InsuranceFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:InsuranceFee
     * @var \PayPal\StructType\AmountType
     */
    public $InsuranceFee;
    /**
     * The InsuranceOption
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:InsuranceOption
     * @var string
     */
    public $InsuranceOption;
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ShippingService
     * @var string
     */
    public $ShippingService;
    /**
     * Constructor method for FlatShippingRateType
     * @uses FlatShippingRateType::setAdditionalShippingCosts()
     * @uses FlatShippingRateType::setFlatShippingHandlingCosts()
     * @uses FlatShippingRateType::setInsuranceFee()
     * @uses FlatShippingRateType::setInsuranceOption()
     * @uses FlatShippingRateType::setShippingService()
     * @param \PayPal\StructType\AmountType $additionalShippingCosts
     * @param \PayPal\StructType\AmountType $flatShippingHandlingCosts
     * @param \PayPal\StructType\AmountType $insuranceFee
     * @param string $insuranceOption
     * @param string $shippingService
     */
    public function __construct(\PayPal\StructType\AmountType $additionalShippingCosts = null, \PayPal\StructType\AmountType $flatShippingHandlingCosts = null, \PayPal\StructType\AmountType $insuranceFee = null, $insuranceOption = null, $shippingService = null)
    {
        $this
            ->setAdditionalShippingCosts($additionalShippingCosts)
            ->setFlatShippingHandlingCosts($flatShippingHandlingCosts)
            ->setInsuranceFee($insuranceFee)
            ->setInsuranceOption($insuranceOption)
            ->setShippingService($shippingService);
    }
    /**
     * Get AdditionalShippingCosts value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getAdditionalShippingCosts()
    {
        return $this->AdditionalShippingCosts;
    }
    /**
     * Set AdditionalShippingCosts value
     * @param \PayPal\StructType\AmountType $additionalShippingCosts
     * @return \PayPal\StructType\FlatShippingRateType
     */
    public function setAdditionalShippingCosts(\PayPal\StructType\AmountType $additionalShippingCosts = null)
    {
        $this->AdditionalShippingCosts = $additionalShippingCosts;
        return $this;
    }
    /**
     * Get FlatShippingHandlingCosts value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getFlatShippingHandlingCosts()
    {
        return $this->FlatShippingHandlingCosts;
    }
    /**
     * Set FlatShippingHandlingCosts value
     * @param \PayPal\StructType\AmountType $flatShippingHandlingCosts
     * @return \PayPal\StructType\FlatShippingRateType
     */
    public function setFlatShippingHandlingCosts(\PayPal\StructType\AmountType $flatShippingHandlingCosts = null)
    {
        $this->FlatShippingHandlingCosts = $flatShippingHandlingCosts;
        return $this;
    }
    /**
     * Get InsuranceFee value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getInsuranceFee()
    {
        return $this->InsuranceFee;
    }
    /**
     * Set InsuranceFee value
     * @param \PayPal\StructType\AmountType $insuranceFee
     * @return \PayPal\StructType\FlatShippingRateType
     */
    public function setInsuranceFee(\PayPal\StructType\AmountType $insuranceFee = null)
    {
        $this->InsuranceFee = $insuranceFee;
        return $this;
    }
    /**
     * Get InsuranceOption value
     * @return string|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \PayPal\EnumType\InsuranceOptionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\InsuranceOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceOption
     * @return \PayPal\StructType\FlatShippingRateType
     */
    public function setInsuranceOption($insuranceOption = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\InsuranceOptionCodeType::valueIsValid($insuranceOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\InsuranceOptionCodeType', is_array($insuranceOption) ? implode(', ', $insuranceOption) : var_export($insuranceOption, true), implode(', ', \PayPal\EnumType\InsuranceOptionCodeType::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @uses \PayPal\EnumType\ShippingServiceCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingServiceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingService
     * @return \PayPal\StructType\FlatShippingRateType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingServiceCodeType::valueIsValid($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ShippingServiceCodeType', is_array($shippingService) ? implode(', ', $shippingService) : var_export($shippingService, true), implode(', ', \PayPal\EnumType\ShippingServiceCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
}
