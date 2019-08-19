<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRememberMeOptInDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information that allows the merchant to request to opt into external remember me on behalf of the buyer or to request login bypass using external remember me.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalRememberMeOptInDetailsType extends AbstractStructBase
{
    /**
     * The ExternalRememberMeOptIn
     * Meta information extracted from the WSDL
     * - documentation: 1 = opt in to external remember me. 0 or omitted = no opt-in Other values are invalid
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalRememberMeOptIn;
    /**
     * The ExternalRememberMeOwnerDetails
     * Meta information extracted from the WSDL
     * - documentation: E-mail address or secure merchant account ID of merchant to associate with new external remember-me. Currently, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant
     * account.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalRememberMeOwnerDetailsType
     */
    public $ExternalRememberMeOwnerDetails;
    /**
     * Constructor method for ExternalRememberMeOptInDetailsType
     * @uses ExternalRememberMeOptInDetailsType::setExternalRememberMeOptIn()
     * @uses ExternalRememberMeOptInDetailsType::setExternalRememberMeOwnerDetails()
     * @param string $externalRememberMeOptIn
     * @param \PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails
     */
    public function __construct($externalRememberMeOptIn = null, \PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails = null)
    {
        $this
            ->setExternalRememberMeOptIn($externalRememberMeOptIn)
            ->setExternalRememberMeOwnerDetails($externalRememberMeOwnerDetails);
    }
    /**
     * Get ExternalRememberMeOptIn value
     * @return string|null
     */
    public function getExternalRememberMeOptIn()
    {
        return $this->ExternalRememberMeOptIn;
    }
    /**
     * Set ExternalRememberMeOptIn value
     * @param string $externalRememberMeOptIn
     * @return \PayPal\StructType\ExternalRememberMeOptInDetailsType
     */
    public function setExternalRememberMeOptIn($externalRememberMeOptIn = null)
    {
        // validation for constraint: string
        if (!is_null($externalRememberMeOptIn) && !is_string($externalRememberMeOptIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalRememberMeOptIn, true), gettype($externalRememberMeOptIn)), __LINE__);
        }
        $this->ExternalRememberMeOptIn = $externalRememberMeOptIn;
        return $this;
    }
    /**
     * Get ExternalRememberMeOwnerDetails value
     * @return \PayPal\StructType\ExternalRememberMeOwnerDetailsType|null
     */
    public function getExternalRememberMeOwnerDetails()
    {
        return $this->ExternalRememberMeOwnerDetails;
    }
    /**
     * Set ExternalRememberMeOwnerDetails value
     * @param \PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails
     * @return \PayPal\StructType\ExternalRememberMeOptInDetailsType
     */
    public function setExternalRememberMeOwnerDetails(\PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails = null)
    {
        $this->ExternalRememberMeOwnerDetails = $externalRememberMeOwnerDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExternalRememberMeOptInDetailsType
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
