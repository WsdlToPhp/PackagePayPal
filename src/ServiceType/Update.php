<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Update extends SoapClientBase
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
     * Method to call the operation originally named UpdateAccessPermissions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\UpdateAccessPermissionsReq $updateAccessPermissionsRequest
     * @return \PayPal\StructType\UpdateAccessPermissionsResponseType|bool
     */
    public function UpdateAccessPermissions(\PayPal\StructType\UpdateAccessPermissionsReq $updateAccessPermissionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateAccessPermissions($updateAccessPermissionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateAuthorization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\UpdateAuthorizationReq $updateAuthorizationRequest
     * @return \PayPal\StructType\UpdateAuthorizationResponseType|bool
     */
    public function UpdateAuthorization(\PayPal\StructType\UpdateAuthorizationReq $updateAuthorizationRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateAuthorization($updateAuthorizationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateRecurringPaymentsProfile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\UpdateRecurringPaymentsProfileReq $updateRecurringPaymentsProfileRequest
     * @return \PayPal\StructType\UpdateRecurringPaymentsProfileResponseType|bool
     */
    public function UpdateRecurringPaymentsProfile(\PayPal\StructType\UpdateRecurringPaymentsProfileReq $updateRecurringPaymentsProfileRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRecurringPaymentsProfile($updateRecurringPaymentsProfileRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\UpdateAccessPermissionsResponseType|\PayPal\StructType\UpdateAuthorizationResponseType|\PayPal\StructType\UpdateRecurringPaymentsProfileResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
