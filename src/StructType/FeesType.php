<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Following are the current set of eBay fee types AuctionLengthFee BoldFee BuyItNowFee CategoryFeaturedFee FeaturedFee FeaturedGalleryFee FixedPriceDurationFee GalleryFee GiftIconFee HighLightFee InsertionFee ListingDesignerFee
 * ListingFee PhotoDisplayFee PhotoFee ReserveFee SchedulingFee ThirtyDaysAucFee Instances of this type could hold one or more supported types of fee.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FeesType extends AbstractStructBase
{
    /**
     * The Fee
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeForArrayConstraintsFromSetFee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$feesTypeFeeItem instanceof \PayPal\StructType\FeeType) {
                $invalidValues[] = is_object($feesTypeFeeItem) ? get_class($feesTypeFeeItem) : sprintf('%s(%s)', gettype($feesTypeFeeItem), var_export($feesTypeFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fee property can only contain items of type \PayPal\StructType\FeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FeeType[] $fee
     * @return \PayPal\StructType\FeesType
     */
    public function setFee(array $fee = array())
    {
        // validation for constraint: array
        if ('' !== ($feeArrayErrorMessage = self::validateFeeForArrayConstraintsFromSetFee($fee))) {
            throw new \InvalidArgumentException($feeArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of type \PayPal\StructType\FeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
}
