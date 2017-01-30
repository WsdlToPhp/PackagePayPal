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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileRequestType
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
