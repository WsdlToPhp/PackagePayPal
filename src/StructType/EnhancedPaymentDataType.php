<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnhancedPaymentDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: AID for Airlines | Enhanced data for different transactions.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EnhancedPaymentDataType extends AbstractStructBase
{
    /**
     * The AirlineItinerary
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:AirlineItinerary
     * @var \PayPal\StructType\AirlineItineraryType
     */
    public $AirlineItinerary;
    /**
     * Constructor method for EnhancedPaymentDataType
     * @uses EnhancedPaymentDataType::setAirlineItinerary()
     * @param \PayPal\StructType\AirlineItineraryType $airlineItinerary
     */
    public function __construct(\PayPal\StructType\AirlineItineraryType $airlineItinerary = null)
    {
        $this
            ->setAirlineItinerary($airlineItinerary);
    }
    /**
     * Get AirlineItinerary value
     * @return \PayPal\StructType\AirlineItineraryType|null
     */
    public function getAirlineItinerary()
    {
        return $this->AirlineItinerary;
    }
    /**
     * Set AirlineItinerary value
     * @param \PayPal\StructType\AirlineItineraryType $airlineItinerary
     * @return \PayPal\StructType\EnhancedPaymentDataType
     */
    public function setAirlineItinerary(\PayPal\StructType\AirlineItineraryType $airlineItinerary = null)
    {
        $this->AirlineItinerary = $airlineItinerary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\EnhancedPaymentDataType
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
