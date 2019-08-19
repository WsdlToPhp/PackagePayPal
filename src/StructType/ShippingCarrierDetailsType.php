<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCarrierDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: is unique identified of shipping carrier, without this element the whole node makes no sence
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingCarrierDetailsType extends AbstractStructBase
{
    /**
     * The CarrierShippingFee
     * Meta information extracted from the WSDL
     * - documentation: Calculated cost of shipping, based on shipping parameters and selected shipping service. Only returned if ShippingType = 2 (i.e., calculated shipping rate).
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $CarrierShippingFee;
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
     * The PackagingHandlingCosts
     * Meta information extracted from the WSDL
     * - documentation: Optional fees a seller might assess for the shipping of the item.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $PackagingHandlingCosts;
    /**
     * The ShippingRateErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: Describes any error message associated with the attempt to calculate shipping rates. If there was no error, returns "No Error" (without the quotation marks).
     * - minOccurs: 0
     * @var string
     */
    public $ShippingRateErrorMessage;
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - ref: ns:ShippingService
     * @var string
     */
    public $ShippingService;
    /**
     * Constructor method for ShippingCarrierDetailsType
     * @uses ShippingCarrierDetailsType::setCarrierShippingFee()
     * @uses ShippingCarrierDetailsType::setInsuranceFee()
     * @uses ShippingCarrierDetailsType::setInsuranceOption()
     * @uses ShippingCarrierDetailsType::setPackagingHandlingCosts()
     * @uses ShippingCarrierDetailsType::setShippingRateErrorMessage()
     * @uses ShippingCarrierDetailsType::setShippingService()
     * @param \PayPal\StructType\AmountType $carrierShippingFee
     * @param \PayPal\StructType\AmountType $insuranceFee
     * @param string $insuranceOption
     * @param \PayPal\StructType\AmountType $packagingHandlingCosts
     * @param string $shippingRateErrorMessage
     * @param string $shippingService
     */
    public function __construct(\PayPal\StructType\AmountType $carrierShippingFee = null, \PayPal\StructType\AmountType $insuranceFee = null, $insuranceOption = null, \PayPal\StructType\AmountType $packagingHandlingCosts = null, $shippingRateErrorMessage = null, $shippingService = null)
    {
        $this
            ->setCarrierShippingFee($carrierShippingFee)
            ->setInsuranceFee($insuranceFee)
            ->setInsuranceOption($insuranceOption)
            ->setPackagingHandlingCosts($packagingHandlingCosts)
            ->setShippingRateErrorMessage($shippingRateErrorMessage)
            ->setShippingService($shippingService);
    }
    /**
     * Get CarrierShippingFee value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getCarrierShippingFee()
    {
        return $this->CarrierShippingFee;
    }
    /**
     * Set CarrierShippingFee value
     * @param \PayPal\StructType\AmountType $carrierShippingFee
     * @return \PayPal\StructType\ShippingCarrierDetailsType
     */
    public function setCarrierShippingFee(\PayPal\StructType\AmountType $carrierShippingFee = null)
    {
        $this->CarrierShippingFee = $carrierShippingFee;
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
     * @return \PayPal\StructType\ShippingCarrierDetailsType
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
     * @return \PayPal\StructType\ShippingCarrierDetailsType
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
     * Get PackagingHandlingCosts value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getPackagingHandlingCosts()
    {
        return $this->PackagingHandlingCosts;
    }
    /**
     * Set PackagingHandlingCosts value
     * @param \PayPal\StructType\AmountType $packagingHandlingCosts
     * @return \PayPal\StructType\ShippingCarrierDetailsType
     */
    public function setPackagingHandlingCosts(\PayPal\StructType\AmountType $packagingHandlingCosts = null)
    {
        $this->PackagingHandlingCosts = $packagingHandlingCosts;
        return $this;
    }
    /**
     * Get ShippingRateErrorMessage value
     * @return string|null
     */
    public function getShippingRateErrorMessage()
    {
        return $this->ShippingRateErrorMessage;
    }
    /**
     * Set ShippingRateErrorMessage value
     * @param string $shippingRateErrorMessage
     * @return \PayPal\StructType\ShippingCarrierDetailsType
     */
    public function setShippingRateErrorMessage($shippingRateErrorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shippingRateErrorMessage) && !is_string($shippingRateErrorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingRateErrorMessage, true), gettype($shippingRateErrorMessage)), __LINE__);
        }
        $this->ShippingRateErrorMessage = $shippingRateErrorMessage;
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
     * @return \PayPal\StructType\ShippingCarrierDetailsType
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ShippingCarrierDetailsType
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
