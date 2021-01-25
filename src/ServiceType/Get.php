<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Get extends SoapClientBase
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
     * Method to call the operation originally named GetTransactionDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetTransactionDetailsReq $getTransactionDetailsRequest
     * @return \PayPal\StructType\GetTransactionDetailsResponseType|bool
     */
    public function GetTransactionDetails(\PayPal\StructType\GetTransactionDetailsReq $getTransactionDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetTransactionDetails', array(
                $getTransactionDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBoardingDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetBoardingDetailsReq $getBoardingDetailsRequest
     * @return \PayPal\StructType\GetBoardingDetailsResponseType|bool
     */
    public function GetBoardingDetails(\PayPal\StructType\GetBoardingDetailsReq $getBoardingDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBoardingDetails', array(
                $getBoardingDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMobileStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetMobileStatusReq $getMobileStatusRequest
     * @return \PayPal\StructType\GetMobileStatusResponseType|bool
     */
    public function GetMobileStatus(\PayPal\StructType\GetMobileStatusReq $getMobileStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetMobileStatus', array(
                $getMobileStatusRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBalance
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetBalanceReq $getBalanceRequest
     * @return \PayPal\StructType\GetBalanceResponseType|bool
     */
    public function GetBalance(\PayPal\StructType\GetBalanceReq $getBalanceRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBalance', array(
                $getBalanceRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPalDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetPalDetailsReq $getPalDetailsRequest
     * @return \PayPal\StructType\GetPalDetailsResponseType|bool
     */
    public function GetPalDetails(\PayPal\StructType\GetPalDetailsReq $getPalDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetPalDetails', array(
                $getPalDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAuthDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetAuthDetailsReq $getAuthDetailsRequest
     * @return \PayPal\StructType\GetAuthDetailsResponseType|bool
     */
    public function GetAuthDetails(\PayPal\StructType\GetAuthDetailsReq $getAuthDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetAuthDetails', array(
                $getAuthDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccessPermissionDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetAccessPermissionDetailsReq $getAccessPermissionDetailsRequest
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseType|bool
     */
    public function GetAccessPermissionDetails(\PayPal\StructType\GetAccessPermissionDetailsReq $getAccessPermissionDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetAccessPermissionDetails', array(
                $getAccessPermissionDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetIncentiveEvaluation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetIncentiveEvaluationReq $getIncentiveEvaluationRequest
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseType|bool
     */
    public function GetIncentiveEvaluation(\PayPal\StructType\GetIncentiveEvaluationReq $getIncentiveEvaluationRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetIncentiveEvaluation', array(
                $getIncentiveEvaluationRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetExpressCheckoutDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetExpressCheckoutDetailsReq $getExpressCheckoutDetailsRequest
     * @return \PayPal\StructType\GetExpressCheckoutDetailsResponseType|bool
     */
    public function GetExpressCheckoutDetails(\PayPal\StructType\GetExpressCheckoutDetailsReq $getExpressCheckoutDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetExpressCheckoutDetails', array(
                $getExpressCheckoutDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBillingAgreementCustomerDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetBillingAgreementCustomerDetailsReq $getBillingAgreementCustomerDetailsRequest
     * @return \PayPal\StructType\GetBillingAgreementCustomerDetailsResponseType|bool
     */
    public function GetBillingAgreementCustomerDetails(\PayPal\StructType\GetBillingAgreementCustomerDetailsReq $getBillingAgreementCustomerDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetBillingAgreementCustomerDetails', array(
                $getBillingAgreementCustomerDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRecurringPaymentsProfileDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsReq $getRecurringPaymentsProfileDetailsRequest
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseType|bool
     */
    public function GetRecurringPaymentsProfileDetails(\PayPal\StructType\GetRecurringPaymentsProfileDetailsReq $getRecurringPaymentsProfileDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetRecurringPaymentsProfileDetails', array(
                $getRecurringPaymentsProfileDetailsRequest,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\GetAccessPermissionDetailsResponseType|\PayPal\StructType\GetAuthDetailsResponseType|\PayPal\StructType\GetBalanceResponseType|\PayPal\StructType\GetBillingAgreementCustomerDetailsResponseType|\PayPal\StructType\GetBoardingDetailsResponseType|\PayPal\StructType\GetExpressCheckoutDetailsResponseType|\PayPal\StructType\GetIncentiveEvaluationResponseType|\PayPal\StructType\GetMobileStatusResponseType|\PayPal\StructType\GetPalDetailsResponseType|\PayPal\StructType\GetRecurringPaymentsProfileDetailsResponseType|\PayPal\StructType\GetTransactionDetailsResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
