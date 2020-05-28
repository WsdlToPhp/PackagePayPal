<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshTokenStatusDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response information resulting from opt-in operation or current login bypass status.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefreshTokenStatusDetailsType extends AbstractStructBase
{
    /**
     * The RefreshTokenStatus
     * Meta information extracted from the WSDL
     * - documentation: Required field that reports status of opt-in or login bypass attempt. 0 = Success, successful opt-in or RefreshToken corresponding to AccessToken specified in SetExpressCheckout is valid (user is still opted in). 1 = New RefreshToken
     * was generated (user is still opted in). 2 = Invalid ID, RefreshToken corresponding to AccessToken specified in SetExpressCheckout is invalid (user is opted out). -2 = Internal Error, system error or outage during opt-in or login bypass. Can retry
     * opt-in or login bypass next time. Flow will force full authentication and allow buyer to complete transaction. -1 = None, the field does not represent any valid value of the status.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RefreshTokenStatus;
    /**
     * The RefreshToken
     * Meta information extracted from the WSDL
     * - documentation: Identifier returned on external-remember-me-opt-in to allow the merchant to request bypass of PayPal login
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefreshToken;
    /**
     * The ImmutableID
     * Meta information extracted from the WSDL
     * - documentation: The immutable_id is the user's unique value per merchant that should never ever change for that account. This would be the key used to uniquely identify the user
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImmutableID;
    /**
     * Constructor method for RefreshTokenStatusDetailsType
     * @uses RefreshTokenStatusDetailsType::setRefreshTokenStatus()
     * @uses RefreshTokenStatusDetailsType::setRefreshToken()
     * @uses RefreshTokenStatusDetailsType::setImmutableID()
     * @param int $refreshTokenStatus
     * @param string $refreshToken
     * @param string $immutableID
     */
    public function __construct($refreshTokenStatus = null, $refreshToken = null, $immutableID = null)
    {
        $this
            ->setRefreshTokenStatus($refreshTokenStatus)
            ->setRefreshToken($refreshToken)
            ->setImmutableID($immutableID);
    }
    /**
     * Get RefreshTokenStatus value
     * @return int
     */
    public function getRefreshTokenStatus()
    {
        return $this->RefreshTokenStatus;
    }
    /**
     * Set RefreshTokenStatus value
     * @param int $refreshTokenStatus
     * @return \PayPal\StructType\RefreshTokenStatusDetailsType
     */
    public function setRefreshTokenStatus($refreshTokenStatus = null)
    {
        // validation for constraint: int
        if (!is_null($refreshTokenStatus) && !(is_int($refreshTokenStatus) || ctype_digit($refreshTokenStatus))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refreshTokenStatus, true), gettype($refreshTokenStatus)), __LINE__);
        }
        $this->RefreshTokenStatus = $refreshTokenStatus;
        return $this;
    }
    /**
     * Get RefreshToken value
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->RefreshToken;
    }
    /**
     * Set RefreshToken value
     * @param string $refreshToken
     * @return \PayPal\StructType\RefreshTokenStatusDetailsType
     */
    public function setRefreshToken($refreshToken = null)
    {
        // validation for constraint: string
        if (!is_null($refreshToken) && !is_string($refreshToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refreshToken, true), gettype($refreshToken)), __LINE__);
        }
        $this->RefreshToken = $refreshToken;
        return $this;
    }
    /**
     * Get ImmutableID value
     * @return string|null
     */
    public function getImmutableID()
    {
        return $this->ImmutableID;
    }
    /**
     * Set ImmutableID value
     * @param string $immutableID
     * @return \PayPal\StructType\RefreshTokenStatusDetailsType
     */
    public function setImmutableID($immutableID = null)
    {
        // validation for constraint: string
        if (!is_null($immutableID) && !is_string($immutableID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($immutableID, true), gettype($immutableID)), __LINE__);
        }
        $this->ImmutableID = $immutableID;
        return $this;
    }
}
