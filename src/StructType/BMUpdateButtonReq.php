<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMUpdateButtonReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMUpdateButtonReq extends AbstractStructBase
{
    /**
     * The BMUpdateButtonRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMUpdateButtonRequest
     * @var \PayPal\StructType\BMUpdateButtonRequestType
     */
    public $BMUpdateButtonRequest;
    /**
     * Constructor method for BMUpdateButtonReq
     * @uses BMUpdateButtonReq::setBMUpdateButtonRequest()
     * @param \PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest
     */
    public function __construct(\PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest = null)
    {
        $this
            ->setBMUpdateButtonRequest($bMUpdateButtonRequest);
    }
    /**
     * Get BMUpdateButtonRequest value
     * @return \PayPal\StructType\BMUpdateButtonRequestType|null
     */
    public function getBMUpdateButtonRequest()
    {
        return $this->BMUpdateButtonRequest;
    }
    /**
     * Set BMUpdateButtonRequest value
     * @param \PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest
     * @return \PayPal\StructType\BMUpdateButtonReq
     */
    public function setBMUpdateButtonRequest(\PayPal\StructType\BMUpdateButtonRequestType $bMUpdateButtonRequest = null)
    {
        $this->BMUpdateButtonRequest = $bMUpdateButtonRequest;
        return $this;
    }
}
