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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestType
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
