<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCheckoutOperationsResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExecuteCheckoutOperationsResponseDetailsType extends AbstractStructBase
{
    /**
     * The SetDataResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \PayPal\StructType\SetDataResponseType
     */
    public $SetDataResponse;
    /**
     * The AuthorizationResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\AuthorizationResponseType
     */
    public $AuthorizationResponse;
    /**
     * Constructor method for ExecuteCheckoutOperationsResponseDetailsType
     * @uses ExecuteCheckoutOperationsResponseDetailsType::setSetDataResponse()
     * @uses ExecuteCheckoutOperationsResponseDetailsType::setAuthorizationResponse()
     * @param \PayPal\StructType\SetDataResponseType $setDataResponse
     * @param \PayPal\StructType\AuthorizationResponseType $authorizationResponse
     */
    public function __construct(\PayPal\StructType\SetDataResponseType $setDataResponse = null, \PayPal\StructType\AuthorizationResponseType $authorizationResponse = null)
    {
        $this
            ->setSetDataResponse($setDataResponse)
            ->setAuthorizationResponse($authorizationResponse);
    }
    /**
     * Get SetDataResponse value
     * @return \PayPal\StructType\SetDataResponseType
     */
    public function getSetDataResponse()
    {
        return $this->SetDataResponse;
    }
    /**
     * Set SetDataResponse value
     * @param \PayPal\StructType\SetDataResponseType $setDataResponse
     * @return \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType
     */
    public function setSetDataResponse(\PayPal\StructType\SetDataResponseType $setDataResponse = null)
    {
        $this->SetDataResponse = $setDataResponse;
        return $this;
    }
    /**
     * Get AuthorizationResponse value
     * @return \PayPal\StructType\AuthorizationResponseType|null
     */
    public function getAuthorizationResponse()
    {
        return $this->AuthorizationResponse;
    }
    /**
     * Set AuthorizationResponse value
     * @param \PayPal\StructType\AuthorizationResponseType $authorizationResponse
     * @return \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType
     */
    public function setAuthorizationResponse(\PayPal\StructType\AuthorizationResponseType $authorizationResponse = null)
    {
        $this->AuthorizationResponse = $authorizationResponse;
        return $this;
    }
}
