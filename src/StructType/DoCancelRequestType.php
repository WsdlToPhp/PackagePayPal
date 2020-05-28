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
     * Meta information extracted from the WSDL
     * - documentation: Msg Sub Id that was used for the orginal operation.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CancelMsgSubID;
    /**
     * The APIType
     * Meta information extracted from the WSDL
     * - documentation: Original API's type
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $APIType;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelMsgSubID, true), gettype($cancelMsgSubID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\APIType', is_array($aPIType) ? implode(', ', $aPIType) : var_export($aPIType, true), implode(', ', \PayPal\EnumType\APIType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgSubID, true), gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
}
