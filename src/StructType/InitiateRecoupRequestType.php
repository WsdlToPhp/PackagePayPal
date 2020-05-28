<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitiateRecoupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InitiateRecoupRequestType extends AbstractRequestType
{
    /**
     * The EnhancedInitiateRecoupRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedInitiateRecoupRequestDetails
     * @var \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType
     */
    public $EnhancedInitiateRecoupRequestDetails;
    /**
     * Constructor method for InitiateRecoupRequestType
     * @uses InitiateRecoupRequestType::setEnhancedInitiateRecoupRequestDetails()
     * @param \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails
     */
    public function __construct(\PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails = null)
    {
        $this
            ->setEnhancedInitiateRecoupRequestDetails($enhancedInitiateRecoupRequestDetails);
    }
    /**
     * Get EnhancedInitiateRecoupRequestDetails value
     * @return \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType
     */
    public function getEnhancedInitiateRecoupRequestDetails()
    {
        return $this->EnhancedInitiateRecoupRequestDetails;
    }
    /**
     * Set EnhancedInitiateRecoupRequestDetails value
     * @param \PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails
     * @return \PayPal\StructType\InitiateRecoupRequestType
     */
    public function setEnhancedInitiateRecoupRequestDetails(\PayPal\StructType\EnhancedInitiateRecoupRequestDetailsType $enhancedInitiateRecoupRequestDetails = null)
    {
        $this->EnhancedInitiateRecoupRequestDetails = $enhancedInitiateRecoupRequestDetails;
        return $this;
    }
}
