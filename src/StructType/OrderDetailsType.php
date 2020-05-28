<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Description of the Order.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The MaxAmount
     * Meta information extracted from the WSDL
     * - documentation: Expected maximum amount that the merchant may pull using DoReferenceTransaction
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $MaxAmount;
    /**
     * Constructor method for OrderDetailsType
     * @uses OrderDetailsType::setDescription()
     * @uses OrderDetailsType::setMaxAmount()
     * @param string $description
     * @param \PayPal\StructType\BasicAmountType $maxAmount
     */
    public function __construct($description = null, \PayPal\StructType\BasicAmountType $maxAmount = null)
    {
        $this
            ->setDescription($description)
            ->setMaxAmount($maxAmount);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \PayPal\StructType\OrderDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get MaxAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getMaxAmount()
    {
        return $this->MaxAmount;
    }
    /**
     * Set MaxAmount value
     * @param \PayPal\StructType\BasicAmountType $maxAmount
     * @return \PayPal\StructType\OrderDetailsType
     */
    public function setMaxAmount(\PayPal\StructType\BasicAmountType $maxAmount = null)
    {
        $this->MaxAmount = $maxAmount;
        return $this;
    }
}
