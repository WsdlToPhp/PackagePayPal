<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserSelectedOptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information on user selected options
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserSelectedOptionType extends AbstractStructBase
{
    /**
     * The ShippingCalculationMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCalculationMode;
    /**
     * The InsuranceOptionSelected
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOptionSelected;
    /**
     * The ShippingOptionIsDefault
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingOptionIsDefault;
    /**
     * The ShippingOptionAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingOptionAmount;
    /**
     * The ShippingOptionName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingOptionName;
    /**
     * The ScheduledShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledShippingDate;
    /**
     * The ScheduledShippingPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScheduledShippingPeriod;
    /**
     * Constructor method for UserSelectedOptionType
     * @uses UserSelectedOptionType::setShippingCalculationMode()
     * @uses UserSelectedOptionType::setInsuranceOptionSelected()
     * @uses UserSelectedOptionType::setShippingOptionIsDefault()
     * @uses UserSelectedOptionType::setShippingOptionAmount()
     * @uses UserSelectedOptionType::setShippingOptionName()
     * @uses UserSelectedOptionType::setScheduledShippingDate()
     * @uses UserSelectedOptionType::setScheduledShippingPeriod()
     * @param string $shippingCalculationMode
     * @param string $insuranceOptionSelected
     * @param string $shippingOptionIsDefault
     * @param \PayPal\StructType\BasicAmountType $shippingOptionAmount
     * @param string $shippingOptionName
     * @param string $scheduledShippingDate
     * @param string $scheduledShippingPeriod
     */
    public function __construct($shippingCalculationMode = null, $insuranceOptionSelected = null, $shippingOptionIsDefault = null, \PayPal\StructType\BasicAmountType $shippingOptionAmount = null, $shippingOptionName = null, $scheduledShippingDate = null, $scheduledShippingPeriod = null)
    {
        $this
            ->setShippingCalculationMode($shippingCalculationMode)
            ->setInsuranceOptionSelected($insuranceOptionSelected)
            ->setShippingOptionIsDefault($shippingOptionIsDefault)
            ->setShippingOptionAmount($shippingOptionAmount)
            ->setShippingOptionName($shippingOptionName)
            ->setScheduledShippingDate($scheduledShippingDate)
            ->setScheduledShippingPeriod($scheduledShippingPeriod);
    }
    /**
     * Get ShippingCalculationMode value
     * @return string|null
     */
    public function getShippingCalculationMode()
    {
        return $this->ShippingCalculationMode;
    }
    /**
     * Set ShippingCalculationMode value
     * @param string $shippingCalculationMode
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setShippingCalculationMode($shippingCalculationMode = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCalculationMode) && !is_string($shippingCalculationMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCalculationMode, true), gettype($shippingCalculationMode)), __LINE__);
        }
        $this->ShippingCalculationMode = $shippingCalculationMode;
        return $this;
    }
    /**
     * Get InsuranceOptionSelected value
     * @return string|null
     */
    public function getInsuranceOptionSelected()
    {
        return $this->InsuranceOptionSelected;
    }
    /**
     * Set InsuranceOptionSelected value
     * @param string $insuranceOptionSelected
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setInsuranceOptionSelected($insuranceOptionSelected = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceOptionSelected) && !is_string($insuranceOptionSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceOptionSelected, true), gettype($insuranceOptionSelected)), __LINE__);
        }
        $this->InsuranceOptionSelected = $insuranceOptionSelected;
        return $this;
    }
    /**
     * Get ShippingOptionIsDefault value
     * @return string|null
     */
    public function getShippingOptionIsDefault()
    {
        return $this->ShippingOptionIsDefault;
    }
    /**
     * Set ShippingOptionIsDefault value
     * @param string $shippingOptionIsDefault
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setShippingOptionIsDefault($shippingOptionIsDefault = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOptionIsDefault) && !is_string($shippingOptionIsDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingOptionIsDefault, true), gettype($shippingOptionIsDefault)), __LINE__);
        }
        $this->ShippingOptionIsDefault = $shippingOptionIsDefault;
        return $this;
    }
    /**
     * Get ShippingOptionAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingOptionAmount()
    {
        return $this->ShippingOptionAmount;
    }
    /**
     * Set ShippingOptionAmount value
     * @param \PayPal\StructType\BasicAmountType $shippingOptionAmount
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setShippingOptionAmount(\PayPal\StructType\BasicAmountType $shippingOptionAmount = null)
    {
        $this->ShippingOptionAmount = $shippingOptionAmount;
        return $this;
    }
    /**
     * Get ShippingOptionName value
     * @return string|null
     */
    public function getShippingOptionName()
    {
        return $this->ShippingOptionName;
    }
    /**
     * Set ShippingOptionName value
     * @param string $shippingOptionName
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setShippingOptionName($shippingOptionName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingOptionName) && !is_string($shippingOptionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingOptionName, true), gettype($shippingOptionName)), __LINE__);
        }
        $this->ShippingOptionName = $shippingOptionName;
        return $this;
    }
    /**
     * Get ScheduledShippingDate value
     * @return string|null
     */
    public function getScheduledShippingDate()
    {
        return $this->ScheduledShippingDate;
    }
    /**
     * Set ScheduledShippingDate value
     * @param string $scheduledShippingDate
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setScheduledShippingDate($scheduledShippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledShippingDate) && !is_string($scheduledShippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledShippingDate, true), gettype($scheduledShippingDate)), __LINE__);
        }
        $this->ScheduledShippingDate = $scheduledShippingDate;
        return $this;
    }
    /**
     * Get ScheduledShippingPeriod value
     * @return string|null
     */
    public function getScheduledShippingPeriod()
    {
        return $this->ScheduledShippingPeriod;
    }
    /**
     * Set ScheduledShippingPeriod value
     * @param string $scheduledShippingPeriod
     * @return \PayPal\StructType\UserSelectedOptionType
     */
    public function setScheduledShippingPeriod($scheduledShippingPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($scheduledShippingPeriod) && !is_string($scheduledShippingPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduledShippingPeriod, true), gettype($scheduledShippingPeriod)), __LINE__);
        }
        $this->ScheduledShippingPeriod = $scheduledShippingPeriod;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UserSelectedOptionType
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
