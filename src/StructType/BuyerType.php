<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about user used by buying applications
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyerType extends AbstractStructBase
{
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
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
}
