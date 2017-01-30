<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantPullInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: MerchantPullInfoType Information about the merchant pull.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantPullInfoType extends AbstractStructBase
{
    /**
     * The MpStatus
     * Meta informations extracted from the WSDL
     * - documentation: Current status of billing agreement
     * @var string
     */
    public $MpStatus;
    /**
     * The MpMax
     * Meta informations extracted from the WSDL
     * - documentation: Monthly maximum payment amount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $MpMax;
    /**
     * The MpCustom
     * Meta informations extracted from the WSDL
     * - documentation: The value of the mp_custom variable that you specified in a FORM submission to PayPal during the creation or updating of a customer billing agreement
     * - minOccurs: 0
     * @var string
     */
    public $MpCustom;
    /**
     * The Desc
     * Meta informations extracted from the WSDL
     * - documentation: The value of the mp_desc variable (description of goods or services) associated with the billing agreement
     * - minOccurs: 0
     * @var string
     */
    public $Desc;
    /**
     * The Invoice
     * Meta informations extracted from the WSDL
     * - documentation: Invoice value as set by BillUserRequest API call
     * - minOccurs: 0
     * @var string
     */
    public $Invoice;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - documentation: Custom field as set by BillUserRequest API call
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The PaymentSourceID
     * Meta informations extracted from the WSDL
     * - documentation: Note: This field is no longer used and is always empty.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentSourceID;
    /**
     * Constructor method for MerchantPullInfoType
     * @uses MerchantPullInfoType::setMpStatus()
     * @uses MerchantPullInfoType::setMpMax()
     * @uses MerchantPullInfoType::setMpCustom()
     * @uses MerchantPullInfoType::setDesc()
     * @uses MerchantPullInfoType::setInvoice()
     * @uses MerchantPullInfoType::setCustom()
     * @uses MerchantPullInfoType::setPaymentSourceID()
     * @param string $mpStatus
     * @param \PayPal\StructType\BasicAmountType $mpMax
     * @param string $mpCustom
     * @param string $desc
     * @param string $invoice
     * @param string $custom
     * @param string $paymentSourceID
     */
    public function __construct($mpStatus = null, \PayPal\StructType\BasicAmountType $mpMax = null, $mpCustom = null, $desc = null, $invoice = null, $custom = null, $paymentSourceID = null)
    {
        $this
            ->setMpStatus($mpStatus)
            ->setMpMax($mpMax)
            ->setMpCustom($mpCustom)
            ->setDesc($desc)
            ->setInvoice($invoice)
            ->setCustom($custom)
            ->setPaymentSourceID($paymentSourceID);
    }
    /**
     * Get MpStatus value
     * @return string|null
     */
    public function getMpStatus()
    {
        return $this->MpStatus;
    }
    /**
     * Set MpStatus value
     * @uses \PayPal\EnumType\MerchantPullStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MerchantPullStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mpStatus
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setMpStatus($mpStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MerchantPullStatusCodeType::valueIsValid($mpStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mpStatus, implode(', ', \PayPal\EnumType\MerchantPullStatusCodeType::getValidValues())), __LINE__);
        }
        $this->MpStatus = $mpStatus;
        return $this;
    }
    /**
     * Get MpMax value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getMpMax()
    {
        return $this->MpMax;
    }
    /**
     * Set MpMax value
     * @param \PayPal\StructType\BasicAmountType $mpMax
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setMpMax(\PayPal\StructType\BasicAmountType $mpMax = null)
    {
        $this->MpMax = $mpMax;
        return $this;
    }
    /**
     * Get MpCustom value
     * @return string|null
     */
    public function getMpCustom()
    {
        return $this->MpCustom;
    }
    /**
     * Set MpCustom value
     * @param string $mpCustom
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setMpCustom($mpCustom = null)
    {
        // validation for constraint: string
        if (!is_null($mpCustom) && !is_string($mpCustom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mpCustom)), __LINE__);
        }
        $this->MpCustom = $mpCustom;
        return $this;
    }
    /**
     * Get Desc value
     * @return string|null
     */
    public function getDesc()
    {
        return $this->Desc;
    }
    /**
     * Set Desc value
     * @param string $desc
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setDesc($desc = null)
    {
        // validation for constraint: string
        if (!is_null($desc) && !is_string($desc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($desc)), __LINE__);
        }
        $this->Desc = $desc;
        return $this;
    }
    /**
     * Get Invoice value
     * @return string|null
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }
    /**
     * Set Invoice value
     * @param string $invoice
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setInvoice($invoice = null)
    {
        // validation for constraint: string
        if (!is_null($invoice) && !is_string($invoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoice)), __LINE__);
        }
        $this->Invoice = $invoice;
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
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get PaymentSourceID value
     * @return string|null
     */
    public function getPaymentSourceID()
    {
        return $this->PaymentSourceID;
    }
    /**
     * Set PaymentSourceID value
     * @param string $paymentSourceID
     * @return \PayPal\StructType\MerchantPullInfoType
     */
    public function setPaymentSourceID($paymentSourceID = null)
    {
        // validation for constraint: string
        if (!is_null($paymentSourceID) && !is_string($paymentSourceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentSourceID)), __LINE__);
        }
        $this->PaymentSourceID = $paymentSourceID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MerchantPullInfoType
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
