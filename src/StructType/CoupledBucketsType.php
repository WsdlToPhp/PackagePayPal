<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoupledBucketsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines relationship between buckets
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CoupledBucketsType extends AbstractStructBase
{
    /**
     * The PaymentRequestID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 2
     * @var string[]
     */
    public $PaymentRequestID;
    /**
     * The CoupleType
     * Meta informations extracted from the WSDL
     * - documentation: Relationship Type - LifeTime (default)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CoupleType;
    /**
     * The CoupledPaymentRequestID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for this relation
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CoupledPaymentRequestID;
    /**
     * Constructor method for CoupledBucketsType
     * @uses CoupledBucketsType::setPaymentRequestID()
     * @uses CoupledBucketsType::setCoupleType()
     * @uses CoupledBucketsType::setCoupledPaymentRequestID()
     * @param string[] $paymentRequestID
     * @param string $coupleType
     * @param string $coupledPaymentRequestID
     */
    public function __construct(array $paymentRequestID = array(), $coupleType = null, $coupledPaymentRequestID = null)
    {
        $this
            ->setPaymentRequestID($paymentRequestID)
            ->setCoupleType($coupleType)
            ->setCoupledPaymentRequestID($coupledPaymentRequestID);
    }
    /**
     * Get PaymentRequestID value
     * @return string[]
     */
    public function getPaymentRequestID()
    {
        return $this->PaymentRequestID;
    }
    /**
     * Set PaymentRequestID value
     * @throws \InvalidArgumentException
     * @param string[] $paymentRequestID
     * @return \PayPal\StructType\CoupledBucketsType
     */
    public function setPaymentRequestID(array $paymentRequestID = array())
    {
        foreach ($paymentRequestID as $coupledBucketsTypePaymentRequestIDItem) {
            // validation for constraint: itemType
            if (!is_string($coupledBucketsTypePaymentRequestIDItem)) {
                throw new \InvalidArgumentException(sprintf('The PaymentRequestID property can only contain items of string, "%s" given', is_object($coupledBucketsTypePaymentRequestIDItem) ? get_class($coupledBucketsTypePaymentRequestIDItem) : gettype($coupledBucketsTypePaymentRequestIDItem)), __LINE__);
            }
        }
        $this->PaymentRequestID = $paymentRequestID;
        return $this;
    }
    /**
     * Add item to PaymentRequestID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\CoupledBucketsType
     */
    public function addToPaymentRequestID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PaymentRequestID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentRequestID[] = $item;
        return $this;
    }
    /**
     * Get CoupleType value
     * @return string|null
     */
    public function getCoupleType()
    {
        return $this->CoupleType;
    }
    /**
     * Set CoupleType value
     * @uses \PayPal\EnumType\CoupleType::valueIsValid()
     * @uses \PayPal\EnumType\CoupleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coupleType
     * @return \PayPal\StructType\CoupledBucketsType
     */
    public function setCoupleType($coupleType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CoupleType::valueIsValid($coupleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coupleType, implode(', ', \PayPal\EnumType\CoupleType::getValidValues())), __LINE__);
        }
        $this->CoupleType = $coupleType;
        return $this;
    }
    /**
     * Get CoupledPaymentRequestID value
     * @return string|null
     */
    public function getCoupledPaymentRequestID()
    {
        return $this->CoupledPaymentRequestID;
    }
    /**
     * Set CoupledPaymentRequestID value
     * @param string $coupledPaymentRequestID
     * @return \PayPal\StructType\CoupledBucketsType
     */
    public function setCoupledPaymentRequestID($coupledPaymentRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($coupledPaymentRequestID) && !is_string($coupledPaymentRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coupledPaymentRequestID)), __LINE__);
        }
        $this->CoupledPaymentRequestID = $coupledPaymentRequestID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CoupledBucketsType
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
