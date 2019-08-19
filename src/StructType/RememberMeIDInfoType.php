<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RememberMeIDInfoType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RememberMeIDInfoType extends AbstractStructBase
{
    /**
     * The ExternalRememberMeID
     * Meta information extracted from the WSDL
     * - documentation: External remember-me ID returned by GetExpressCheckoutDetails on successful opt-in. The ExternalRememberMeID is a 17-character alphanumeric (encrypted) string that identifies the buyer's remembered login with a merchant and has
     * meaning only to the merchant. If present, requests that the web flow attempt bypass of login.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalRememberMeID;
    /**
     * Constructor method for RememberMeIDInfoType
     * @uses RememberMeIDInfoType::setExternalRememberMeID()
     * @param string $externalRememberMeID
     */
    public function __construct($externalRememberMeID = null)
    {
        $this
            ->setExternalRememberMeID($externalRememberMeID);
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
     * @return \PayPal\StructType\RememberMeIDInfoType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RememberMeIDInfoType
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
