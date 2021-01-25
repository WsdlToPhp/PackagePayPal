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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:UATPDetails
     * @var \PayPal\StructType\UATPDetailsType
     */
    public $UATPDetails;
    /**
     * The AuthorizationCode
     * Meta information extracted from the WSDL
     * - documentation: Auth Authorization Code.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AuthorizationCode;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Invoice ID. A pass through.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * Constructor method for DoUATPAuthorizationResponseType
     * @uses DoUATPAuthorizationResponseType::setUATPDetails()
     * @uses DoUATPAuthorizationResponseType::setAuthorizationCode()
     * @uses DoUATPAuthorizationResponseType::setInvoiceID()
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @param string $authorizationCode
     * @param string $invoiceID
     */
    public function __construct(\PayPal\StructType\UATPDetailsType $uATPDetails = null, $authorizationCode = null, $invoiceID = null)
    {
        $this
            ->setUATPDetails($uATPDetails)
            ->setAuthorizationCode($authorizationCode)
            ->setInvoiceID($invoiceID);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationCode, true), gettype($authorizationCode)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceID, true), gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
        return $this;
    }
}
