<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIdPasswordType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserIdPasswordType extends AbstractStructBase
{
    /**
     * The AppId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppId;
    /**
     * The DevId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DevId;
    /**
     * The AuthCert
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthCert;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - documentation: The username is the identifier for an account.
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - documentation: Password contains the current password associated with the username.
     * @var string
     */
    public $Password;
    /**
     * The Signature
     * Meta information extracted from the WSDL
     * - documentation: Signature for Three Token authentication.
     * - minOccurs: 0
     * @var string
     */
    public $Signature;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - documentation: This field identifies an account (e.g., payment) on whose behalf the operation is being performed. For instance one account holder may delegate the abililty to perform certain operations to another account holder. This delegation is
     * done through a separate mechanism. If the base username has not been authorized by the subject the request will be rejected.
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The AuthToken
     * Meta information extracted from the WSDL
     * - documentation: Authentication Session Token for authentication and authorization.
     * - minOccurs: 0
     * @var string
     */
    public $AuthToken;
    /**
     * Constructor method for UserIdPasswordType
     * @uses UserIdPasswordType::setAppId()
     * @uses UserIdPasswordType::setDevId()
     * @uses UserIdPasswordType::setAuthCert()
     * @uses UserIdPasswordType::setUsername()
     * @uses UserIdPasswordType::setPassword()
     * @uses UserIdPasswordType::setSignature()
     * @uses UserIdPasswordType::setSubject()
     * @uses UserIdPasswordType::setAuthToken()
     * @param string $appId
     * @param string $devId
     * @param string $authCert
     * @param string $username
     * @param string $password
     * @param string $signature
     * @param string $subject
     * @param string $authToken
     */
    public function __construct($appId = null, $devId = null, $authCert = null, $username = null, $password = null, $signature = null, $subject = null, $authToken = null)
    {
        $this
            ->setAppId($appId)
            ->setDevId($devId)
            ->setAuthCert($authCert)
            ->setUsername($username)
            ->setPassword($password)
            ->setSignature($signature)
            ->setSubject($subject)
            ->setAuthToken($authToken);
    }
    /**
     * Get AppId value
     * @return string|null
     */
    public function getAppId()
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \PayPal\StructType\UserIdPasswordType
     */
    public function setAppId($appId = null)
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        return $this;
    }
    /**
     * Get DevId value
     * @return string|null
     */
    public function getDevId()
    {
        return $this->DevId;
    }
    /**
     * Set DevId value
     * @param string $devId
     * @return \PayPal\StructType\UserIdPasswordType
     */
    public function setDevId($devId = null)
    {
        // validation for constraint: string
        if (!is_null($devId) && !is_string($devId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devId, true), gettype($devId)), __LINE__);
        }
        $this->DevId = $devId;
        return $this;
    }
    /**
     * Get AuthCert value
     * @return string|null
     */
    public function getAuthCert()
    {
        return $this->AuthCert;
    }
    /**
     * Set AuthCert value
     * @param string $authCert
     * @return \PayPal\StructType\UserIdPasswordType
     */
    public function setAuthCert($authCert = null)
    {
        // validation for constraint: string
        if (!is_null($authCert) && !is_string($authCert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCert, true), gettype($authCert)), __LINE__);
        }
        $this->AuthCert = $authCert;
        return $this;
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
     * @return \PayPal\StructType\UserIdPasswordType
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
     * @return \PayPal\StructType\UserIdPasswordType
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
     * @return \PayPal\StructType\UserIdPasswordType
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
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \PayPal\StructType\UserIdPasswordType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get AuthToken value
     * @return string|null
     */
    public function getAuthToken()
    {
        return $this->AuthToken;
    }
    /**
     * Set AuthToken value
     * @param string $authToken
     * @return \PayPal\StructType\UserIdPasswordType
     */
    public function setAuthToken($authToken = null)
    {
        // validation for constraint: string
        if (!is_null($authToken) && !is_string($authToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authToken, true), gettype($authToken)), __LINE__);
        }
        $this->AuthToken = $authToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UserIdPasswordType
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
