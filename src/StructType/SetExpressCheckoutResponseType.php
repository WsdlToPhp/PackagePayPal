<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetExpressCheckoutResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetExpressCheckoutResponseType extends AbstractResponseType
{
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - documentation: A timestamped token by which you identify to PayPal that you are processing this payment with Express Checkout. The token expires after three hours. If you set Token in the SetExpressCheckoutRequest, the value of Token in the
     * response is identical to the value in the request. Character length and limitations: 20 single-byte characters
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Token;
    /**
     * Constructor method for SetExpressCheckoutResponseType
     * @uses SetExpressCheckoutResponseType::setToken()
     * @param string $token
     */
    public function __construct($token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \PayPal\StructType\SetExpressCheckoutResponseType
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
