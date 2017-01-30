<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OptionDetailsType extends AbstractStructBase
{
    /**
     * The OptionName
     * Meta informations extracted from the WSDL
     * - documentation: Option Name. Optional
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OptionName;
    /**
     * The OptionSelectionDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \PayPal\StructType\OptionSelectionDetailsType[]
     */
    public $OptionSelectionDetails;
    /**
     * Constructor method for OptionDetailsType
     * @uses OptionDetailsType::setOptionName()
     * @uses OptionDetailsType::setOptionSelectionDetails()
     * @param string $optionName
     * @param \PayPal\StructType\OptionSelectionDetailsType[] $optionSelectionDetails
     */
    public function __construct($optionName = null, array $optionSelectionDetails = array())
    {
        $this
            ->setOptionName($optionName)
            ->setOptionSelectionDetails($optionSelectionDetails);
    }
    /**
     * Get OptionName value
     * @return string
     */
    public function getOptionName()
    {
        return $this->OptionName;
    }
    /**
     * Set OptionName value
     * @param string $optionName
     * @return \PayPal\StructType\OptionDetailsType
     */
    public function setOptionName($optionName = null)
    {
        // validation for constraint: string
        if (!is_null($optionName) && !is_string($optionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($optionName)), __LINE__);
        }
        $this->OptionName = $optionName;
        return $this;
    }
    /**
     * Get OptionSelectionDetails value
     * @return \PayPal\StructType\OptionSelectionDetailsType[]|null
     */
    public function getOptionSelectionDetails()
    {
        return $this->OptionSelectionDetails;
    }
    /**
     * Set OptionSelectionDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionSelectionDetailsType[] $optionSelectionDetails
     * @return \PayPal\StructType\OptionDetailsType
     */
    public function setOptionSelectionDetails(array $optionSelectionDetails = array())
    {
        foreach ($optionSelectionDetails as $optionDetailsTypeOptionSelectionDetailsItem) {
            // validation for constraint: itemType
            if (!$optionDetailsTypeOptionSelectionDetailsItem instanceof \PayPal\StructType\OptionSelectionDetailsType) {
                throw new \InvalidArgumentException(sprintf('The OptionSelectionDetails property can only contain items of \PayPal\StructType\OptionSelectionDetailsType, "%s" given', is_object($optionDetailsTypeOptionSelectionDetailsItem) ? get_class($optionDetailsTypeOptionSelectionDetailsItem) : gettype($optionDetailsTypeOptionSelectionDetailsItem)), __LINE__);
            }
        }
        $this->OptionSelectionDetails = $optionSelectionDetails;
        return $this;
    }
    /**
     * Add item to OptionSelectionDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionSelectionDetailsType $item
     * @return \PayPal\StructType\OptionDetailsType
     */
    public function addToOptionSelectionDetails(\PayPal\StructType\OptionSelectionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\OptionSelectionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The OptionSelectionDetails property can only contain items of \PayPal\StructType\OptionSelectionDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OptionSelectionDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OptionDetailsType
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
