<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionTrackingDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OptionTrackingDetailsType extends AbstractStructBase
{
    /**
     * The OptionNumber
     * Meta information extracted from the WSDL
     * - documentation: Option Number. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionNumber;
    /**
     * The OptionQty
     * Meta information extracted from the WSDL
     * - documentation: Option Quantity. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionQty;
    /**
     * The OptionSelect
     * Meta information extracted from the WSDL
     * - documentation: Option Select Name. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionSelect;
    /**
     * The OptionQtyDelta
     * Meta information extracted from the WSDL
     * - documentation: Option Quantity Delta. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionQtyDelta;
    /**
     * The OptionAlert
     * Meta information extracted from the WSDL
     * - documentation: Option Alert. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionAlert;
    /**
     * The OptionCost
     * Meta information extracted from the WSDL
     * - documentation: Option Cost. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionCost;
    /**
     * Constructor method for OptionTrackingDetailsType
     * @uses OptionTrackingDetailsType::setOptionNumber()
     * @uses OptionTrackingDetailsType::setOptionQty()
     * @uses OptionTrackingDetailsType::setOptionSelect()
     * @uses OptionTrackingDetailsType::setOptionQtyDelta()
     * @uses OptionTrackingDetailsType::setOptionAlert()
     * @uses OptionTrackingDetailsType::setOptionCost()
     * @param string $optionNumber
     * @param string $optionQty
     * @param string $optionSelect
     * @param string $optionQtyDelta
     * @param string $optionAlert
     * @param string $optionCost
     */
    public function __construct($optionNumber = null, $optionQty = null, $optionSelect = null, $optionQtyDelta = null, $optionAlert = null, $optionCost = null)
    {
        $this
            ->setOptionNumber($optionNumber)
            ->setOptionQty($optionQty)
            ->setOptionSelect($optionSelect)
            ->setOptionQtyDelta($optionQtyDelta)
            ->setOptionAlert($optionAlert)
            ->setOptionCost($optionCost);
    }
    /**
     * Get OptionNumber value
     * @return string|null
     */
    public function getOptionNumber()
    {
        return $this->OptionNumber;
    }
    /**
     * Set OptionNumber value
     * @param string $optionNumber
     * @return \PayPal\StructType\OptionTrackingDetailsType
     */
    public function setOptionNumber($optionNumber = null)
    {
        // validation for constraint: string
        if (!is_null($optionNumber) && !is_string($optionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionNumber, true), gettype($optionNumber)), __LINE__);
        }
        $this->OptionNumber = $optionNumber;
        return $this;
    }
    /**
     * Get OptionQty value
     * @return string|null
     */
    public function getOptionQty()
    {
        return $this->OptionQty;
    }
    /**
     * Set OptionQty value
     * @param string $optionQty
     * @return \PayPal\StructType\OptionTrackingDetailsType
     */
    public function setOptionQty($optionQty = null)
    {
        // validation for constraint: string
        if (!is_null($optionQty) && !is_string($optionQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionQty, true), gettype($optionQty)), __LINE__);
        }
        $this->OptionQty = $optionQty;
        return $this;
    }
    /**
     * Get OptionSelect value
     * @return string|null
     */
    public function getOptionSelect()
    {
        return $this->OptionSelect;
    }
    /**
     * Set OptionSelect value
     * @param string $optionSelect
     * @return \PayPal\StructType\OptionTrackingDetailsType
     */
    public function setOptionSelect($optionSelect = null)
    {
        // validation for constraint: string
        if (!is_null($optionSelect) && !is_string($optionSelect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionSelect, true), gettype($optionSelect)), __LINE__);
        }
        $this->OptionSelect = $optionSelect;
        return $this;
    }
    /**
     * Get OptionQtyDelta value
     * @return string|null
     */
    public function getOptionQtyDelta()
    {
        return $this->OptionQtyDelta;
    }
    /**
     * Set OptionQtyDelta value
     * @param string $optionQtyDelta
     * @return \PayPal\StructType\OptionTrackingDetailsType
     */
    public function setOptionQtyDelta($optionQtyDelta = null)
    {
        // validation for constraint: string
        if (!is_null($optionQtyDelta) && !is_string($optionQtyDelta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionQtyDelta, true), gettype($optionQtyDelta)), __LINE__);
        }
        $this->OptionQtyDelta = $optionQtyDelta;
        return $this;
    }
    /**
     * Get OptionAlert value
     * @return string|null
     */
    public function getOptionAlert()
    {
        return $this->OptionAlert;
    }
    /**
     * Set OptionAlert value
     * @param string $optionAlert
     * @return \PayPal\StructType\OptionTrackingDetailsType
     */
    public function setOptionAlert($optionAlert = null)
    {
        // validation for constraint: string
        if (!is_null($optionAlert) && !is_string($optionAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionAlert, true), gettype($optionAlert)), __LINE__);
        }
        $this->OptionAlert = $optionAlert;
        return $this;
    }
    /**
     * Get OptionCost value
     * @return string|null
     */
    public function getOptionCost()
    {
        return $this->OptionCost;
    }
    /**
     * Set OptionCost value
     * @param string $optionCost
     * @return \PayPal\StructType\OptionTrackingDetailsType
     */
    public function setOptionCost($optionCost = null)
    {
        // validation for constraint: string
        if (!is_null($optionCost) && !is_string($optionCost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionCost, true), gettype($optionCost)), __LINE__);
        }
        $this->OptionCost = $optionCost;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OptionTrackingDetailsType
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
