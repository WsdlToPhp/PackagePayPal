<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionSelectionDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OptionSelectionDetailsType extends AbstractStructBase
{
    /**
     * The OptionSelection
     * Meta information extracted from the WSDL
     * - documentation: Option Selection. Required Character length and limitations: 12 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OptionSelection;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - documentation: Option Price. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Price;
    /**
     * The OptionType
     * Meta information extracted from the WSDL
     * - documentation: Option Type Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionType;
    /**
     * The PaymentPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\InstallmentDetailsType[]
     */
    public $PaymentPeriod;
    /**
     * Constructor method for OptionSelectionDetailsType
     * @uses OptionSelectionDetailsType::setOptionSelection()
     * @uses OptionSelectionDetailsType::setPrice()
     * @uses OptionSelectionDetailsType::setOptionType()
     * @uses OptionSelectionDetailsType::setPaymentPeriod()
     * @param string $optionSelection
     * @param string $price
     * @param string $optionType
     * @param \PayPal\StructType\InstallmentDetailsType[] $paymentPeriod
     */
    public function __construct($optionSelection = null, $price = null, $optionType = null, array $paymentPeriod = array())
    {
        $this
            ->setOptionSelection($optionSelection)
            ->setPrice($price)
            ->setOptionType($optionType)
            ->setPaymentPeriod($paymentPeriod);
    }
    /**
     * Get OptionSelection value
     * @return string
     */
    public function getOptionSelection()
    {
        return $this->OptionSelection;
    }
    /**
     * Set OptionSelection value
     * @param string $optionSelection
     * @return \PayPal\StructType\OptionSelectionDetailsType
     */
    public function setOptionSelection($optionSelection = null)
    {
        // validation for constraint: string
        if (!is_null($optionSelection) && !is_string($optionSelection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionSelection, true), gettype($optionSelection)), __LINE__);
        }
        $this->OptionSelection = $optionSelection;
        return $this;
    }
    /**
     * Get Price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param string $price
     * @return \PayPal\StructType\OptionSelectionDetailsType
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Get OptionType value
     * @return string|null
     */
    public function getOptionType()
    {
        return $this->OptionType;
    }
    /**
     * Set OptionType value
     * @uses \PayPal\EnumType\OptionTypeListType::valueIsValid()
     * @uses \PayPal\EnumType\OptionTypeListType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $optionType
     * @return \PayPal\StructType\OptionSelectionDetailsType
     */
    public function setOptionType($optionType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\OptionTypeListType::valueIsValid($optionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\OptionTypeListType', is_array($optionType) ? implode(', ', $optionType) : var_export($optionType, true), implode(', ', \PayPal\EnumType\OptionTypeListType::getValidValues())), __LINE__);
        }
        $this->OptionType = $optionType;
        return $this;
    }
    /**
     * Get PaymentPeriod value
     * @return \PayPal\StructType\InstallmentDetailsType[]|null
     */
    public function getPaymentPeriod()
    {
        return $this->PaymentPeriod;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentPeriodForArrayConstraintsFromSetPaymentPeriod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionSelectionDetailsTypePaymentPeriodItem) {
            // validation for constraint: itemType
            if (!$optionSelectionDetailsTypePaymentPeriodItem instanceof \PayPal\StructType\InstallmentDetailsType) {
                $invalidValues[] = is_object($optionSelectionDetailsTypePaymentPeriodItem) ? get_class($optionSelectionDetailsTypePaymentPeriodItem) : sprintf('%s(%s)', gettype($optionSelectionDetailsTypePaymentPeriodItem), var_export($optionSelectionDetailsTypePaymentPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentPeriod property can only contain items of type \PayPal\StructType\InstallmentDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentPeriod value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\InstallmentDetailsType[] $paymentPeriod
     * @return \PayPal\StructType\OptionSelectionDetailsType
     */
    public function setPaymentPeriod(array $paymentPeriod = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentPeriodArrayErrorMessage = self::validatePaymentPeriodForArrayConstraintsFromSetPaymentPeriod($paymentPeriod))) {
            throw new \InvalidArgumentException($paymentPeriodArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentPeriod) && count($paymentPeriod) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentPeriod)), __LINE__);
        }
        $this->PaymentPeriod = $paymentPeriod;
        return $this;
    }
    /**
     * Add item to PaymentPeriod value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\InstallmentDetailsType $item
     * @return \PayPal\StructType\OptionSelectionDetailsType
     */
    public function addToPaymentPeriod(\PayPal\StructType\InstallmentDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\InstallmentDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PaymentPeriod property can only contain items of type \PayPal\StructType\InstallmentDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentPeriod) && count($this->PaymentPeriod) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentPeriod)), __LINE__);
        }
        $this->PaymentPeriod[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OptionSelectionDetailsType
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
