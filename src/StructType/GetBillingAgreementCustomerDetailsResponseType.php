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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseType
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
