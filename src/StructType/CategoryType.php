<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for data on the primary category of listing.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The AutoPayEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AutoPayEnabled;
    /**
     * The B2BVATEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $B2BVATEnabled;
    /**
     * The CatalogEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CatalogEnabled;
    /**
     * The CategoryID
     * @var string
     */
    public $CategoryID;
    /**
     * The CategoryLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CategoryLevel;
    /**
     * The CategoryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryName;
    /**
     * The CategoryParentID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryParentID;
    /**
     * The CategoryParentName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryParentName;
    /**
     * The CSIDList
     * Meta information extracted from the WSDL
     * - documentation: CSIDList is not present if Attributes enabled.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CSIDList;
    /**
     * The Expired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Expired;
    /**
     * The IntlAutosFixedCat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IntlAutosFixedCat;
    /**
     * The LeafCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $LeafCategory;
    /**
     * The Virtual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Virtual;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setAutoPayEnabled()
     * @uses CategoryType::setB2BVATEnabled()
     * @uses CategoryType::setCatalogEnabled()
     * @uses CategoryType::setCategoryID()
     * @uses CategoryType::setCategoryLevel()
     * @uses CategoryType::setCategoryName()
     * @uses CategoryType::setCategoryParentID()
     * @uses CategoryType::setCategoryParentName()
     * @uses CategoryType::setCSIDList()
     * @uses CategoryType::setExpired()
     * @uses CategoryType::setIntlAutosFixedCat()
     * @uses CategoryType::setLeafCategory()
     * @uses CategoryType::setVirtual()
     * @param bool $autoPayEnabled
     * @param bool $b2BVATEnabled
     * @param bool $catalogEnabled
     * @param string $categoryID
     * @param int $categoryLevel
     * @param string $categoryName
     * @param string[] $categoryParentID
     * @param string[] $categoryParentName
     * @param string[] $cSIDList
     * @param bool $expired
     * @param bool $intlAutosFixedCat
     * @param bool $leafCategory
     * @param bool $virtual
     */
    public function __construct($autoPayEnabled = null, $b2BVATEnabled = null, $catalogEnabled = null, $categoryID = null, $categoryLevel = null, $categoryName = null, array $categoryParentID = array(), array $categoryParentName = array(), array $cSIDList = array(), $expired = null, $intlAutosFixedCat = null, $leafCategory = null, $virtual = null)
    {
        $this
            ->setAutoPayEnabled($autoPayEnabled)
            ->setB2BVATEnabled($b2BVATEnabled)
            ->setCatalogEnabled($catalogEnabled)
            ->setCategoryID($categoryID)
            ->setCategoryLevel($categoryLevel)
            ->setCategoryName($categoryName)
            ->setCategoryParentID($categoryParentID)
            ->setCategoryParentName($categoryParentName)
            ->setCSIDList($cSIDList)
            ->setExpired($expired)
            ->setIntlAutosFixedCat($intlAutosFixedCat)
            ->setLeafCategory($leafCategory)
            ->setVirtual($virtual);
    }
    /**
     * Get AutoPayEnabled value
     * @return bool|null
     */
    public function getAutoPayEnabled()
    {
        return $this->AutoPayEnabled;
    }
    /**
     * Set AutoPayEnabled value
     * @param bool $autoPayEnabled
     * @return \PayPal\StructType\CategoryType
     */
    public function setAutoPayEnabled($autoPayEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoPayEnabled) && !is_bool($autoPayEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoPayEnabled, true), gettype($autoPayEnabled)), __LINE__);
        }
        $this->AutoPayEnabled = $autoPayEnabled;
        return $this;
    }
    /**
     * Get B2BVATEnabled value
     * @return bool|null
     */
    public function getB2BVATEnabled()
    {
        return $this->B2BVATEnabled;
    }
    /**
     * Set B2BVATEnabled value
     * @param bool $b2BVATEnabled
     * @return \PayPal\StructType\CategoryType
     */
    public function setB2BVATEnabled($b2BVATEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($b2BVATEnabled) && !is_bool($b2BVATEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($b2BVATEnabled, true), gettype($b2BVATEnabled)), __LINE__);
        }
        $this->B2BVATEnabled = $b2BVATEnabled;
        return $this;
    }
    /**
     * Get CatalogEnabled value
     * @return bool|null
     */
    public function getCatalogEnabled()
    {
        return $this->CatalogEnabled;
    }
    /**
     * Set CatalogEnabled value
     * @param bool $catalogEnabled
     * @return \PayPal\StructType\CategoryType
     */
    public function setCatalogEnabled($catalogEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($catalogEnabled) && !is_bool($catalogEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($catalogEnabled, true), gettype($catalogEnabled)), __LINE__);
        }
        $this->CatalogEnabled = $catalogEnabled;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \PayPal\StructType\CategoryType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get CategoryLevel value
     * @return int|null
     */
    public function getCategoryLevel()
    {
        return $this->CategoryLevel;
    }
    /**
     * Set CategoryLevel value
     * @param int $categoryLevel
     * @return \PayPal\StructType\CategoryType
     */
    public function setCategoryLevel($categoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($categoryLevel) && !(is_int($categoryLevel) || ctype_digit($categoryLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryLevel, true), gettype($categoryLevel)), __LINE__);
        }
        $this->CategoryLevel = $categoryLevel;
        return $this;
    }
    /**
     * Get CategoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \PayPal\StructType\CategoryType
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        return $this;
    }
    /**
     * Get CategoryParentID value
     * @return string[]|null
     */
    public function getCategoryParentID()
    {
        return $this->CategoryParentID;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryParentID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryParentID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryParentIDForArrayConstraintsFromSetCategoryParentID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCategoryParentIDItem) {
            // validation for constraint: itemType
            if (!is_string($categoryTypeCategoryParentIDItem)) {
                $invalidValues[] = is_object($categoryTypeCategoryParentIDItem) ? get_class($categoryTypeCategoryParentIDItem) : sprintf('%s(%s)', gettype($categoryTypeCategoryParentIDItem), var_export($categoryTypeCategoryParentIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryParentID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CategoryParentID value
     * @throws \InvalidArgumentException
     * @param string[] $categoryParentID
     * @return \PayPal\StructType\CategoryType
     */
    public function setCategoryParentID(array $categoryParentID = array())
    {
        // validation for constraint: array
        if ('' !== ($categoryParentIDArrayErrorMessage = self::validateCategoryParentIDForArrayConstraintsFromSetCategoryParentID($categoryParentID))) {
            throw new \InvalidArgumentException($categoryParentIDArrayErrorMessage, __LINE__);
        }
        $this->CategoryParentID = $categoryParentID;
        return $this;
    }
    /**
     * Add item to CategoryParentID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\CategoryType
     */
    public function addToCategoryParentID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryParentID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryParentID[] = $item;
        return $this;
    }
    /**
     * Get CategoryParentName value
     * @return string[]|null
     */
    public function getCategoryParentName()
    {
        return $this->CategoryParentName;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryParentName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryParentName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryParentNameForArrayConstraintsFromSetCategoryParentName(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCategoryParentNameItem) {
            // validation for constraint: itemType
            if (!is_string($categoryTypeCategoryParentNameItem)) {
                $invalidValues[] = is_object($categoryTypeCategoryParentNameItem) ? get_class($categoryTypeCategoryParentNameItem) : sprintf('%s(%s)', gettype($categoryTypeCategoryParentNameItem), var_export($categoryTypeCategoryParentNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryParentName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CategoryParentName value
     * @throws \InvalidArgumentException
     * @param string[] $categoryParentName
     * @return \PayPal\StructType\CategoryType
     */
    public function setCategoryParentName(array $categoryParentName = array())
    {
        // validation for constraint: array
        if ('' !== ($categoryParentNameArrayErrorMessage = self::validateCategoryParentNameForArrayConstraintsFromSetCategoryParentName($categoryParentName))) {
            throw new \InvalidArgumentException($categoryParentNameArrayErrorMessage, __LINE__);
        }
        $this->CategoryParentName = $categoryParentName;
        return $this;
    }
    /**
     * Add item to CategoryParentName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\CategoryType
     */
    public function addToCategoryParentName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryParentName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryParentName[] = $item;
        return $this;
    }
    /**
     * Get CSIDList value
     * @return string[]|null
     */
    public function getCSIDList()
    {
        return $this->CSIDList;
    }
    /**
     * This method is responsible for validating the values passed to the setCSIDList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCSIDList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCSIDListForArrayConstraintsFromSetCSIDList(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCSIDListItem) {
            // validation for constraint: itemType
            if (!is_string($categoryTypeCSIDListItem)) {
                $invalidValues[] = is_object($categoryTypeCSIDListItem) ? get_class($categoryTypeCSIDListItem) : sprintf('%s(%s)', gettype($categoryTypeCSIDListItem), var_export($categoryTypeCSIDListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CSIDList property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CSIDList value
     * @throws \InvalidArgumentException
     * @param string[] $cSIDList
     * @return \PayPal\StructType\CategoryType
     */
    public function setCSIDList(array $cSIDList = array())
    {
        // validation for constraint: array
        if ('' !== ($cSIDListArrayErrorMessage = self::validateCSIDListForArrayConstraintsFromSetCSIDList($cSIDList))) {
            throw new \InvalidArgumentException($cSIDListArrayErrorMessage, __LINE__);
        }
        $this->CSIDList = $cSIDList;
        return $this;
    }
    /**
     * Add item to CSIDList value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\CategoryType
     */
    public function addToCSIDList($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CSIDList property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CSIDList[] = $item;
        return $this;
    }
    /**
     * Get Expired value
     * @return bool|null
     */
    public function getExpired()
    {
        return $this->Expired;
    }
    /**
     * Set Expired value
     * @param bool $expired
     * @return \PayPal\StructType\CategoryType
     */
    public function setExpired($expired = null)
    {
        // validation for constraint: boolean
        if (!is_null($expired) && !is_bool($expired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expired, true), gettype($expired)), __LINE__);
        }
        $this->Expired = $expired;
        return $this;
    }
    /**
     * Get IntlAutosFixedCat value
     * @return bool|null
     */
    public function getIntlAutosFixedCat()
    {
        return $this->IntlAutosFixedCat;
    }
    /**
     * Set IntlAutosFixedCat value
     * @param bool $intlAutosFixedCat
     * @return \PayPal\StructType\CategoryType
     */
    public function setIntlAutosFixedCat($intlAutosFixedCat = null)
    {
        // validation for constraint: boolean
        if (!is_null($intlAutosFixedCat) && !is_bool($intlAutosFixedCat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($intlAutosFixedCat, true), gettype($intlAutosFixedCat)), __LINE__);
        }
        $this->IntlAutosFixedCat = $intlAutosFixedCat;
        return $this;
    }
    /**
     * Get LeafCategory value
     * @return bool|null
     */
    public function getLeafCategory()
    {
        return $this->LeafCategory;
    }
    /**
     * Set LeafCategory value
     * @param bool $leafCategory
     * @return \PayPal\StructType\CategoryType
     */
    public function setLeafCategory($leafCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($leafCategory) && !is_bool($leafCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($leafCategory, true), gettype($leafCategory)), __LINE__);
        }
        $this->LeafCategory = $leafCategory;
        return $this;
    }
    /**
     * Get Virtual value
     * @return bool|null
     */
    public function getVirtual()
    {
        return $this->Virtual;
    }
    /**
     * Set Virtual value
     * @param bool $virtual
     * @return \PayPal\StructType\CategoryType
     */
    public function setVirtual($virtual = null)
    {
        // validation for constraint: boolean
        if (!is_null($virtual) && !is_bool($virtual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($virtual, true), gettype($virtual)), __LINE__);
        }
        $this->Virtual = $virtual;
        return $this;
    }
}
