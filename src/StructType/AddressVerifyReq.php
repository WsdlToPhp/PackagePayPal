<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressVerifyReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressVerifyReq extends AbstractStructBase
{
    /**
     * The AddressVerifyRequest
     * Meta information extracted from the WSDL
     * - ref: ns:AddressVerifyRequest
     * @var \PayPal\StructType\AddressVerifyRequestType
     */
    public $AddressVerifyRequest;
    /**
     * Constructor method for AddressVerifyReq
     * @uses AddressVerifyReq::setAddressVerifyRequest()
     * @param \PayPal\StructType\AddressVerifyRequestType $addressVerifyRequest
     */
    public function __construct(\PayPal\StructType\AddressVerifyRequestType $addressVerifyRequest = null)
    {
        $this
            ->setAddressVerifyRequest($addressVerifyRequest);
    }
    /**
     * Get AddressVerifyRequest value
     * @return \PayPal\StructType\AddressVerifyRequestType|null
     */
    public function getAddressVerifyRequest()
    {
        return $this->AddressVerifyRequest;
    }
    /**
     * Set AddressVerifyRequest value
     * @param \PayPal\StructType\AddressVerifyRequestType $addressVerifyRequest
     * @return \PayPal\StructType\AddressVerifyReq
     */
    public function setAddressVerifyRequest(\PayPal\StructType\AddressVerifyRequestType $addressVerifyRequest = null)
    {
        $this->AddressVerifyRequest = $addressVerifyRequest;
        return $this;
    }
}
