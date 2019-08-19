<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerDetailType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyerDetailType extends AbstractStructBase
{
    /**
     * The IdentificationInfo
     * Meta information extracted from the WSDL
     * - documentation: Information that is used to indentify the Buyer. This is used for auto authorization. Mandatory if Authorization is requested.
     * - minOccurs: 0
     * @var \PayPal\StructType\IdentificationInfoType
     */
    public $IdentificationInfo;
    /**
     * The RiskSessionCorrelationID
     * Meta information extracted from the WSDL
     * - documentation: Correlation id related to risk process done for the device. Max length is 36 Chars.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RiskSessionCorrelationID;
    /**
     * The BuyerIPAddress
     * Meta information extracted from the WSDL
     * - documentation: Buyer's IP Address
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerIPAddress;
    /**
     * Constructor method for BuyerDetailType
     * @uses BuyerDetailType::setIdentificationInfo()
     * @uses BuyerDetailType::setRiskSessionCorrelationID()
     * @uses BuyerDetailType::setBuyerIPAddress()
     * @param \PayPal\StructType\IdentificationInfoType $identificationInfo
     * @param string $riskSessionCorrelationID
     * @param string $buyerIPAddress
     */
    public function __construct(\PayPal\StructType\IdentificationInfoType $identificationInfo = null, $riskSessionCorrelationID = null, $buyerIPAddress = null)
    {
        $this
            ->setIdentificationInfo($identificationInfo)
            ->setRiskSessionCorrelationID($riskSessionCorrelationID)
            ->setBuyerIPAddress($buyerIPAddress);
    }
    /**
     * Get IdentificationInfo value
     * @return \PayPal\StructType\IdentificationInfoType|null
     */
    public function getIdentificationInfo()
    {
        return $this->IdentificationInfo;
    }
    /**
     * Set IdentificationInfo value
     * @param \PayPal\StructType\IdentificationInfoType $identificationInfo
     * @return \PayPal\StructType\BuyerDetailType
     */
    public function setIdentificationInfo(\PayPal\StructType\IdentificationInfoType $identificationInfo = null)
    {
        $this->IdentificationInfo = $identificationInfo;
        return $this;
    }
    /**
     * Get RiskSessionCorrelationID value
     * @return string|null
     */
    public function getRiskSessionCorrelationID()
    {
        return $this->RiskSessionCorrelationID;
    }
    /**
     * Set RiskSessionCorrelationID value
     * @param string $riskSessionCorrelationID
     * @return \PayPal\StructType\BuyerDetailType
     */
    public function setRiskSessionCorrelationID($riskSessionCorrelationID = null)
    {
        // validation for constraint: string
        if (!is_null($riskSessionCorrelationID) && !is_string($riskSessionCorrelationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($riskSessionCorrelationID, true), gettype($riskSessionCorrelationID)), __LINE__);
        }
        $this->RiskSessionCorrelationID = $riskSessionCorrelationID;
        return $this;
    }
    /**
     * Get BuyerIPAddress value
     * @return string|null
     */
    public function getBuyerIPAddress()
    {
        return $this->BuyerIPAddress;
    }
    /**
     * Set BuyerIPAddress value
     * @param string $buyerIPAddress
     * @return \PayPal\StructType\BuyerDetailType
     */
    public function setBuyerIPAddress($buyerIPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($buyerIPAddress) && !is_string($buyerIPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerIPAddress, true), gettype($buyerIPAddress)), __LINE__);
        }
        $this->BuyerIPAddress = $buyerIPAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BuyerDetailType
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
