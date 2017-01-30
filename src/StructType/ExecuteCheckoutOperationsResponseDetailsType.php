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
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \PayPal\StructType\SetDataResponseType
     */
    public $SetDataResponse;
    /**
     * The AuthorizationResponse
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType
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
