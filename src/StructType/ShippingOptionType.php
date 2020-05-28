<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingOptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Fallback shipping options type.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingOptionType extends AbstractStructBase
{
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
     * Constructor method for ShippingOptionType
     * @uses ShippingOptionType::setShippingOptionIsDefault()
     * @uses ShippingOptionType::setShippingOptionAmount()
     * @uses ShippingOptionType::setShippingOptionName()
     * @param string $shippingOptionIsDefault
     * @param \PayPal\StructType\BasicAmountType $shippingOptionAmount
     * @param string $shippingOptionName
     */
    public function __construct($shippingOptionIsDefault = null, \PayPal\StructType\BasicAmountType $shippingOptionAmount = null, $shippingOptionName = null)
    {
        $this
            ->setShippingOptionIsDefault($shippingOptionIsDefault)
            ->setShippingOptionAmount($shippingOptionAmount)
            ->setShippingOptionName($shippingOptionName);
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
     * @return \PayPal\StructType\ShippingOptionType
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
     * @return \PayPal\StructType\ShippingOptionType
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
     * @return \PayPal\StructType\ShippingOptionType
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
}
