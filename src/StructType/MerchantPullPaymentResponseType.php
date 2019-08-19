<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantPullPaymentResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: MerchantPullPaymentResponseType Response data from the merchant pull.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantPullPaymentResponseType extends AbstractStructBase
{
    /**
     * The PayerInfo
     * Meta information extracted from the WSDL
     * - documentation: information about the customer
     * @var \PayPal\StructType\PayerInfoType
     */
    public $PayerInfo;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the transaction
     * @var \PayPal\StructType\PaymentInfoType
     */
    public $PaymentInfo;
    /**
     * The MerchantPullInfo
     * Meta information extracted from the WSDL
     * - documentation: Specific information about the preapproved payment
     * @var \PayPal\StructType\MerchantPullInfoType
     */
    public $MerchantPullInfo;
    /**
     * Constructor method for MerchantPullPaymentResponseType
     * @uses MerchantPullPaymentResponseType::setPayerInfo()
     * @uses MerchantPullPaymentResponseType::setPaymentInfo()
     * @uses MerchantPullPaymentResponseType::setMerchantPullInfo()
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @param \PayPal\StructType\MerchantPullInfoType $merchantPullInfo
     */
    public function __construct(\PayPal\StructType\PayerInfoType $payerInfo = null, \PayPal\StructType\PaymentInfoType $paymentInfo = null, \PayPal\StructType\MerchantPullInfoType $merchantPullInfo = null)
    {
        $this
            ->setPayerInfo($payerInfo)
            ->setPaymentInfo($paymentInfo)
            ->setMerchantPullInfo($merchantPullInfo);
    }
    /**
     * Get PayerInfo value
     * @return \PayPal\StructType\PayerInfoType|null
     */
    public function getPayerInfo()
    {
        return $this->PayerInfo;
    }
    /**
     * Set PayerInfo value
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @return \PayPal\StructType\MerchantPullPaymentResponseType
     */
    public function setPayerInfo(\PayPal\StructType\PayerInfoType $payerInfo = null)
    {
        $this->PayerInfo = $payerInfo;
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return \PayPal\StructType\PaymentInfoType|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @return \PayPal\StructType\MerchantPullPaymentResponseType
     */
    public function setPaymentInfo(\PayPal\StructType\PaymentInfoType $paymentInfo = null)
    {
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Get MerchantPullInfo value
     * @return \PayPal\StructType\MerchantPullInfoType|null
     */
    public function getMerchantPullInfo()
    {
        return $this->MerchantPullInfo;
    }
    /**
     * Set MerchantPullInfo value
     * @param \PayPal\StructType\MerchantPullInfoType $merchantPullInfo
     * @return \PayPal\StructType\MerchantPullPaymentResponseType
     */
    public function setMerchantPullInfo(\PayPal\StructType\MerchantPullInfoType $merchantPullInfo = null)
    {
        $this->MerchantPullInfo = $merchantPullInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MerchantPullPaymentResponseType
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
