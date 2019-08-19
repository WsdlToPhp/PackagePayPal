<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomSecurityHeaderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Custom Securiy Header.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CustomSecurityHeaderType extends AbstractStructBase
{
    /**
     * The eBayAuthToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eBayAuthToken;
    /**
     * The HardExpirationWarning
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HardExpirationWarning;
    /**
     * The Credentials
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\UserIdPasswordType
     */
    public $Credentials;
    /**
     * Constructor method for CustomSecurityHeaderType
     * @uses CustomSecurityHeaderType::setEBayAuthToken()
     * @uses CustomSecurityHeaderType::setHardExpirationWarning()
     * @uses CustomSecurityHeaderType::setCredentials()
     * @param string $eBayAuthToken
     * @param string $hardExpirationWarning
     * @param \PayPal\StructType\UserIdPasswordType $credentials
     */
    public function __construct($eBayAuthToken = null, $hardExpirationWarning = null, \PayPal\StructType\UserIdPasswordType $credentials = null)
    {
        $this
            ->setEBayAuthToken($eBayAuthToken)
            ->setHardExpirationWarning($hardExpirationWarning)
            ->setCredentials($credentials);
    }
    /**
     * Get eBayAuthToken value
     * @return string|null
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \PayPal\StructType\CustomSecurityHeaderType
     */
    public function setEBayAuthToken($eBayAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayAuthToken, true), gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }
    /**
     * Get HardExpirationWarning value
     * @return string|null
     */
    public function getHardExpirationWarning()
    {
        return $this->HardExpirationWarning;
    }
    /**
     * Set HardExpirationWarning value
     * @param string $hardExpirationWarning
     * @return \PayPal\StructType\CustomSecurityHeaderType
     */
    public function setHardExpirationWarning($hardExpirationWarning = null)
    {
        // validation for constraint: string
        if (!is_null($hardExpirationWarning) && !is_string($hardExpirationWarning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardExpirationWarning, true), gettype($hardExpirationWarning)), __LINE__);
        }
        $this->HardExpirationWarning = $hardExpirationWarning;
        return $this;
    }
    /**
     * Get Credentials value
     * @return \PayPal\StructType\UserIdPasswordType|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \PayPal\StructType\UserIdPasswordType $credentials
     * @return \PayPal\StructType\CustomSecurityHeaderType
     */
    public function setCredentials(\PayPal\StructType\UserIdPasswordType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CustomSecurityHeaderType
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
