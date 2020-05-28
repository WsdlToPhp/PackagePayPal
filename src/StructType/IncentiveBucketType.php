<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveBucketType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveBucketType extends AbstractStructBase
{
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveItemType[]
     */
    public $Items;
    /**
     * The BucketId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BucketId;
    /**
     * The SellerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SellerId;
    /**
     * The ExternalSellerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExternalSellerId;
    /**
     * The BucketSubtotalAmt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $BucketSubtotalAmt;
    /**
     * The BucketShippingAmt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $BucketShippingAmt;
    /**
     * The BucketInsuranceAmt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $BucketInsuranceAmt;
    /**
     * The BucketSalesTaxAmt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $BucketSalesTaxAmt;
    /**
     * The BucketTotalAmt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $BucketTotalAmt;
    /**
     * Constructor method for IncentiveBucketType
     * @uses IncentiveBucketType::setItems()
     * @uses IncentiveBucketType::setBucketId()
     * @uses IncentiveBucketType::setSellerId()
     * @uses IncentiveBucketType::setExternalSellerId()
     * @uses IncentiveBucketType::setBucketSubtotalAmt()
     * @uses IncentiveBucketType::setBucketShippingAmt()
     * @uses IncentiveBucketType::setBucketInsuranceAmt()
     * @uses IncentiveBucketType::setBucketSalesTaxAmt()
     * @uses IncentiveBucketType::setBucketTotalAmt()
     * @param \PayPal\StructType\IncentiveItemType[] $items
     * @param string $bucketId
     * @param string $sellerId
     * @param string $externalSellerId
     * @param \PayPal\StructType\BasicAmountType $bucketSubtotalAmt
     * @param \PayPal\StructType\BasicAmountType $bucketShippingAmt
     * @param \PayPal\StructType\BasicAmountType $bucketInsuranceAmt
     * @param \PayPal\StructType\BasicAmountType $bucketSalesTaxAmt
     * @param \PayPal\StructType\BasicAmountType $bucketTotalAmt
     */
    public function __construct(array $items = array(), $bucketId = null, $sellerId = null, $externalSellerId = null, \PayPal\StructType\BasicAmountType $bucketSubtotalAmt = null, \PayPal\StructType\BasicAmountType $bucketShippingAmt = null, \PayPal\StructType\BasicAmountType $bucketInsuranceAmt = null, \PayPal\StructType\BasicAmountType $bucketSalesTaxAmt = null, \PayPal\StructType\BasicAmountType $bucketTotalAmt = null)
    {
        $this
            ->setItems($items)
            ->setBucketId($bucketId)
            ->setSellerId($sellerId)
            ->setExternalSellerId($externalSellerId)
            ->setBucketSubtotalAmt($bucketSubtotalAmt)
            ->setBucketShippingAmt($bucketShippingAmt)
            ->setBucketInsuranceAmt($bucketInsuranceAmt)
            ->setBucketSalesTaxAmt($bucketSalesTaxAmt)
            ->setBucketTotalAmt($bucketTotalAmt);
    }
    /**
     * Get Items value
     * @return \PayPal\StructType\IncentiveItemType[]|null
     */
    public function getItems()
    {
        return $this->Items;
    }
    /**
     * This method is responsible for validating the values passed to the setItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemsForArrayConstraintsFromSetItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $incentiveBucketTypeItemsItem) {
            // validation for constraint: itemType
            if (!$incentiveBucketTypeItemsItem instanceof \PayPal\StructType\IncentiveItemType) {
                $invalidValues[] = is_object($incentiveBucketTypeItemsItem) ? get_class($incentiveBucketTypeItemsItem) : sprintf('%s(%s)', gettype($incentiveBucketTypeItemsItem), var_export($incentiveBucketTypeItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Items property can only contain items of type \PayPal\StructType\IncentiveItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Items value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveItemType[] $items
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setItems(array $items = array())
    {
        // validation for constraint: array
        if ('' !== ($itemsArrayErrorMessage = self::validateItemsForArrayConstraintsFromSetItems($items))) {
            throw new \InvalidArgumentException($itemsArrayErrorMessage, __LINE__);
        }
        $this->Items = $items;
        return $this;
    }
    /**
     * Add item to Items value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveItemType $item
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function addToItems(\PayPal\StructType\IncentiveItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveItemType) {
            throw new \InvalidArgumentException(sprintf('The Items property can only contain items of type \PayPal\StructType\IncentiveItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Items[] = $item;
        return $this;
    }
    /**
     * Get BucketId value
     * @return string|null
     */
    public function getBucketId()
    {
        return $this->BucketId;
    }
    /**
     * Set BucketId value
     * @param string $bucketId
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setBucketId($bucketId = null)
    {
        // validation for constraint: string
        if (!is_null($bucketId) && !is_string($bucketId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bucketId, true), gettype($bucketId)), __LINE__);
        }
        $this->BucketId = $bucketId;
        return $this;
    }
    /**
     * Get SellerId value
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->SellerId;
    }
    /**
     * Set SellerId value
     * @param string $sellerId
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setSellerId($sellerId = null)
    {
        // validation for constraint: string
        if (!is_null($sellerId) && !is_string($sellerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerId, true), gettype($sellerId)), __LINE__);
        }
        $this->SellerId = $sellerId;
        return $this;
    }
    /**
     * Get ExternalSellerId value
     * @return string|null
     */
    public function getExternalSellerId()
    {
        return $this->ExternalSellerId;
    }
    /**
     * Set ExternalSellerId value
     * @param string $externalSellerId
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setExternalSellerId($externalSellerId = null)
    {
        // validation for constraint: string
        if (!is_null($externalSellerId) && !is_string($externalSellerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSellerId, true), gettype($externalSellerId)), __LINE__);
        }
        $this->ExternalSellerId = $externalSellerId;
        return $this;
    }
    /**
     * Get BucketSubtotalAmt value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getBucketSubtotalAmt()
    {
        return $this->BucketSubtotalAmt;
    }
    /**
     * Set BucketSubtotalAmt value
     * @param \PayPal\StructType\BasicAmountType $bucketSubtotalAmt
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setBucketSubtotalAmt(\PayPal\StructType\BasicAmountType $bucketSubtotalAmt = null)
    {
        $this->BucketSubtotalAmt = $bucketSubtotalAmt;
        return $this;
    }
    /**
     * Get BucketShippingAmt value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getBucketShippingAmt()
    {
        return $this->BucketShippingAmt;
    }
    /**
     * Set BucketShippingAmt value
     * @param \PayPal\StructType\BasicAmountType $bucketShippingAmt
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setBucketShippingAmt(\PayPal\StructType\BasicAmountType $bucketShippingAmt = null)
    {
        $this->BucketShippingAmt = $bucketShippingAmt;
        return $this;
    }
    /**
     * Get BucketInsuranceAmt value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getBucketInsuranceAmt()
    {
        return $this->BucketInsuranceAmt;
    }
    /**
     * Set BucketInsuranceAmt value
     * @param \PayPal\StructType\BasicAmountType $bucketInsuranceAmt
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setBucketInsuranceAmt(\PayPal\StructType\BasicAmountType $bucketInsuranceAmt = null)
    {
        $this->BucketInsuranceAmt = $bucketInsuranceAmt;
        return $this;
    }
    /**
     * Get BucketSalesTaxAmt value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getBucketSalesTaxAmt()
    {
        return $this->BucketSalesTaxAmt;
    }
    /**
     * Set BucketSalesTaxAmt value
     * @param \PayPal\StructType\BasicAmountType $bucketSalesTaxAmt
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setBucketSalesTaxAmt(\PayPal\StructType\BasicAmountType $bucketSalesTaxAmt = null)
    {
        $this->BucketSalesTaxAmt = $bucketSalesTaxAmt;
        return $this;
    }
    /**
     * Get BucketTotalAmt value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getBucketTotalAmt()
    {
        return $this->BucketTotalAmt;
    }
    /**
     * Set BucketTotalAmt value
     * @param \PayPal\StructType\BasicAmountType $bucketTotalAmt
     * @return \PayPal\StructType\IncentiveBucketType
     */
    public function setBucketTotalAmt(\PayPal\StructType\BasicAmountType $bucketTotalAmt = null)
    {
        $this->BucketTotalAmt = $bucketTotalAmt;
        return $this;
    }
}
