<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Transaction ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Transaction extends SoapClientBase
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
     * Method to call the operation originally named TransactionSearch
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:api:PayPalAPI
     * - SOAPHeaderTypes: \PayPal\StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\TransactionSearchReq $transactionSearchRequest
     * @return \PayPal\StructType\TransactionSearchResponseType|bool
     */
    public function TransactionSearch(\PayPal\StructType\TransactionSearchReq $transactionSearchRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('TransactionSearch', array(
                $transactionSearchRequest,
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
     * @return \PayPal\StructType\TransactionSearchResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
