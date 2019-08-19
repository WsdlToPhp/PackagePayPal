<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAccessPermissionsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateAccessPermissionsReq extends AbstractStructBase
{
    /**
     * The UpdateAccessPermissionsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:UpdateAccessPermissionsRequest
     * @var \PayPal\StructType\UpdateAccessPermissionsRequestType
     */
    public $UpdateAccessPermissionsRequest;
    /**
     * Constructor method for UpdateAccessPermissionsReq
     * @uses UpdateAccessPermissionsReq::setUpdateAccessPermissionsRequest()
     * @param \PayPal\StructType\UpdateAccessPermissionsRequestType $updateAccessPermissionsRequest
     */
    public function __construct(\PayPal\StructType\UpdateAccessPermissionsRequestType $updateAccessPermissionsRequest = null)
    {
        $this
            ->setUpdateAccessPermissionsRequest($updateAccessPermissionsRequest);
    }
    /**
     * Get UpdateAccessPermissionsRequest value
     * @return \PayPal\StructType\UpdateAccessPermissionsRequestType|null
     */
    public function getUpdateAccessPermissionsRequest()
    {
        return $this->UpdateAccessPermissionsRequest;
    }
    /**
     * Set UpdateAccessPermissionsRequest value
     * @param \PayPal\StructType\UpdateAccessPermissionsRequestType $updateAccessPermissionsRequest
     * @return \PayPal\StructType\UpdateAccessPermissionsReq
     */
    public function setUpdateAccessPermissionsRequest(\PayPal\StructType\UpdateAccessPermissionsRequestType $updateAccessPermissionsRequest = null)
    {
        $this->UpdateAccessPermissionsRequest = $updateAccessPermissionsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateAccessPermissionsReq
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
