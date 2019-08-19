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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseType
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
