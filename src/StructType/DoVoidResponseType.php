<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoVoidResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoVoidResponseType extends AbstractResponseType
{
    /**
     * The AuthorizationID
     * Meta information extracted from the WSDL
     * - documentation: The authorization identification number you specified in the request. Character length and limits: 19 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizationID;
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
     * Constructor method for DoVoidResponseType
     * @uses DoVoidResponseType::setAuthorizationID()
     * @uses DoVoidResponseType::setMsgSubID()
     * @param string $authorizationID
     * @param string $msgSubID
     */
    public function __construct($authorizationID = null, $msgSubID = null)
    {
        $this
            ->setAuthorizationID($authorizationID)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get AuthorizationID value
     * @return string|null
     */
    public function getAuthorizationID()
    {
        return $this->AuthorizationID;
    }
    /**
     * Set AuthorizationID value
     * @param string $authorizationID
     * @return \PayPal\StructType\DoVoidResponseType
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
     * @return \PayPal\StructType\DoVoidResponseType
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
