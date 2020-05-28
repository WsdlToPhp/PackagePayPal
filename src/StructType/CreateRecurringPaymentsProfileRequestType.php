<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRecurringPaymentsProfileRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateRecurringPaymentsProfileRequestType extends AbstractRequestType
{
    /**
     * The CreateRecurringPaymentsProfileRequestDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:CreateRecurringPaymentsProfileRequestDetails
     * @var \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
     */
    public $CreateRecurringPaymentsProfileRequestDetails;
    /**
     * Constructor method for CreateRecurringPaymentsProfileRequestType
     * @uses CreateRecurringPaymentsProfileRequestType::setCreateRecurringPaymentsProfileRequestDetails()
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType $createRecurringPaymentsProfileRequestDetails
     */
    public function __construct(\PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType $createRecurringPaymentsProfileRequestDetails = null)
    {
        $this
            ->setCreateRecurringPaymentsProfileRequestDetails($createRecurringPaymentsProfileRequestDetails);
    }
    /**
     * Get CreateRecurringPaymentsProfileRequestDetails value
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType|null
     */
    public function getCreateRecurringPaymentsProfileRequestDetails()
    {
        return $this->CreateRecurringPaymentsProfileRequestDetails;
    }
    /**
     * Set CreateRecurringPaymentsProfileRequestDetails value
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType $createRecurringPaymentsProfileRequestDetails
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestType
     */
    public function setCreateRecurringPaymentsProfileRequestDetails(\PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType $createRecurringPaymentsProfileRequestDetails = null)
    {
        $this->CreateRecurringPaymentsProfileRequestDetails = $createRecurringPaymentsProfileRequestDetails;
        return $this;
    }
}
