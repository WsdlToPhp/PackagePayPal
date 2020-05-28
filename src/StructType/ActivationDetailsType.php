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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $InitialAmount;
    /**
     * The FailedInitialAmountAction
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\FailedPaymentActionType', is_array($failedInitialAmountAction) ? implode(', ', $failedInitialAmountAction) : var_export($failedInitialAmountAction, true), implode(', ', \PayPal\EnumType\FailedPaymentActionType::getValidValues())), __LINE__);
        }
        $this->FailedInitialAmountAction = $failedInitialAmountAction;
        return $this;
    }
}
