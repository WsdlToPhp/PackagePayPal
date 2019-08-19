<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAuthorizationResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateAuthorizationResponseType extends AbstractResponseType
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: An authorization identification number. Character length and limits: 19 single-byte characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The AuthorizationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:AuthorizationInfo
     * @var \PayPal\StructType\AuthorizationInfoType
     */
    public $AuthorizationInfo;
    /**
     * Constructor method for UpdateAuthorizationResponseType
     * @uses UpdateAuthorizationResponseType::setTransactionID()
     * @uses UpdateAuthorizationResponseType::setAuthorizationInfo()
     * @param string $transactionID
     * @param \PayPal\StructType\AuthorizationInfoType $authorizationInfo
     */
    public function __construct($transactionID = null, \PayPal\StructType\AuthorizationInfoType $authorizationInfo = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setAuthorizationInfo($authorizationInfo);
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\UpdateAuthorizationResponseType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get AuthorizationInfo value
     * @return \PayPal\StructType\AuthorizationInfoType|null
     */
    public function getAuthorizationInfo()
    {
        return $this->AuthorizationInfo;
    }
    /**
     * Set AuthorizationInfo value
     * @param \PayPal\StructType\AuthorizationInfoType $authorizationInfo
     * @return \PayPal\StructType\UpdateAuthorizationResponseType
     */
    public function setAuthorizationInfo(\PayPal\StructType\AuthorizationInfoType $authorizationInfo = null)
    {
        $this->AuthorizationInfo = $authorizationInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateAuthorizationResponseType
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
