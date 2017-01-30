<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReauthorizationRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReauthorizationRequestType extends AbstractRequestType
{
    /**
     * The AuthorizationID
     * Meta informations extracted from the WSDL
     * - documentation: The value of a previously authorized transaction identification number returned by a PayPal product. You can obtain a buyer's transaction number from the TransactionID element of the PayerInfo structure returned by
     * GetTransactionDetailsResponse. Required Character length and limits: 19 single-byte characters maximum
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AuthorizationID;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Amount to reauthorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
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
     * Constructor method for DoReauthorizationRequestType
     * @uses DoReauthorizationRequestType::setAuthorizationID()
     * @uses DoReauthorizationRequestType::setAmount()
     * @uses DoReauthorizationRequestType::setMsgSubID()
     * @param string $authorizationID
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $msgSubID
     */
    public function __construct($authorizationID = null, \PayPal\StructType\BasicAmountType $amount = null, $msgSubID = null)
    {
        $this
            ->setAuthorizationID($authorizationID)
            ->setAmount($amount)
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
     * @return \PayPal\StructType\DoReauthorizationRequestType
     */
    public function setAuthorizationID($authorizationID = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationID) && !is_string($authorizationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationID)), __LINE__);
        }
        $this->AuthorizationID = $authorizationID;
        return $this;
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\DoReauthorizationRequestType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
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
     * @return \PayPal\StructType\DoReauthorizationRequestType
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
     * @return \PayPal\StructType\DoReauthorizationRequestType
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
