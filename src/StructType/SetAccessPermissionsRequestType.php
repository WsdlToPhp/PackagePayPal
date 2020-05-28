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
}
