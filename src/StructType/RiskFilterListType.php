<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskFilterListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of Risk Filter.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RiskFilterListType extends AbstractStructBase
{
    /**
     * The Filters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PayPal\StructType\RiskFilterDetailsType[]
     */
    public $Filters;
    /**
     * Constructor method for RiskFilterListType
     * @uses RiskFilterListType::setFilters()
     * @param \PayPal\StructType\RiskFilterDetailsType[] $filters
     */
    public function __construct(array $filters = array())
    {
        $this
            ->setFilters($filters);
    }
    /**
     * Get Filters value
     * @return \PayPal\StructType\RiskFilterDetailsType[]
     */
    public function getFilters()
    {
        return $this->Filters;
    }
    /**
     * This method is responsible for validating the values passed to the setFilters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFiltersForArrayConstraintsFromSetFilters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $riskFilterListTypeFiltersItem) {
            // validation for constraint: itemType
            if (!$riskFilterListTypeFiltersItem instanceof \PayPal\StructType\RiskFilterDetailsType) {
                $invalidValues[] = is_object($riskFilterListTypeFiltersItem) ? get_class($riskFilterListTypeFiltersItem) : sprintf('%s(%s)', gettype($riskFilterListTypeFiltersItem), var_export($riskFilterListTypeFiltersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Filters property can only contain items of type \PayPal\StructType\RiskFilterDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Filters value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\RiskFilterDetailsType[] $filters
     * @return \PayPal\StructType\RiskFilterListType
     */
    public function setFilters(array $filters = array())
    {
        // validation for constraint: array
        if ('' !== ($filtersArrayErrorMessage = self::validateFiltersForArrayConstraintsFromSetFilters($filters))) {
            throw new \InvalidArgumentException($filtersArrayErrorMessage, __LINE__);
        }
        $this->Filters = $filters;
        return $this;
    }
    /**
     * Add item to Filters value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\RiskFilterDetailsType $item
     * @return \PayPal\StructType\RiskFilterListType
     */
    public function addToFilters(\PayPal\StructType\RiskFilterDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\RiskFilterDetailsType) {
            throw new \InvalidArgumentException(sprintf('The Filters property can only contain items of type \PayPal\StructType\RiskFilterDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Filters[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RiskFilterListType
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
