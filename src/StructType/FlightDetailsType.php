<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of leg information
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FlightDetailsType extends AbstractStructBase
{
    /**
     * The ConjuctionTicket
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConjuctionTicket;
    /**
     * The ExchangeTicket
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExchangeTicket;
    /**
     * The CouponNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CouponNumber;
    /**
     * The ServiceClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceClass;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelDate;
    /**
     * The CarrierCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The StopOverPermitted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StopOverPermitted;
    /**
     * The DepartureAirport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalAirport;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTime;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalTime;
    /**
     * The FareBasisCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareBasisCode;
    /**
     * The Fare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Fare;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Taxes;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Fee;
    /**
     * The EndorsementOrRestrictions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndorsementOrRestrictions;
    /**
     * Constructor method for FlightDetailsType
     * @uses FlightDetailsType::setConjuctionTicket()
     * @uses FlightDetailsType::setExchangeTicket()
     * @uses FlightDetailsType::setCouponNumber()
     * @uses FlightDetailsType::setServiceClass()
     * @uses FlightDetailsType::setTravelDate()
     * @uses FlightDetailsType::setCarrierCode()
     * @uses FlightDetailsType::setStopOverPermitted()
     * @uses FlightDetailsType::setDepartureAirport()
     * @uses FlightDetailsType::setArrivalAirport()
     * @uses FlightDetailsType::setFlightNumber()
     * @uses FlightDetailsType::setDepartureTime()
     * @uses FlightDetailsType::setArrivalTime()
     * @uses FlightDetailsType::setFareBasisCode()
     * @uses FlightDetailsType::setFare()
     * @uses FlightDetailsType::setTaxes()
     * @uses FlightDetailsType::setFee()
     * @uses FlightDetailsType::setEndorsementOrRestrictions()
     * @param string $conjuctionTicket
     * @param string $exchangeTicket
     * @param string $couponNumber
     * @param string $serviceClass
     * @param string $travelDate
     * @param string $carrierCode
     * @param string $stopOverPermitted
     * @param string $departureAirport
     * @param string $arrivalAirport
     * @param string $flightNumber
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $fareBasisCode
     * @param \PayPal\StructType\BasicAmountType $fare
     * @param \PayPal\StructType\BasicAmountType $taxes
     * @param \PayPal\StructType\BasicAmountType $fee
     * @param string $endorsementOrRestrictions
     */
    public function __construct($conjuctionTicket = null, $exchangeTicket = null, $couponNumber = null, $serviceClass = null, $travelDate = null, $carrierCode = null, $stopOverPermitted = null, $departureAirport = null, $arrivalAirport = null, $flightNumber = null, $departureTime = null, $arrivalTime = null, $fareBasisCode = null, \PayPal\StructType\BasicAmountType $fare = null, \PayPal\StructType\BasicAmountType $taxes = null, \PayPal\StructType\BasicAmountType $fee = null, $endorsementOrRestrictions = null)
    {
        $this
            ->setConjuctionTicket($conjuctionTicket)
            ->setExchangeTicket($exchangeTicket)
            ->setCouponNumber($couponNumber)
            ->setServiceClass($serviceClass)
            ->setTravelDate($travelDate)
            ->setCarrierCode($carrierCode)
            ->setStopOverPermitted($stopOverPermitted)
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setFlightNumber($flightNumber)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setFareBasisCode($fareBasisCode)
            ->setFare($fare)
            ->setTaxes($taxes)
            ->setFee($fee)
            ->setEndorsementOrRestrictions($endorsementOrRestrictions);
    }
    /**
     * Get ConjuctionTicket value
     * @return string|null
     */
    public function getConjuctionTicket()
    {
        return $this->ConjuctionTicket;
    }
    /**
     * Set ConjuctionTicket value
     * @param string $conjuctionTicket
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setConjuctionTicket($conjuctionTicket = null)
    {
        // validation for constraint: string
        if (!is_null($conjuctionTicket) && !is_string($conjuctionTicket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conjuctionTicket, true), gettype($conjuctionTicket)), __LINE__);
        }
        $this->ConjuctionTicket = $conjuctionTicket;
        return $this;
    }
    /**
     * Get ExchangeTicket value
     * @return string|null
     */
    public function getExchangeTicket()
    {
        return $this->ExchangeTicket;
    }
    /**
     * Set ExchangeTicket value
     * @param string $exchangeTicket
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setExchangeTicket($exchangeTicket = null)
    {
        // validation for constraint: string
        if (!is_null($exchangeTicket) && !is_string($exchangeTicket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeTicket, true), gettype($exchangeTicket)), __LINE__);
        }
        $this->ExchangeTicket = $exchangeTicket;
        return $this;
    }
    /**
     * Get CouponNumber value
     * @return string|null
     */
    public function getCouponNumber()
    {
        return $this->CouponNumber;
    }
    /**
     * Set CouponNumber value
     * @param string $couponNumber
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setCouponNumber($couponNumber = null)
    {
        // validation for constraint: string
        if (!is_null($couponNumber) && !is_string($couponNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($couponNumber, true), gettype($couponNumber)), __LINE__);
        }
        $this->CouponNumber = $couponNumber;
        return $this;
    }
    /**
     * Get ServiceClass value
     * @return string|null
     */
    public function getServiceClass()
    {
        return $this->ServiceClass;
    }
    /**
     * Set ServiceClass value
     * @param string $serviceClass
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setServiceClass($serviceClass = null)
    {
        // validation for constraint: string
        if (!is_null($serviceClass) && !is_string($serviceClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceClass, true), gettype($serviceClass)), __LINE__);
        }
        $this->ServiceClass = $serviceClass;
        return $this;
    }
    /**
     * Get TravelDate value
     * @return string|null
     */
    public function getTravelDate()
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param string $travelDate
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setTravelDate($travelDate = null)
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->TravelDate = $travelDate;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierCode, true), gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get StopOverPermitted value
     * @return string|null
     */
    public function getStopOverPermitted()
    {
        return $this->StopOverPermitted;
    }
    /**
     * Set StopOverPermitted value
     * @param string $stopOverPermitted
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setStopOverPermitted($stopOverPermitted = null)
    {
        // validation for constraint: string
        if (!is_null($stopOverPermitted) && !is_string($stopOverPermitted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stopOverPermitted, true), gettype($stopOverPermitted)), __LINE__);
        }
        $this->StopOverPermitted = $stopOverPermitted;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return string|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param string $departureAirport
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setDepartureAirport($departureAirport = null)
    {
        // validation for constraint: string
        if (!is_null($departureAirport) && !is_string($departureAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureAirport, true), gettype($departureAirport)), __LINE__);
        }
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return string|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param string $arrivalAirport
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setArrivalAirport($arrivalAirport = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalAirport) && !is_string($arrivalAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalAirport, true), gettype($arrivalAirport)), __LINE__);
        }
        $this->ArrivalAirport = $arrivalAirport;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setDepartureTime($departureTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime()
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setArrivalTime($arrivalTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * Get FareBasisCode value
     * @return string|null
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setFareBasisCode($fareBasisCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasisCode, true), gettype($fareBasisCode)), __LINE__);
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Get Fare value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFare()
    {
        return $this->Fare;
    }
    /**
     * Set Fare value
     * @param \PayPal\StructType\BasicAmountType $fare
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setFare(\PayPal\StructType\BasicAmountType $fare = null)
    {
        $this->Fare = $fare;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \PayPal\StructType\BasicAmountType $taxes
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setTaxes(\PayPal\StructType\BasicAmountType $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Fee value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \PayPal\StructType\BasicAmountType $fee
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setFee(\PayPal\StructType\BasicAmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Get EndorsementOrRestrictions value
     * @return string|null
     */
    public function getEndorsementOrRestrictions()
    {
        return $this->EndorsementOrRestrictions;
    }
    /**
     * Set EndorsementOrRestrictions value
     * @param string $endorsementOrRestrictions
     * @return \PayPal\StructType\FlightDetailsType
     */
    public function setEndorsementOrRestrictions($endorsementOrRestrictions = null)
    {
        // validation for constraint: string
        if (!is_null($endorsementOrRestrictions) && !is_string($endorsementOrRestrictions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsementOrRestrictions, true), gettype($endorsementOrRestrictions)), __LINE__);
        }
        $this->EndorsementOrRestrictions = $endorsementOrRestrictions;
        return $this;
    }
}
