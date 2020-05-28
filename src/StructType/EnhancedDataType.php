<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnhancedDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enhanced Data Information. Example: AID for Airlines
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EnhancedDataType extends AbstractStructBase
{
    /**
     * The AirlineItinerary
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\AirlineItineraryType
     */
    public $AirlineItinerary;
    /**
     * Constructor method for EnhancedDataType
     * @uses EnhancedDataType::setAirlineItinerary()
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
     * @return \PayPal\StructType\EnhancedDataType
     */
    public function setAirlineItinerary(\PayPal\StructType\AirlineItineraryType $airlineItinerary = null)
    {
        $this->AirlineItinerary = $airlineItinerary;
        return $this;
    }
}
