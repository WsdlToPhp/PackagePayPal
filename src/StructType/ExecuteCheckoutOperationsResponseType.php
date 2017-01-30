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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ExecuteCheckoutOperationsResponseType
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
