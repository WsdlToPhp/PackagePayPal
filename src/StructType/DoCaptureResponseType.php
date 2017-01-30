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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoCaptureResponseType
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
