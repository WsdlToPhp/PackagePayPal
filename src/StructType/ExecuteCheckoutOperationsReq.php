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
}
