<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentType StructType
 * Meta informations extracted from the WSDL
 * - type: ns:PaymentType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentType extends AbstractStructBase
{
    /**
     * The PaymentMeans
     * @var \PayPal\StructType\PaymentMeansType
     */
    public $PaymentMeans;
    /**
     * Constructor method for PaymentType
     * @uses PaymentType::setPaymentMeans()
     * @param \PayPal\StructType\PaymentMeansType $paymentMeans
     */
    public function __construct(\PayPal\StructType\PaymentMeansType $paymentMeans = null)
    {
        $this
            ->setPaymentMeans($paymentMeans);
    }
    /**
     * Get PaymentMeans value
     * @return \PayPal\StructType\PaymentMeansType|null
     */
    public function getPaymentMeans()
    {
        return $this->PaymentMeans;
    }
    /**
     * Set PaymentMeans value
     * @param \PayPal\StructType\PaymentMeansType $paymentMeans
     * @return \PayPal\StructType\PaymentType
     */
    public function setPaymentMeans(\PayPal\StructType\PaymentMeansType $paymentMeans = null)
    {
        $this->PaymentMeans = $paymentMeans;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentType
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
