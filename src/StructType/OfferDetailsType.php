<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: OfferDetailsType Specific information for an offer.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OfferDetailsType extends AbstractStructBase
{
    /**
     * The OfferCode
     * Meta information extracted from the WSDL
     * - documentation: Code used to identify the promotion offer.
     * - minOccurs: 0
     * @var string
     */
    public $OfferCode;
    /**
     * The BMLOfferInfo
     * Meta information extracted from the WSDL
     * - documentation: Specific infromation for BML, Similar structure could be added for sepcific promotion needs like CrossPromotions
     * - minOccurs: 0
     * @var \PayPal\StructType\BMLOfferInfoType
     */
    public $BMLOfferInfo;
    /**
     * Constructor method for OfferDetailsType
     * @uses OfferDetailsType::setOfferCode()
     * @uses OfferDetailsType::setBMLOfferInfo()
     * @param string $offerCode
     * @param \PayPal\StructType\BMLOfferInfoType $bMLOfferInfo
     */
    public function __construct($offerCode = null, \PayPal\StructType\BMLOfferInfoType $bMLOfferInfo = null)
    {
        $this
            ->setOfferCode($offerCode)
            ->setBMLOfferInfo($bMLOfferInfo);
    }
    /**
     * Get OfferCode value
     * @return string|null
     */
    public function getOfferCode()
    {
        return $this->OfferCode;
    }
    /**
     * Set OfferCode value
     * @param string $offerCode
     * @return \PayPal\StructType\OfferDetailsType
     */
    public function setOfferCode($offerCode = null)
    {
        // validation for constraint: string
        if (!is_null($offerCode) && !is_string($offerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerCode, true), gettype($offerCode)), __LINE__);
        }
        $this->OfferCode = $offerCode;
        return $this;
    }
    /**
     * Get BMLOfferInfo value
     * @return \PayPal\StructType\BMLOfferInfoType|null
     */
    public function getBMLOfferInfo()
    {
        return $this->BMLOfferInfo;
    }
    /**
     * Set BMLOfferInfo value
     * @param \PayPal\StructType\BMLOfferInfoType $bMLOfferInfo
     * @return \PayPal\StructType\OfferDetailsType
     */
    public function setBMLOfferInfo(\PayPal\StructType\BMLOfferInfoType $bMLOfferInfo = null)
    {
        $this->BMLOfferInfo = $bMLOfferInfo;
        return $this;
    }
}
