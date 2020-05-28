<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageRecurringPaymentsProfileStatusResponseType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManageRecurringPaymentsProfileStatusResponseType extends AbstractResponseType
{
    /**
     * The ManageRecurringPaymentsProfileStatusResponseDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:ManageRecurringPaymentsProfileStatusResponseDetails
     * @var \PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseDetailsType
     */
    public $ManageRecurringPaymentsProfileStatusResponseDetails;
    /**
     * Constructor method for ManageRecurringPaymentsProfileStatusResponseType
     * @uses ManageRecurringPaymentsProfileStatusResponseType::setManageRecurringPaymentsProfileStatusResponseDetails()
     * @param \PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseDetailsType $manageRecurringPaymentsProfileStatusResponseDetails
     */
    public function __construct(\PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseDetailsType $manageRecurringPaymentsProfileStatusResponseDetails = null)
    {
        $this
            ->setManageRecurringPaymentsProfileStatusResponseDetails($manageRecurringPaymentsProfileStatusResponseDetails);
    }
    /**
     * Get ManageRecurringPaymentsProfileStatusResponseDetails value
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseDetailsType|null
     */
    public function getManageRecurringPaymentsProfileStatusResponseDetails()
    {
        return $this->ManageRecurringPaymentsProfileStatusResponseDetails;
    }
    /**
     * Set ManageRecurringPaymentsProfileStatusResponseDetails value
     * @param \PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseDetailsType $manageRecurringPaymentsProfileStatusResponseDetails
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseType
     */
    public function setManageRecurringPaymentsProfileStatusResponseDetails(\PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseDetailsType $manageRecurringPaymentsProfileStatusResponseDetails = null)
    {
        $this->ManageRecurringPaymentsProfileStatusResponseDetails = $manageRecurringPaymentsProfileStatusResponseDetails;
        return $this;
    }
}
