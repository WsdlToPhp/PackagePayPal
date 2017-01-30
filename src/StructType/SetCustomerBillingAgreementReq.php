<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetCustomerBillingAgreementReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetCustomerBillingAgreementReq extends AbstractStructBase
{
    /**
     * The SetCustomerBillingAgreementRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:SetCustomerBillingAgreementRequest
     * @var \PayPal\StructType\SetCustomerBillingAgreementRequestType
     */
    public $SetCustomerBillingAgreementRequest;
    /**
     * Constructor method for SetCustomerBillingAgreementReq
     * @uses SetCustomerBillingAgreementReq::setSetCustomerBillingAgreementRequest()
     * @param \PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest
     */
    public function __construct(\PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest = null)
    {
        $this
            ->setSetCustomerBillingAgreementRequest($setCustomerBillingAgreementRequest);
    }
    /**
     * Get SetCustomerBillingAgreementRequest value
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestType|null
     */
    public function getSetCustomerBillingAgreementRequest()
    {
        return $this->SetCustomerBillingAgreementRequest;
    }
    /**
     * Set SetCustomerBillingAgreementRequest value
     * @param \PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest
     * @return \PayPal\StructType\SetCustomerBillingAgreementReq
     */
    public function setSetCustomerBillingAgreementRequest(\PayPal\StructType\SetCustomerBillingAgreementRequestType $setCustomerBillingAgreementRequest = null)
    {
        $this->SetCustomerBillingAgreementRequest = $setCustomerBillingAgreementRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetCustomerBillingAgreementReq
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
