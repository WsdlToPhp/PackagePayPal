<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about user used by buying applications
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyerType extends AbstractStructBase
{
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ShippingAddress
     * @var \PayPal\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * Constructor method for BuyerType
     * @uses BuyerType::setShippingAddress()
     * @param \PayPal\StructType\AddressType $shippingAddress
     */
    public function __construct(\PayPal\StructType\AddressType $shippingAddress = null)
    {
        $this
            ->setShippingAddress($shippingAddress);
    }
    /**
     * Get ShippingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \PayPal\StructType\AddressType $shippingAddress
     * @return \PayPal\StructType\BuyerType
     */
    public function setShippingAddress(\PayPal\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BuyerType
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
