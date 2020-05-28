<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateBillingAgreementReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateBillingAgreementReq extends AbstractStructBase
{
    /**
     * The CreateBillingAgreementRequest
     * Meta information extracted from the WSDL
     * - ref: ns:CreateBillingAgreementRequest
     * @var \PayPal\StructType\CreateBillingAgreementRequestType
     */
    public $CreateBillingAgreementRequest;
    /**
     * Constructor method for CreateBillingAgreementReq
     * @uses CreateBillingAgreementReq::setCreateBillingAgreementRequest()
     * @param \PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest
     */
    public function __construct(\PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest = null)
    {
        $this
            ->setCreateBillingAgreementRequest($createBillingAgreementRequest);
    }
    /**
     * Get CreateBillingAgreementRequest value
     * @return \PayPal\StructType\CreateBillingAgreementRequestType|null
     */
    public function getCreateBillingAgreementRequest()
    {
        return $this->CreateBillingAgreementRequest;
    }
    /**
     * Set CreateBillingAgreementRequest value
     * @param \PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest
     * @return \PayPal\StructType\CreateBillingAgreementReq
     */
    public function setCreateBillingAgreementRequest(\PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest = null)
    {
        $this->CreateBillingAgreementRequest = $createBillingAgreementRequest;
        return $this;
    }
}
