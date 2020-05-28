<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingApprovalDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingApprovalDetailsType extends AbstractStructBase
{
    /**
     * The ApprovalType
     * Meta information extracted from the WSDL
     * - documentation: The Type of Approval requested - Billing Agreement or Profile
     * - minOccurs: 1
     * @var string
     */
    public $ApprovalType;
    /**
     * The ApprovalSubType
     * Meta information extracted from the WSDL
     * - documentation: The Approval subtype - Must be MerchantInitiatedBilling for BillingAgreement ApprovalType
     * - minOccurs: 0
     * @var string
     */
    public $ApprovalSubType;
    /**
     * The OrderDetails
     * Meta information extracted from the WSDL
     * - documentation: Description about the Order
     * - minOccurs: 0
     * @var \PayPal\StructType\OrderDetailsType
     */
    public $OrderDetails;
    /**
     * The PaymentDirectives
     * Meta information extracted from the WSDL
     * - documentation: Directives about the type of payment
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDirectivesType
     */
    public $PaymentDirectives;
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: Client may pass in its identification of this Billing Agreement. It used for the client's tracking purposes.
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * Constructor method for BillingApprovalDetailsType
     * @uses BillingApprovalDetailsType::setApprovalType()
     * @uses BillingApprovalDetailsType::setApprovalSubType()
     * @uses BillingApprovalDetailsType::setOrderDetails()
     * @uses BillingApprovalDetailsType::setPaymentDirectives()
     * @uses BillingApprovalDetailsType::setCustom()
     * @param string $approvalType
     * @param string $approvalSubType
     * @param \PayPal\StructType\OrderDetailsType $orderDetails
     * @param \PayPal\StructType\PaymentDirectivesType $paymentDirectives
     * @param string $custom
     */
    public function __construct($approvalType = null, $approvalSubType = null, \PayPal\StructType\OrderDetailsType $orderDetails = null, \PayPal\StructType\PaymentDirectivesType $paymentDirectives = null, $custom = null)
    {
        $this
            ->setApprovalType($approvalType)
            ->setApprovalSubType($approvalSubType)
            ->setOrderDetails($orderDetails)
            ->setPaymentDirectives($paymentDirectives)
            ->setCustom($custom);
    }
    /**
     * Get ApprovalType value
     * @return string
     */
    public function getApprovalType()
    {
        return $this->ApprovalType;
    }
    /**
     * Set ApprovalType value
     * @uses \PayPal\EnumType\ApprovalTypeType::valueIsValid()
     * @uses \PayPal\EnumType\ApprovalTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $approvalType
     * @return \PayPal\StructType\BillingApprovalDetailsType
     */
    public function setApprovalType($approvalType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ApprovalTypeType::valueIsValid($approvalType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ApprovalTypeType', is_array($approvalType) ? implode(', ', $approvalType) : var_export($approvalType, true), implode(', ', \PayPal\EnumType\ApprovalTypeType::getValidValues())), __LINE__);
        }
        $this->ApprovalType = $approvalType;
        return $this;
    }
    /**
     * Get ApprovalSubType value
     * @return string|null
     */
    public function getApprovalSubType()
    {
        return $this->ApprovalSubType;
    }
    /**
     * Set ApprovalSubType value
     * @uses \PayPal\EnumType\ApprovalSubTypeType::valueIsValid()
     * @uses \PayPal\EnumType\ApprovalSubTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $approvalSubType
     * @return \PayPal\StructType\BillingApprovalDetailsType
     */
    public function setApprovalSubType($approvalSubType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ApprovalSubTypeType::valueIsValid($approvalSubType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ApprovalSubTypeType', is_array($approvalSubType) ? implode(', ', $approvalSubType) : var_export($approvalSubType, true), implode(', ', \PayPal\EnumType\ApprovalSubTypeType::getValidValues())), __LINE__);
        }
        $this->ApprovalSubType = $approvalSubType;
        return $this;
    }
    /**
     * Get OrderDetails value
     * @return \PayPal\StructType\OrderDetailsType|null
     */
    public function getOrderDetails()
    {
        return $this->OrderDetails;
    }
    /**
     * Set OrderDetails value
     * @param \PayPal\StructType\OrderDetailsType $orderDetails
     * @return \PayPal\StructType\BillingApprovalDetailsType
     */
    public function setOrderDetails(\PayPal\StructType\OrderDetailsType $orderDetails = null)
    {
        $this->OrderDetails = $orderDetails;
        return $this;
    }
    /**
     * Get PaymentDirectives value
     * @return \PayPal\StructType\PaymentDirectivesType|null
     */
    public function getPaymentDirectives()
    {
        return $this->PaymentDirectives;
    }
    /**
     * Set PaymentDirectives value
     * @param \PayPal\StructType\PaymentDirectivesType $paymentDirectives
     * @return \PayPal\StructType\BillingApprovalDetailsType
     */
    public function setPaymentDirectives(\PayPal\StructType\PaymentDirectivesType $paymentDirectives = null)
    {
        $this->PaymentDirectives = $paymentDirectives;
        return $this;
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
     * @return \PayPal\StructType\BillingApprovalDetailsType
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
}
