<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Following are the current set of eBay fee types AuctionLengthFee BoldFee BuyItNowFee CategoryFeaturedFee FeaturedFee FeaturedGalleryFee FixedPriceDurationFee GalleryFee GiftIconFee HighLightFee InsertionFee ListingDesignerFee
 * ListingFee PhotoDisplayFee PhotoFee ReserveFee SchedulingFee ThirtyDaysAucFee Instances of this type could hold one or more supported types of fee.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FeesType extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \PayPal\StructType\FeeType[]
     */
    public $Fee;
    /**
     * Constructor method for FeesType
     * @uses FeesType::setFee()
     * @param \PayPal\StructType\FeeType[] $fee
     */
    public function __construct(array $fee = array())
    {
        $this
            ->setFee($fee);
    }
    /**
     * Get Fee value
     * @return \PayPal\StructType\FeeType[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FeeType[] $fee
     * @return \PayPal\StructType\FeesType
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $feesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$feesTypeFeeItem instanceof \PayPal\StructType\FeeType) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \PayPal\StructType\FeeType, "%s" given', is_object($feesTypeFeeItem) ? get_class($feesTypeFeeItem) : gettype($feesTypeFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FeeType $item
     * @return \PayPal\StructType\FeesType
     */
    public function addToFee(\PayPal\StructType\FeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\FeeType) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \PayPal\StructType\FeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FeesType
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
