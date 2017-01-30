<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAccessPermissionsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetAccessPermissionsReq extends AbstractStructBase
{
    /**
     * The SetAccessPermissionsRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:SetAccessPermissionsRequest
     * @var \PayPal\StructType\SetAccessPermissionsRequestType
     */
    public $SetAccessPermissionsRequest;
    /**
     * Constructor method for SetAccessPermissionsReq
     * @uses SetAccessPermissionsReq::setSetAccessPermissionsRequest()
     * @param \PayPal\StructType\SetAccessPermissionsRequestType $setAccessPermissionsRequest
     */
    public function __construct(\PayPal\StructType\SetAccessPermissionsRequestType $setAccessPermissionsRequest = null)
    {
        $this
            ->setSetAccessPermissionsRequest($setAccessPermissionsRequest);
    }
    /**
     * Get SetAccessPermissionsRequest value
     * @return \PayPal\StructType\SetAccessPermissionsRequestType|null
     */
    public function getSetAccessPermissionsRequest()
    {
        return $this->SetAccessPermissionsRequest;
    }
    /**
     * Set SetAccessPermissionsRequest value
     * @param \PayPal\StructType\SetAccessPermissionsRequestType $setAccessPermissionsRequest
     * @return \PayPal\StructType\SetAccessPermissionsReq
     */
    public function setSetAccessPermissionsRequest(\PayPal\StructType\SetAccessPermissionsRequestType $setAccessPermissionsRequest = null)
    {
        $this->SetAccessPermissionsRequest = $setAccessPermissionsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetAccessPermissionsReq
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
