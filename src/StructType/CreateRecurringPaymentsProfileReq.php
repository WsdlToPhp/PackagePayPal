<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRecurringPaymentsProfileReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateRecurringPaymentsProfileReq extends AbstractStructBase
{
    /**
     * The CreateRecurringPaymentsProfileRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:CreateRecurringPaymentsProfileRequest
     * @var \PayPal\StructType\CreateRecurringPaymentsProfileRequestType
     */
    public $CreateRecurringPaymentsProfileRequest;
    /**
     * Constructor method for CreateRecurringPaymentsProfileReq
     * @uses CreateRecurringPaymentsProfileReq::setCreateRecurringPaymentsProfileRequest()
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest
     */
    public function __construct(\PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest = null)
    {
        $this
            ->setCreateRecurringPaymentsProfileRequest($createRecurringPaymentsProfileRequest);
    }
    /**
     * Get CreateRecurringPaymentsProfileRequest value
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestType|null
     */
    public function getCreateRecurringPaymentsProfileRequest()
    {
        return $this->CreateRecurringPaymentsProfileRequest;
    }
    /**
     * Set CreateRecurringPaymentsProfileRequest value
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileReq
     */
    public function setCreateRecurringPaymentsProfileRequest(\PayPal\StructType\CreateRecurringPaymentsProfileRequestType $createRecurringPaymentsProfileRequest = null)
    {
        $this->CreateRecurringPaymentsProfileRequest = $createRecurringPaymentsProfileRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileReq
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
