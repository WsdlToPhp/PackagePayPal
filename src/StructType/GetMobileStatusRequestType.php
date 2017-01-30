<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMobileStatusRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetMobileStatusRequestType extends AbstractRequestType
{
    /**
     * The GetMobileStatusRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetMobileStatusRequestDetails
     * @var \PayPal\StructType\GetMobileStatusRequestDetailsType
     */
    public $GetMobileStatusRequestDetails;
    /**
     * Constructor method for GetMobileStatusRequestType
     * @uses GetMobileStatusRequestType::setGetMobileStatusRequestDetails()
     * @param \PayPal\StructType\GetMobileStatusRequestDetailsType $getMobileStatusRequestDetails
     */
    public function __construct(\PayPal\StructType\GetMobileStatusRequestDetailsType $getMobileStatusRequestDetails = null)
    {
        $this
            ->setGetMobileStatusRequestDetails($getMobileStatusRequestDetails);
    }
    /**
     * Get GetMobileStatusRequestDetails value
     * @return \PayPal\StructType\GetMobileStatusRequestDetailsType
     */
    public function getGetMobileStatusRequestDetails()
    {
        return $this->GetMobileStatusRequestDetails;
    }
    /**
     * Set GetMobileStatusRequestDetails value
     * @param \PayPal\StructType\GetMobileStatusRequestDetailsType $getMobileStatusRequestDetails
     * @return \PayPal\StructType\GetMobileStatusRequestType
     */
    public function setGetMobileStatusRequestDetails(\PayPal\StructType\GetMobileStatusRequestDetailsType $getMobileStatusRequestDetails = null)
    {
        $this->GetMobileStatusRequestDetails = $getMobileStatusRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetMobileStatusRequestType
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
