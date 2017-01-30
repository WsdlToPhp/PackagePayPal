<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRecurringPaymentsProfileReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateRecurringPaymentsProfileReq extends AbstractStructBase
{
    /**
     * The UpdateRecurringPaymentsProfileRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:UpdateRecurringPaymentsProfileRequest
     * @var \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType
     */
    public $UpdateRecurringPaymentsProfileRequest;
    /**
     * Constructor method for UpdateRecurringPaymentsProfileReq
     * @uses UpdateRecurringPaymentsProfileReq::setUpdateRecurringPaymentsProfileRequest()
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest
     */
    public function __construct(\PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest = null)
    {
        $this
            ->setUpdateRecurringPaymentsProfileRequest($updateRecurringPaymentsProfileRequest);
    }
    /**
     * Get UpdateRecurringPaymentsProfileRequest value
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType|null
     */
    public function getUpdateRecurringPaymentsProfileRequest()
    {
        return $this->UpdateRecurringPaymentsProfileRequest;
    }
    /**
     * Set UpdateRecurringPaymentsProfileRequest value
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileReq
     */
    public function setUpdateRecurringPaymentsProfileRequest(\PayPal\StructType\UpdateRecurringPaymentsProfileRequestType $updateRecurringPaymentsProfileRequest = null)
    {
        $this->UpdateRecurringPaymentsProfileRequest = $updateRecurringPaymentsProfileRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileReq
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
