<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingRateType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CalculatedShippingRateType extends AbstractStructBase
{
    /**
     * The OriginatingPostalCode
     * Meta information extracted from the WSDL
     * - documentation: Potal/zip code from where package will be shipped.
     * - minOccurs: 0
     * @var string
     */
    public $OriginatingPostalCode;
    /**
     * The ShippingIrregular
     * Meta information extracted from the WSDL
     * - documentation: Indicates an item that cannot go through the stamping machine at the shipping service office (a value of True) and requires special or fragile handling. Only returned if ShippingType = 2.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIrregular;
    /**
     * The CarrierDetails
     * Meta information extracted from the WSDL
     * - documentation: contains information about shipping fees per each shipping service chosen by the seller
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\ShippingCarrierDetailsType[]
     */
    public $CarrierDetails;
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: May need to be moved into details - wait for George! The size of the package to be shipped. Possible values are: None Letter Large envelope USPS flat rate envelope Package/thick envelope USPS large package/oversize 1 Very large
     * package/oversize 2 UPS Letter
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPackage;
    /**
     * The WeightMajor
     * Meta information extracted from the WSDL
     * - documentation: Shipping weight unit of measure (major). If unit of weight is kilogram (i.e., metric system) this would be the exact weight value in kilogram (i.e., complete decimal number, e.g., 2.23 kg). Only returned if ShippingType is 2.
     * - minOccurs: 0
     * @var \PayPal\StructType\MeasureType
     */
    public $WeightMajor;
    /**
     * The WeightMinor
     * Meta information extracted from the WSDL
     * - documentation: Shipping weight unit of measure (minor). If unit of weight is in pounds and/or ounces, this would be the exact weight value in ounces (i.e., complete decimal number, e.g., 8.2 or 8.0 ounces). Only returned if ShippingType is 2.
     * - minOccurs: 0
     * @var \PayPal\StructType\MeasureType
     */
    public $WeightMinor;
    /**
     * Constructor method for CalculatedShippingRateType
     * @uses CalculatedShippingRateType::setOriginatingPostalCode()
     * @uses CalculatedShippingRateType::setShippingIrregular()
     * @uses CalculatedShippingRateType::setCarrierDetails()
     * @uses CalculatedShippingRateType::setShippingPackage()
     * @uses CalculatedShippingRateType::setWeightMajor()
     * @uses CalculatedShippingRateType::setWeightMinor()
     * @param string $originatingPostalCode
     * @param bool $shippingIrregular
     * @param \PayPal\StructType\ShippingCarrierDetailsType[] $carrierDetails
     * @param string $shippingPackage
     * @param \PayPal\StructType\MeasureType $weightMajor
     * @param \PayPal\StructType\MeasureType $weightMinor
     */
    public function __construct($originatingPostalCode = null, $shippingIrregular = null, array $carrierDetails = array(), $shippingPackage = null, \PayPal\StructType\MeasureType $weightMajor = null, \PayPal\StructType\MeasureType $weightMinor = null)
    {
        $this
            ->setOriginatingPostalCode($originatingPostalCode)
            ->setShippingIrregular($shippingIrregular)
            ->setCarrierDetails($carrierDetails)
            ->setShippingPackage($shippingPackage)
            ->setWeightMajor($weightMajor)
            ->setWeightMinor($weightMinor);
    }
    /**
     * Get OriginatingPostalCode value
     * @return string|null
     */
    public function getOriginatingPostalCode()
    {
        return $this->OriginatingPostalCode;
    }
    /**
     * Set OriginatingPostalCode value
     * @param string $originatingPostalCode
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function setOriginatingPostalCode($originatingPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($originatingPostalCode) && !is_string($originatingPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originatingPostalCode, true), gettype($originatingPostalCode)), __LINE__);
        }
        $this->OriginatingPostalCode = $originatingPostalCode;
        return $this;
    }
    /**
     * Get ShippingIrregular value
     * @return bool|null
     */
    public function getShippingIrregular()
    {
        return $this->ShippingIrregular;
    }
    /**
     * Set ShippingIrregular value
     * @param bool $shippingIrregular
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function setShippingIrregular($shippingIrregular = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIrregular) && !is_bool($shippingIrregular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIrregular, true), gettype($shippingIrregular)), __LINE__);
        }
        $this->ShippingIrregular = $shippingIrregular;
        return $this;
    }
    /**
     * Get CarrierDetails value
     * @return \PayPal\StructType\ShippingCarrierDetailsType[]|null
     */
    public function getCarrierDetails()
    {
        return $this->CarrierDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCarrierDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrierDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierDetailsForArrayConstraintsFromSetCarrierDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculatedShippingRateTypeCarrierDetailsItem) {
            // validation for constraint: itemType
            if (!$calculatedShippingRateTypeCarrierDetailsItem instanceof \PayPal\StructType\ShippingCarrierDetailsType) {
                $invalidValues[] = is_object($calculatedShippingRateTypeCarrierDetailsItem) ? get_class($calculatedShippingRateTypeCarrierDetailsItem) : sprintf('%s(%s)', gettype($calculatedShippingRateTypeCarrierDetailsItem), var_export($calculatedShippingRateTypeCarrierDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CarrierDetails property can only contain items of type \PayPal\StructType\ShippingCarrierDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CarrierDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ShippingCarrierDetailsType[] $carrierDetails
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function setCarrierDetails(array $carrierDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($carrierDetailsArrayErrorMessage = self::validateCarrierDetailsForArrayConstraintsFromSetCarrierDetails($carrierDetails))) {
            throw new \InvalidArgumentException($carrierDetailsArrayErrorMessage, __LINE__);
        }
        $this->CarrierDetails = $carrierDetails;
        return $this;
    }
    /**
     * Add item to CarrierDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ShippingCarrierDetailsType $item
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function addToCarrierDetails(\PayPal\StructType\ShippingCarrierDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ShippingCarrierDetailsType) {
            throw new \InvalidArgumentException(sprintf('The CarrierDetails property can only contain items of type \PayPal\StructType\ShippingCarrierDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CarrierDetails[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \PayPal\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingPackage
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function setShippingPackage($shippingPackage = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ShippingPackageCodeType', is_array($shippingPackage) ? implode(', ', $shippingPackage) : var_export($shippingPackage, true), implode(', ', \PayPal\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Get WeightMajor value
     * @return \PayPal\StructType\MeasureType|null
     */
    public function getWeightMajor()
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \PayPal\StructType\MeasureType $weightMajor
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function setWeightMajor(\PayPal\StructType\MeasureType $weightMajor = null)
    {
        $this->WeightMajor = $weightMajor;
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \PayPal\StructType\MeasureType|null
     */
    public function getWeightMinor()
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \PayPal\StructType\MeasureType $weightMinor
     * @return \PayPal\StructType\CalculatedShippingRateType
     */
    public function setWeightMinor(\PayPal\StructType\MeasureType $weightMinor = null)
    {
        $this->WeightMinor = $weightMinor;
        return $this;
    }
}
