<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PayeeInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: PayeeInfoType Payee Information
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PayeeInfoType extends AbstractStructBase
{
    /**
     * The PayeeEmail
     * Meta informations extracted from the WSDL
     * - documentation: Email address of payee/agreement owner Character length and limitations: 127 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $PayeeEmail;
    /**
     * The PayeeID
     * Meta informations extracted from the WSDL
     * - documentation: Unique Merchant ID Character length and limitations: 17 single-byte characters
     * - minOccurs: 0
     * - maxLength: 127
     * @var string
     */
    public $PayeeID;
    /**
     * Constructor method for PayeeInfoType
     * @uses PayeeInfoType::setPayeeEmail()
     * @uses PayeeInfoType::setPayeeID()
     * @param string $payeeEmail
     * @param string $payeeID
     */
    public function __construct($payeeEmail = null, $payeeID = null)
    {
        $this
            ->setPayeeEmail($payeeEmail)
            ->setPayeeID($payeeID);
    }
    /**
     * Get PayeeEmail value
     * @return string|null
     */
    public function getPayeeEmail()
    {
        return $this->PayeeEmail;
    }
    /**
     * Set PayeeEmail value
     * @param string $payeeEmail
     * @return \PayPal\StructType\PayeeInfoType
     */
    public function setPayeeEmail($payeeEmail = null)
    {
        // validation for constraint: string
        if (!is_null($payeeEmail) && !is_string($payeeEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payeeEmail)), __LINE__);
        }
        $this->PayeeEmail = $payeeEmail;
        return $this;
    }
    /**
     * Get PayeeID value
     * @return string|null
     */
    public function getPayeeID()
    {
        return $this->PayeeID;
    }
    /**
     * Set PayeeID value
     * @param string $payeeID
     * @return \PayPal\StructType\PayeeInfoType
     */
    public function setPayeeID($payeeID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($payeeID) && strlen($payeeID) > 127) || (is_array($payeeID) && count($payeeID) > 127)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 127 element(s) or a scalar of 127 character(s) at most, "%d" length given', is_scalar($payeeID) ? strlen($payeeID) : count($payeeID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($payeeID) && !is_string($payeeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payeeID)), __LINE__);
        }
        $this->PayeeID = $payeeID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PayeeInfoType
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
