<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the revise status information details (e.g., item properties information). ths node contains system set data only - always output and always all data. no minccurs needed, except for motors specific data, since it wil lnot be
 * retruned for non motors items
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReviseStatusType extends AbstractStructBase
{
    /**
     * The ItemRevised
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the item was revised since the auction started.
     * @var bool
     */
    public $ItemRevised;
    /**
     * The BuyItNowAdded
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that a Buy It Now Price was added for the item. Only returned for Motors items.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowAdded;
    /**
     * The BuyItNowLowered
     * Meta information extracted from the WSDL
     * - documentation: Replaces BinLowered as of API version 305. If true, indicates that the Buy It Now Price was lowered for the item. Only returned for Motors items.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowLowered;
    /**
     * The ReserveLowered
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that the Reserve Price was lowered for the item. Only returned for Motors items.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveLowered;
    /**
     * The ReserveRemoved
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that the Reserve Price was removed from the item. Only returned for eBay Motors items.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveRemoved;
    /**
     * Constructor method for ReviseStatusType
     * @uses ReviseStatusType::setItemRevised()
     * @uses ReviseStatusType::setBuyItNowAdded()
     * @uses ReviseStatusType::setBuyItNowLowered()
     * @uses ReviseStatusType::setReserveLowered()
     * @uses ReviseStatusType::setReserveRemoved()
     * @param bool $itemRevised
     * @param bool $buyItNowAdded
     * @param bool $buyItNowLowered
     * @param bool $reserveLowered
     * @param bool $reserveRemoved
     */
    public function __construct($itemRevised = null, $buyItNowAdded = null, $buyItNowLowered = null, $reserveLowered = null, $reserveRemoved = null)
    {
        $this
            ->setItemRevised($itemRevised)
            ->setBuyItNowAdded($buyItNowAdded)
            ->setBuyItNowLowered($buyItNowLowered)
            ->setReserveLowered($reserveLowered)
            ->setReserveRemoved($reserveRemoved);
    }
    /**
     * Get ItemRevised value
     * @return bool|null
     */
    public function getItemRevised()
    {
        return $this->ItemRevised;
    }
    /**
     * Set ItemRevised value
     * @param bool $itemRevised
     * @return \PayPal\StructType\ReviseStatusType
     */
    public function setItemRevised($itemRevised = null)
    {
        // validation for constraint: boolean
        if (!is_null($itemRevised) && !is_bool($itemRevised)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($itemRevised, true), gettype($itemRevised)), __LINE__);
        }
        $this->ItemRevised = $itemRevised;
        return $this;
    }
    /**
     * Get BuyItNowAdded value
     * @return bool|null
     */
    public function getBuyItNowAdded()
    {
        return $this->BuyItNowAdded;
    }
    /**
     * Set BuyItNowAdded value
     * @param bool $buyItNowAdded
     * @return \PayPal\StructType\ReviseStatusType
     */
    public function setBuyItNowAdded($buyItNowAdded = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAdded) && !is_bool($buyItNowAdded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowAdded, true), gettype($buyItNowAdded)), __LINE__);
        }
        $this->BuyItNowAdded = $buyItNowAdded;
        return $this;
    }
    /**
     * Get BuyItNowLowered value
     * @return bool|null
     */
    public function getBuyItNowLowered()
    {
        return $this->BuyItNowLowered;
    }
    /**
     * Set BuyItNowLowered value
     * @param bool $buyItNowLowered
     * @return \PayPal\StructType\ReviseStatusType
     */
    public function setBuyItNowLowered($buyItNowLowered = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowLowered) && !is_bool($buyItNowLowered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowLowered, true), gettype($buyItNowLowered)), __LINE__);
        }
        $this->BuyItNowLowered = $buyItNowLowered;
        return $this;
    }
    /**
     * Get ReserveLowered value
     * @return bool|null
     */
    public function getReserveLowered()
    {
        return $this->ReserveLowered;
    }
    /**
     * Set ReserveLowered value
     * @param bool $reserveLowered
     * @return \PayPal\StructType\ReviseStatusType
     */
    public function setReserveLowered($reserveLowered = null)
    {
        // validation for constraint: boolean
        if (!is_null($reserveLowered) && !is_bool($reserveLowered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveLowered, true), gettype($reserveLowered)), __LINE__);
        }
        $this->ReserveLowered = $reserveLowered;
        return $this;
    }
    /**
     * Get ReserveRemoved value
     * @return bool|null
     */
    public function getReserveRemoved()
    {
        return $this->ReserveRemoved;
    }
    /**
     * Set ReserveRemoved value
     * @param bool $reserveRemoved
     * @return \PayPal\StructType\ReviseStatusType
     */
    public function setReserveRemoved($reserveRemoved = null)
    {
        // validation for constraint: boolean
        if (!is_null($reserveRemoved) && !is_bool($reserveRemoved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveRemoved, true), gettype($reserveRemoved)), __LINE__);
        }
        $this->ReserveRemoved = $reserveRemoved;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ReviseStatusType
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
