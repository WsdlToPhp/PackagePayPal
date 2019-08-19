<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExpressCheckoutDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetExpressCheckoutDetailsResponseType extends AbstractResponseType
{
    /**
     * The GetExpressCheckoutDetailsResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetExpressCheckoutDetailsResponseDetails
     * @var \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public $GetExpressCheckoutDetailsResponseDetails;
    /**
     * Constructor method for GetExpressCheckoutDetailsResponseType
     * @uses GetExpressCheckoutDetailsResponseType::setGetExpressCheckoutDetailsResponseDetails()
     * @param \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType $getExpressCheckoutDetailsResponseDetails
     */
    public function __construct(\PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType $getExpressCheckoutDetailsResponseDetails = null)
    {
        $this
            ->setGetExpressCheckoutDetailsResponseDetails($getExpressCheckoutDetailsResponseDetails);
    }
    /**
     * Get GetExpressCheckoutDetailsResponseDetails value
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType
     */
    public function getGetExpressCheckoutDetailsResponseDetails()
    {
        return $this->GetExpressCheckoutDetailsResponseDetails;
    }
    /**
     * Set GetExpressCheckoutDetailsResponseDetails value
     * @param \PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType $getExpressCheckoutDetailsResponseDetails
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseType
     */
    public function setGetExpressCheckoutDetailsResponseDetails(\PayPal\StructType\GetExpressCheckoutDetailsResponseDetailsType $getExpressCheckoutDetailsResponseDetails = null)
    {
        $this->GetExpressCheckoutDetailsResponseDetails = $getExpressCheckoutDetailsResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseType
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
