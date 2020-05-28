<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRecurringPaymentsProfileReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateRecurringPaymentsProfileReq extends AbstractStructBase
{
    /**
     * The CreateRecurringPaymentsProfileRequest
     * Meta information extracted from the WSDL
     * - ref: ns:CreateRecurringPaymentsProfileRequest
     * @var \PayPal\StructType\CreateRecurringPaymentsProfileRequestType
     */
    public $CreateRecurringPaymentsProfileRequest;
    /**
     * Constructor method for CreateRecurringPaymentsProfileReq
     * @uses CreateRecurringPaymentsProfileReq::setCreateRecurringPaymentsProfileRequest()
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest
     */
    public function __construct(\PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest = null)
    {
        $this
            ->setCreateRecurringPaymentsProfileRequest($createRecurringPaymentsProfileRequest);
    }
    /**
     * Get CreateRecurringPaymentsProfileRequest value
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestType|null
     */
    public function getCreateRecurringPaymentsProfileRequest()
    {
        return $this->CreateRecurringPaymentsProfileRequest;
    }
    /**
     * Set CreateRecurringPaymentsProfileRequest value
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileReq
     */
    public function setCreateRecurringPaymentsProfileRequest(\PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest = null)
    {
        $this->CreateRecurringPaymentsProfileRequest = $createRecurringPaymentsProfileRequest;
        return $this;
    }
}
