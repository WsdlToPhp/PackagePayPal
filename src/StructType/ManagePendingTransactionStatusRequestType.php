<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManagePendingTransactionStatusRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagePendingTransactionStatusRequestType extends AbstractRequestType
{
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: TransactionId - Type for a PayPal Transaction ID.
     * @var string
     */
    public $TransactionID;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Action;
    /**
     * Constructor method for ManagePendingTransactionStatusRequestType
     * @uses ManagePendingTransactionStatusRequestType::setTransactionID()
     * @uses ManagePendingTransactionStatusRequestType::setAction()
     * @param string $transactionID
     * @param string $action
     */
    public function __construct($transactionID = null, $action = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setAction($action);
    }
    /**
     * Get TransactionID value
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\ManagePendingTransactionStatusRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \PayPal\EnumType\FMFPendingTransactionActionType::valueIsValid()
     * @uses \PayPal\EnumType\FMFPendingTransactionActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \PayPal\StructType\ManagePendingTransactionStatusRequestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\FMFPendingTransactionActionType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \PayPal\EnumType\FMFPendingTransactionActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManagePendingTransactionStatusRequestType
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
