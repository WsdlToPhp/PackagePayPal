<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivationDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ActivationDetailsType extends AbstractStructBase
{
    /**
     * The InitialAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $InitialAmount;
    /**
     * The FailedInitialAmountAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FailedInitialAmountAction;
    /**
     * Constructor method for ActivationDetailsType
     * @uses ActivationDetailsType::setInitialAmount()
     * @uses ActivationDetailsType::setFailedInitialAmountAction()
     * @param \PayPal\StructType\BasicAmountType $initialAmount
     * @param string $failedInitialAmountAction
     */
    public function __construct(\PayPal\StructType\BasicAmountType $initialAmount = null, $failedInitialAmountAction = null)
    {
        $this
            ->setInitialAmount($initialAmount)
            ->setFailedInitialAmountAction($failedInitialAmountAction);
    }
    /**
     * Get InitialAmount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getInitialAmount()
    {
        return $this->InitialAmount;
    }
    /**
     * Set InitialAmount value
     * @param \PayPal\StructType\BasicAmountType $initialAmount
     * @return \PayPal\StructType\ActivationDetailsType
     */
    public function setInitialAmount(\PayPal\StructType\BasicAmountType $initialAmount = null)
    {
        $this->InitialAmount = $initialAmount;
        return $this;
    }
    /**
     * Get FailedInitialAmountAction value
     * @return string|null
     */
    public function getFailedInitialAmountAction()
    {
        return $this->FailedInitialAmountAction;
    }
    /**
     * Set FailedInitialAmountAction value
     * @uses \PayPal\EnumType\FailedPaymentActionType::valueIsValid()
     * @uses \PayPal\EnumType\FailedPaymentActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $failedInitialAmountAction
     * @return \PayPal\StructType\ActivationDetailsType
     */
    public function setFailedInitialAmountAction($failedInitialAmountAction = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\FailedPaymentActionType::valueIsValid($failedInitialAmountAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $failedInitialAmountAction, implode(', ', \PayPal\EnumType\FailedPaymentActionType::getValidValues())), __LINE__);
        }
        $this->FailedInitialAmountAction = $failedInitialAmountAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ActivationDetailsType
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
