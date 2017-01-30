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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
