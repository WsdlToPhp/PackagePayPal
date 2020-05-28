<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetExpressCheckoutReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetExpressCheckoutReq extends AbstractStructBase
{
    /**
     * The SetExpressCheckoutRequest
     * Meta information extracted from the WSDL
     * - ref: ns:SetExpressCheckoutRequest
     * @var \PayPal\StructType\SetExpressCheckoutRequestType
     */
    public $SetExpressCheckoutRequest;
    /**
     * Constructor method for SetExpressCheckoutReq
     * @uses SetExpressCheckoutReq::setSetExpressCheckoutRequest()
     * @param \PayPal\StructType\SetExpressCheckoutRequestType $setExpressCheckoutRequest
     */
    public function __construct(\PayPal\StructType\SetExpressCheckoutRequestType $setExpressCheckoutRequest = null)
    {
        $this
            ->setSetExpressCheckoutRequest($setExpressCheckoutRequest);
    }
    /**
     * Get SetExpressCheckoutRequest value
     * @return \PayPal\StructType\SetExpressCheckoutRequestType|null
     */
    public function getSetExpressCheckoutRequest()
    {
        return $this->SetExpressCheckoutRequest;
    }
    /**
     * Set SetExpressCheckoutRequest value
     * @param \PayPal\StructType\SetExpressCheckoutRequestType $setExpressCheckoutRequest
     * @return \PayPal\StructType\SetExpressCheckoutReq
     */
    public function setSetExpressCheckoutRequest(\PayPal\StructType\SetExpressCheckoutRequestType $setExpressCheckoutRequest = null)
    {
        $this->SetExpressCheckoutRequest = $setExpressCheckoutRequest;
        return $this;
    }
}
