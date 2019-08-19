<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoVoidReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoVoidReq extends AbstractStructBase
{
    /**
     * The DoVoidRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoVoidRequest
     * @var \PayPal\StructType\DoVoidRequestType
     */
    public $DoVoidRequest;
    /**
     * Constructor method for DoVoidReq
     * @uses DoVoidReq::setDoVoidRequest()
     * @param \PayPal\StructType\DoVoidRequestType $doVoidRequest
     */
    public function __construct(\PayPal\StructType\DoVoidRequestType $doVoidRequest = null)
    {
        $this
            ->setDoVoidRequest($doVoidRequest);
    }
    /**
     * Get DoVoidRequest value
     * @return \PayPal\StructType\DoVoidRequestType|null
     */
    public function getDoVoidRequest()
    {
        return $this->DoVoidRequest;
    }
    /**
     * Set DoVoidRequest value
     * @param \PayPal\StructType\DoVoidRequestType $doVoidRequest
     * @return \PayPal\StructType\DoVoidReq
     */
    public function setDoVoidRequest(\PayPal\StructType\DoVoidRequestType $doVoidRequest = null)
    {
        $this->DoVoidRequest = $doVoidRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoVoidReq
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
