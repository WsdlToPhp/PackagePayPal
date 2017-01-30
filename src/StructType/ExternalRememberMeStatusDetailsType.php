<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalRememberMeStatusDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response information resulting from opt-in operation or current login bypass status.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExternalRememberMeStatusDetailsType extends AbstractStructBase
{
    /**
     * The ExternalRememberMeStatus
     * Meta informations extracted from the WSDL
     * - documentation: Required field that reports status of opt-in or login bypass attempt. 0 = Success - successful opt-in or ExternalRememberMeID specified in SetExpressCheckout is valid. 1 = Invalid ID - ExternalRememberMeID specified in
     * SetExpressCheckout is invalid. 2 = Internal Error - System error or outage during opt-in or login bypass. Can retry opt-in or login bypass next time. Flow will force full authentication and allow buyer to complete transaction. -1 = None - the return
     * value does not signify any valid remember me status.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ExternalRememberMeStatus;
    /**
     * The ExternalRememberMeID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier returned on external-remember-me-opt-in to allow the merchant to request bypass of PayPal login through external remember me on behalf of the buyer in future transactions. The ExternalRememberMeID is a 17-character
     * alphanumeric (encrypted) string. This field has meaning only to the merchant.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalRememberMeID;
    /**
     * Constructor method for ExternalRememberMeStatusDetailsType
     * @uses ExternalRememberMeStatusDetailsType::setExternalRememberMeStatus()
     * @uses ExternalRememberMeStatusDetailsType::setExternalRememberMeID()
     * @param int $externalRememberMeStatus
     * @param string $externalRememberMeID
     */
    public function __construct($externalRememberMeStatus = null, $externalRememberMeID = null)
    {
        $this
            ->setExternalRememberMeStatus($externalRememberMeStatus)
            ->setExternalRememberMeID($externalRememberMeID);
    }
    /**
     * Get ExternalRememberMeStatus value
     * @return int
     */
    public function getExternalRememberMeStatus()
    {
        return $this->ExternalRememberMeStatus;
    }
    /**
     * Set ExternalRememberMeStatus value
     * @param int $externalRememberMeStatus
     * @return \PayPal\StructType\ExternalRememberMeStatusDetailsType
     */
    public function setExternalRememberMeStatus($externalRememberMeStatus = null)
    {
        // validation for constraint: int
        if (!is_null($externalRememberMeStatus) && !is_numeric($externalRememberMeStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($externalRememberMeStatus)), __LINE__);
        }
        $this->ExternalRememberMeStatus = $externalRememberMeStatus;
        return $this;
    }
    /**
     * Get ExternalRememberMeID value
     * @return string|null
     */
    public function getExternalRememberMeID()
    {
        return $this->ExternalRememberMeID;
    }
    /**
     * Set ExternalRememberMeID value
     * @param string $externalRememberMeID
     * @return \PayPal\StructType\ExternalRememberMeStatusDetailsType
     */
    public function setExternalRememberMeID($externalRememberMeID = null)
    {
        // validation for constraint: string
        if (!is_null($externalRememberMeID) && !is_string($externalRememberMeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalRememberMeID)), __LINE__);
        }
        $this->ExternalRememberMeID = $externalRememberMeID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExternalRememberMeStatusDetailsType
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
