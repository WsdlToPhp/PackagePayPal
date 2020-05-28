<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoVoidRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoVoidRequestType extends AbstractRequestType
{
    /**
     * The AuthorizationID
     * Meta information extracted from the WSDL
     * - documentation: The value of the original authorization identification number returned by a PayPal product. If you are voiding a transaction that has been reauthorized, use the ID from the original authorization, and not the reauthorization.
     * Required Character length and limits: 19 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AuthorizationID;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: An informational note about this settlement that is displayed to the payer in email and in transaction history. Optional Character length and limits: 255 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
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
     * Constructor method for DoVoidRequestType
     * @uses DoVoidRequestType::setAuthorizationID()
     * @uses DoVoidRequestType::setNote()
     * @uses DoVoidRequestType::setMsgSubID()
     * @param string $authorizationID
     * @param string $note
     * @param string $msgSubID
     */
    public function __construct($authorizationID = null, $note = null, $msgSubID = null)
    {
        $this
            ->setAuthorizationID($authorizationID)
            ->setNote($note)
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
     * @return \PayPal\StructType\DoVoidRequestType
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
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \PayPal\StructType\DoVoidRequestType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
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
     * @return \PayPal\StructType\DoVoidRequestType
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
