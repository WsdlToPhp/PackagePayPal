<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRememberMeOptOutRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalRememberMeOptOutRequestType extends AbstractRequestType
{
    /**
     * The ExternalRememberMeID
     * Meta information extracted from the WSDL
     * - documentation: The merchant passes in the ExternalRememberMeID to identify the user to opt out. This is a 17-character alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has meaning only to the
     * merchant. Required
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ExternalRememberMeID;
    /**
     * The ExternalRememberMeOwnerDetails
     * Meta information extracted from the WSDL
     * - documentation: E-mail address or secure merchant account ID of merchant to associate with external remember-me.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalRememberMeOwnerDetailsType
     */
    public $ExternalRememberMeOwnerDetails;
    /**
     * Constructor method for ExternalRememberMeOptOutRequestType
     * @uses ExternalRememberMeOptOutRequestType::setExternalRememberMeID()
     * @uses ExternalRememberMeOptOutRequestType::setExternalRememberMeOwnerDetails()
     * @param string $externalRememberMeID
     * @param \PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails
     */
    public function __construct($externalRememberMeID = null, \PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails = null)
    {
        $this
            ->setExternalRememberMeID($externalRememberMeID)
            ->setExternalRememberMeOwnerDetails($externalRememberMeOwnerDetails);
    }
    /**
     * Get ExternalRememberMeID value
     * @return string
     */
    public function getExternalRememberMeID()
    {
        return $this->ExternalRememberMeID;
    }
    /**
     * Set ExternalRememberMeID value
     * @param string $externalRememberMeID
     * @return \PayPal\StructType\ExternalRememberMeOptOutRequestType
     */
    public function setExternalRememberMeID($externalRememberMeID = null)
    {
        // validation for constraint: string
        if (!is_null($externalRememberMeID) && !is_string($externalRememberMeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalRememberMeID, true), gettype($externalRememberMeID)), __LINE__);
        }
        $this->ExternalRememberMeID = $externalRememberMeID;
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
     * @return \PayPal\StructType\ExternalRememberMeOptOutRequestType
     */
    public function setExternalRememberMeOwnerDetails(\PayPal\StructType\ExternalRememberMeOwnerDetailsType $externalRememberMeOwnerDetails = null)
    {
        $this->ExternalRememberMeOwnerDetails = $externalRememberMeOwnerDetails;
        return $this;
    }
}
