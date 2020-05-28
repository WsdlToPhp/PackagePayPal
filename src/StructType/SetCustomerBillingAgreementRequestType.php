<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetCustomerBillingAgreementRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetCustomerBillingAgreementRequestType extends AbstractRequestType
{
    /**
     * The SetCustomerBillingAgreementRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetCustomerBillingAgreementRequestDetails
     * @var \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
     */
    public $SetCustomerBillingAgreementRequestDetails;
    /**
     * Constructor method for SetCustomerBillingAgreementRequestType
     * @uses SetCustomerBillingAgreementRequestType::setSetCustomerBillingAgreementRequestDetails()
     * @param \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType $setCustomerBillingAgreementRequestDetails
     */
    public function __construct(\PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType $setCustomerBillingAgreementRequestDetails = null)
    {
        $this
            ->setSetCustomerBillingAgreementRequestDetails($setCustomerBillingAgreementRequestDetails);
    }
    /**
     * Get SetCustomerBillingAgreementRequestDetails value
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
     */
    public function getSetCustomerBillingAgreementRequestDetails()
    {
        return $this->SetCustomerBillingAgreementRequestDetails;
    }
    /**
     * Set SetCustomerBillingAgreementRequestDetails value
     * @param \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType $setCustomerBillingAgreementRequestDetails
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestType
     */
    public function setSetCustomerBillingAgreementRequestDetails(\PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType $setCustomerBillingAgreementRequestDetails = null)
    {
        $this->SetCustomerBillingAgreementRequestDetails = $setCustomerBillingAgreementRequestDetails;
        return $this;
    }
}
