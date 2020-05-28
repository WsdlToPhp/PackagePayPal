<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiverInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: ReceiverInfoType Receiver information.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReceiverInfoType extends AbstractStructBase
{
    /**
     * The Business
     * Meta information extracted from the WSDL
     * - documentation: Email address or account ID of the payment recipient (the seller). Equivalent to Receiver if payment is sent to primary account. Character length and limitations: 127 single-byte alphanumeric characters
     * - base: xs:string
     * @var string
     */
    public $Business;
    /**
     * The Receiver
     * Meta information extracted from the WSDL
     * - documentation: Primary email address of the payment recipient (the seller). If you are the recipient of the payment and the payment is sent to your non-primary email address, the value of Receiver is still your primary email address. Character
     * length and limitations: 127 single-byte alphanumeric characters
     * - base: xs:string
     * @var string
     */
    public $Receiver;
    /**
     * The ReceiverID
     * Meta information extracted from the WSDL
     * - documentation: Unique account ID of the payment recipient (the seller). This value is the same as the value of the recipient's referral ID.
     * - base: xs:string
     * - maxLength: 127
     * @var string
     */
    public $ReceiverID;
    /**
     * Constructor method for ReceiverInfoType
     * @uses ReceiverInfoType::setBusiness()
     * @uses ReceiverInfoType::setReceiver()
     * @uses ReceiverInfoType::setReceiverID()
     * @param string $business
     * @param string $receiver
     * @param string $receiverID
     */
    public function __construct($business = null, $receiver = null, $receiverID = null)
    {
        $this
            ->setBusiness($business)
            ->setReceiver($receiver)
            ->setReceiverID($receiverID);
    }
    /**
     * Get Business value
     * @return string|null
     */
    public function getBusiness()
    {
        return $this->Business;
    }
    /**
     * Set Business value
     * @param string $business
     * @return \PayPal\StructType\ReceiverInfoType
     */
    public function setBusiness($business = null)
    {
        // validation for constraint: string
        if (!is_null($business) && !is_string($business)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($business, true), gettype($business)), __LINE__);
        }
        $this->Business = $business;
        return $this;
    }
    /**
     * Get Receiver value
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }
    /**
     * Set Receiver value
     * @param string $receiver
     * @return \PayPal\StructType\ReceiverInfoType
     */
    public function setReceiver($receiver = null)
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver, true), gettype($receiver)), __LINE__);
        }
        $this->Receiver = $receiver;
        return $this;
    }
    /**
     * Get ReceiverID value
     * @return string|null
     */
    public function getReceiverID()
    {
        return $this->ReceiverID;
    }
    /**
     * Set ReceiverID value
     * @param string $receiverID
     * @return \PayPal\StructType\ReceiverInfoType
     */
    public function setReceiverID($receiverID = null)
    {
        // validation for constraint: string
        if (!is_null($receiverID) && !is_string($receiverID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverID, true), gettype($receiverID)), __LINE__);
        }
        // validation for constraint: maxLength(127)
        if (!is_null($receiverID) && mb_strlen($receiverID) > 127) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 127', mb_strlen($receiverID)), __LINE__);
        }
        $this->ReceiverID = $receiverID;
        return $this;
    }
}
