<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MassPayRequestItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: MassPayRequestItemType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MassPayRequestItemType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Payment amount. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Required You cannot mix currencies in a single MassPayRequest. A single request must
     * include items that are of the same currency.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The ReceiverEmail
     * Meta information extracted from the WSDL
     * - documentation: Email address of recipient. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients. Character length and limitations: 127 single-byte
     * characters maximum.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiverEmail;
    /**
     * The ReceiverPhone
     * Meta information extracted from the WSDL
     * - documentation: Phone number of recipient. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiverPhone;
    /**
     * The ReceiverID
     * Meta information extracted from the WSDL
     * - documentation: Unique PayPal customer account number. This value corresponds to the value of PayerID returned by GetTransactionDetails. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must
     * use the same field to specify recipients. Character length and limitations: 17 single-byte characters maximum.
     * - base: xs:string
     * - maxLength: 127
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiverID;
    /**
     * The UniqueId
     * Meta information extracted from the WSDL
     * - documentation: Transaction-specific identification number for tracking in an accounting system. Optional Character length and limitations: 30 single-byte characters. No whitespace allowed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueId;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Custom note for each recipient. Optional Character length and limitations: 4,000 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * Constructor method for MassPayRequestItemType
     * @uses MassPayRequestItemType::setAmount()
     * @uses MassPayRequestItemType::setReceiverEmail()
     * @uses MassPayRequestItemType::setReceiverPhone()
     * @uses MassPayRequestItemType::setReceiverID()
     * @uses MassPayRequestItemType::setUniqueId()
     * @uses MassPayRequestItemType::setNote()
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $receiverEmail
     * @param string $receiverPhone
     * @param string $receiverID
     * @param string $uniqueId
     * @param string $note
     */
    public function __construct(\PayPal\StructType\BasicAmountType $amount = null, $receiverEmail = null, $receiverPhone = null, $receiverID = null, $uniqueId = null, $note = null)
    {
        $this
            ->setAmount($amount)
            ->setReceiverEmail($receiverEmail)
            ->setReceiverPhone($receiverPhone)
            ->setReceiverID($receiverID)
            ->setUniqueId($uniqueId)
            ->setNote($note);
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
     * @return \PayPal\StructType\MassPayRequestItemType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ReceiverEmail value
     * @return string|null
     */
    public function getReceiverEmail()
    {
        return $this->ReceiverEmail;
    }
    /**
     * Set ReceiverEmail value
     * @param string $receiverEmail
     * @return \PayPal\StructType\MassPayRequestItemType
     */
    public function setReceiverEmail($receiverEmail = null)
    {
        // validation for constraint: string
        if (!is_null($receiverEmail) && !is_string($receiverEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverEmail, true), gettype($receiverEmail)), __LINE__);
        }
        $this->ReceiverEmail = $receiverEmail;
        return $this;
    }
    /**
     * Get ReceiverPhone value
     * @return string|null
     */
    public function getReceiverPhone()
    {
        return $this->ReceiverPhone;
    }
    /**
     * Set ReceiverPhone value
     * @param string $receiverPhone
     * @return \PayPal\StructType\MassPayRequestItemType
     */
    public function setReceiverPhone($receiverPhone = null)
    {
        // validation for constraint: string
        if (!is_null($receiverPhone) && !is_string($receiverPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverPhone, true), gettype($receiverPhone)), __LINE__);
        }
        $this->ReceiverPhone = $receiverPhone;
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
     * @return \PayPal\StructType\MassPayRequestItemType
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
    /**
     * Get UniqueId value
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->UniqueId;
    }
    /**
     * Set UniqueId value
     * @param string $uniqueId
     * @return \PayPal\StructType\MassPayRequestItemType
     */
    public function setUniqueId($uniqueId = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueId) && !is_string($uniqueId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniqueId, true), gettype($uniqueId)), __LINE__);
        }
        $this->UniqueId = $uniqueId;
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
     * @return \PayPal\StructType\MassPayRequestItemType
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
}
