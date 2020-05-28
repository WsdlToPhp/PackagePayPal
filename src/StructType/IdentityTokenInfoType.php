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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessToken, true), gettype($accessToken)), __LINE__);
        }
        $this->AccessToken = $accessToken;
        return $this;
    }
}
