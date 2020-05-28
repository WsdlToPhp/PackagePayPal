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
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostedButtonID, true), gettype($hostedButtonID)), __LINE__);
        }
        $this->HostedButtonID = $hostedButtonID;
        return $this;
    }
}
