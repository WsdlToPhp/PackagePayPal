<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRememberMeOptOutReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalRememberMeOptOutReq extends AbstractStructBase
{
    /**
     * The ExternalRememberMeOptOutRequest
     * Meta information extracted from the WSDL
     * - ref: ns:ExternalRememberMeOptOutRequest
     * @var \PayPal\StructType\ExternalRememberMeOptOutRequestType
     */
    public $ExternalRememberMeOptOutRequest;
    /**
     * Constructor method for ExternalRememberMeOptOutReq
     * @uses ExternalRememberMeOptOutReq::setExternalRememberMeOptOutRequest()
     * @param \PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest
     */
    public function __construct(\PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest = null)
    {
        $this
            ->setExternalRememberMeOptOutRequest($externalRememberMeOptOutRequest);
    }
    /**
     * Get ExternalRememberMeOptOutRequest value
     * @return \PayPal\StructType\ExternalRememberMeOptOutRequestType|null
     */
    public function getExternalRememberMeOptOutRequest()
    {
        return $this->ExternalRememberMeOptOutRequest;
    }
    /**
     * Set ExternalRememberMeOptOutRequest value
     * @param \PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest
     * @return \PayPal\StructType\ExternalRememberMeOptOutReq
     */
    public function setExternalRememberMeOptOutRequest(\PayPal\StructType\ExternalRememberMeOptOutRequestType $externalRememberMeOptOutRequest = null)
    {
        $this->ExternalRememberMeOptOutRequest = $externalRememberMeOptOutRequest;
        return $this;
    }
}
