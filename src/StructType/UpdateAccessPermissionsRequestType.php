<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAccessPermissionsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateAccessPermissionsRequestType extends AbstractRequestType
{
    /**
     * The PayerID
     * Meta informations extracted from the WSDL
     * - documentation: Unique PayPal customer account number, the value of which was returned by GetAuthDetails Response. Required Character length and limitations: 20 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 127
     * @var string
     */
    public $PayerID;
    /**
     * Constructor method for UpdateAccessPermissionsRequestType
     * @uses UpdateAccessPermissionsRequestType::setPayerID()
     * @param string $payerID
     */
    public function __construct($payerID = null)
    {
        $this
            ->setPayerID($payerID);
    }
    /**
     * Get PayerID value
     * @return string
     */
    public function getPayerID()
    {
        return $this->PayerID;
    }
    /**
     * Set PayerID value
     * @param string $payerID
     * @return \PayPal\StructType\UpdateAccessPermissionsRequestType
     */
    public function setPayerID($payerID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($payerID) && strlen($payerID) > 127) || (is_array($payerID) && count($payerID) > 127)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 127 element(s) or a scalar of 127 character(s) at most, "%d" length given', is_scalar($payerID) ? strlen($payerID) : count($payerID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($payerID) && !is_string($payerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payerID)), __LINE__);
        }
        $this->PayerID = $payerID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateAccessPermissionsRequestType
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
