<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRecoupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteRecoupRequestType extends AbstractRequestType
{
    /**
     * The EnhancedCompleteRecoupRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedCompleteRecoupRequestDetails
     * @var \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType
     */
    public $EnhancedCompleteRecoupRequestDetails;
    /**
     * Constructor method for CompleteRecoupRequestType
     * @uses CompleteRecoupRequestType::setEnhancedCompleteRecoupRequestDetails()
     * @param \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails
     */
    public function __construct(\PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails = null)
    {
        $this
            ->setEnhancedCompleteRecoupRequestDetails($enhancedCompleteRecoupRequestDetails);
    }
    /**
     * Get EnhancedCompleteRecoupRequestDetails value
     * @return \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType
     */
    public function getEnhancedCompleteRecoupRequestDetails()
    {
        return $this->EnhancedCompleteRecoupRequestDetails;
    }
    /**
     * Set EnhancedCompleteRecoupRequestDetails value
     * @param \PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails
     * @return \PayPal\StructType\CompleteRecoupRequestType
     */
    public function setEnhancedCompleteRecoupRequestDetails(\PayPal\StructType\EnhancedCompleteRecoupRequestDetailsType $enhancedCompleteRecoupRequestDetails = null)
    {
        $this->EnhancedCompleteRecoupRequestDetails = $enhancedCompleteRecoupRequestDetails;
        return $this;
    }
}
