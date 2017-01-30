<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRecurringPaymentsProfileResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateRecurringPaymentsProfileResponseType extends AbstractResponseType
{
    /**
     * The UpdateRecurringPaymentsProfileResponseDetails
     * Meta informations extracted from the WSDL
     * - ref: ebl:UpdateRecurringPaymentsProfileResponseDetails
     * @var \PayPal\StructType\UpdateRecurringPaymentsProfileResponseDetailsType
     */
    public $UpdateRecurringPaymentsProfileResponseDetails;
    /**
     * Constructor method for UpdateRecurringPaymentsProfileResponseType
     * @uses UpdateRecurringPaymentsProfileResponseType::setUpdateRecurringPaymentsProfileResponseDetails()
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileResponseDetailsType $updateRecurringPaymentsProfileResponseDetails
     */
    public function __construct(\PayPal\StructType\UpdateRecurringPaymentsProfileResponseDetailsType $updateRecurringPaymentsProfileResponseDetails = null)
    {
        $this
            ->setUpdateRecurringPaymentsProfileResponseDetails($updateRecurringPaymentsProfileResponseDetails);
    }
    /**
     * Get UpdateRecurringPaymentsProfileResponseDetails value
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileResponseDetailsType|null
     */
    public function getUpdateRecurringPaymentsProfileResponseDetails()
    {
        return $this->UpdateRecurringPaymentsProfileResponseDetails;
    }
    /**
     * Set UpdateRecurringPaymentsProfileResponseDetails value
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileResponseDetailsType $updateRecurringPaymentsProfileResponseDetails
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileResponseType
     */
    public function setUpdateRecurringPaymentsProfileResponseDetails(\PayPal\StructType\UpdateRecurringPaymentsProfileResponseDetailsType $updateRecurringPaymentsProfileResponseDetails = null)
    {
        $this->UpdateRecurringPaymentsProfileResponseDetails = $updateRecurringPaymentsProfileResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileResponseType
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
