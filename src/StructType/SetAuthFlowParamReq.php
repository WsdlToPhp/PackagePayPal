<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAuthFlowParamReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetAuthFlowParamReq extends AbstractStructBase
{
    /**
     * The SetAuthFlowParamRequest
     * Meta information extracted from the WSDL
     * - ref: ns:SetAuthFlowParamRequest
     * @var \PayPal\StructType\SetAuthFlowParamRequestType
     */
    public $SetAuthFlowParamRequest;
    /**
     * Constructor method for SetAuthFlowParamReq
     * @uses SetAuthFlowParamReq::setSetAuthFlowParamRequest()
     * @param \PayPal\StructType\SetAuthFlowParamRequestType $setAuthFlowParamRequest
     */
    public function __construct(\PayPal\StructType\SetAuthFlowParamRequestType $setAuthFlowParamRequest = null)
    {
        $this
            ->setSetAuthFlowParamRequest($setAuthFlowParamRequest);
    }
    /**
     * Get SetAuthFlowParamRequest value
     * @return \PayPal\StructType\SetAuthFlowParamRequestType|null
     */
    public function getSetAuthFlowParamRequest()
    {
        return $this->SetAuthFlowParamRequest;
    }
    /**
     * Set SetAuthFlowParamRequest value
     * @param \PayPal\StructType\SetAuthFlowParamRequestType $setAuthFlowParamRequest
     * @return \PayPal\StructType\SetAuthFlowParamReq
     */
    public function setSetAuthFlowParamRequest(\PayPal\StructType\SetAuthFlowParamRequestType $setAuthFlowParamRequest = null)
    {
        $this->SetAuthFlowParamRequest = $setAuthFlowParamRequest;
        return $this;
    }
}
