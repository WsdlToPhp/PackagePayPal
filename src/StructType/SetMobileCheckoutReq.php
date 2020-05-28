<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMobileCheckoutReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetMobileCheckoutReq extends AbstractStructBase
{
    /**
     * The SetMobileCheckoutRequest
     * Meta information extracted from the WSDL
     * - ref: ns:SetMobileCheckoutRequest
     * @var \PayPal\StructType\SetMobileCheckoutRequestType
     */
    public $SetMobileCheckoutRequest;
    /**
     * Constructor method for SetMobileCheckoutReq
     * @uses SetMobileCheckoutReq::setSetMobileCheckoutRequest()
     * @param \PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest
     */
    public function __construct(\PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest = null)
    {
        $this
            ->setSetMobileCheckoutRequest($setMobileCheckoutRequest);
    }
    /**
     * Get SetMobileCheckoutRequest value
     * @return \PayPal\StructType\SetMobileCheckoutRequestType|null
     */
    public function getSetMobileCheckoutRequest()
    {
        return $this->SetMobileCheckoutRequest;
    }
    /**
     * Set SetMobileCheckoutRequest value
     * @param \PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest
     * @return \PayPal\StructType\SetMobileCheckoutReq
     */
    public function setSetMobileCheckoutRequest(\PayPal\StructType\SetMobileCheckoutRequestType $setMobileCheckoutRequest = null)
    {
        $this->SetMobileCheckoutRequest = $setMobileCheckoutRequest;
        return $this;
    }
}
