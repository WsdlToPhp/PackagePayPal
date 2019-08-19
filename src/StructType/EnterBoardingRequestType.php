<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnterBoardingRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EnterBoardingRequestType extends AbstractRequestType
{
    /**
     * The EnterBoardingRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:EnterBoardingRequestDetails
     * @var \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public $EnterBoardingRequestDetails;
    /**
     * Constructor method for EnterBoardingRequestType
     * @uses EnterBoardingRequestType::setEnterBoardingRequestDetails()
     * @param \PayPal\StructType\EnterBoardingRequestDetailsType $enterBoardingRequestDetails
     */
    public function __construct(\PayPal\StructType\EnterBoardingRequestDetailsType $enterBoardingRequestDetails = null)
    {
        $this
            ->setEnterBoardingRequestDetails($enterBoardingRequestDetails);
    }
    /**
     * Get EnterBoardingRequestDetails value
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function getEnterBoardingRequestDetails()
    {
        return $this->EnterBoardingRequestDetails;
    }
    /**
     * Set EnterBoardingRequestDetails value
     * @param \PayPal\StructType\EnterBoardingRequestDetailsType $enterBoardingRequestDetails
     * @return \PayPal\StructType\EnterBoardingRequestType
     */
    public function setEnterBoardingRequestDetails(\PayPal\StructType\EnterBoardingRequestDetailsType $enterBoardingRequestDetails = null)
    {
        $this->EnterBoardingRequestDetails = $enterBoardingRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\EnterBoardingRequestType
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
