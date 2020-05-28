<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMLOfferInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: BMLOfferInfoType Specific information for BML.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMLOfferInfoType extends AbstractStructBase
{
    /**
     * The OfferTrackingID
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerTrackingID, true), gettype($offerTrackingID)), __LINE__);
        }
        $this->OfferTrackingID = $offerTrackingID;
        return $this;
    }
}
