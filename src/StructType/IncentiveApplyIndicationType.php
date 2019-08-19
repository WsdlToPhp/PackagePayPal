<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveApplyIndicationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines which bucket or item that the incentive should be applied to.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveApplyIndicationType extends AbstractStructBase
{
    /**
     * The PaymentRequestID
     * Meta information extracted from the WSDL
     * - documentation: The Bucket ID that the incentive is applied to.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentRequestID;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - documentation: The item that the incentive is applied to.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemId;
    /**
     * Constructor method for IncentiveApplyIndicationType
     * @uses IncentiveApplyIndicationType::setPaymentRequestID()
     * @uses IncentiveApplyIndicationType::setItemId()
     * @param string $paymentRequestID
     * @param string $itemId
     */
    public function __construct($paymentRequestID = null, $itemId = null)
    {
        $this
            ->setPaymentRequestID($paymentRequestID)
            ->setItemId($itemId);
    }
    /**
     * Get PaymentRequestID value
     * @return string|null
     */
    public function getPaymentRequestID()
    {
        return $this->PaymentRequestID;
    }
    /**
     * Set PaymentRequestID value
     * @param string $paymentRequestID
     * @return \PayPal\StructType\IncentiveApplyIndicationType
     */
    public function setPaymentRequestID($paymentRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($paymentRequestID) && !is_string($paymentRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRequestID, true), gettype($paymentRequestID)), __LINE__);
        }
        $this->PaymentRequestID = $paymentRequestID;
        return $this;
    }
    /**
     * Get ItemId value
     * @return string|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \PayPal\StructType\IncentiveApplyIndicationType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveApplyIndicationType
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
