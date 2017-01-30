<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMobileStatusResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetMobileStatusResponseType extends AbstractResponseType
{
    /**
     * The IsActivated
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the phone is activated for mobile payments
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $IsActivated;
    /**
     * The IsPasswordSet
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the password is enabled for particular account
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $IsPasswordSet;
    /**
     * The PaymentPending
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether there is a payment pending from the phone
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PaymentPending;
    /**
     * Constructor method for GetMobileStatusResponseType
     * @uses GetMobileStatusResponseType::setIsActivated()
     * @uses GetMobileStatusResponseType::setIsPasswordSet()
     * @uses GetMobileStatusResponseType::setPaymentPending()
     * @param int $isActivated
     * @param int $isPasswordSet
     * @param int $paymentPending
     */
    public function __construct($isActivated = null, $isPasswordSet = null, $paymentPending = null)
    {
        $this
            ->setIsActivated($isActivated)
            ->setIsPasswordSet($isPasswordSet)
            ->setPaymentPending($paymentPending);
    }
    /**
     * Get IsActivated value
     * @return int
     */
    public function getIsActivated()
    {
        return $this->IsActivated;
    }
    /**
     * Set IsActivated value
     * @param int $isActivated
     * @return \PayPal\StructType\GetMobileStatusResponseType
     */
    public function setIsActivated($isActivated = null)
    {
        // validation for constraint: int
        if (!is_null($isActivated) && !is_numeric($isActivated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($isActivated)), __LINE__);
        }
        $this->IsActivated = $isActivated;
        return $this;
    }
    /**
     * Get IsPasswordSet value
     * @return int
     */
    public function getIsPasswordSet()
    {
        return $this->IsPasswordSet;
    }
    /**
     * Set IsPasswordSet value
     * @param int $isPasswordSet
     * @return \PayPal\StructType\GetMobileStatusResponseType
     */
    public function setIsPasswordSet($isPasswordSet = null)
    {
        // validation for constraint: int
        if (!is_null($isPasswordSet) && !is_numeric($isPasswordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($isPasswordSet)), __LINE__);
        }
        $this->IsPasswordSet = $isPasswordSet;
        return $this;
    }
    /**
     * Get PaymentPending value
     * @return int
     */
    public function getPaymentPending()
    {
        return $this->PaymentPending;
    }
    /**
     * Set PaymentPending value
     * @param int $paymentPending
     * @return \PayPal\StructType\GetMobileStatusResponseType
     */
    public function setPaymentPending($paymentPending = null)
    {
        // validation for constraint: int
        if (!is_null($paymentPending) && !is_numeric($paymentPending)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentPending)), __LINE__);
        }
        $this->PaymentPending = $paymentPending;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetMobileStatusResponseType
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
