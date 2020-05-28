<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRecoupResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteRecoupResponseType extends AbstractResponseType
{
    /**
     * The EnhancedCompleteRecoupResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ed:EnhancedCompleteRecoupResponseDetails
     * @var \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType
     */
    public $EnhancedCompleteRecoupResponseDetails;
    /**
     * Constructor method for CompleteRecoupResponseType
     * @uses CompleteRecoupResponseType::setEnhancedCompleteRecoupResponseDetails()
     * @param \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails
     */
    public function __construct(\PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails = null)
    {
        $this
            ->setEnhancedCompleteRecoupResponseDetails($enhancedCompleteRecoupResponseDetails);
    }
    /**
     * Get EnhancedCompleteRecoupResponseDetails value
     * @return \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType
     */
    public function getEnhancedCompleteRecoupResponseDetails()
    {
        return $this->EnhancedCompleteRecoupResponseDetails;
    }
    /**
     * Set EnhancedCompleteRecoupResponseDetails value
     * @param \PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails
     * @return \PayPal\StructType\CompleteRecoupResponseType
     */
    public function setEnhancedCompleteRecoupResponseDetails(\PayPal\StructType\EnhancedCompleteRecoupResponseDetailsType $enhancedCompleteRecoupResponseDetails = null)
    {
        $this->EnhancedCompleteRecoupResponseDetails = $enhancedCompleteRecoupResponseDetails;
        return $this;
    }
}
