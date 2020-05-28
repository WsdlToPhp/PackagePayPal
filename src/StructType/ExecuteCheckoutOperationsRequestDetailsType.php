<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCheckoutOperationsRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExecuteCheckoutOperationsRequestDetailsType extends AbstractStructBase
{
    /**
     * The SetDataRequest
     * Meta information extracted from the WSDL
     * - documentation: All the Data required to initiate the checkout session is passed in this element.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\SetDataRequestType
     */
    public $SetDataRequest;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - documentation: On your first invocation of ExecuteCheckoutOperationsRequest, the value of this token is returned by ExecuteCheckoutOperationsResponse. Optional Include this element and its value only if you want to modify an existing checkout
     * session with another invocation of ExecuteCheckoutOperationsRequest; for example, if you want the customer to edit his shipping address on PayPal. Character length and limitations: 20 single-byte characters
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $Token;
    /**
     * The AuthorizationRequest
     * Meta information extracted from the WSDL
     * - documentation: If auto authorization is required, this should be passed in with IsRequested set to yes.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\AuthorizationRequestType
     */
    public $AuthorizationRequest;
    /**
     * Constructor method for ExecuteCheckoutOperationsRequestDetailsType
     * @uses ExecuteCheckoutOperationsRequestDetailsType::setSetDataRequest()
     * @uses ExecuteCheckoutOperationsRequestDetailsType::setToken()
     * @uses ExecuteCheckoutOperationsRequestDetailsType::setAuthorizationRequest()
     * @param \PayPal\StructType\SetDataRequestType $setDataRequest
     * @param string $token
     * @param \PayPal\StructType\AuthorizationRequestType $authorizationRequest
     */
    public function __construct(\PayPal\StructType\SetDataRequestType $setDataRequest = null, $token = null, \PayPal\StructType\AuthorizationRequestType $authorizationRequest = null)
    {
        $this
            ->setSetDataRequest($setDataRequest)
            ->setToken($token)
            ->setAuthorizationRequest($authorizationRequest);
    }
    /**
     * Get SetDataRequest value
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function getSetDataRequest()
    {
        return $this->SetDataRequest;
    }
    /**
     * Set SetDataRequest value
     * @param \PayPal\StructType\SetDataRequestType $setDataRequest
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType
     */
    public function setSetDataRequest(\PayPal\StructType\SetDataRequestType $setDataRequest = null)
    {
        $this->SetDataRequest = $setDataRequest;
        return $this;
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Get AuthorizationRequest value
     * @return \PayPal\StructType\AuthorizationRequestType|null
     */
    public function getAuthorizationRequest()
    {
        return $this->AuthorizationRequest;
    }
    /**
     * Set AuthorizationRequest value
     * @param \PayPal\StructType\AuthorizationRequestType $authorizationRequest
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType
     */
    public function setAuthorizationRequest(\PayPal\StructType\AuthorizationRequestType $authorizationRequest = null)
    {
        $this->AuthorizationRequest = $authorizationRequest;
        return $this;
    }
}
