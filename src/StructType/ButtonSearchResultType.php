<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ButtonSearchResultType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonSearchResultType extends AbstractStructBase
{
    /**
     * The HostedButtonID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HostedButtonID;
    /**
     * The ButtonType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonType;
    /**
     * The ItemName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemName;
    /**
     * The ModifyDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModifyDate;
    /**
     * Constructor method for ButtonSearchResultType
     * @uses ButtonSearchResultType::setHostedButtonID()
     * @uses ButtonSearchResultType::setButtonType()
     * @uses ButtonSearchResultType::setItemName()
     * @uses ButtonSearchResultType::setModifyDate()
     * @param string $hostedButtonID
     * @param string $buttonType
     * @param string $itemName
     * @param string $modifyDate
     */
    public function __construct($hostedButtonID = null, $buttonType = null, $itemName = null, $modifyDate = null)
    {
        $this
            ->setHostedButtonID($hostedButtonID)
            ->setButtonType($buttonType)
            ->setItemName($itemName)
            ->setModifyDate($modifyDate);
    }
    /**
     * Get HostedButtonID value
     * @return string|null
     */
    public function getHostedButtonID()
    {
        return $this->HostedButtonID;
    }
    /**
     * Set HostedButtonID value
     * @param string $hostedButtonID
     * @return \PayPal\StructType\ButtonSearchResultType
     */
    public function setHostedButtonID($hostedButtonID = null)
    {
        // validation for constraint: string
        if (!is_null($hostedButtonID) && !is_string($hostedButtonID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostedButtonID)), __LINE__);
        }
        $this->HostedButtonID = $hostedButtonID;
        return $this;
    }
    /**
     * Get ButtonType value
     * @return string|null
     */
    public function getButtonType()
    {
        return $this->ButtonType;
    }
    /**
     * Set ButtonType value
     * @param string $buttonType
     * @return \PayPal\StructType\ButtonSearchResultType
     */
    public function setButtonType($buttonType = null)
    {
        // validation for constraint: string
        if (!is_null($buttonType) && !is_string($buttonType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buttonType)), __LINE__);
        }
        $this->ButtonType = $buttonType;
        return $this;
    }
    /**
     * Get ItemName value
     * @return string|null
     */
    public function getItemName()
    {
        return $this->ItemName;
    }
    /**
     * Set ItemName value
     * @param string $itemName
     * @return \PayPal\StructType\ButtonSearchResultType
     */
    public function setItemName($itemName = null)
    {
        // validation for constraint: string
        if (!is_null($itemName) && !is_string($itemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemName)), __LINE__);
        }
        $this->ItemName = $itemName;
        return $this;
    }
    /**
     * Get ModifyDate value
     * @return string|null
     */
    public function getModifyDate()
    {
        return $this->ModifyDate;
    }
    /**
     * Set ModifyDate value
     * @param string $modifyDate
     * @return \PayPal\StructType\ButtonSearchResultType
     */
    public function setModifyDate($modifyDate = null)
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modifyDate)), __LINE__);
        }
        $this->ModifyDate = $modifyDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ButtonSearchResultType
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
