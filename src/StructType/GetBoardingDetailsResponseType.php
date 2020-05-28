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
}
