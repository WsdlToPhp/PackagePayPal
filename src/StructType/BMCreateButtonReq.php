<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMCreateButtonReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMCreateButtonReq extends AbstractStructBase
{
    /**
     * The BMCreateButtonRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMCreateButtonRequest
     * @var \PayPal\StructType\BMCreateButtonRequestType
     */
    public $BMCreateButtonRequest;
    /**
     * Constructor method for BMCreateButtonReq
     * @uses BMCreateButtonReq::setBMCreateButtonRequest()
     * @param \PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest
     */
    public function __construct(\PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest = null)
    {
        $this
            ->setBMCreateButtonRequest($bMCreateButtonRequest);
    }
    /**
     * Get BMCreateButtonRequest value
     * @return \PayPal\StructType\BMCreateButtonRequestType|null
     */
    public function getBMCreateButtonRequest()
    {
        return $this->BMCreateButtonRequest;
    }
    /**
     * Set BMCreateButtonRequest value
     * @param \PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest
     * @return \PayPal\StructType\BMCreateButtonReq
     */
    public function setBMCreateButtonRequest(\PayPal\StructType\BMCreateButtonRequestType $bMCreateButtonRequest = null)
    {
        $this->BMCreateButtonRequest = $bMCreateButtonRequest;
        return $this;
    }
}
