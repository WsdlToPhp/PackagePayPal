<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a Charity listing.in case of revision - all data can be min occur = 0
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CharityType extends AbstractStructBase
{
    /**
     * The CharityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CharityName;
    /**
     * The CharityNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CharityNumber;
    /**
     * The DonationPercent
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityName, true), gettype($charityName)), __LINE__);
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
        if (!is_null($charityNumber) && !(is_int($charityNumber) || ctype_digit($charityNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($charityNumber, true), gettype($charityNumber)), __LINE__);
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
        // validation for constraint: float
        if (!is_null($donationPercent) && !(is_float($donationPercent) || is_numeric($donationPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($donationPercent, true), gettype($donationPercent)), __LINE__);
        }
        $this->DonationPercent = $donationPercent;
        return $this;
    }
}
