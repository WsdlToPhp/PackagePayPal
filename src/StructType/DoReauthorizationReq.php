<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReauthorizationReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReauthorizationReq extends AbstractStructBase
{
    /**
     * The DoReauthorizationRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoReauthorizationRequest
     * @var \PayPal\StructType\DoReauthorizationRequestType
     */
    public $DoReauthorizationRequest;
    /**
     * Constructor method for DoReauthorizationReq
     * @uses DoReauthorizationReq::setDoReauthorizationRequest()
     * @param \PayPal\StructType\DoReauthorizationRequestType $doReauthorizationRequest
     */
    public function __construct(\PayPal\StructType\DoReauthorizationRequestType $doReauthorizationRequest = null)
    {
        $this
            ->setDoReauthorizationRequest($doReauthorizationRequest);
    }
    /**
     * Get DoReauthorizationRequest value
     * @return \PayPal\StructType\DoReauthorizationRequestType|null
     */
    public function getDoReauthorizationRequest()
    {
        return $this->DoReauthorizationRequest;
    }
    /**
     * Set DoReauthorizationRequest value
     * @param \PayPal\StructType\DoReauthorizationRequestType $doReauthorizationRequest
     * @return \PayPal\StructType\DoReauthorizationReq
     */
    public function setDoReauthorizationRequest(\PayPal\StructType\DoReauthorizationRequestType $doReauthorizationRequest = null)
    {
        $this->DoReauthorizationRequest = $doReauthorizationRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoReauthorizationReq
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
