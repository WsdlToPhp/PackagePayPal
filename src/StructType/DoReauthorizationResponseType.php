<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReauthorizationResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReauthorizationResponseType extends AbstractResponseType
{
    /**
     * The AuthorizationID
     * Meta information extracted from the WSDL
     * - documentation: A new authorization identification number. Character length and limits: 19 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AuthorizationID;
    /**
     * The AuthorizationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:AuthorizationInfo
     * @var \PayPal\StructType\AuthorizationInfoType
     */
    public $AuthorizationInfo;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
     * - documentation: Return msgsubid back to merchant
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * Constructor method for DoReauthorizationResponseType
     * @uses DoReauthorizationResponseType::setAuthorizationID()
     * @uses DoReauthorizationResponseType::setAuthorizationInfo()
     * @uses DoReauthorizationResponseType::setMsgSubID()
     * @param string $authorizationID
     * @param \PayPal\StructType\AuthorizationInfoType $authorizationInfo
     * @param string $msgSubID
     */
    public function __construct($authorizationID = null, \PayPal\StructType\AuthorizationInfoType $authorizationInfo = null, $msgSubID = null)
    {
        $this
            ->setAuthorizationID($authorizationID)
            ->setAuthorizationInfo($authorizationInfo)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get AuthorizationID value
     * @return string
     */
    public function getAuthorizationID()
    {
        return $this->AuthorizationID;
    }
    /**
     * Set AuthorizationID value
     * @param string $authorizationID
     * @return \PayPal\StructType\DoReauthorizationResponseType
     */
    public function setAuthorizationID($authorizationID = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationID) && !is_string($authorizationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationID, true), gettype($authorizationID)), __LINE__);
        }
        $this->AuthorizationID = $authorizationID;
        return $this;
    }
    /**
     * Get AuthorizationInfo value
     * @return \PayPal\StructType\AuthorizationInfoType|null
     */
    public function getAuthorizationInfo()
    {
        return $this->AuthorizationInfo;
    }
    /**
     * Set AuthorizationInfo value
     * @param \PayPal\StructType\AuthorizationInfoType $authorizationInfo
     * @return \PayPal\StructType\DoReauthorizationResponseType
     */
    public function setAuthorizationInfo(\PayPal\StructType\AuthorizationInfoType $authorizationInfo = null)
    {
        $this->AuthorizationInfo = $authorizationInfo;
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
     * @return \PayPal\StructType\DoReauthorizationResponseType
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
