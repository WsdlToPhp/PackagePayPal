<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseTransactionResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReverseTransactionResponseType extends AbstractResponseType
{
    /**
     * The ReverseTransactionResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:ReverseTransactionResponseDetails
     * @var \PayPal\StructType\ReverseTransactionResponseDetailsType
     */
    public $ReverseTransactionResponseDetails;
    /**
     * Constructor method for ReverseTransactionResponseType
     * @uses ReverseTransactionResponseType::setReverseTransactionResponseDetails()
     * @param \PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails
     */
    public function __construct(\PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails = null)
    {
        $this
            ->setReverseTransactionResponseDetails($reverseTransactionResponseDetails);
    }
    /**
     * Get ReverseTransactionResponseDetails value
     * @return \PayPal\StructType\ReverseTransactionResponseDetailsType
     */
    public function getReverseTransactionResponseDetails()
    {
        return $this->ReverseTransactionResponseDetails;
    }
    /**
     * Set ReverseTransactionResponseDetails value
     * @param \PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails
     * @return \PayPal\StructType\ReverseTransactionResponseType
     */
    public function setReverseTransactionResponseDetails(\PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails = null)
    {
        $this->ReverseTransactionResponseDetails = $reverseTransactionResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ReverseTransactionResponseType
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
