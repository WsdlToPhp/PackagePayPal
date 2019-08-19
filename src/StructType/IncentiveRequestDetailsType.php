<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveRequestDetailsType extends AbstractStructBase
{
    /**
     * The RequestId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestId;
    /**
     * The RequestType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestType;
    /**
     * The RequestDetailLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestDetailLevel;
    /**
     * Constructor method for IncentiveRequestDetailsType
     * @uses IncentiveRequestDetailsType::setRequestId()
     * @uses IncentiveRequestDetailsType::setRequestType()
     * @uses IncentiveRequestDetailsType::setRequestDetailLevel()
     * @param string $requestId
     * @param string $requestType
     * @param string $requestDetailLevel
     */
    public function __construct($requestId = null, $requestType = null, $requestDetailLevel = null)
    {
        $this
            ->setRequestId($requestId)
            ->setRequestType($requestType)
            ->setRequestDetailLevel($requestDetailLevel);
    }
    /**
     * Get RequestId value
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }
    /**
     * Set RequestId value
     * @param string $requestId
     * @return \PayPal\StructType\IncentiveRequestDetailsType
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        $this->RequestId = $requestId;
        return $this;
    }
    /**
     * Get RequestType value
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses \PayPal\EnumType\IncentiveRequestCodeType::valueIsValid()
     * @uses \PayPal\EnumType\IncentiveRequestCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestType
     * @return \PayPal\StructType\IncentiveRequestDetailsType
     */
    public function setRequestType($requestType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\IncentiveRequestCodeType::valueIsValid($requestType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\IncentiveRequestCodeType', is_array($requestType) ? implode(', ', $requestType) : var_export($requestType, true), implode(', ', \PayPal\EnumType\IncentiveRequestCodeType::getValidValues())), __LINE__);
        }
        $this->RequestType = $requestType;
        return $this;
    }
    /**
     * Get RequestDetailLevel value
     * @return string|null
     */
    public function getRequestDetailLevel()
    {
        return $this->RequestDetailLevel;
    }
    /**
     * Set RequestDetailLevel value
     * @uses \PayPal\EnumType\IncentiveRequestDetailLevelCodeType::valueIsValid()
     * @uses \PayPal\EnumType\IncentiveRequestDetailLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestDetailLevel
     * @return \PayPal\StructType\IncentiveRequestDetailsType
     */
    public function setRequestDetailLevel($requestDetailLevel = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\IncentiveRequestDetailLevelCodeType::valueIsValid($requestDetailLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\IncentiveRequestDetailLevelCodeType', is_array($requestDetailLevel) ? implode(', ', $requestDetailLevel) : var_export($requestDetailLevel, true), implode(', ', \PayPal\EnumType\IncentiveRequestDetailLevelCodeType::getValidValues())), __LINE__);
        }
        $this->RequestDetailLevel = $requestDetailLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveRequestDetailsType
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
