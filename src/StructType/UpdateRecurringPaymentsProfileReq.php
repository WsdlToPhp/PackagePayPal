<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRecurringPaymentsProfileReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateRecurringPaymentsProfileReq extends AbstractStructBase
{
    /**
     * The UpdateRecurringPaymentsProfileRequest
     * Meta information extracted from the WSDL
     * - ref: ns:UpdateRecurringPaymentsProfileRequest
     * @var \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType
     */
    public $UpdateRecurringPaymentsProfileRequest;
    /**
     * Constructor method for UpdateRecurringPaymentsProfileReq
     * @uses UpdateRecurringPaymentsProfileReq::setUpdateRecurringPaymentsProfileRequest()
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest
     */
    public function __construct(\PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest = null)
    {
        $this
            ->setUpdateRecurringPaymentsProfileRequest($updateRecurringPaymentsProfileRequest);
    }
    /**
     * Get UpdateRecurringPaymentsProfileRequest value
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType|null
     */
    public function getUpdateRecurringPaymentsProfileRequest()
    {
        return $this->UpdateRecurringPaymentsProfileRequest;
    }
    /**
     * Set UpdateRecurringPaymentsProfileRequest value
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileReq
     */
    public function setUpdateRecurringPaymentsProfileRequest(\PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest = null)
    {
        $this->UpdateRecurringPaymentsProfileRequest = $updateRecurringPaymentsProfileRequest;
        return $this;
    }
}
