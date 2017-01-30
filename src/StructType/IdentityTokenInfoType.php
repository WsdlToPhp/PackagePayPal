<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityTokenInfoType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IdentityTokenInfoType extends AbstractStructBase
{
    /**
     * The AccessToken
     * Meta informations extracted from the WSDL
     * - documentation: Identity Access token from merchant
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AccessToken;
    /**
     * Constructor method for IdentityTokenInfoType
     * @uses IdentityTokenInfoType::setAccessToken()
     * @param string $accessToken
     */
    public function __construct($accessToken = null)
    {
        $this
            ->setAccessToken($accessToken);
    }
    /**
     * Get AccessToken value
     * @return string
     */
    public function getAccessToken()
    {
        return $this->AccessToken;
    }
    /**
     * Set AccessToken value
     * @param string $accessToken
     * @return \PayPal\StructType\IdentityTokenInfoType
     */
    public function setAccessToken($accessToken = null)
    {
        // validation for constraint: string
        if (!is_null($accessToken) && !is_string($accessToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessToken)), __LINE__);
        }
        $this->AccessToken = $accessToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IdentityTokenInfoType
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
