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
     * Meta information extracted from the WSDL
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
}
