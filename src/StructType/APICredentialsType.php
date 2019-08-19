<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APICredentialsType StructType
 * Meta information extracted from the WSDL
 * - documentation: APICredentialsType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class APICredentialsType extends AbstractStructBase
{
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs PayPal API usernameCharacter length and limitations: 128 alphanumeric characters
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs PayPal API passwordCharacter length and limitations: 40 alphanumeric characters
     * @var string
     */
    public $Password;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs PayPal API signature, if one exists. Character length and limitations: 256 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Signature;
    /**
     * The Certificate
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs PayPal API certificate in PEM format, if one exists The certificate consists of two parts: the private key (2,048 bytes) and the certificate proper (4,000 bytes). Character length and limitations: 6,048 alphanumeric
     * characters
     * - minOccurs: 0
     * @var string
     */
    public $Certificate;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs PayPal API authentication mechanism. Auth-None: no authentication mechanism on file Cert: API certificate Sign: API signature Character length and limitations: 9 alphanumeric characters
     * @var string
     */
    public $Type;
    /**
     * Constructor method for APICredentialsType
     * @uses APICredentialsType::setUsername()
     * @uses APICredentialsType::setPassword()
     * @uses APICredentialsType::setSignature()
     * @uses APICredentialsType::setCertificate()
     * @uses APICredentialsType::setType()
     * @param string $username
     * @param string $password
     * @param string $signature
     * @param string $certificate
     * @param string $type
     */
    public function __construct($username = null, $password = null, $signature = null, $certificate = null, $type = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setSignature($signature)
            ->setCertificate($certificate)
            ->setType($type);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \PayPal\StructType\APICredentialsType
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \PayPal\StructType\APICredentialsType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \PayPal\StructType\APICredentialsType
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get Certificate value
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->Certificate;
    }
    /**
     * Set Certificate value
     * @param string $certificate
     * @return \PayPal\StructType\APICredentialsType
     */
    public function setCertificate($certificate = null)
    {
        // validation for constraint: string
        if (!is_null($certificate) && !is_string($certificate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certificate, true), gettype($certificate)), __LINE__);
        }
        $this->Certificate = $certificate;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \PayPal\EnumType\APIAuthenticationType::valueIsValid()
     * @uses \PayPal\EnumType\APIAuthenticationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \PayPal\StructType\APICredentialsType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\APIAuthenticationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\APIAuthenticationType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \PayPal\EnumType\APIAuthenticationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\APICredentialsType
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
