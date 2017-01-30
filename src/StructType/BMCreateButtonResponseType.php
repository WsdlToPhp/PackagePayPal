<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMCreateButtonResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMCreateButtonResponseType extends AbstractResponseType
{
    /**
     * The Website
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Website;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The Mobile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Mobile;
    /**
     * The HostedButtonID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HostedButtonID;
    /**
     * Constructor method for BMCreateButtonResponseType
     * @uses BMCreateButtonResponseType::setWebsite()
     * @uses BMCreateButtonResponseType::setEmail()
     * @uses BMCreateButtonResponseType::setMobile()
     * @uses BMCreateButtonResponseType::setHostedButtonID()
     * @param string $website
     * @param string $email
     * @param string $mobile
     * @param string $hostedButtonID
     */
    public function __construct($website = null, $email = null, $mobile = null, $hostedButtonID = null)
    {
        $this
            ->setWebsite($website)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setHostedButtonID($hostedButtonID);
    }
    /**
     * Get Website value
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }
    /**
     * Set Website value
     * @param string $website
     * @return \PayPal\StructType\BMCreateButtonResponseType
     */
    public function setWebsite($website = null)
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($website)), __LINE__);
        }
        $this->Website = $website;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \PayPal\StructType\BMCreateButtonResponseType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }
    /**
     * Set Mobile value
     * @param string $mobile
     * @return \PayPal\StructType\BMCreateButtonResponseType
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->Mobile = $mobile;
        return $this;
    }
    /**
     * Get HostedButtonID value
     * @return string|null
     */
    public function getHostedButtonID()
    {
        return $this->HostedButtonID;
    }
    /**
     * Set HostedButtonID value
     * @param string $hostedButtonID
     * @return \PayPal\StructType\BMCreateButtonResponseType
     */
    public function setHostedButtonID($hostedButtonID = null)
    {
        // validation for constraint: string
        if (!is_null($hostedButtonID) && !is_string($hostedButtonID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostedButtonID)), __LINE__);
        }
        $this->HostedButtonID = $hostedButtonID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMCreateButtonResponseType
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
