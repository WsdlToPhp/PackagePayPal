<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the listed items price details which consists of following information: BuyItNowPrice, ConvertedBuyItNowPrice, ConvertedPrice, ConvertedStartPrice, CurrentPrice, MinimumToBid, ReservePrice, and StartPrice. need to take in
 * account get seller events when defining minoccurs = 0 | Contains one User node representing the current high bidder. GetItem returns a high bidder for auctions that have ended and have a winning bidder. For Fixed Price listings, in-progress auctions,
 * or auction items that received no bids, GetItem returns a HighBidder node with empty tags.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SellingStatusType extends AbstractStructBase
{
    /**
     * The BidCount
     * Meta informations extracted from the WSDL
     * - documentation: Number of bids placed so far against the item. Not returned for International Fixed Price items.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The BidIncrement
     * Meta informations extracted from the WSDL
     * - documentation: Smallest amount a bid must be above the current high bid. Not returned International Fixed Price items.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $BidIncrement;
    /**
     * The ConvertedCurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted current price of listed item.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ConvertedCurrentPrice;
    /**
     * The CurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: For auction-format listings, current minimum asking price or the current highest bid for the item if bids have been placed. Shows minimum bid if no bids have been placed against the item. This field does not reflect the actual
     * current price of the item if it's a Type=7 or Type=9 (Fixed Price) item and the price has been revised. (See StartPrice for revised asking price.)
     * @var \PayPal\StructType\AmountType
     */
    public $CurrentPrice;
    /**
     * The HighBidder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:HighBidder
     * @var \PayPal\StructType\UserType
     */
    public $HighBidder;
    /**
     * The LeadCount
     * Meta informations extracted from the WSDL
     * - documentation: Applicable to ad-format items only. Indicates how many leads to potential buyers are associated with this item. For other item types (other than ad-format items), returns a value of 0 (zero).
     * - minOccurs: 0
     * @var int
     */
    public $LeadCount;
    /**
     * The MinimumToBid
     * Meta informations extracted from the WSDL
     * - documentation: Minimum acceptable bid for the item. Not returned for International Fixed Price items.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $MinimumToBid;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: Number of items purchased so far. (Subtract from the value returned in the Quantity field to calculate the number of items remaining.)
     * @var int
     */
    public $QuantitySold;
    /**
     * The ReserveMet
     * Meta informations extracted from the WSDL
     * - documentation: Returns true if the reserve price was met or no reserve price was specified.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveMet;
    /**
     * The SecondChanceEligible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SecondChanceEligible;
    /**
     * Constructor method for SellingStatusType
     * @uses SellingStatusType::setBidCount()
     * @uses SellingStatusType::setBidIncrement()
     * @uses SellingStatusType::setConvertedCurrentPrice()
     * @uses SellingStatusType::setCurrentPrice()
     * @uses SellingStatusType::setHighBidder()
     * @uses SellingStatusType::setLeadCount()
     * @uses SellingStatusType::setMinimumToBid()
     * @uses SellingStatusType::setQuantitySold()
     * @uses SellingStatusType::setReserveMet()
     * @uses SellingStatusType::setSecondChanceEligible()
     * @param int $bidCount
     * @param \PayPal\StructType\AmountType $bidIncrement
     * @param \PayPal\StructType\AmountType $convertedCurrentPrice
     * @param \PayPal\StructType\AmountType $currentPrice
     * @param \PayPal\StructType\UserType $highBidder
     * @param int $leadCount
     * @param \PayPal\StructType\AmountType $minimumToBid
     * @param int $quantitySold
     * @param bool $reserveMet
     * @param bool $secondChanceEligible
     */
    public function __construct($bidCount = null, \PayPal\StructType\AmountType $bidIncrement = null, \PayPal\StructType\AmountType $convertedCurrentPrice = null, \PayPal\StructType\AmountType $currentPrice = null, \PayPal\StructType\UserType $highBidder = null, $leadCount = null, \PayPal\StructType\AmountType $minimumToBid = null, $quantitySold = null, $reserveMet = null, $secondChanceEligible = null)
    {
        $this
            ->setBidCount($bidCount)
            ->setBidIncrement($bidIncrement)
            ->setConvertedCurrentPrice($convertedCurrentPrice)
            ->setCurrentPrice($currentPrice)
            ->setHighBidder($highBidder)
            ->setLeadCount($leadCount)
            ->setMinimumToBid($minimumToBid)
            ->setQuantitySold($quantitySold)
            ->setReserveMet($reserveMet)
            ->setSecondChanceEligible($secondChanceEligible);
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !is_numeric($bidCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        return $this;
    }
    /**
     * Get BidIncrement value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getBidIncrement()
    {
        return $this->BidIncrement;
    }
    /**
     * Set BidIncrement value
     * @param \PayPal\StructType\AmountType $bidIncrement
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setBidIncrement(\PayPal\StructType\AmountType $bidIncrement = null)
    {
        $this->BidIncrement = $bidIncrement;
        return $this;
    }
    /**
     * Get ConvertedCurrentPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getConvertedCurrentPrice()
    {
        return $this->ConvertedCurrentPrice;
    }
    /**
     * Set ConvertedCurrentPrice value
     * @param \PayPal\StructType\AmountType $convertedCurrentPrice
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setConvertedCurrentPrice(\PayPal\StructType\AmountType $convertedCurrentPrice = null)
    {
        $this->ConvertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }
    /**
     * Get CurrentPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getCurrentPrice()
    {
        return $this->CurrentPrice;
    }
    /**
     * Set CurrentPrice value
     * @param \PayPal\StructType\AmountType $currentPrice
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setCurrentPrice(\PayPal\StructType\AmountType $currentPrice = null)
    {
        $this->CurrentPrice = $currentPrice;
        return $this;
    }
    /**
     * Get HighBidder value
     * @return \PayPal\StructType\UserType|null
     */
    public function getHighBidder()
    {
        return $this->HighBidder;
    }
    /**
     * Set HighBidder value
     * @param \PayPal\StructType\UserType $highBidder
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setHighBidder(\PayPal\StructType\UserType $highBidder = null)
    {
        $this->HighBidder = $highBidder;
        return $this;
    }
    /**
     * Get LeadCount value
     * @return int|null
     */
    public function getLeadCount()
    {
        return $this->LeadCount;
    }
    /**
     * Set LeadCount value
     * @param int $leadCount
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setLeadCount($leadCount = null)
    {
        // validation for constraint: int
        if (!is_null($leadCount) && !is_numeric($leadCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leadCount)), __LINE__);
        }
        $this->LeadCount = $leadCount;
        return $this;
    }
    /**
     * Get MinimumToBid value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getMinimumToBid()
    {
        return $this->MinimumToBid;
    }
    /**
     * Set MinimumToBid value
     * @param \PayPal\StructType\AmountType $minimumToBid
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setMinimumToBid(\PayPal\StructType\AmountType $minimumToBid = null)
    {
        $this->MinimumToBid = $minimumToBid;
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !is_numeric($quantitySold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get ReserveMet value
     * @return bool|null
     */
    public function getReserveMet()
    {
        return $this->ReserveMet;
    }
    /**
     * Set ReserveMet value
     * @param bool $reserveMet
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setReserveMet($reserveMet = null)
    {
        $this->ReserveMet = $reserveMet;
        return $this;
    }
    /**
     * Get SecondChanceEligible value
     * @return bool|null
     */
    public function getSecondChanceEligible()
    {
        return $this->SecondChanceEligible;
    }
    /**
     * Set SecondChanceEligible value
     * @param bool $secondChanceEligible
     * @return \PayPal\StructType\SellingStatusType
     */
    public function setSecondChanceEligible($secondChanceEligible = null)
    {
        $this->SecondChanceEligible = $secondChanceEligible;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SellingStatusType
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
