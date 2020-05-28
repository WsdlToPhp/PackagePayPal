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
}
