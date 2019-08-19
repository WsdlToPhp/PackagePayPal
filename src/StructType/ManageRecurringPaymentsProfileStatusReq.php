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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusReq
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
