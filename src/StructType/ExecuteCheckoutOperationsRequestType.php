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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExecuteCheckoutOperationsRequestType
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
