<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiverInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: ReceiverInfoType Receiver information.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReceiverInfoType extends AbstractStructBase
{
    /**
     * The Business
     * Meta informations extracted from the WSDL
     * - documentation: Email address or account ID of the payment recipient (the seller). Equivalent to Receiver if payment is sent to primary account. Character length and limitations: 127 single-byte alphanumeric characters
     * @var string
     */
    public $Business;
    /**
     * The Receiver
     * Meta informations extracted from the WSDL
     * - documentation: Primary email address of the payment recipient (the seller). If you are the recipient of the payment and the payment is sent to your non-primary email address, the value of Receiver is still your primary email address. Character
     * length and limitations: 127 single-byte alphanumeric characters
     * @var string
     */
    public $Receiver;
    /**
     * The ReceiverID
     * Meta informations extracted from the WSDL
     * - documentation: Unique account ID of the payment recipient (the seller). This value is the same as the value of the recipient's referral ID.
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($business)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiver)), __LINE__);
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
        // validation for constraint: maxLength
        if ((is_scalar($receiverID) && strlen($receiverID) > 127) || (is_array($receiverID) && count($receiverID) > 127)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 127 element(s) or a scalar of 127 character(s) at most, "%d" length given', is_scalar($receiverID) ? strlen($receiverID) : count($receiverID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($receiverID) && !is_string($receiverID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverID)), __LINE__);
        }
        $this->ReceiverID = $receiverID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ReceiverInfoType
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
