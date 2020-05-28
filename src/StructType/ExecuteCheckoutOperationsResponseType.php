<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCheckoutOperationsResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ExecuteCheckoutOperationsResponseType extends AbstractResponseType
{
    /**
     * The ExecuteCheckoutOperationsResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:ExecuteCheckoutOperationsResponseDetails
     * @var \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType
     */
    public $ExecuteCheckoutOperationsResponseDetails;
    /**
     * Constructor method for ExecuteCheckoutOperationsResponseType
     * @uses ExecuteCheckoutOperationsResponseType::setExecuteCheckoutOperationsResponseDetails()
     * @param \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType $executeCheckoutOperationsResponseDetails
     */
    public function __construct(\PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType $executeCheckoutOperationsResponseDetails = null)
    {
        $this
            ->setExecuteCheckoutOperationsResponseDetails($executeCheckoutOperationsResponseDetails);
    }
    /**
     * Get ExecuteCheckoutOperationsResponseDetails value
     * @return \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType
     */
    public function getExecuteCheckoutOperationsResponseDetails()
    {
        return $this->ExecuteCheckoutOperationsResponseDetails;
    }
    /**
     * Set ExecuteCheckoutOperationsResponseDetails value
     * @param \PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType $executeCheckoutOperationsResponseDetails
     * @return \PayPal\StructType\ExecuteCheckoutOperationsResponseType
     */
    public function setExecuteCheckoutOperationsResponseDetails(\PayPal\StructType\ExecuteCheckoutOperationsResponseDetailsType $executeCheckoutOperationsResponseDetails = null)
    {
        $this->ExecuteCheckoutOperationsResponseDetails = $executeCheckoutOperationsResponseDetails;
        return $this;
    }
}
