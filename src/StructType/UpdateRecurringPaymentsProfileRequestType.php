<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRecurringPaymentsProfileRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateRecurringPaymentsProfileRequestType extends AbstractRequestType
{
    /**
     * The UpdateRecurringPaymentsProfileRequestDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:UpdateRecurringPaymentsProfileRequestDetails
     * @var \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType
     */
    public $UpdateRecurringPaymentsProfileRequestDetails;
    /**
     * Constructor method for UpdateRecurringPaymentsProfileRequestType
     * @uses UpdateRecurringPaymentsProfileRequestType::setUpdateRecurringPaymentsProfileRequestDetails()
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType $updateRecurringPaymentsProfileRequestDetails
     */
    public function __construct(\PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType $updateRecurringPaymentsProfileRequestDetails = null)
    {
        $this
            ->setUpdateRecurringPaymentsProfileRequestDetails($updateRecurringPaymentsProfileRequestDetails);
    }
    /**
     * Get UpdateRecurringPaymentsProfileRequestDetails value
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType|null
     */
    public function getUpdateRecurringPaymentsProfileRequestDetails()
    {
        return $this->UpdateRecurringPaymentsProfileRequestDetails;
    }
    /**
     * Set UpdateRecurringPaymentsProfileRequestDetails value
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType $updateRecurringPaymentsProfileRequestDetails
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType
     */
    public function setUpdateRecurringPaymentsProfileRequestDetails(\PayPal\StructType\UpdateRecurringPaymentsProfileRequestDetailsType $updateRecurringPaymentsProfileRequestDetails = null)
    {
        $this->UpdateRecurringPaymentsProfileRequestDetails = $updateRecurringPaymentsProfileRequestDetails;
        return $this;
    }
}
