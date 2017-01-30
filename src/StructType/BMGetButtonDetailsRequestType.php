<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMGetButtonDetailsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMGetButtonDetailsRequestType extends AbstractRequestType
{
    /**
     * The HostedButtonID
     * Meta informations extracted from the WSDL
     * - documentation: Button ID of button to return. Required Character length and limitations: 10 single-byte numeric characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HostedButtonID;
    /**
     * Constructor method for BMGetButtonDetailsRequestType
     * @uses BMGetButtonDetailsRequestType::setHostedButtonID()
     * @param string $hostedButtonID
     */
    public function __construct($hostedButtonID = null)
    {
        $this
            ->setHostedButtonID($hostedButtonID);
    }
    /**
     * Get HostedButtonID value
     * @return string
     */
    public function getHostedButtonID()
    {
        return $this->HostedButtonID;
    }
    /**
     * Set HostedButtonID value
     * @param string $hostedButtonID
     * @return \PayPal\StructType\BMGetButtonDetailsRequestType
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
     * @return \PayPal\StructType\BMGetButtonDetailsRequestType
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
