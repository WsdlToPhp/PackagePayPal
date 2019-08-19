<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginationResultType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaginationResultType extends AbstractStructBase
{
    /**
     * The TotalNumberOfPages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfPages;
    /**
     * The TotalNumberOfEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfEntries;
    /**
     * Constructor method for PaginationResultType
     * @uses PaginationResultType::setTotalNumberOfPages()
     * @uses PaginationResultType::setTotalNumberOfEntries()
     * @param int $totalNumberOfPages
     * @param int $totalNumberOfEntries
     */
    public function __construct($totalNumberOfPages = null, $totalNumberOfEntries = null)
    {
        $this
            ->setTotalNumberOfPages($totalNumberOfPages)
            ->setTotalNumberOfEntries($totalNumberOfEntries);
    }
    /**
     * Get TotalNumberOfPages value
     * @return int|null
     */
    public function getTotalNumberOfPages()
    {
        return $this->TotalNumberOfPages;
    }
    /**
     * Set TotalNumberOfPages value
     * @param int $totalNumberOfPages
     * @return \PayPal\StructType\PaginationResultType
     */
    public function setTotalNumberOfPages($totalNumberOfPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfPages) && !(is_int($totalNumberOfPages) || ctype_digit($totalNumberOfPages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfPages, true), gettype($totalNumberOfPages)), __LINE__);
        }
        $this->TotalNumberOfPages = $totalNumberOfPages;
        return $this;
    }
    /**
     * Get TotalNumberOfEntries value
     * @return int|null
     */
    public function getTotalNumberOfEntries()
    {
        return $this->TotalNumberOfEntries;
    }
    /**
     * Set TotalNumberOfEntries value
     * @param int $totalNumberOfEntries
     * @return \PayPal\StructType\PaginationResultType
     */
    public function setTotalNumberOfEntries($totalNumberOfEntries = null)
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfEntries) && !(is_int($totalNumberOfEntries) || ctype_digit($totalNumberOfEntries))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfEntries, true), gettype($totalNumberOfEntries)), __LINE__);
        }
        $this->TotalNumberOfEntries = $totalNumberOfEntries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaginationResultType
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
