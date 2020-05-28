<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMobileCheckoutRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetMobileCheckoutRequestType extends AbstractRequestType
{
    /**
     * The SetMobileCheckoutRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetMobileCheckoutRequestDetails
     * @var \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public $SetMobileCheckoutRequestDetails;
    /**
     * Constructor method for SetMobileCheckoutRequestType
     * @uses SetMobileCheckoutRequestType::setSetMobileCheckoutRequestDetails()
     * @param \PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails
     */
    public function __construct(\PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails = null)
    {
        $this
            ->setSetMobileCheckoutRequestDetails($setMobileCheckoutRequestDetails);
    }
    /**
     * Get SetMobileCheckoutRequestDetails value
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function getSetMobileCheckoutRequestDetails()
    {
        return $this->SetMobileCheckoutRequestDetails;
    }
    /**
     * Set SetMobileCheckoutRequestDetails value
     * @param \PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails
     * @return \PayPal\StructType\SetMobileCheckoutRequestType
     */
    public function setSetMobileCheckoutRequestDetails(\PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails = null)
    {
        $this->SetMobileCheckoutRequestDetails = $setMobileCheckoutRequestDetails;
        return $this;
    }
}
