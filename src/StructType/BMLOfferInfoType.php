<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMLOfferInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: BMLOfferInfoType Specific information for BML.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMLOfferInfoType extends AbstractStructBase
{
    /**
     * The OfferTrackingID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identification for merchant/buyer/offer combo.
     * - minOccurs: 0
     * @var string
     */
    public $OfferTrackingID;
    /**
     * Constructor method for BMLOfferInfoType
     * @uses BMLOfferInfoType::setOfferTrackingID()
     * @param string $offerTrackingID
     */
    public function __construct($offerTrackingID = null)
    {
        $this
            ->setOfferTrackingID($offerTrackingID);
    }
    /**
     * Get OfferTrackingID value
     * @return string|null
     */
    public function getOfferTrackingID()
    {
        return $this->OfferTrackingID;
    }
    /**
     * Set OfferTrackingID value
     * @param string $offerTrackingID
     * @return \PayPal\StructType\BMLOfferInfoType
     */
    public function setOfferTrackingID($offerTrackingID = null)
    {
        // validation for constraint: string
        if (!is_null($offerTrackingID) && !is_string($offerTrackingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerTrackingID)), __LINE__);
        }
        $this->OfferTrackingID = $offerTrackingID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMLOfferInfoType
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
