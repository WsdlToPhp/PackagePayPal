<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseTransactionResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReverseTransactionResponseDetailsType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of reversal request. Required
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The ReverseTransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique transaction identifier of the reversal transaction created. Character length and limitations:17 single-byte characters | TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReverseTransactionID;
    /**
     * Constructor method for ReverseTransactionResponseDetailsType
     * @uses ReverseTransactionResponseDetailsType::setStatus()
     * @uses ReverseTransactionResponseDetailsType::setReverseTransactionID()
     * @param string $status
     * @param string $reverseTransactionID
     */
    public function __construct($status = null, $reverseTransactionID = null)
    {
        $this
            ->setStatus($status)
            ->setReverseTransactionID($reverseTransactionID);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \PayPal\StructType\ReverseTransactionResponseDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ReverseTransactionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReverseTransactionID()
    {
        return isset($this->ReverseTransactionID) ? $this->ReverseTransactionID : null;
    }
    /**
     * Set ReverseTransactionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reverseTransactionID
     * @return \PayPal\StructType\ReverseTransactionResponseDetailsType
     */
    public function setReverseTransactionID($reverseTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($reverseTransactionID) && !is_string($reverseTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverseTransactionID, true), gettype($reverseTransactionID)), __LINE__);
        }
        if (is_null($reverseTransactionID) || (is_array($reverseTransactionID) && empty($reverseTransactionID))) {
            unset($this->ReverseTransactionID);
        } else {
            $this->ReverseTransactionID = $reverseTransactionID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ReverseTransactionResponseDetailsType
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
