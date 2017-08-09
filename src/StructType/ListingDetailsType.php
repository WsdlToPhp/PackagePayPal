<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the listed item details which consists of following information: .
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListingDetailsType extends AbstractStructBase
{
    /**
     * The Adult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Adult;
    /**
     * The BindingAuction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BindingAuction;
    /**
     * The CheckoutEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CheckoutEnabled;
    /**
     * The ConvertedBuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of the BuyItNowPrice in the currency indicated by SiteCurrency. This value must be refreshed every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ConvertedBuyItNowPrice;
    /**
     * The ConvertedStartPrice
     * Meta informations extracted from the WSDL
     * - documentation: Converted value of the StartPrice field in the currency indicated by SiteCurrency. This value must be refreshed every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ConvertedStartPrice;
    /**
     * The ConvertedReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the converted reserve price for a reserve auction. Returned only if DetailLevel = 4. ReservePrice is only returned for auctions with a reserve price where the user calling GetItem is the item's seller. Returned as null for
     * International Fixed Price items. For more information on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ConvertedReservePrice;
    /**
     * The HasReservePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasReservePrice;
    /**
     * The RegionName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegionName;
    /**
     * The RelistedItemID
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the new ItemID for a relisted item. When an item is relisted, the old (expired) listing is annotated with the new (relist) ItemID. This field only appears when the old listing is retrieved. | Represents the unique
     * identifier for an item. To be used to specify the elements that represents an ItemID.
     * - minOccurs: 0
     * @var string
     */
    public $RelistedItemID;
    /**
     * The SecondChanceOriginalItemID
     * Meta informations extracted from the WSDL
     * - documentation: The ItemID for the original listing (i.e., OriginalItemID specific to Second Chance Offer items). | Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
     * - minOccurs: 0
     * @var string
     */
    public $SecondChanceOriginalItemID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: Time stamp for the start of the listing (in GMT). For regular items, StartTime is not sent in at listing time.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: Time stamp for the end of the listing (in GMT).
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The ViewItemURL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ViewItemURL;
    /**
     * Constructor method for ListingDetailsType
     * @uses ListingDetailsType::setAdult()
     * @uses ListingDetailsType::setBindingAuction()
     * @uses ListingDetailsType::setCheckoutEnabled()
     * @uses ListingDetailsType::setConvertedBuyItNowPrice()
     * @uses ListingDetailsType::setConvertedStartPrice()
     * @uses ListingDetailsType::setConvertedReservePrice()
     * @uses ListingDetailsType::setHasReservePrice()
     * @uses ListingDetailsType::setRegionName()
     * @uses ListingDetailsType::setRelistedItemID()
     * @uses ListingDetailsType::setSecondChanceOriginalItemID()
     * @uses ListingDetailsType::setStartTime()
     * @uses ListingDetailsType::setEndTime()
     * @uses ListingDetailsType::setViewItemURL()
     * @param bool $adult
     * @param bool $bindingAuction
     * @param bool $checkoutEnabled
     * @param \PayPal\StructType\AmountType $convertedBuyItNowPrice
     * @param \PayPal\StructType\AmountType $convertedStartPrice
     * @param \PayPal\StructType\AmountType $convertedReservePrice
     * @param bool $hasReservePrice
     * @param string $regionName
     * @param string $relistedItemID
     * @param string $secondChanceOriginalItemID
     * @param string $startTime
     * @param string $endTime
     * @param string $viewItemURL
     */
    public function __construct($adult = null, $bindingAuction = null, $checkoutEnabled = null, \PayPal\StructType\AmountType $convertedBuyItNowPrice = null, \PayPal\StructType\AmountType $convertedStartPrice = null, \PayPal\StructType\AmountType $convertedReservePrice = null, $hasReservePrice = null, $regionName = null, $relistedItemID = null, $secondChanceOriginalItemID = null, $startTime = null, $endTime = null, $viewItemURL = null)
    {
        $this
            ->setAdult($adult)
            ->setBindingAuction($bindingAuction)
            ->setCheckoutEnabled($checkoutEnabled)
            ->setConvertedBuyItNowPrice($convertedBuyItNowPrice)
            ->setConvertedStartPrice($convertedStartPrice)
            ->setConvertedReservePrice($convertedReservePrice)
            ->setHasReservePrice($hasReservePrice)
            ->setRegionName($regionName)
            ->setRelistedItemID($relistedItemID)
            ->setSecondChanceOriginalItemID($secondChanceOriginalItemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setViewItemURL($viewItemURL);
    }
    /**
     * Get Adult value
     * @return bool|null
     */
    public function getAdult()
    {
        return $this->Adult;
    }
    /**
     * Set Adult value
     * @param bool $adult
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setAdult($adult = null)
    {
        // validation for constraint: boolean
        if (!is_null($adult) && !is_bool($adult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($adult)), __LINE__);
        }
        $this->Adult = $adult;
        return $this;
    }
    /**
     * Get BindingAuction value
     * @return bool|null
     */
    public function getBindingAuction()
    {
        return $this->BindingAuction;
    }
    /**
     * Set BindingAuction value
     * @param bool $bindingAuction
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setBindingAuction($bindingAuction = null)
    {
        // validation for constraint: boolean
        if (!is_null($bindingAuction) && !is_bool($bindingAuction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bindingAuction)), __LINE__);
        }
        $this->BindingAuction = $bindingAuction;
        return $this;
    }
    /**
     * Get CheckoutEnabled value
     * @return bool|null
     */
    public function getCheckoutEnabled()
    {
        return $this->CheckoutEnabled;
    }
    /**
     * Set CheckoutEnabled value
     * @param bool $checkoutEnabled
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setCheckoutEnabled($checkoutEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkoutEnabled) && !is_bool($checkoutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkoutEnabled)), __LINE__);
        }
        $this->CheckoutEnabled = $checkoutEnabled;
        return $this;
    }
    /**
     * Get ConvertedBuyItNowPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->ConvertedBuyItNowPrice;
    }
    /**
     * Set ConvertedBuyItNowPrice value
     * @param \PayPal\StructType\AmountType $convertedBuyItNowPrice
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setConvertedBuyItNowPrice(\PayPal\StructType\AmountType $convertedBuyItNowPrice = null)
    {
        $this->ConvertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }
    /**
     * Get ConvertedStartPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getConvertedStartPrice()
    {
        return $this->ConvertedStartPrice;
    }
    /**
     * Set ConvertedStartPrice value
     * @param \PayPal\StructType\AmountType $convertedStartPrice
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setConvertedStartPrice(\PayPal\StructType\AmountType $convertedStartPrice = null)
    {
        $this->ConvertedStartPrice = $convertedStartPrice;
        return $this;
    }
    /**
     * Get ConvertedReservePrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getConvertedReservePrice()
    {
        return $this->ConvertedReservePrice;
    }
    /**
     * Set ConvertedReservePrice value
     * @param \PayPal\StructType\AmountType $convertedReservePrice
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setConvertedReservePrice(\PayPal\StructType\AmountType $convertedReservePrice = null)
    {
        $this->ConvertedReservePrice = $convertedReservePrice;
        return $this;
    }
    /**
     * Get HasReservePrice value
     * @return bool|null
     */
    public function getHasReservePrice()
    {
        return $this->HasReservePrice;
    }
    /**
     * Set HasReservePrice value
     * @param bool $hasReservePrice
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setHasReservePrice($hasReservePrice = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasReservePrice) && !is_bool($hasReservePrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasReservePrice)), __LINE__);
        }
        $this->HasReservePrice = $hasReservePrice;
        return $this;
    }
    /**
     * Get RegionName value
     * @return string|null
     */
    public function getRegionName()
    {
        return $this->RegionName;
    }
    /**
     * Set RegionName value
     * @param string $regionName
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setRegionName($regionName = null)
    {
        // validation for constraint: string
        if (!is_null($regionName) && !is_string($regionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionName)), __LINE__);
        }
        $this->RegionName = $regionName;
        return $this;
    }
    /**
     * Get RelistedItemID value
     * @return string|null
     */
    public function getRelistedItemID()
    {
        return $this->RelistedItemID;
    }
    /**
     * Set RelistedItemID value
     * @param string $relistedItemID
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setRelistedItemID($relistedItemID = null)
    {
        // validation for constraint: string
        if (!is_null($relistedItemID) && !is_string($relistedItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relistedItemID)), __LINE__);
        }
        $this->RelistedItemID = $relistedItemID;
        return $this;
    }
    /**
     * Get SecondChanceOriginalItemID value
     * @return string|null
     */
    public function getSecondChanceOriginalItemID()
    {
        return $this->SecondChanceOriginalItemID;
    }
    /**
     * Set SecondChanceOriginalItemID value
     * @param string $secondChanceOriginalItemID
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setSecondChanceOriginalItemID($secondChanceOriginalItemID = null)
    {
        // validation for constraint: string
        if (!is_null($secondChanceOriginalItemID) && !is_string($secondChanceOriginalItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondChanceOriginalItemID)), __LINE__);
        }
        $this->SecondChanceOriginalItemID = $secondChanceOriginalItemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get ViewItemURL value
     * @return string|null
     */
    public function getViewItemURL()
    {
        return $this->ViewItemURL;
    }
    /**
     * Set ViewItemURL value
     * @param string $viewItemURL
     * @return \PayPal\StructType\ListingDetailsType
     */
    public function setViewItemURL($viewItemURL = null)
    {
        // validation for constraint: string
        if (!is_null($viewItemURL) && !is_string($viewItemURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($viewItemURL)), __LINE__);
        }
        $this->ViewItemURL = $viewItemURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ListingDetailsType
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
