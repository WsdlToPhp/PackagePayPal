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
     * Meta information extracted from the WSDL
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
}
