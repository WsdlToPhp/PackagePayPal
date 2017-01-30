<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a Charity listing.in case of revision - all data can be min occur = 0
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CharityType extends AbstractStructBase
{
    /**
     * The CharityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CharityName;
    /**
     * The CharityNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CharityNumber;
    /**
     * The DonationPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $DonationPercent;
    /**
     * Constructor method for CharityType
     * @uses CharityType::setCharityName()
     * @uses CharityType::setCharityNumber()
     * @uses CharityType::setDonationPercent()
     * @param string $charityName
     * @param int $charityNumber
     * @param float $donationPercent
     */
    public function __construct($charityName = null, $charityNumber = null, $donationPercent = null)
    {
        $this
            ->setCharityName($charityName)
            ->setCharityNumber($charityNumber)
            ->setDonationPercent($donationPercent);
    }
    /**
     * Get CharityName value
     * @return string|null
     */
    public function getCharityName()
    {
        return $this->CharityName;
    }
    /**
     * Set CharityName value
     * @param string $charityName
     * @return \PayPal\StructType\CharityType
     */
    public function setCharityName($charityName = null)
    {
        // validation for constraint: string
        if (!is_null($charityName) && !is_string($charityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charityName)), __LINE__);
        }
        $this->CharityName = $charityName;
        return $this;
    }
    /**
     * Get CharityNumber value
     * @return int|null
     */
    public function getCharityNumber()
    {
        return $this->CharityNumber;
    }
    /**
     * Set CharityNumber value
     * @param int $charityNumber
     * @return \PayPal\StructType\CharityType
     */
    public function setCharityNumber($charityNumber = null)
    {
        // validation for constraint: int
        if (!is_null($charityNumber) && !is_numeric($charityNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($charityNumber)), __LINE__);
        }
        $this->CharityNumber = $charityNumber;
        return $this;
    }
    /**
     * Get DonationPercent value
     * @return float|null
     */
    public function getDonationPercent()
    {
        return $this->DonationPercent;
    }
    /**
     * Set DonationPercent value
     * @param float $donationPercent
     * @return \PayPal\StructType\CharityType
     */
    public function setDonationPercent($donationPercent = null)
    {
        $this->DonationPercent = $donationPercent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CharityType
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
