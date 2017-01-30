<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionTermsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: SubscriptionTermsType Terms of a PayPal subscription.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SubscriptionTermsType extends AbstractStructBase
{
    /**
     * The period
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $period;
    /**
     * The Amount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * Constructor method for SubscriptionTermsType
     * @uses SubscriptionTermsType::setPeriod()
     * @uses SubscriptionTermsType::setAmount()
     * @param string $period
     * @param \PayPal\StructType\BasicAmountType $amount
     */
    public function __construct($period = null, \PayPal\StructType\BasicAmountType $amount = null)
    {
        $this
            ->setPeriod($period)
            ->setAmount($amount);
    }
    /**
     * Get period value
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param string $period
     * @return \PayPal\StructType\SubscriptionTermsType
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period)), __LINE__);
        }
        $this->period = $period;
        return $this;
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\SubscriptionTermsType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SubscriptionTermsType
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
