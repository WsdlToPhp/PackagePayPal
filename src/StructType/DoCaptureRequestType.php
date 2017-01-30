<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCaptureRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains enhanced data like airline itinerary information. Not Required | To pass the Merchant store informationOptional | This holds key-value pair which merchants wants to pass it to the open wallet-PLCC processorOptional
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoCaptureRequestType extends AbstractRequestType
{
    /**
     * The AuthorizationID
     * Meta informations extracted from the WSDL
     * - documentation: The authorization identification number of the payment you want to capture. Required Character length and limits: 19 single-byte characters maximum | AuthorizationId - Type for a PayPal Authorization ID.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AuthorizationID;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Amount to authorize. You must set the currencyID attribute to USD. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a
     * comma (,)
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The CompleteType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if this capture is the last capture you intend to make. The default is Complete. If CompleteType is Complete, any remaining amount of the original reauthorized transaction is automatically voided. Required Character length
     * and limits: 12 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CompleteType;
    /**
     * The Note
     * Meta informations extracted from the WSDL
     * - documentation: An informational note about this settlement that is displayed to the payer in email and in transaction history. Optional Character length and limits: 255 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The InvoiceID
     * Meta informations extracted from the WSDL
     * - documentation: Your invoice number or other identification number. The InvoiceID value is recorded only if the authorization you are capturing is an order authorization, not a basic authorization. Optional Character length and limits: 127
     * single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The EnhancedData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:EnhancedData
     * @var \PayPal\StructType\EnhancedDataType
     */
    public $EnhancedData;
    /**
     * The Descriptor
     * Meta informations extracted from the WSDL
     * - documentation: dynamic descriptor Dynamic descriptor is used for merchant to provide detail of a transaction appears on statement Optional Character length and limits: <18 characters alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Descriptor;
    /**
     * The MerchantStoreDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:MerchantStoreDetails
     * @var \PayPal\StructType\MerchantStoreDetailsType
     */
    public $MerchantStoreDetails;
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
     * The MerchantData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:MerchantData
     * @var \PayPal\StructType\MerchantDataType
     */
    public $MerchantData;
    /**
     * Constructor method for DoCaptureRequestType
     * @uses DoCaptureRequestType::setAuthorizationID()
     * @uses DoCaptureRequestType::setAmount()
     * @uses DoCaptureRequestType::setCompleteType()
     * @uses DoCaptureRequestType::setNote()
     * @uses DoCaptureRequestType::setInvoiceID()
     * @uses DoCaptureRequestType::setEnhancedData()
     * @uses DoCaptureRequestType::setDescriptor()
     * @uses DoCaptureRequestType::setMerchantStoreDetails()
     * @uses DoCaptureRequestType::setMsgSubID()
     * @uses DoCaptureRequestType::setMerchantData()
     * @param string $authorizationID
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $completeType
     * @param string $note
     * @param string $invoiceID
     * @param \PayPal\StructType\EnhancedDataType $enhancedData
     * @param string $descriptor
     * @param \PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails
     * @param string $msgSubID
     * @param \PayPal\StructType\MerchantDataType $merchantData
     */
    public function __construct($authorizationID = null, \PayPal\StructType\BasicAmountType $amount = null, $completeType = null, $note = null, $invoiceID = null, \PayPal\StructType\EnhancedDataType $enhancedData = null, $descriptor = null, \PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails = null, $msgSubID = null, \PayPal\StructType\MerchantDataType $merchantData = null)
    {
        $this
            ->setAuthorizationID($authorizationID)
            ->setAmount($amount)
            ->setCompleteType($completeType)
            ->setNote($note)
            ->setInvoiceID($invoiceID)
            ->setEnhancedData($enhancedData)
            ->setDescriptor($descriptor)
            ->setMerchantStoreDetails($merchantStoreDetails)
            ->setMsgSubID($msgSubID)
            ->setMerchantData($merchantData);
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
     * @return \PayPal\StructType\DoCaptureRequestType
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
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CompleteType value
     * @return string
     */
    public function getCompleteType()
    {
        return $this->CompleteType;
    }
    /**
     * Set CompleteType value
     * @uses \PayPal\EnumType\CompleteCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CompleteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $completeType
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setCompleteType($completeType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CompleteCodeType::valueIsValid($completeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $completeType, implode(', ', \PayPal\EnumType\CompleteCodeType::getValidValues())), __LINE__);
        }
        $this->CompleteType = $completeType;
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
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Get InvoiceID value
     * @return string|null
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }
    /**
     * Set InvoiceID value
     * @param string $invoiceID
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setInvoiceID($invoiceID = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
        return $this;
    }
    /**
     * Get EnhancedData value
     * @return \PayPal\StructType\EnhancedDataType|null
     */
    public function getEnhancedData()
    {
        return $this->EnhancedData;
    }
    /**
     * Set EnhancedData value
     * @param \PayPal\StructType\EnhancedDataType $enhancedData
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setEnhancedData(\PayPal\StructType\EnhancedDataType $enhancedData = null)
    {
        $this->EnhancedData = $enhancedData;
        return $this;
    }
    /**
     * Get Descriptor value
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->Descriptor;
    }
    /**
     * Set Descriptor value
     * @param string $descriptor
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setDescriptor($descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($descriptor) && !is_string($descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptor)), __LINE__);
        }
        $this->Descriptor = $descriptor;
        return $this;
    }
    /**
     * Get MerchantStoreDetails value
     * @return \PayPal\StructType\MerchantStoreDetailsType|null
     */
    public function getMerchantStoreDetails()
    {
        return $this->MerchantStoreDetails;
    }
    /**
     * Set MerchantStoreDetails value
     * @param \PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setMerchantStoreDetails(\PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails = null)
    {
        $this->MerchantStoreDetails = $merchantStoreDetails;
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
     * @return \PayPal\StructType\DoCaptureRequestType
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
     * Get MerchantData value
     * @return \PayPal\StructType\MerchantDataType|null
     */
    public function getMerchantData()
    {
        return $this->MerchantData;
    }
    /**
     * Set MerchantData value
     * @param \PayPal\StructType\MerchantDataType $merchantData
     * @return \PayPal\StructType\DoCaptureRequestType
     */
    public function setMerchantData(\PayPal\StructType\MerchantDataType $merchantData = null)
    {
        $this->MerchantData = $merchantData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoCaptureRequestType
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
