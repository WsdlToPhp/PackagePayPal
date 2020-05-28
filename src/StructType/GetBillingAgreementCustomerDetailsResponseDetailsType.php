<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingAgreementCustomerDetailsResponseDetailsType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBillingAgreementCustomerDetailsResponseDetailsType extends AbstractStructBase
{
    /**
     * The PayerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\PayerInfoType
     */
    public $PayerInfo;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - documentation: Customer's billing address. Optional If you have a credit card mapped in your PayPal account, PayPal returns the billing address of the credit billing address otherwise your primary address as billing address in
     * GetBillingAgreementCustomerDetails.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $BillingAddress;
    /**
     * Constructor method for GetBillingAgreementCustomerDetailsResponseDetailsType
     * @uses GetBillingAgreementCustomerDetailsResponseDetailsType::setPayerInfo()
     * @uses GetBillingAgreementCustomerDetailsResponseDetailsType::setBillingAddress()
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @param \PayPal\StructType\AddressType $billingAddress
     */
    public function __construct(\PayPal\StructType\PayerInfoType $payerInfo = null, \PayPal\StructType\AddressType $billingAddress = null)
    {
        $this
            ->setPayerInfo($payerInfo)
            ->setBillingAddress($billingAddress);
    }
    /**
     * Get PayerInfo value
     * @return \PayPal\StructType\PayerInfoType
     */
    public function getPayerInfo()
    {
        return $this->PayerInfo;
    }
    /**
     * Set PayerInfo value
     * @param \PayPal\StructType\PayerInfoType $payerInfo
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType
     */
    public function setPayerInfo(\PayPal\StructType\PayerInfoType $payerInfo = null)
    {
        $this->PayerInfo = $payerInfo;
        return $this;
    }
    /**
     * Get BillingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param \PayPal\StructType\AddressType $billingAddress
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType
     */
    public function setBillingAddress(\PayPal\StructType\AddressType $billingAddress = null)
    {
        $this->BillingAddress = $billingAddress;
        return $this;
    }
}
