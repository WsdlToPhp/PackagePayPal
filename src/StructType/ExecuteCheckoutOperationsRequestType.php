<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCheckoutOperationsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExecuteCheckoutOperationsRequestType extends AbstractRequestType
{
    /**
     * The ExecuteCheckoutOperationsRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:ExecuteCheckoutOperationsRequestDetails
     * @var \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType
     */
    public $ExecuteCheckoutOperationsRequestDetails;
    /**
     * Constructor method for ExecuteCheckoutOperationsRequestType
     * @uses ExecuteCheckoutOperationsRequestType::setExecuteCheckoutOperationsRequestDetails()
     * @param \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType $executeCheckoutOperationsRequestDetails
     */
    public function __construct(\PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType $executeCheckoutOperationsRequestDetails = null)
    {
        $this
            ->setExecuteCheckoutOperationsRequestDetails($executeCheckoutOperationsRequestDetails);
    }
    /**
     * Get ExecuteCheckoutOperationsRequestDetails value
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType
     */
    public function getExecuteCheckoutOperationsRequestDetails()
    {
        return $this->ExecuteCheckoutOperationsRequestDetails;
    }
    /**
     * Set ExecuteCheckoutOperationsRequestDetails value
     * @param \PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType $executeCheckoutOperationsRequestDetails
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestType
     */
    public function setExecuteCheckoutOperationsRequestDetails(\PayPal\StructType\ExecuteCheckoutOperationsRequestDetailsType $executeCheckoutOperationsRequestDetails = null)
    {
        $this->ExecuteCheckoutOperationsRequestDetails = $executeCheckoutOperationsRequestDetails;
        return $this;
    }
}
