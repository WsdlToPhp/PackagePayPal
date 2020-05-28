<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRecoupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CancelRecoupRequestType extends AbstractRequestType
{
    /**
     * The EnhancedCancelRecoupRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedCancelRecoupRequestDetails
     * @var \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType
     */
    public $EnhancedCancelRecoupRequestDetails;
    /**
     * Constructor method for CancelRecoupRequestType
     * @uses CancelRecoupRequestType::setEnhancedCancelRecoupRequestDetails()
     * @param \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails
     */
    public function __construct(\PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails = null)
    {
        $this
            ->setEnhancedCancelRecoupRequestDetails($enhancedCancelRecoupRequestDetails);
    }
    /**
     * Get EnhancedCancelRecoupRequestDetails value
     * @return \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType
     */
    public function getEnhancedCancelRecoupRequestDetails()
    {
        return $this->EnhancedCancelRecoupRequestDetails;
    }
    /**
     * Set EnhancedCancelRecoupRequestDetails value
     * @param \PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails
     * @return \PayPal\StructType\CancelRecoupRequestType
     */
    public function setEnhancedCancelRecoupRequestDetails(\PayPal\StructType\EnhancedCancelRecoupRequestDetailsType $enhancedCancelRecoupRequestDetails = null)
    {
        $this->EnhancedCancelRecoupRequestDetails = $enhancedCancelRecoupRequestDetails;
        return $this;
    }
}
