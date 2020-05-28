<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMButtonSearchReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMButtonSearchReq extends AbstractStructBase
{
    /**
     * The BMButtonSearchRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMButtonSearchRequest
     * @var \PayPal\StructType\BMButtonSearchRequestType
     */
    public $BMButtonSearchRequest;
    /**
     * Constructor method for BMButtonSearchReq
     * @uses BMButtonSearchReq::setBMButtonSearchRequest()
     * @param \PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest
     */
    public function __construct(\PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest = null)
    {
        $this
            ->setBMButtonSearchRequest($bMButtonSearchRequest);
    }
    /**
     * Get BMButtonSearchRequest value
     * @return \PayPal\StructType\BMButtonSearchRequestType|null
     */
    public function getBMButtonSearchRequest()
    {
        return $this->BMButtonSearchRequest;
    }
    /**
     * Set BMButtonSearchRequest value
     * @param \PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest
     * @return \PayPal\StructType\BMButtonSearchReq
     */
    public function setBMButtonSearchRequest(\PayPal\StructType\BMButtonSearchRequestType $bMButtonSearchRequest = null)
    {
        $this->BMButtonSearchRequest = $bMButtonSearchRequest;
        return $this;
    }
}
