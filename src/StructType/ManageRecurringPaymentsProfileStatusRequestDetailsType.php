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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ProfileID;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Action;
    /**
     * The Note
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \PayPal\EnumType\StatusChangeActionType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManageRecurringPaymentsProfileStatusRequestDetailsType
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
