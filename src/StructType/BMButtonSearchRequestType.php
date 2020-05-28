<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMButtonSearchRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMButtonSearchRequestType extends AbstractRequestType
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: The earliest transaction date at which to start the search. No wildcards are allowed. Required
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - documentation: The latest transaction date to be included in the search Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * Constructor method for BMButtonSearchRequestType
     * @uses BMButtonSearchRequestType::setStartDate()
     * @uses BMButtonSearchRequestType::setEndDate()
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($startDate = null, $endDate = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \PayPal\StructType\BMButtonSearchRequestType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \PayPal\StructType\BMButtonSearchRequestType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
}
