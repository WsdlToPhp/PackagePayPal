<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Definition of an eBay Fee type.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $Fee;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setName()
     * @uses FeeType::setFee()
     * @param string $name
     * @param \PayPal\StructType\AmountType $fee
     */
    public function __construct($name = null, \PayPal\StructType\AmountType $fee = null)
    {
        $this
            ->setName($name)
            ->setFee($fee);
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
     * @return \PayPal\StructType\FeeType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Fee value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \PayPal\StructType\AmountType $fee
     * @return \PayPal\StructType\FeeType
     */
    public function setFee(\PayPal\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FeeType
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
