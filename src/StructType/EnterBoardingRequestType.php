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
}
