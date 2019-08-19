<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateBillingAgreementReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateBillingAgreementReq extends AbstractStructBase
{
    /**
     * The CreateBillingAgreementRequest
     * Meta information extracted from the WSDL
     * - ref: ns:CreateBillingAgreementRequest
     * @var \PayPal\StructType\CreateBillingAgreementRequestType
     */
    public $CreateBillingAgreementRequest;
    /**
     * Constructor method for CreateBillingAgreementReq
     * @uses CreateBillingAgreementReq::setCreateBillingAgreementRequest()
     * @param \PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest
     */
    public function __construct(\PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest = null)
    {
        $this
            ->setCreateBillingAgreementRequest($createBillingAgreementRequest);
    }
    /**
     * Get CreateBillingAgreementRequest value
     * @return \PayPal\StructType\CreateBillingAgreementRequestType|null
     */
    public function getCreateBillingAgreementRequest()
    {
        return $this->CreateBillingAgreementRequest;
    }
    /**
     * Set CreateBillingAgreementRequest value
     * @param \PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest
     * @return \PayPal\StructType\CreateBillingAgreementReq
     */
    public function setCreateBillingAgreementRequest(\PayPal\StructType\CreateBillingAgreementRequestType $createBillingAgreementRequest = null)
    {
        $this->CreateBillingAgreementRequest = $createBillingAgreementRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CreateBillingAgreementReq
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
