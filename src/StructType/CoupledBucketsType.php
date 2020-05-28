<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoupledBucketsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines relationship between buckets
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CoupledBucketsType extends AbstractStructBase
{
    /**
     * The PaymentRequestID
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 2
     * @var string[]
     */
    public $PaymentRequestID;
    /**
     * The CoupleType
     * Meta information extracted from the WSDL
     * - documentation: Relationship Type - LifeTime (default)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CoupleType;
    /**
     * The CoupledPaymentRequestID
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setPaymentRequestID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentRequestID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentRequestIDForArrayConstraintsFromSetPaymentRequestID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $coupledBucketsTypePaymentRequestIDItem) {
            // validation for constraint: itemType
            if (!is_string($coupledBucketsTypePaymentRequestIDItem)) {
                $invalidValues[] = is_object($coupledBucketsTypePaymentRequestIDItem) ? get_class($coupledBucketsTypePaymentRequestIDItem) : sprintf('%s(%s)', gettype($coupledBucketsTypePaymentRequestIDItem), var_export($coupledBucketsTypePaymentRequestIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentRequestID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentRequestID value
     * @throws \InvalidArgumentException
     * @param string[] $paymentRequestID
     * @return \PayPal\StructType\CoupledBucketsType
     */
    public function setPaymentRequestID(array $paymentRequestID = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentRequestIDArrayErrorMessage = self::validatePaymentRequestIDForArrayConstraintsFromSetPaymentRequestID($paymentRequestID))) {
            throw new \InvalidArgumentException($paymentRequestIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentRequestID) && count($paymentRequestID) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentRequestID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PaymentRequestID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentRequestID) && count($this->PaymentRequestID) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentRequestID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CoupleType', is_array($coupleType) ? implode(', ', $coupleType) : var_export($coupleType, true), implode(', ', \PayPal\EnumType\CoupleType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coupledPaymentRequestID, true), gettype($coupledPaymentRequestID)), __LINE__);
        }
        $this->CoupledPaymentRequestID = $coupledPaymentRequestID;
        return $this;
    }
}
