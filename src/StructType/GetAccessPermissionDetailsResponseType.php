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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseType
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
