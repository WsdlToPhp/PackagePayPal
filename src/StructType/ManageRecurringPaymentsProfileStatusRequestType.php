<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageRecurringPaymentsProfileStatusRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManageRecurringPaymentsProfileStatusRequestType extends AbstractRequestType
{
    /**
     * The ManageRecurringPaymentsProfileStatusRequestDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:ManageRecurringPaymentsProfileStatusRequestDetails
     * @var \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType
     */
    public $ManageRecurringPaymentsProfileStatusRequestDetails;
    /**
     * Constructor method for ManageRecurringPaymentsProfileStatusRequestType
     * @uses ManageRecurringPaymentsProfileStatusRequestType::setManageRecurringPaymentsProfileStatusRequestDetails()
     * @param \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType $manageRecurringPaymentsProfileStatusRequestDetails
     */
    public function __construct(\PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType $manageRecurringPaymentsProfileStatusRequestDetails = null)
    {
        $this
            ->setManageRecurringPaymentsProfileStatusRequestDetails($manageRecurringPaymentsProfileStatusRequestDetails);
    }
    /**
     * Get ManageRecurringPaymentsProfileStatusRequestDetails value
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType|null
     */
    public function getManageRecurringPaymentsProfileStatusRequestDetails()
    {
        return $this->ManageRecurringPaymentsProfileStatusRequestDetails;
    }
    /**
     * Set ManageRecurringPaymentsProfileStatusRequestDetails value
     * @param \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType $manageRecurringPaymentsProfileStatusRequestDetails
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType
     */
    public function setManageRecurringPaymentsProfileStatusRequestDetails(\PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType $manageRecurringPaymentsProfileStatusRequestDetails = null)
    {
        $this->ManageRecurringPaymentsProfileStatusRequestDetails = $manageRecurringPaymentsProfileStatusRequestDetails;
        return $this;
    }
}
