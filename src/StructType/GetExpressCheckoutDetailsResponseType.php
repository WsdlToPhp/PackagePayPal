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
}
