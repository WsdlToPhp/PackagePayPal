<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuctionInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: AuctionInfoType Basic information about an auction.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AuctionInfoType extends AbstractStructBase
{
    /**
     * The multiItem
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $multiItem;
    /**
     * The BuyerID
     * Meta information extracted from the WSDL
     * - documentation: Customer's auction ID
     * - minOccurs: 0
     * @var string
     */
    public $BuyerID;
    /**
     * The ClosingDate
     * Meta information extracted from the WSDL
     * - documentation: Auction's close date
     * - minOccurs: 0
     * @var string
     */
    public $ClosingDate;
    /**
     * Constructor method for AuctionInfoType
     * @uses AuctionInfoType::setMultiItem()
     * @uses AuctionInfoType::setBuyerID()
     * @uses AuctionInfoType::setClosingDate()
     * @param string $multiItem
     * @param string $buyerID
     * @param string $closingDate
     */
    public function __construct($multiItem = null, $buyerID = null, $closingDate = null)
    {
        $this
            ->setMultiItem($multiItem)
            ->setBuyerID($buyerID)
            ->setClosingDate($closingDate);
    }
    /**
     * Get multiItem value
     * @return string
     */
    public function getMultiItem()
    {
        return $this->multiItem;
    }
    /**
     * Set multiItem value
     * @param string $multiItem
     * @return \PayPal\StructType\AuctionInfoType
     */
    public function setMultiItem($multiItem = null)
    {
        // validation for constraint: string
        if (!is_null($multiItem) && !is_string($multiItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiItem, true), gettype($multiItem)), __LINE__);
        }
        $this->multiItem = $multiItem;
        return $this;
    }
    /**
     * Get BuyerID value
     * @return string|null
     */
    public function getBuyerID()
    {
        return $this->BuyerID;
    }
    /**
     * Set BuyerID value
     * @param string $buyerID
     * @return \PayPal\StructType\AuctionInfoType
     */
    public function setBuyerID($buyerID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerID) && !is_string($buyerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerID, true), gettype($buyerID)), __LINE__);
        }
        $this->BuyerID = $buyerID;
        return $this;
    }
    /**
     * Get ClosingDate value
     * @return string|null
     */
    public function getClosingDate()
    {
        return $this->ClosingDate;
    }
    /**
     * Set ClosingDate value
     * @param string $closingDate
     * @return \PayPal\StructType\AuctionInfoType
     */
    public function setClosingDate($closingDate = null)
    {
        // validation for constraint: string
        if (!is_null($closingDate) && !is_string($closingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDate, true), gettype($closingDate)), __LINE__);
        }
        $this->ClosingDate = $closingDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AuctionInfoType
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
