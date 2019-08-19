<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SchedulingInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information for Scheduling limits for the user. All dtails must be present,unless we will have revise call one day, just in case we might let's make min occur = 0
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SchedulingInfoType extends AbstractStructBase
{
    /**
     * The MaxScheduledMinutes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxScheduledMinutes;
    /**
     * The MinScheduledMinutes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinScheduledMinutes;
    /**
     * The MaxScheduledItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxScheduledItems;
    /**
     * Constructor method for SchedulingInfoType
     * @uses SchedulingInfoType::setMaxScheduledMinutes()
     * @uses SchedulingInfoType::setMinScheduledMinutes()
     * @uses SchedulingInfoType::setMaxScheduledItems()
     * @param int $maxScheduledMinutes
     * @param int $minScheduledMinutes
     * @param int $maxScheduledItems
     */
    public function __construct($maxScheduledMinutes = null, $minScheduledMinutes = null, $maxScheduledItems = null)
    {
        $this
            ->setMaxScheduledMinutes($maxScheduledMinutes)
            ->setMinScheduledMinutes($minScheduledMinutes)
            ->setMaxScheduledItems($maxScheduledItems);
    }
    /**
     * Get MaxScheduledMinutes value
     * @return int|null
     */
    public function getMaxScheduledMinutes()
    {
        return $this->MaxScheduledMinutes;
    }
    /**
     * Set MaxScheduledMinutes value
     * @param int $maxScheduledMinutes
     * @return \PayPal\StructType\SchedulingInfoType
     */
    public function setMaxScheduledMinutes($maxScheduledMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($maxScheduledMinutes) && !(is_int($maxScheduledMinutes) || ctype_digit($maxScheduledMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxScheduledMinutes, true), gettype($maxScheduledMinutes)), __LINE__);
        }
        $this->MaxScheduledMinutes = $maxScheduledMinutes;
        return $this;
    }
    /**
     * Get MinScheduledMinutes value
     * @return int|null
     */
    public function getMinScheduledMinutes()
    {
        return $this->MinScheduledMinutes;
    }
    /**
     * Set MinScheduledMinutes value
     * @param int $minScheduledMinutes
     * @return \PayPal\StructType\SchedulingInfoType
     */
    public function setMinScheduledMinutes($minScheduledMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($minScheduledMinutes) && !(is_int($minScheduledMinutes) || ctype_digit($minScheduledMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minScheduledMinutes, true), gettype($minScheduledMinutes)), __LINE__);
        }
        $this->MinScheduledMinutes = $minScheduledMinutes;
        return $this;
    }
    /**
     * Get MaxScheduledItems value
     * @return int|null
     */
    public function getMaxScheduledItems()
    {
        return $this->MaxScheduledItems;
    }
    /**
     * Set MaxScheduledItems value
     * @param int $maxScheduledItems
     * @return \PayPal\StructType\SchedulingInfoType
     */
    public function setMaxScheduledItems($maxScheduledItems = null)
    {
        // validation for constraint: int
        if (!is_null($maxScheduledItems) && !(is_int($maxScheduledItems) || ctype_digit($maxScheduledItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxScheduledItems, true), gettype($maxScheduledItems)), __LINE__);
        }
        $this->MaxScheduledItems = $maxScheduledItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SchedulingInfoType
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
