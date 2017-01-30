<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingAgreementCustomerDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBillingAgreementCustomerDetailsReq extends AbstractStructBase
{
    /**
     * The GetBillingAgreementCustomerDetailsRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetBillingAgreementCustomerDetailsRequest
     * @var \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType
     */
    public $GetBillingAgreementCustomerDetailsRequest;
    /**
     * Constructor method for GetBillingAgreementCustomerDetailsReq
     * @uses GetBillingAgreementCustomerDetailsReq::setGetBillingAgreementCustomerDetailsRequest()
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest = null)
    {
        $this
            ->setGetBillingAgreementCustomerDetailsRequest($getBillingAgreementCustomerDetailsRequest);
    }
    /**
     * Get GetBillingAgreementCustomerDetailsRequest value
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType|null
     */
    public function getGetBillingAgreementCustomerDetailsRequest()
    {
        return $this->GetBillingAgreementCustomerDetailsRequest;
    }
    /**
     * Set GetBillingAgreementCustomerDetailsRequest value
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsReq
     */
    public function setGetBillingAgreementCustomerDetailsRequest(\PayPal\StructType\GetBillingAgreementCustomerDetailsRequestType $getBillingAgreementCustomerDetailsRequest = null)
    {
        $this->GetBillingAgreementCustomerDetailsRequest = $getBillingAgreementCustomerDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsReq
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
