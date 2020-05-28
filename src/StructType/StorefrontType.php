<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorefrontType StructType
 * Meta information extracted from the WSDL
 * - documentation: in case or revise item for example - to change store category (department) you do not need to change store URL, so it will notbe in request | assumed this type is specific to add/get/revise item, then each StorefrontType nust have
 * category id, for store details this node makes no sense to use | Contains the eBay Stores-specific item attributes department number and store location. StorefrontInfo is shown for any item that belongs to an eBay Store owner, regardless of whether
 * it is fixed price or auction type. Returned as null for international fixed price items.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class StorefrontType extends AbstractStructBase
{
    /**
     * The StoreCategoryID
     * Meta information extracted from the WSDL
     * - ref: ns:StoreCategoryID
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The StoreURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:StoreURL
     * @var string
     */
    public $StoreURL;
    /**
     * Constructor method for StorefrontType
     * @uses StorefrontType::setStoreCategoryID()
     * @uses StorefrontType::setStoreURL()
     * @param int $storeCategoryID
     * @param string $storeURL
     */
    public function __construct($storeCategoryID = null, $storeURL = null)
    {
        $this
            ->setStoreCategoryID($storeCategoryID)
            ->setStoreURL($storeURL);
    }
    /**
     * Get StoreCategoryID value
     * @return int|null
     */
    public function getStoreCategoryID()
    {
        return $this->StoreCategoryID;
    }
    /**
     * Set StoreCategoryID value
     * @param int $storeCategoryID
     * @return \PayPal\StructType\StorefrontType
     */
    public function setStoreCategoryID($storeCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($storeCategoryID) && !(is_int($storeCategoryID) || ctype_digit($storeCategoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storeCategoryID, true), gettype($storeCategoryID)), __LINE__);
        }
        $this->StoreCategoryID = $storeCategoryID;
        return $this;
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL()
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \PayPal\StructType\StorefrontType
     */
    public function setStoreURL($storeURL = null)
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeURL, true), gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        return $this;
    }
}
