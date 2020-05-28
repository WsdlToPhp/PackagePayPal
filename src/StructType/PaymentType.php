<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentType StructType
 * Meta information extracted from the WSDL
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
}
