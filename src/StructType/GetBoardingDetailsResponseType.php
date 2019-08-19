<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBoardingDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBoardingDetailsResponseType extends AbstractResponseType
{
    /**
     * The GetBoardingDetailsResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetBoardingDetailsResponseDetails
     * @var \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public $GetBoardingDetailsResponseDetails;
    /**
     * Constructor method for GetBoardingDetailsResponseType
     * @uses GetBoardingDetailsResponseType::setGetBoardingDetailsResponseDetails()
     * @param \PayPal\StructType\GetBoardingDetailsResponseDetailsType $getBoardingDetailsResponseDetails
     */
    public function __construct(\PayPal\StructType\GetBoardingDetailsResponseDetailsType $getBoardingDetailsResponseDetails = null)
    {
        $this
            ->setGetBoardingDetailsResponseDetails($getBoardingDetailsResponseDetails);
    }
    /**
     * Get GetBoardingDetailsResponseDetails value
     * @return \PayPal\StructType\GetBoardingDetailsResponseDetailsType
     */
    public function getGetBoardingDetailsResponseDetails()
    {
        return $this->GetBoardingDetailsResponseDetails;
    }
    /**
     * Set GetBoardingDetailsResponseDetails value
     * @param \PayPal\StructType\GetBoardingDetailsResponseDetailsType $getBoardingDetailsResponseDetails
     * @return \PayPal\StructType\GetBoardingDetailsResponseType
     */
    public function setGetBoardingDetailsResponseDetails(\PayPal\StructType\GetBoardingDetailsResponseDetailsType $getBoardingDetailsResponseDetails = null)
    {
        $this->GetBoardingDetailsResponseDetails = $getBoardingDetailsResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBoardingDetailsResponseType
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
