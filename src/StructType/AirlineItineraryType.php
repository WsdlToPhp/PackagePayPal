<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirlineItineraryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: AID for Airlines
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AirlineItineraryType extends AbstractStructBase
{
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The IssueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueDate;
    /**
     * The TravelAgencyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelAgencyName;
    /**
     * The TravelAgencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelAgencyCode;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * The IssuingCarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssuingCarrierCode;
    /**
     * The CustomerCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerCode;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TotalFare;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TotalTaxes;
    /**
     * The TotalFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TotalFee;
    /**
     * The RestrictedTicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RestrictedTicket;
    /**
     * The ClearingSequence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearingSequence;
    /**
     * The ClearingCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearingCount;
    /**
     * The FlightDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\FlightDetailsType[]
     */
    public $FlightDetails;
    /**
     * Constructor method for AirlineItineraryType
     * @uses AirlineItineraryType::setPassengerName()
     * @uses AirlineItineraryType::setIssueDate()
     * @uses AirlineItineraryType::setTravelAgencyName()
     * @uses AirlineItineraryType::setTravelAgencyCode()
     * @uses AirlineItineraryType::setTicketNumber()
     * @uses AirlineItineraryType::setIssuingCarrierCode()
     * @uses AirlineItineraryType::setCustomerCode()
     * @uses AirlineItineraryType::setTotalFare()
     * @uses AirlineItineraryType::setTotalTaxes()
     * @uses AirlineItineraryType::setTotalFee()
     * @uses AirlineItineraryType::setRestrictedTicket()
     * @uses AirlineItineraryType::setClearingSequence()
     * @uses AirlineItineraryType::setClearingCount()
     * @uses AirlineItineraryType::setFlightDetails()
     * @param string $passengerName
     * @param string $issueDate
     * @param string $travelAgencyName
     * @param string $travelAgencyCode
     * @param string $ticketNumber
     * @param string $issuingCarrierCode
     * @param string $customerCode
     * @param \PayPal\StructType\BasicAmountType $totalFare
     * @param \PayPal\StructType\BasicAmountType $totalTaxes
     * @param \PayPal\StructType\BasicAmountType $totalFee
     * @param string $restrictedTicket
     * @param string $clearingSequence
     * @param string $clearingCount
     * @param \PayPal\StructType\FlightDetailsType[] $flightDetails
     */
    public function __construct($passengerName = null, $issueDate = null, $travelAgencyName = null, $travelAgencyCode = null, $ticketNumber = null, $issuingCarrierCode = null, $customerCode = null, \PayPal\StructType\BasicAmountType $totalFare = null, \PayPal\StructType\BasicAmountType $totalTaxes = null, \PayPal\StructType\BasicAmountType $totalFee = null, $restrictedTicket = null, $clearingSequence = null, $clearingCount = null, array $flightDetails = array())
    {
        $this
            ->setPassengerName($passengerName)
            ->setIssueDate($issueDate)
            ->setTravelAgencyName($travelAgencyName)
            ->setTravelAgencyCode($travelAgencyCode)
            ->setTicketNumber($ticketNumber)
            ->setIssuingCarrierCode($issuingCarrierCode)
            ->setCustomerCode($customerCode)
            ->setTotalFare($totalFare)
            ->setTotalTaxes($totalTaxes)
            ->setTotalFee($totalFee)
            ->setRestrictedTicket($restrictedTicket)
            ->setClearingSequence($clearingSequence)
            ->setClearingCount($clearingCount)
            ->setFlightDetails($flightDetails);
    }
    /**
     * Get PassengerName value
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->PassengerName;
    }
    /**
     * Set PassengerName value
     * @param string $passengerName
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setPassengerName($passengerName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerName)), __LINE__);
        }
        $this->PassengerName = $passengerName;
        return $this;
    }
    /**
     * Get IssueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->IssueDate;
    }
    /**
     * Set IssueDate value
     * @param string $issueDate
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issueDate)), __LINE__);
        }
        $this->IssueDate = $issueDate;
        return $this;
    }
    /**
     * Get TravelAgencyName value
     * @return string|null
     */
    public function getTravelAgencyName()
    {
        return $this->TravelAgencyName;
    }
    /**
     * Set TravelAgencyName value
     * @param string $travelAgencyName
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setTravelAgencyName($travelAgencyName = null)
    {
        // validation for constraint: string
        if (!is_null($travelAgencyName) && !is_string($travelAgencyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelAgencyName)), __LINE__);
        }
        $this->TravelAgencyName = $travelAgencyName;
        return $this;
    }
    /**
     * Get TravelAgencyCode value
     * @return string|null
     */
    public function getTravelAgencyCode()
    {
        return $this->TravelAgencyCode;
    }
    /**
     * Set TravelAgencyCode value
     * @param string $travelAgencyCode
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setTravelAgencyCode($travelAgencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($travelAgencyCode) && !is_string($travelAgencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelAgencyCode)), __LINE__);
        }
        $this->TravelAgencyCode = $travelAgencyCode;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get IssuingCarrierCode value
     * @return string|null
     */
    public function getIssuingCarrierCode()
    {
        return $this->IssuingCarrierCode;
    }
    /**
     * Set IssuingCarrierCode value
     * @param string $issuingCarrierCode
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setIssuingCarrierCode($issuingCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($issuingCarrierCode) && !is_string($issuingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuingCarrierCode)), __LINE__);
        }
        $this->IssuingCarrierCode = $issuingCarrierCode;
        return $this;
    }
    /**
     * Get CustomerCode value
     * @return string|null
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }
    /**
     * Set CustomerCode value
     * @param string $customerCode
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setCustomerCode($customerCode = null)
    {
        // validation for constraint: string
        if (!is_null($customerCode) && !is_string($customerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerCode)), __LINE__);
        }
        $this->CustomerCode = $customerCode;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param \PayPal\StructType\BasicAmountType $totalFare
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setTotalFare(\PayPal\StructType\BasicAmountType $totalFare = null)
    {
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \PayPal\StructType\BasicAmountType $totalTaxes
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setTotalTaxes(\PayPal\StructType\BasicAmountType $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get TotalFee value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTotalFee()
    {
        return $this->TotalFee;
    }
    /**
     * Set TotalFee value
     * @param \PayPal\StructType\BasicAmountType $totalFee
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setTotalFee(\PayPal\StructType\BasicAmountType $totalFee = null)
    {
        $this->TotalFee = $totalFee;
        return $this;
    }
    /**
     * Get RestrictedTicket value
     * @return string|null
     */
    public function getRestrictedTicket()
    {
        return $this->RestrictedTicket;
    }
    /**
     * Set RestrictedTicket value
     * @param string $restrictedTicket
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setRestrictedTicket($restrictedTicket = null)
    {
        // validation for constraint: string
        if (!is_null($restrictedTicket) && !is_string($restrictedTicket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restrictedTicket)), __LINE__);
        }
        $this->RestrictedTicket = $restrictedTicket;
        return $this;
    }
    /**
     * Get ClearingSequence value
     * @return string|null
     */
    public function getClearingSequence()
    {
        return $this->ClearingSequence;
    }
    /**
     * Set ClearingSequence value
     * @param string $clearingSequence
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setClearingSequence($clearingSequence = null)
    {
        // validation for constraint: string
        if (!is_null($clearingSequence) && !is_string($clearingSequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearingSequence)), __LINE__);
        }
        $this->ClearingSequence = $clearingSequence;
        return $this;
    }
    /**
     * Get ClearingCount value
     * @return string|null
     */
    public function getClearingCount()
    {
        return $this->ClearingCount;
    }
    /**
     * Set ClearingCount value
     * @param string $clearingCount
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setClearingCount($clearingCount = null)
    {
        // validation for constraint: string
        if (!is_null($clearingCount) && !is_string($clearingCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearingCount)), __LINE__);
        }
        $this->ClearingCount = $clearingCount;
        return $this;
    }
    /**
     * Get FlightDetails value
     * @return \PayPal\StructType\FlightDetailsType[]|null
     */
    public function getFlightDetails()
    {
        return $this->FlightDetails;
    }
    /**
     * Set FlightDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FlightDetailsType[] $flightDetails
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function setFlightDetails(array $flightDetails = array())
    {
        foreach ($flightDetails as $airlineItineraryTypeFlightDetailsItem) {
            // validation for constraint: itemType
            if (!$airlineItineraryTypeFlightDetailsItem instanceof \PayPal\StructType\FlightDetailsType) {
                throw new \InvalidArgumentException(sprintf('The FlightDetails property can only contain items of \PayPal\StructType\FlightDetailsType, "%s" given', is_object($airlineItineraryTypeFlightDetailsItem) ? get_class($airlineItineraryTypeFlightDetailsItem) : gettype($airlineItineraryTypeFlightDetailsItem)), __LINE__);
            }
        }
        $this->FlightDetails = $flightDetails;
        return $this;
    }
    /**
     * Add item to FlightDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\FlightDetailsType $item
     * @return \PayPal\StructType\AirlineItineraryType
     */
    public function addToFlightDetails(\PayPal\StructType\FlightDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\FlightDetailsType) {
            throw new \InvalidArgumentException(sprintf('The FlightDetails property can only contain items of \PayPal\StructType\FlightDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AirlineItineraryType
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
