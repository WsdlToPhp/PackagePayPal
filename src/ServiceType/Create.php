<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Create extends SoapClientBase
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
     * Method to call the operation originally named CreateMobilePayment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequesterCredentials
     * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes : \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CreateMobilePaymentReq $createMobilePaymentRequest
     * @return \PayPal\StructType\CreateMobilePaymentResponseType|bool
     */
    public function CreateMobilePayment(\PayPal\StructType\CreateMobilePaymentReq $createMobilePaymentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateMobilePayment($createMobilePaymentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateBillingAgreement
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequesterCredentials
     * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes : \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CreateBillingAgreementReq $createBillingAgreementRequest
     * @return \PayPal\StructType\CreateBillingAgreementResponseType|bool
     */
    public function CreateBillingAgreement(\PayPal\StructType\CreateBillingAgreementReq $createBillingAgreementRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateBillingAgreement($createBillingAgreementRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateRecurringPaymentsProfile
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : RequesterCredentials
     * - SOAPHeaderNamespaces : urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes : \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders : required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CreateRecurringPaymentsProfileReq $createRecurringPaymentsProfileRequest
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileResponseType|bool
     */
    public function CreateRecurringPaymentsProfile(\PayPal\StructType\CreateRecurringPaymentsProfileReq $createRecurringPaymentsProfileRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->CreateRecurringPaymentsProfile($createRecurringPaymentsProfileRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\CreateBillingAgreementResponseType|\PayPal\StructType\CreateMobilePaymentResponseType|\PayPal\StructType\CreateRecurringPaymentsProfileResponseType
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
