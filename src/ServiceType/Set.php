<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Set extends SoapClientBase
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
     * Method to call the operation originally named SetMobileCheckout
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SetMobileCheckoutReq $setMobileCheckoutRequest
     * @return \PayPal\StructType\SetMobileCheckoutResponseType|bool
     */
    public function SetMobileCheckout(\PayPal\StructType\SetMobileCheckoutReq $setMobileCheckoutRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetMobileCheckout($setMobileCheckoutRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAuthFlowParam
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SetAuthFlowParamReq $setAuthFlowParamRequest
     * @return \PayPal\StructType\SetAuthFlowParamResponseType|bool
     */
    public function SetAuthFlowParam(\PayPal\StructType\SetAuthFlowParamReq $setAuthFlowParamRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetAuthFlowParam($setAuthFlowParamRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetAccessPermissions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SetAccessPermissionsReq $setAccessPermissionsRequest
     * @return \PayPal\StructType\SetAccessPermissionsResponseType|bool
     */
    public function SetAccessPermissions(\PayPal\StructType\SetAccessPermissionsReq $setAccessPermissionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetAccessPermissions($setAccessPermissionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetExpressCheckout
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SetExpressCheckoutReq $setExpressCheckoutRequest
     * @return \PayPal\StructType\SetExpressCheckoutResponseType|bool
     */
    public function SetExpressCheckout(\PayPal\StructType\SetExpressCheckoutReq $setExpressCheckoutRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetExpressCheckout($setExpressCheckoutRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetCustomerBillingAgreement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\SetCustomerBillingAgreementReq $setCustomerBillingAgreementRequest
     * @return \PayPal\StructType\SetCustomerBillingAgreementResponseType|bool
     */
    public function SetCustomerBillingAgreement(\PayPal\StructType\SetCustomerBillingAgreementReq $setCustomerBillingAgreementRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetCustomerBillingAgreement($setCustomerBillingAgreementRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\SetAccessPermissionsResponseType|\PayPal\StructType\SetAuthFlowParamResponseType|\PayPal\StructType\SetCustomerBillingAgreementResponseType|\PayPal\StructType\SetExpressCheckoutResponseType|\PayPal\StructType\SetMobileCheckoutResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
