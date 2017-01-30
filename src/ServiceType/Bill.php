<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Bill ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Bill extends SoapClientBase
{
    /**
     * Sets the RequesterCredentials SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \PayPal\StructType\CustomSecurityHeaderType $requesterCredentials
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderRequesterCredentials(\PayPal\StructType\CustomSecurityHeaderType $requesterCredentials, $nameSpace = 'urn:ebay:api:PayPalAPI', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'RequesterCredentials', $requesterCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named BillUser
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequesterCredentials
     * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes : \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillUserReq $billUserRequest
     * @return \PayPal\StructType\BillUserResponseType|bool
     */
    public function BillUser(\PayPal\StructType\BillUserReq $billUserRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->BillUser($billUserRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named BillAgreementUpdate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequesterCredentials
     * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes : \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillAgreementUpdateReq $billAgreementUpdateRequest
     * @return \PayPal\StructType\BAUpdateResponseType|bool
     */
    public function BillAgreementUpdate(\PayPal\StructType\BillAgreementUpdateReq $billAgreementUpdateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->BillAgreementUpdate($billAgreementUpdateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named BillOutstandingAmount
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequesterCredentials
     * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes : \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\BillOutstandingAmountReq $billOutstandingAmountRequest
     * @return \PayPal\StructType\BillOutstandingAmountResponseType|bool
     */
    public function BillOutstandingAmount(\PayPal\StructType\BillOutstandingAmountReq $billOutstandingAmountRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->BillOutstandingAmount($billOutstandingAmountRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\BAUpdateResponseType|\PayPal\StructType\BillOutstandingAmountResponseType|\PayPal\StructType\BillUserResponseType
     */
    public function getResult()
    {
        return parent::getResult();
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
