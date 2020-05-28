<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class QuantityType extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The unit
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $unit;
    /**
     * Constructor method for QuantityType
     * @uses QuantityType::set_()
     * @uses QuantityType::setUnit()
     * @param float $_
     * @param string $unit
     */
    public function __construct($_ = null, $unit = null)
    {
        $this
            ->set_($_)
            ->setUnit($unit);
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \PayPal\StructType\QuantityType
     */
    public function set_($_ = null)
    {
        // validation for constraint: float
        if (!is_null($_) && !(is_float($_) || is_numeric($_))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \PayPal\StructType\QuantityType
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
}
