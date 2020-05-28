<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessPermissionDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetAccessPermissionDetailsResponseType extends AbstractResponseType
{
    /**
     * The GetAccessPermissionDetailsResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetAccessPermissionDetailsResponseDetails
     * @var \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public $GetAccessPermissionDetailsResponseDetails;
    /**
     * Constructor method for GetAccessPermissionDetailsResponseType
     * @uses GetAccessPermissionDetailsResponseType::setGetAccessPermissionDetailsResponseDetails()
     * @param \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType $getAccessPermissionDetailsResponseDetails
     */
    public function __construct(\PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType $getAccessPermissionDetailsResponseDetails = null)
    {
        $this
            ->setGetAccessPermissionDetailsResponseDetails($getAccessPermissionDetailsResponseDetails);
    }
    /**
     * Get GetAccessPermissionDetailsResponseDetails value
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType
     */
    public function getGetAccessPermissionDetailsResponseDetails()
    {
        return $this->GetAccessPermissionDetailsResponseDetails;
    }
    /**
     * Set GetAccessPermissionDetailsResponseDetails value
     * @param \PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType $getAccessPermissionDetailsResponseDetails
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseType
     */
    public function setGetAccessPermissionDetailsResponseDetails(\PayPal\StructType\GetAccessPermissionDetailsResponseDetailsType $getAccessPermissionDetailsResponseDetails = null)
    {
        $this->GetAccessPermissionDetailsResponseDetails = $getAccessPermissionDetailsResponseDetails;
        return $this;
    }
}
