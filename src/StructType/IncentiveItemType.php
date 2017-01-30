<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveItemType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveItemType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemId;
    /**
     * The PurchaseTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PurchaseTime;
    /**
     * The ItemCategoryList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemCategoryList;
    /**
     * The ItemPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemPrice;
    /**
     * The ItemQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ItemQuantity;
    /**
     * Constructor method for IncentiveItemType
     * @uses IncentiveItemType::setItemId()
     * @uses IncentiveItemType::setPurchaseTime()
     * @uses IncentiveItemType::setItemCategoryList()
     * @uses IncentiveItemType::setItemPrice()
     * @uses IncentiveItemType::setItemQuantity()
     * @param string $itemId
     * @param string $purchaseTime
     * @param string $itemCategoryList
     * @param \PayPal\StructType\BasicAmountType $itemPrice
     * @param int $itemQuantity
     */
    public function __construct($itemId = null, $purchaseTime = null, $itemCategoryList = null, \PayPal\StructType\BasicAmountType $itemPrice = null, $itemQuantity = null)
    {
        $this
            ->setItemId($itemId)
            ->setPurchaseTime($purchaseTime)
            ->setItemCategoryList($itemCategoryList)
            ->setItemPrice($itemPrice)
            ->setItemQuantity($itemQuantity);
    }
    /**
     * Get ItemId value
     * @return string|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \PayPal\StructType\IncentiveItemType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get PurchaseTime value
     * @return string|null
     */
    public function getPurchaseTime()
    {
        return $this->PurchaseTime;
    }
    /**
     * Set PurchaseTime value
     * @param string $purchaseTime
     * @return \PayPal\StructType\IncentiveItemType
     */
    public function setPurchaseTime($purchaseTime = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseTime) && !is_string($purchaseTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseTime)), __LINE__);
        }
        $this->PurchaseTime = $purchaseTime;
        return $this;
    }
    /**
     * Get ItemCategoryList value
     * @return string|null
     */
    public function getItemCategoryList()
    {
        return $this->ItemCategoryList;
    }
    /**
     * Set ItemCategoryList value
     * @param string $itemCategoryList
     * @return \PayPal\StructType\IncentiveItemType
     */
    public function setItemCategoryList($itemCategoryList = null)
    {
        // validation for constraint: string
        if (!is_null($itemCategoryList) && !is_string($itemCategoryList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemCategoryList)), __LINE__);
        }
        $this->ItemCategoryList = $itemCategoryList;
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @param \PayPal\StructType\BasicAmountType $itemPrice
     * @return \PayPal\StructType\IncentiveItemType
     */
    public function setItemPrice(\PayPal\StructType\BasicAmountType $itemPrice = null)
    {
        $this->ItemPrice = $itemPrice;
        return $this;
    }
    /**
     * Get ItemQuantity value
     * @return int|null
     */
    public function getItemQuantity()
    {
        return $this->ItemQuantity;
    }
    /**
     * Set ItemQuantity value
     * @param int $itemQuantity
     * @return \PayPal\StructType\IncentiveItemType
     */
    public function setItemQuantity($itemQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($itemQuantity) && !is_numeric($itemQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemQuantity)), __LINE__);
        }
        $this->ItemQuantity = $itemQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveItemType
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
