<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMManageButtonStatusRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMManageButtonStatusRequestType extends AbstractRequestType
{
    /**
     * The HostedButtonID
     * Meta information extracted from the WSDL
     * - documentation: Button ID of Hosted button. Required Character length and limitations: 10 single-byte numeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HostedButtonID;
    /**
     * The ButtonStatus
     * Meta information extracted from the WSDL
     * - documentation: Requested Status change for hosted button. Required Character length and limitations: 1 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonStatus;
    /**
     * Constructor method for BMManageButtonStatusRequestType
     * @uses BMManageButtonStatusRequestType::setHostedButtonID()
     * @uses BMManageButtonStatusRequestType::setButtonStatus()
     * @param string $hostedButtonID
     * @param string $buttonStatus
     */
    public function __construct($hostedButtonID = null, $buttonStatus = null)
    {
        $this
            ->setHostedButtonID($hostedButtonID)
            ->setButtonStatus($buttonStatus);
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
     * @return \PayPal\StructType\BMManageButtonStatusRequestType
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
    /**
     * Get ButtonStatus value
     * @return string|null
     */
    public function getButtonStatus()
    {
        return $this->ButtonStatus;
    }
    /**
     * Set ButtonStatus value
     * @uses \PayPal\EnumType\ButtonStatusType::valueIsValid()
     * @uses \PayPal\EnumType\ButtonStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buttonStatus
     * @return \PayPal\StructType\BMManageButtonStatusRequestType
     */
    public function setButtonStatus($buttonStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonStatusType::valueIsValid($buttonStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ButtonStatusType', is_array($buttonStatus) ? implode(', ', $buttonStatus) : var_export($buttonStatus, true), implode(', ', \PayPal\EnumType\ButtonStatusType::getValidValues())), __LINE__);
        }
        $this->ButtonStatus = $buttonStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMManageButtonStatusRequestType
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
