<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCancelRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoCancelRequestType extends AbstractRequestType
{
    /**
     * The CancelMsgSubID
     * Meta informations extracted from the WSDL
     * - documentation: Msg Sub Id that was used for the orginal operation.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CancelMsgSubID;
    /**
     * The APIType
     * Meta informations extracted from the WSDL
     * - documentation: Original API's type
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $APIType;
    /**
     * The MsgSubID
     * Meta informations extracted from the WSDL
     * - documentation: Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * Constructor method for DoCancelRequestType
     * @uses DoCancelRequestType::setCancelMsgSubID()
     * @uses DoCancelRequestType::setAPIType()
     * @uses DoCancelRequestType::setMsgSubID()
     * @param string $cancelMsgSubID
     * @param string $aPIType
     * @param string $msgSubID
     */
    public function __construct($cancelMsgSubID = null, $aPIType = null, $msgSubID = null)
    {
        $this
            ->setCancelMsgSubID($cancelMsgSubID)
            ->setAPIType($aPIType)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get CancelMsgSubID value
     * @return string
     */
    public function getCancelMsgSubID()
    {
        return $this->CancelMsgSubID;
    }
    /**
     * Set CancelMsgSubID value
     * @param string $cancelMsgSubID
     * @return \PayPal\StructType\DoCancelRequestType
     */
    public function setCancelMsgSubID($cancelMsgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($cancelMsgSubID) && !is_string($cancelMsgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelMsgSubID)), __LINE__);
        }
        $this->CancelMsgSubID = $cancelMsgSubID;
        return $this;
    }
    /**
     * Get APIType value
     * @return string
     */
    public function getAPIType()
    {
        return $this->APIType;
    }
    /**
     * Set APIType value
     * @uses \PayPal\EnumType\APIType::valueIsValid()
     * @uses \PayPal\EnumType\APIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aPIType
     * @return \PayPal\StructType\DoCancelRequestType
     */
    public function setAPIType($aPIType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\APIType::valueIsValid($aPIType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aPIType, implode(', ', \PayPal\EnumType\APIType::getValidValues())), __LINE__);
        }
        $this->APIType = $aPIType;
        return $this;
    }
    /**
     * Get MsgSubID value
     * @return string|null
     */
    public function getMsgSubID()
    {
        return $this->MsgSubID;
    }
    /**
     * Set MsgSubID value
     * @param string $msgSubID
     * @return \PayPal\StructType\DoCancelRequestType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoCancelRequestType
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
