<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecurringPaymentsProfileDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetRecurringPaymentsProfileDetailsReq extends AbstractStructBase
{
    /**
     * The GetRecurringPaymentsProfileDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetRecurringPaymentsProfileDetailsRequest
     * @var \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType
     */
    public $GetRecurringPaymentsProfileDetailsRequest;
    /**
     * Constructor method for GetRecurringPaymentsProfileDetailsReq
     * @uses GetRecurringPaymentsProfileDetailsReq::setGetRecurringPaymentsProfileDetailsRequest()
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest = null)
    {
        $this
            ->setGetRecurringPaymentsProfileDetailsRequest($getRecurringPaymentsProfileDetailsRequest);
    }
    /**
     * Get GetRecurringPaymentsProfileDetailsRequest value
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType|null
     */
    public function getGetRecurringPaymentsProfileDetailsRequest()
    {
        return $this->GetRecurringPaymentsProfileDetailsRequest;
    }
    /**
     * Set GetRecurringPaymentsProfileDetailsRequest value
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsReq
     */
    public function setGetRecurringPaymentsProfileDetailsRequest(\PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest = null)
    {
        $this->GetRecurringPaymentsProfileDetailsRequest = $getRecurringPaymentsProfileDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsReq
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
