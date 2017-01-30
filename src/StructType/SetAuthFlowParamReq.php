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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetAuthFlowParamReq
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
