<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInfoType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingInfoType extends AbstractStructBase
{
    /**
     * The ShippingMethod
     * @var string
     */
    public $ShippingMethod;
    /**
     * The ShippingCarrier
     * @var string
     */
    public $ShippingCarrier;
    /**
     * The ShippingAmount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingAmount;
    /**
     * The HandlingAmount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $HandlingAmount;
    /**
     * The InsuranceAmount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $InsuranceAmount;
    /**
     * Constructor method for ShippingInfoType
     * @uses ShippingInfoType::setShippingMethod()
     * @uses ShippingInfoType::setShippingCarrier()
     * @uses ShippingInfoType::setShippingAmount()
     * @uses ShippingInfoType::setHandlingAmount()
     * @uses ShippingInfoType::setInsuranceAmount()
     * @param string $shippingMethod
     * @param string $shippingCarrier
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @param \PayPal\StructType\BasicAmountType $handlingAmount
     * @param \PayPal\StructType\BasicAmountType $insuranceAmount
     */
    public function __construct($shippingMethod = null, $shippingCarrier = null, \PayPal\StructType\BasicAmountType $shippingAmount = null, \PayPal\StructType\BasicAmountType $handlingAmount = null, \PayPal\StructType\BasicAmountType $insuranceAmount = null)
    {
        $this
            ->setShippingMethod($shippingMethod)
            ->setShippingCarrier($shippingCarrier)
            ->setShippingAmount($shippingAmount)
            ->setHandlingAmount($handlingAmount)
            ->setInsuranceAmount($insuranceAmount);
    }
    /**
     * Get ShippingMethod value
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->ShippingMethod;
    }
    /**
     * Set ShippingMethod value
     * @param string $shippingMethod
     * @return \PayPal\StructType\ShippingInfoType
     */
    public function setShippingMethod($shippingMethod = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMethod) && !is_string($shippingMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingMethod)), __LINE__);
        }
        $this->ShippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * Get ShippingCarrier value
     * @return string|null
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }
    /**
     * Set ShippingCarrier value
     * @param string $shippingCarrier
     * @return \PayPal\StructType\ShippingInfoType
     */
    public function setShippingCarrier($shippingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCarrier) && !is_string($shippingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCarrier)), __LINE__);
        }
        $this->ShippingCarrier = $shippingCarrier;
        return $this;
    }
    /**
     * Get ShippingAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingAmount()
    {
        return $this->ShippingAmount;
    }
    /**
     * Set ShippingAmount value
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @return \PayPal\StructType\ShippingInfoType
     */
    public function setShippingAmount(\PayPal\StructType\BasicAmountType $shippingAmount = null)
    {
        $this->ShippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get HandlingAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getHandlingAmount()
    {
        return $this->HandlingAmount;
    }
    /**
     * Set HandlingAmount value
     * @param \PayPal\StructType\BasicAmountType $handlingAmount
     * @return \PayPal\StructType\ShippingInfoType
     */
    public function setHandlingAmount(\PayPal\StructType\BasicAmountType $handlingAmount = null)
    {
        $this->HandlingAmount = $handlingAmount;
        return $this;
    }
    /**
     * Get InsuranceAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getInsuranceAmount()
    {
        return $this->InsuranceAmount;
    }
    /**
     * Set InsuranceAmount value
     * @param \PayPal\StructType\BasicAmountType $insuranceAmount
     * @return \PayPal\StructType\ShippingInfoType
     */
    public function setInsuranceAmount(\PayPal\StructType\BasicAmountType $insuranceAmount = null)
    {
        $this->InsuranceAmount = $insuranceAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ShippingInfoType
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
