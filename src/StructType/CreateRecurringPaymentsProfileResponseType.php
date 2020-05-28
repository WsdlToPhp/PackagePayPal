<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRecurringPaymentsProfileResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateRecurringPaymentsProfileResponseType extends AbstractResponseType
{
    /**
     * The CreateRecurringPaymentsProfileResponseDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:CreateRecurringPaymentsProfileResponseDetails
     * @var \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType
     */
    public $CreateRecurringPaymentsProfileResponseDetails;
    /**
     * Constructor method for CreateRecurringPaymentsProfileResponseType
     * @uses CreateRecurringPaymentsProfileResponseType::setCreateRecurringPaymentsProfileResponseDetails()
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType $createRecurringPaymentsProfileResponseDetails
     */
    public function __construct(\PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType $createRecurringPaymentsProfileResponseDetails = null)
    {
        $this
            ->setCreateRecurringPaymentsProfileResponseDetails($createRecurringPaymentsProfileResponseDetails);
    }
    /**
     * Get CreateRecurringPaymentsProfileResponseDetails value
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType|null
     */
    public function getCreateRecurringPaymentsProfileResponseDetails()
    {
        return $this->CreateRecurringPaymentsProfileResponseDetails;
    }
    /**
     * Set CreateRecurringPaymentsProfileResponseDetails value
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType $createRecurringPaymentsProfileResponseDetails
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseType
     */
    public function setCreateRecurringPaymentsProfileResponseDetails(\PayPal\StructType\CreateRecurringPaymentsProfileResponseDetailsType $createRecurringPaymentsProfileResponseDetails = null)
    {
        $this->CreateRecurringPaymentsProfileResponseDetails = $createRecurringPaymentsProfileResponseDetails;
        return $this;
    }
}
