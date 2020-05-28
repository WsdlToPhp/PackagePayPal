<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetCustomerBillingAgreementReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetCustomerBillingAgreementReq extends AbstractStructBase
{
    /**
     * The SetCustomerBillingAgreementRequest
     * Meta information extracted from the WSDL
     * - ref: ns:SetCustomerBillingAgreementRequest
     * @var \PayPal\StructType\SetCustomerBillingAgreementRequestType
     */
    public $SetCustomerBillingAgreementRequest;
    /**
     * Constructor method for SetCustomerBillingAgreementReq
     * @uses SetCustomerBillingAgreementReq::setSetCustomerBillingAgreementRequest()
     * @param \PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest
     */
    public function __construct(\PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest = null)
    {
        $this
            ->setSetCustomerBillingAgreementRequest($setCustomerBillingAgreementRequest);
    }
    /**
     * Get SetCustomerBillingAgreementRequest value
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestType|null
     */
    public function getSetCustomerBillingAgreementRequest()
    {
        return $this->SetCustomerBillingAgreementRequest;
    }
    /**
     * Set SetCustomerBillingAgreementRequest value
     * @param \PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest
     * @return \PayPal\StructType\SetCustomerBillingAgreementReq
     */
    public function setSetCustomerBillingAgreementRequest(\PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest = null)
    {
        $this->SetCustomerBillingAgreementRequest = $setCustomerBillingAgreementRequest;
        return $this;
    }
}
