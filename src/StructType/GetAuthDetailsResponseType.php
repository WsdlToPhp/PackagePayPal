<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAuthDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetAuthDetailsResponseType extends AbstractResponseType
{
    /**
     * The GetAuthDetailsResponseDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetAuthDetailsResponseDetails
     * @var \PayPal\StructType\GetAuthDetailsResponseDetailsType
     */
    public $GetAuthDetailsResponseDetails;
    /**
     * Constructor method for GetAuthDetailsResponseType
     * @uses GetAuthDetailsResponseType::setGetAuthDetailsResponseDetails()
     * @param \PayPal\StructType\GetAuthDetailsResponseDetailsType $getAuthDetailsResponseDetails
     */
    public function __construct(\PayPal\StructType\GetAuthDetailsResponseDetailsType $getAuthDetailsResponseDetails = null)
    {
        $this
            ->setGetAuthDetailsResponseDetails($getAuthDetailsResponseDetails);
    }
    /**
     * Get GetAuthDetailsResponseDetails value
     * @return \PayPal\StructType\GetAuthDetailsResponseDetailsType
     */
    public function getGetAuthDetailsResponseDetails()
    {
        return $this->GetAuthDetailsResponseDetails;
    }
    /**
     * Set GetAuthDetailsResponseDetails value
     * @param \PayPal\StructType\GetAuthDetailsResponseDetailsType $getAuthDetailsResponseDetails
     * @return \PayPal\StructType\GetAuthDetailsResponseType
     */
    public function setGetAuthDetailsResponseDetails(\PayPal\StructType\GetAuthDetailsResponseDetailsType $getAuthDetailsResponseDetails = null)
    {
        $this->GetAuthDetailsResponseDetails = $getAuthDetailsResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetAuthDetailsResponseType
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
