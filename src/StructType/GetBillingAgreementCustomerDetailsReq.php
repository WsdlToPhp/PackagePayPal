<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingAgreementCustomerDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBillingAgreementCustomerDetailsReq extends AbstractStructBase
{
    /**
     * The GetBillingAgreementCustomerDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetBillingAgreementCustomerDetailsRequest
     * @var \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType
     */
    public $GetBillingAgreementCustomerDetailsRequest;
    /**
     * Constructor method for GetBillingAgreementCustomerDetailsReq
     * @uses GetBillingAgreementCustomerDetailsReq::setGetBillingAgreementCustomerDetailsRequest()
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest = null)
    {
        $this
            ->setGetBillingAgreementCustomerDetailsRequest($getBillingAgreementCustomerDetailsRequest);
    }
    /**
     * Get GetBillingAgreementCustomerDetailsRequest value
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType|null
     */
    public function getGetBillingAgreementCustomerDetailsRequest()
    {
        return $this->GetBillingAgreementCustomerDetailsRequest;
    }
    /**
     * Set GetBillingAgreementCustomerDetailsRequest value
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsReq
     */
    public function setGetBillingAgreementCustomerDetailsRequest(\PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest = null)
    {
        $this->GetBillingAgreementCustomerDetailsRequest = $getBillingAgreementCustomerDetailsRequest;
        return $this;
    }
}
