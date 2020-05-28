<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMobilePaymentRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateMobilePaymentRequestType extends AbstractRequestType
{
    /**
     * The CreateMobilePaymentRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:CreateMobilePaymentRequestDetails
     * @var \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public $CreateMobilePaymentRequestDetails;
    /**
     * Constructor method for CreateMobilePaymentRequestType
     * @uses CreateMobilePaymentRequestType::setCreateMobilePaymentRequestDetails()
     * @param \PayPal\StructType\CreateMobilePaymentRequestDetailsType $createMobilePaymentRequestDetails
     */
    public function __construct(\PayPal\StructType\CreateMobilePaymentRequestDetailsType $createMobilePaymentRequestDetails = null)
    {
        $this
            ->setCreateMobilePaymentRequestDetails($createMobilePaymentRequestDetails);
    }
    /**
     * Get CreateMobilePaymentRequestDetails value
     * @return \PayPal\StructType\CreateMobilePaymentRequestDetailsType
     */
    public function getCreateMobilePaymentRequestDetails()
    {
        return $this->CreateMobilePaymentRequestDetails;
    }
    /**
     * Set CreateMobilePaymentRequestDetails value
     * @param \PayPal\StructType\CreateMobilePaymentRequestDetailsType $createMobilePaymentRequestDetails
     * @return \PayPal\StructType\CreateMobilePaymentRequestType
     */
    public function setCreateMobilePaymentRequestDetails(\PayPal\StructType\CreateMobilePaymentRequestDetailsType $createMobilePaymentRequestDetails = null)
    {
        $this->CreateMobilePaymentRequestDetails = $createMobilePaymentRequestDetails;
        return $this;
    }
}
