<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAccessPermissionsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetAccessPermissionsRequestType extends AbstractRequestType
{
    /**
     * The SetAccessPermissionsRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetAccessPermissionsRequestDetails
     * @var \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public $SetAccessPermissionsRequestDetails;
    /**
     * Constructor method for SetAccessPermissionsRequestType
     * @uses SetAccessPermissionsRequestType::setSetAccessPermissionsRequestDetails()
     * @param \PayPal\StructType\SetAccessPermissionsRequestDetailsType $setAccessPermissionsRequestDetails
     */
    public function __construct(\PayPal\StructType\SetAccessPermissionsRequestDetailsType $setAccessPermissionsRequestDetails = null)
    {
        $this
            ->setSetAccessPermissionsRequestDetails($setAccessPermissionsRequestDetails);
    }
    /**
     * Get SetAccessPermissionsRequestDetails value
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function getSetAccessPermissionsRequestDetails()
    {
        return $this->SetAccessPermissionsRequestDetails;
    }
    /**
     * Set SetAccessPermissionsRequestDetails value
     * @param \PayPal\StructType\SetAccessPermissionsRequestDetailsType $setAccessPermissionsRequestDetails
     * @return \PayPal\StructType\SetAccessPermissionsRequestType
     */
    public function setSetAccessPermissionsRequestDetails(\PayPal\StructType\SetAccessPermissionsRequestDetailsType $setAccessPermissionsRequestDetails = null)
    {
        $this->SetAccessPermissionsRequestDetails = $setAccessPermissionsRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetAccessPermissionsRequestType
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
