<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPAuthorizationResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPAuthorizationResponseType extends DoAuthorizationResponseType
{
    /**
     * The UATPDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:UATPDetails
     * @var \PayPal\StructType\UATPDetailsType
     */
    public $UATPDetails;
    /**
     * The AuthorizationCode
     * Meta informations extracted from the WSDL
     * - documentation: Auth Authorization Code.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AuthorizationCode;
    /**
     * The InvoiceID
     * Meta informations extracted from the WSDL
     * - documentation: Invoice ID. A pass through.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
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
     * Constructor method for DoUATPAuthorizationResponseType
     * @uses DoUATPAuthorizationResponseType::setUATPDetails()
     * @uses DoUATPAuthorizationResponseType::setAuthorizationCode()
     * @uses DoUATPAuthorizationResponseType::setInvoiceID()
     * @uses DoUATPAuthorizationResponseType::setMsgSubID()
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @param string $authorizationCode
     * @param string $invoiceID
     * @param string $msgSubID
     */
    public function __construct(\PayPal\StructType\UATPDetailsType $uATPDetails = null, $authorizationCode = null, $invoiceID = null, $msgSubID = null)
    {
        $this
            ->setUATPDetails($uATPDetails)
            ->setAuthorizationCode($authorizationCode)
            ->setInvoiceID($invoiceID)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get UATPDetails value
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function getUATPDetails()
    {
        return $this->UATPDetails;
    }
    /**
     * Set UATPDetails value
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @return \PayPal\StructType\DoUATPAuthorizationResponseType
     */
    public function setUATPDetails(\PayPal\StructType\UATPDetailsType $uATPDetails = null)
    {
        $this->UATPDetails = $uATPDetails;
        return $this;
    }
    /**
     * Get AuthorizationCode value
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->AuthorizationCode;
    }
    /**
     * Set AuthorizationCode value
     * @param string $authorizationCode
     * @return \PayPal\StructType\DoUATPAuthorizationResponseType
     */
    public function setAuthorizationCode($authorizationCode = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationCode) && !is_string($authorizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationCode)), __LINE__);
        }
        $this->AuthorizationCode = $authorizationCode;
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
     * @return \PayPal\StructType\DoUATPAuthorizationResponseType
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
     * @return \PayPal\StructType\DoUATPAuthorizationResponseType
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
     * @return \PayPal\StructType\DoUATPAuthorizationResponseType
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
