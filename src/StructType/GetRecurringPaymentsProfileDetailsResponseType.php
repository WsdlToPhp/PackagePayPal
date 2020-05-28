<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecurringPaymentsProfileDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetRecurringPaymentsProfileDetailsResponseType extends AbstractResponseType
{
    /**
     * The GetRecurringPaymentsProfileDetailsResponseDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:GetRecurringPaymentsProfileDetailsResponseDetails
     * @var \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType
     */
    public $GetRecurringPaymentsProfileDetailsResponseDetails;
    /**
     * Constructor method for GetRecurringPaymentsProfileDetailsResponseType
     * @uses GetRecurringPaymentsProfileDetailsResponseType::setGetRecurringPaymentsProfileDetailsResponseDetails()
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType $getRecurringPaymentsProfileDetailsResponseDetails
     */
    public function __construct(\PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType $getRecurringPaymentsProfileDetailsResponseDetails = null)
    {
        $this
            ->setGetRecurringPaymentsProfileDetailsResponseDetails($getRecurringPaymentsProfileDetailsResponseDetails);
    }
    /**
     * Get GetRecurringPaymentsProfileDetailsResponseDetails value
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType|null
     */
    public function getGetRecurringPaymentsProfileDetailsResponseDetails()
    {
        return $this->GetRecurringPaymentsProfileDetailsResponseDetails;
    }
    /**
     * Set GetRecurringPaymentsProfileDetailsResponseDetails value
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType $getRecurringPaymentsProfileDetailsResponseDetails
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseType
     */
    public function setGetRecurringPaymentsProfileDetailsResponseDetails(\PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseDetailsType $getRecurringPaymentsProfileDetailsResponseDetails = null)
    {
        $this->GetRecurringPaymentsProfileDetailsResponseDetails = $getRecurringPaymentsProfileDetailsResponseDetails;
        return $this;
    }
}
