<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MobileIDInfoType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MobileIDInfoType extends AbstractStructBase
{
    /**
     * The SessionToken
     * Meta informations extracted from the WSDL
     * - documentation: The Session token returned during buyer authentication.
     * @var string
     */
    public $SessionToken;
    /**
     * Constructor method for MobileIDInfoType
     * @uses MobileIDInfoType::setSessionToken()
     * @param string $sessionToken
     */
    public function __construct($sessionToken = null)
    {
        $this
            ->setSessionToken($sessionToken);
    }
    /**
     * Get SessionToken value
     * @return string|null
     */
    public function getSessionToken()
    {
        return $this->SessionToken;
    }
    /**
     * Set SessionToken value
     * @param string $sessionToken
     * @return \PayPal\StructType\MobileIDInfoType
     */
    public function setSessionToken($sessionToken = null)
    {
        // validation for constraint: string
        if (!is_null($sessionToken) && !is_string($sessionToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionToken)), __LINE__);
        }
        $this->SessionToken = $sessionToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MobileIDInfoType
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
