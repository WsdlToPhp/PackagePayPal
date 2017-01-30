<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBoardingDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBoardingDetailsReq extends AbstractStructBase
{
    /**
     * The GetBoardingDetailsRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetBoardingDetailsRequest
     * @var \PayPal\StructType\GetBoardingDetailsRequestType
     */
    public $GetBoardingDetailsRequest;
    /**
     * Constructor method for GetBoardingDetailsReq
     * @uses GetBoardingDetailsReq::setGetBoardingDetailsRequest()
     * @param \PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest = null)
    {
        $this
            ->setGetBoardingDetailsRequest($getBoardingDetailsRequest);
    }
    /**
     * Get GetBoardingDetailsRequest value
     * @return \PayPal\StructType\GetBoardingDetailsRequestType|null
     */
    public function getGetBoardingDetailsRequest()
    {
        return $this->GetBoardingDetailsRequest;
    }
    /**
     * Set GetBoardingDetailsRequest value
     * @param \PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest
     * @return \PayPal\StructType\GetBoardingDetailsReq
     */
    public function setGetBoardingDetailsRequest(\PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest = null)
    {
        $this->GetBoardingDetailsRequest = $getBoardingDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBoardingDetailsReq
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
