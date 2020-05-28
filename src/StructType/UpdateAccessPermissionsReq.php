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
}
