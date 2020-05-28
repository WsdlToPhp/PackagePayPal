<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCaptureResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoCaptureResponseType extends AbstractResponseType
{
    /**
     * The DoCaptureResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoCaptureResponseDetails
     * @var \PayPal\StructType\DoCaptureResponseDetailsType
     */
    public $DoCaptureResponseDetails;
    /**
     * Constructor method for DoCaptureResponseType
     * @uses DoCaptureResponseType::setDoCaptureResponseDetails()
     * @param \PayPal\StructType\DoCaptureResponseDetailsType $doCaptureResponseDetails
     */
    public function __construct(\PayPal\StructType\DoCaptureResponseDetailsType $doCaptureResponseDetails = null)
    {
        $this
            ->setDoCaptureResponseDetails($doCaptureResponseDetails);
    }
    /**
     * Get DoCaptureResponseDetails value
     * @return \PayPal\StructType\DoCaptureResponseDetailsType
     */
    public function getDoCaptureResponseDetails()
    {
        return $this->DoCaptureResponseDetails;
    }
    /**
     * Set DoCaptureResponseDetails value
     * @param \PayPal\StructType\DoCaptureResponseDetailsType $doCaptureResponseDetails
     * @return \PayPal\StructType\DoCaptureResponseType
     */
    public function setDoCaptureResponseDetails(\PayPal\StructType\DoCaptureResponseDetailsType $doCaptureResponseDetails = null)
    {
        $this->DoCaptureResponseDetails = $doCaptureResponseDetails;
        return $this;
    }
}
