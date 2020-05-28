<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingAgreementCustomerDetailsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBillingAgreementCustomerDetailsResponseType extends AbstractResponseType
{
    /**
     * The GetBillingAgreementCustomerDetailsResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetBillingAgreementCustomerDetailsResponseDetails
     * @var \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType
     */
    public $GetBillingAgreementCustomerDetailsResponseDetails;
    /**
     * Constructor method for GetBillingAgreementCustomerDetailsResponseType
     * @uses GetBillingAgreementCustomerDetailsResponseType::setGetBillingAgreementCustomerDetailsResponseDetails()
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType $getBillingAgreementCustomerDetailsResponseDetails
     */
    public function __construct(\PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType $getBillingAgreementCustomerDetailsResponseDetails = null)
    {
        $this
            ->setGetBillingAgreementCustomerDetailsResponseDetails($getBillingAgreementCustomerDetailsResponseDetails);
    }
    /**
     * Get GetBillingAgreementCustomerDetailsResponseDetails value
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType
     */
    public function getGetBillingAgreementCustomerDetailsResponseDetails()
    {
        return $this->GetBillingAgreementCustomerDetailsResponseDetails;
    }
    /**
     * Set GetBillingAgreementCustomerDetailsResponseDetails value
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType $getBillingAgreementCustomerDetailsResponseDetails
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseType
     */
    public function setGetBillingAgreementCustomerDetailsResponseDetails(\PayPal\StructType\GetBillingAgreementCustomerDetailsResponseDetailsType $getBillingAgreementCustomerDetailsResponseDetails = null)
    {
        $this->GetBillingAgreementCustomerDetailsResponseDetails = $getBillingAgreementCustomerDetailsResponseDetails;
        return $this;
    }
}
