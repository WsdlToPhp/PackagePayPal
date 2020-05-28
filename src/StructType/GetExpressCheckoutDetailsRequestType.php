<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExpressCheckoutDetailsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetExpressCheckoutDetailsRequestType extends AbstractRequestType
{
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - documentation: A timestamped token, the value of which was returned by SetExpressCheckoutResponse. RequiredCharacter length and limitations: 20 single-byte characters
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Token;
    /**
     * Constructor method for GetExpressCheckoutDetailsRequestType
     * @uses GetExpressCheckoutDetailsRequestType::setToken()
     * @param string $token
     */
    public function __construct($token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get Token value
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \PayPal\StructType\GetExpressCheckoutDetailsRequestType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
}
