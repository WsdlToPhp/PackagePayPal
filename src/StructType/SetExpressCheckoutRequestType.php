<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetExpressCheckoutRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetExpressCheckoutRequestType extends AbstractRequestType
{
    /**
     * The SetExpressCheckoutRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetExpressCheckoutRequestDetails
     * @var \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public $SetExpressCheckoutRequestDetails;
    /**
     * Constructor method for SetExpressCheckoutRequestType
     * @uses SetExpressCheckoutRequestType::setSetExpressCheckoutRequestDetails()
     * @param \PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails
     */
    public function __construct(\PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails = null)
    {
        $this
            ->setSetExpressCheckoutRequestDetails($setExpressCheckoutRequestDetails);
    }
    /**
     * Get SetExpressCheckoutRequestDetails value
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function getSetExpressCheckoutRequestDetails()
    {
        return $this->SetExpressCheckoutRequestDetails;
    }
    /**
     * Set SetExpressCheckoutRequestDetails value
     * @param \PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestType
     */
    public function setSetExpressCheckoutRequestDetails(\PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails = null)
    {
        $this->SetExpressCheckoutRequestDetails = $setExpressCheckoutRequestDetails;
        return $this;
    }
}
