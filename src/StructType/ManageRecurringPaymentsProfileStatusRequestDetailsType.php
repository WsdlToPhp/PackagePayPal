<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageRecurringPaymentsProfileStatusRequestDetailsType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManageRecurringPaymentsProfileStatusRequestDetailsType extends AbstractStructBase
{
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileID;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Action;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * Constructor method for ManageRecurringPaymentsProfileStatusRequestDetailsType
     * @uses ManageRecurringPaymentsProfileStatusRequestDetailsType::setProfileID()
     * @uses ManageRecurringPaymentsProfileStatusRequestDetailsType::setAction()
     * @uses ManageRecurringPaymentsProfileStatusRequestDetailsType::setNote()
     * @param string $profileID
     * @param string $action
     * @param string $note
     */
    public function __construct($profileID = null, $action = null, $note = null)
    {
        $this
            ->setProfileID($profileID)
            ->setAction($action)
            ->setNote($note);
    }
    /**
     * Get ProfileID value
     * @return string
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
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
     * @uses \PayPal\EnumType\StatusChangeActionType::valueIsValid()
     * @uses \PayPal\EnumType\StatusChangeActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\StatusChangeActionType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\StatusChangeActionType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \PayPal\EnumType\StatusChangeActionType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
}
