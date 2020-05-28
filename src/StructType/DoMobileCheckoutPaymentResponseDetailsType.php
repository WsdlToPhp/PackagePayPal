<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoMobileCheckoutPaymentResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoMobileCheckoutPaymentResponseDetailsType extends AbstractStructBase
{
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN. Optional Character length and limitations: 256 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The PayerInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the payer
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
     * Constructor method for DoMobileCheckoutPaymentResponseDetailsType
     * @uses DoMobileCheckoutPaymentResponseDetailsType::setCustom()
     * @uses DoMobileCheckoutPaymentResponseDetailsType::setInvoiceID()
     * @uses DoMobileCheckoutPaymentResponseDetailsType::setPayerInfo()
     * @uses DoMobileCheckoutPaymentResponseDetailsType::setPaymentInfo()
     * @param string $custom
     * @param string $invoiceID
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     */
    public function __construct($custom = null, $invoiceID = null, \PayPal\StructType\PayerInfoType $payerInfo = null, \PayPal\StructType\PaymentInfoType $paymentInfo = null)
    {
        $this
            ->setCustom($custom)
            ->setInvoiceID($invoiceID)
            ->setPayerInfo($payerInfo)
            ->setPaymentInfo($paymentInfo);
    }
    /**
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get InvoiceID value
     * @return string|null
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }
    /**
     * Set InvoiceID value
     * @param string $invoiceID
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public function setInvoiceID($invoiceID = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceID, true), gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
        return $this;
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
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
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
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public function setPaymentInfo(\PayPal\StructType\PaymentInfoType $paymentInfo = null)
    {
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
}
