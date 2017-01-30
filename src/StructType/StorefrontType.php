<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorefrontType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the eBay Stores-specific item attributes department number and store location. StorefrontInfo is shown for any item that belongs to an eBay Store owner, regardless of whether it is fixed price or auction type. Returned as
 * null for international fixed price items. | assumed this type is specific to add/get/revise item, then each StorefrontType nust have category id, for store details this node makes no sense to use | in case or revise item for example - to change store
 * category (department) you do not need to change store URL, so it will notbe in request
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class StorefrontType extends AbstractStructBase
{
    /**
     * The StoreCategoryID
     * Meta informations extracted from the WSDL
     * - ref: ns:StoreCategoryID
     * @var int
     */
    public $StoreCategoryID;
    /**
     * The StoreURL
     * Meta informations extracted from the WSDL
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
        if (!is_null($storeCategoryID) && !is_numeric($storeCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($storeCategoryID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\StorefrontType
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
