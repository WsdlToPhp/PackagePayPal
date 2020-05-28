<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemTrackingDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ItemTrackingDetailsType extends AbstractStructBase
{
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Item Number. Required
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The ItemQty
     * Meta information extracted from the WSDL
     * - documentation: Option Quantity. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemQty;
    /**
     * The ItemQtyDelta
     * Meta information extracted from the WSDL
     * - documentation: Item Quantity Delta. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemQtyDelta;
    /**
     * The ItemAlert
     * Meta information extracted from the WSDL
     * - documentation: Item Alert. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemAlert;
    /**
     * The ItemCost
     * Meta information extracted from the WSDL
     * - documentation: Item Cost. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ItemCost;
    /**
     * Constructor method for ItemTrackingDetailsType
     * @uses ItemTrackingDetailsType::setItemNumber()
     * @uses ItemTrackingDetailsType::setItemQty()
     * @uses ItemTrackingDetailsType::setItemQtyDelta()
     * @uses ItemTrackingDetailsType::setItemAlert()
     * @uses ItemTrackingDetailsType::setItemCost()
     * @param string $itemNumber
     * @param string $itemQty
     * @param string $itemQtyDelta
     * @param string $itemAlert
     * @param string $itemCost
     */
    public function __construct($itemNumber = null, $itemQty = null, $itemQtyDelta = null, $itemAlert = null, $itemCost = null)
    {
        $this
            ->setItemNumber($itemNumber)
            ->setItemQty($itemQty)
            ->setItemQtyDelta($itemQtyDelta)
            ->setItemAlert($itemAlert)
            ->setItemCost($itemCost);
    }
    /**
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \PayPal\StructType\ItemTrackingDetailsType
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get ItemQty value
     * @return string|null
     */
    public function getItemQty()
    {
        return $this->ItemQty;
    }
    /**
     * Set ItemQty value
     * @param string $itemQty
     * @return \PayPal\StructType\ItemTrackingDetailsType
     */
    public function setItemQty($itemQty = null)
    {
        // validation for constraint: string
        if (!is_null($itemQty) && !is_string($itemQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemQty, true), gettype($itemQty)), __LINE__);
        }
        $this->ItemQty = $itemQty;
        return $this;
    }
    /**
     * Get ItemQtyDelta value
     * @return string|null
     */
    public function getItemQtyDelta()
    {
        return $this->ItemQtyDelta;
    }
    /**
     * Set ItemQtyDelta value
     * @param string $itemQtyDelta
     * @return \PayPal\StructType\ItemTrackingDetailsType
     */
    public function setItemQtyDelta($itemQtyDelta = null)
    {
        // validation for constraint: string
        if (!is_null($itemQtyDelta) && !is_string($itemQtyDelta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemQtyDelta, true), gettype($itemQtyDelta)), __LINE__);
        }
        $this->ItemQtyDelta = $itemQtyDelta;
        return $this;
    }
    /**
     * Get ItemAlert value
     * @return string|null
     */
    public function getItemAlert()
    {
        return $this->ItemAlert;
    }
    /**
     * Set ItemAlert value
     * @param string $itemAlert
     * @return \PayPal\StructType\ItemTrackingDetailsType
     */
    public function setItemAlert($itemAlert = null)
    {
        // validation for constraint: string
        if (!is_null($itemAlert) && !is_string($itemAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemAlert, true), gettype($itemAlert)), __LINE__);
        }
        $this->ItemAlert = $itemAlert;
        return $this;
    }
    /**
     * Get ItemCost value
     * @return string|null
     */
    public function getItemCost()
    {
        return $this->ItemCost;
    }
    /**
     * Set ItemCost value
     * @param string $itemCost
     * @return \PayPal\StructType\ItemTrackingDetailsType
     */
    public function setItemCost($itemCost = null)
    {
        // validation for constraint: string
        if (!is_null($itemCost) && !is_string($itemCost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemCost, true), gettype($itemCost)), __LINE__);
        }
        $this->ItemCost = $itemCost;
        return $this;
    }
}
