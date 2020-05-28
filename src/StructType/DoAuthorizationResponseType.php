<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoAuthorizationResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoAuthorizationResponseType extends AbstractResponseType
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: An authorization identification number. Character length and limits: 19 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount and currency you specified in the request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
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
     * Constructor method for DoAuthorizationResponseType
     * @uses DoAuthorizationResponseType::setTransactionID()
     * @uses DoAuthorizationResponseType::setAmount()
     * @uses DoAuthorizationResponseType::setAuthorizationInfo()
     * @uses DoAuthorizationResponseType::setMsgSubID()
     * @param string $transactionID
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param \PayPal\StructType\AuthorizationInfoType $authorizationInfo
     * @param string $msgSubID
     */
    public function __construct($transactionID = null, \PayPal\StructType\BasicAmountType $amount = null, \PayPal\StructType\AuthorizationInfoType $authorizationInfo = null, $msgSubID = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setAmount($amount)
            ->setAuthorizationInfo($authorizationInfo)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\DoAuthorizationResponseType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\DoAuthorizationResponseType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
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
     * @return \PayPal\StructType\DoAuthorizationResponseType
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
     * @return \PayPal\StructType\DoAuthorizationResponseType
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
