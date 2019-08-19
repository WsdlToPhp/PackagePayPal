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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusResponseType
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
