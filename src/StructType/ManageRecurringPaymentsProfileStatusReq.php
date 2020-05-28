<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageRecurringPaymentsProfileStatusReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManageRecurringPaymentsProfileStatusReq extends AbstractStructBase
{
    /**
     * The ManageRecurringPaymentsProfileStatusRequest
     * Meta information extracted from the WSDL
     * - ref: ns:ManageRecurringPaymentsProfileStatusRequest
     * @var \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType
     */
    public $ManageRecurringPaymentsProfileStatusRequest;
    /**
     * Constructor method for ManageRecurringPaymentsProfileStatusReq
     * @uses ManageRecurringPaymentsProfileStatusReq::setManageRecurringPaymentsProfileStatusRequest()
     * @param \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType $manageRecurringPaymentsProfileStatusRequest
     */
    public function __construct(\PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType $manageRecurringPaymentsProfileStatusRequest = null)
    {
        $this
            ->setManageRecurringPaymentsProfileStatusRequest($manageRecurringPaymentsProfileStatusRequest);
    }
    /**
     * Get ManageRecurringPaymentsProfileStatusRequest value
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType|null
     */
    public function getManageRecurringPaymentsProfileStatusRequest()
    {
        return $this->ManageRecurringPaymentsProfileStatusRequest;
    }
    /**
     * Set ManageRecurringPaymentsProfileStatusRequest value
     * @param \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType $manageRecurringPaymentsProfileStatusRequest
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusReq
     */
    public function setManageRecurringPaymentsProfileStatusRequest(\PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType $manageRecurringPaymentsProfileStatusRequest = null)
    {
        $this->ManageRecurringPaymentsProfileStatusRequest = $manageRecurringPaymentsProfileStatusRequest;
        return $this;
    }
}
