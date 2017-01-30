<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDSecureInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: 3DSecureInfoType Information about 3D Secure parameters.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ThreeDSecureInfoType extends AbstractStructBase
{
    /**
     * The ThreeDSecureRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\ThreeDSecureRequestType
     */
    public $ThreeDSecureRequest;
    /**
     * The ThreeDSecureResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\ThreeDSecureResponseType
     */
    public $ThreeDSecureResponse;
    /**
     * Constructor method for ThreeDSecureInfoType
     * @uses ThreeDSecureInfoType::setThreeDSecureRequest()
     * @uses ThreeDSecureInfoType::setThreeDSecureResponse()
     * @param \PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest
     * @param \PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse
     */
    public function __construct(\PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest = null, \PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse = null)
    {
        $this
            ->setThreeDSecureRequest($threeDSecureRequest)
            ->setThreeDSecureResponse($threeDSecureResponse);
    }
    /**
     * Get ThreeDSecureRequest value
     * @return \PayPal\StructType\ThreeDSecureRequestType|null
     */
    public function getThreeDSecureRequest()
    {
        return $this->ThreeDSecureRequest;
    }
    /**
     * Set ThreeDSecureRequest value
     * @param \PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest
     * @return \PayPal\StructType\ThreeDSecureInfoType
     */
    public function setThreeDSecureRequest(\PayPal\StructType\ThreeDSecureRequestType $threeDSecureRequest = null)
    {
        $this->ThreeDSecureRequest = $threeDSecureRequest;
        return $this;
    }
    /**
     * Get ThreeDSecureResponse value
     * @return \PayPal\StructType\ThreeDSecureResponseType|null
     */
    public function getThreeDSecureResponse()
    {
        return $this->ThreeDSecureResponse;
    }
    /**
     * Set ThreeDSecureResponse value
     * @param \PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse
     * @return \PayPal\StructType\ThreeDSecureInfoType
     */
    public function setThreeDSecureResponse(\PayPal\StructType\ThreeDSecureResponseType $threeDSecureResponse = null)
    {
        $this->ThreeDSecureResponse = $threeDSecureResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ThreeDSecureInfoType
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
