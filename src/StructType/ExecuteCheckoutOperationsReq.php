<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCheckoutOperationsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExecuteCheckoutOperationsReq extends AbstractStructBase
{
    /**
     * The ExecuteCheckoutOperationsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:ExecuteCheckoutOperationsRequest
     * @var \PayPal\StructType\ExecuteCheckoutOperationsRequestType
     */
    public $ExecuteCheckoutOperationsRequest;
    /**
     * Constructor method for ExecuteCheckoutOperationsReq
     * @uses ExecuteCheckoutOperationsReq::setExecuteCheckoutOperationsRequest()
     * @param \PayPal\StructType\ExecuteCheckoutOperationsRequestType $executeCheckoutOperationsRequest
     */
    public function __construct(\PayPal\StructType\ExecuteCheckoutOperationsRequestType $executeCheckoutOperationsRequest = null)
    {
        $this
            ->setExecuteCheckoutOperationsRequest($executeCheckoutOperationsRequest);
    }
    /**
     * Get ExecuteCheckoutOperationsRequest value
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestType|null
     */
    public function getExecuteCheckoutOperationsRequest()
    {
        return $this->ExecuteCheckoutOperationsRequest;
    }
    /**
     * Set ExecuteCheckoutOperationsRequest value
     * @param \PayPal\StructType\ExecuteCheckoutOperationsRequestType $executeCheckoutOperationsRequest
     * @return \PayPal\StructType\ExecuteCheckoutOperationsReq
     */
    public function setExecuteCheckoutOperationsRequest(\PayPal\StructType\ExecuteCheckoutOperationsRequestType $executeCheckoutOperationsRequest = null)
    {
        $this->ExecuteCheckoutOperationsRequest = $executeCheckoutOperationsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExecuteCheckoutOperationsReq
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
