<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentMeansType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentMeansType extends AbstractStructBase
{
    /**
     * The TypeCodeID
     * @var string
     */
    public $TypeCodeID;
    /**
     * Constructor method for PaymentMeansType
     * @uses PaymentMeansType::setTypeCodeID()
     * @param string $typeCodeID
     */
    public function __construct($typeCodeID = null)
    {
        $this
            ->setTypeCodeID($typeCodeID);
    }
    /**
     * Get TypeCodeID value
     * @return string|null
     */
    public function getTypeCodeID()
    {
        return $this->TypeCodeID;
    }
    /**
     * Set TypeCodeID value
     * @uses \PayPal\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \PayPal\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $typeCodeID
     * @return \PayPal\StructType\PaymentMeansType
     */
    public function setTypeCodeID($typeCodeID = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SellerPaymentMethodCodeType::valueIsValid($typeCodeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\SellerPaymentMethodCodeType', is_array($typeCodeID) ? implode(', ', $typeCodeID) : var_export($typeCodeID, true), implode(', ', \PayPal\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->TypeCodeID = $typeCodeID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentMeansType
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
