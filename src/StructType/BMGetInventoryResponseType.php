<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMGetInventoryResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMGetInventoryResponseType extends AbstractResponseType
{
    /**
     * The HostedButtonID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HostedButtonID;
    /**
     * The TrackInv
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TrackInv;
    /**
     * The TrackPnl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TrackPnl;
    /**
     * The ItemTrackingDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:ItemTrackingDetails
     * @var \PayPal\StructType\ItemTrackingDetailsType
     */
    public $ItemTrackingDetails;
    /**
     * The OptionIndex
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionIndex;
    /**
     * The OptionName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionName;
    /**
     * The OptionTrackingDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: ebl:OptionTrackingDetails
     * @var \PayPal\StructType\OptionTrackingDetailsType[]
     */
    public $OptionTrackingDetails;
    /**
     * The SoldoutURL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoldoutURL;
    /**
     * The DigitalDownloadKeys
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var string[]
     */
    public $DigitalDownloadKeys;
    /**
     * Constructor method for BMGetInventoryResponseType
     * @uses BMGetInventoryResponseType::setHostedButtonID()
     * @uses BMGetInventoryResponseType::setTrackInv()
     * @uses BMGetInventoryResponseType::setTrackPnl()
     * @uses BMGetInventoryResponseType::setItemTrackingDetails()
     * @uses BMGetInventoryResponseType::setOptionIndex()
     * @uses BMGetInventoryResponseType::setOptionName()
     * @uses BMGetInventoryResponseType::setOptionTrackingDetails()
     * @uses BMGetInventoryResponseType::setSoldoutURL()
     * @uses BMGetInventoryResponseType::setDigitalDownloadKeys()
     * @param string $hostedButtonID
     * @param string $trackInv
     * @param string $trackPnl
     * @param \PayPal\StructType\ItemTrackingDetailsType $itemTrackingDetails
     * @param string $optionIndex
     * @param string $optionName
     * @param \PayPal\StructType\OptionTrackingDetailsType[] $optionTrackingDetails
     * @param string $soldoutURL
     * @param string[] $digitalDownloadKeys
     */
    public function __construct($hostedButtonID = null, $trackInv = null, $trackPnl = null, \PayPal\StructType\ItemTrackingDetailsType $itemTrackingDetails = null, $optionIndex = null, $optionName = null, array $optionTrackingDetails = array(), $soldoutURL = null, array $digitalDownloadKeys = array())
    {
        $this
            ->setHostedButtonID($hostedButtonID)
            ->setTrackInv($trackInv)
            ->setTrackPnl($trackPnl)
            ->setItemTrackingDetails($itemTrackingDetails)
            ->setOptionIndex($optionIndex)
            ->setOptionName($optionName)
            ->setOptionTrackingDetails($optionTrackingDetails)
            ->setSoldoutURL($soldoutURL)
            ->setDigitalDownloadKeys($digitalDownloadKeys);
    }
    /**
     * Get HostedButtonID value
     * @return string
     */
    public function getHostedButtonID()
    {
        return $this->HostedButtonID;
    }
    /**
     * Set HostedButtonID value
     * @param string $hostedButtonID
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setHostedButtonID($hostedButtonID = null)
    {
        // validation for constraint: string
        if (!is_null($hostedButtonID) && !is_string($hostedButtonID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostedButtonID)), __LINE__);
        }
        $this->HostedButtonID = $hostedButtonID;
        return $this;
    }
    /**
     * Get TrackInv value
     * @return string
     */
    public function getTrackInv()
    {
        return $this->TrackInv;
    }
    /**
     * Set TrackInv value
     * @param string $trackInv
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setTrackInv($trackInv = null)
    {
        // validation for constraint: string
        if (!is_null($trackInv) && !is_string($trackInv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackInv)), __LINE__);
        }
        $this->TrackInv = $trackInv;
        return $this;
    }
    /**
     * Get TrackPnl value
     * @return string
     */
    public function getTrackPnl()
    {
        return $this->TrackPnl;
    }
    /**
     * Set TrackPnl value
     * @param string $trackPnl
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setTrackPnl($trackPnl = null)
    {
        // validation for constraint: string
        if (!is_null($trackPnl) && !is_string($trackPnl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackPnl)), __LINE__);
        }
        $this->TrackPnl = $trackPnl;
        return $this;
    }
    /**
     * Get ItemTrackingDetails value
     * @return \PayPal\StructType\ItemTrackingDetailsType|null
     */
    public function getItemTrackingDetails()
    {
        return $this->ItemTrackingDetails;
    }
    /**
     * Set ItemTrackingDetails value
     * @param \PayPal\StructType\ItemTrackingDetailsType $itemTrackingDetails
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setItemTrackingDetails(\PayPal\StructType\ItemTrackingDetailsType $itemTrackingDetails = null)
    {
        $this->ItemTrackingDetails = $itemTrackingDetails;
        return $this;
    }
    /**
     * Get OptionIndex value
     * @return string|null
     */
    public function getOptionIndex()
    {
        return $this->OptionIndex;
    }
    /**
     * Set OptionIndex value
     * @param string $optionIndex
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setOptionIndex($optionIndex = null)
    {
        // validation for constraint: string
        if (!is_null($optionIndex) && !is_string($optionIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($optionIndex)), __LINE__);
        }
        $this->OptionIndex = $optionIndex;
        return $this;
    }
    /**
     * Get OptionName value
     * @return string|null
     */
    public function getOptionName()
    {
        return $this->OptionName;
    }
    /**
     * Set OptionName value
     * @param string $optionName
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setOptionName($optionName = null)
    {
        // validation for constraint: string
        if (!is_null($optionName) && !is_string($optionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($optionName)), __LINE__);
        }
        $this->OptionName = $optionName;
        return $this;
    }
    /**
     * Get OptionTrackingDetails value
     * @return \PayPal\StructType\OptionTrackingDetailsType[]|null
     */
    public function getOptionTrackingDetails()
    {
        return $this->OptionTrackingDetails;
    }
    /**
     * Set OptionTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionTrackingDetailsType[] $optionTrackingDetails
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setOptionTrackingDetails(array $optionTrackingDetails = array())
    {
        foreach ($optionTrackingDetails as $bMGetInventoryResponseTypeOptionTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$bMGetInventoryResponseTypeOptionTrackingDetailsItem instanceof \PayPal\StructType\OptionTrackingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The OptionTrackingDetails property can only contain items of \PayPal\StructType\OptionTrackingDetailsType, "%s" given', is_object($bMGetInventoryResponseTypeOptionTrackingDetailsItem) ? get_class($bMGetInventoryResponseTypeOptionTrackingDetailsItem) : gettype($bMGetInventoryResponseTypeOptionTrackingDetailsItem)), __LINE__);
            }
        }
        $this->OptionTrackingDetails = $optionTrackingDetails;
        return $this;
    }
    /**
     * Add item to OptionTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionTrackingDetailsType $item
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function addToOptionTrackingDetails(\PayPal\StructType\OptionTrackingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\OptionTrackingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The OptionTrackingDetails property can only contain items of \PayPal\StructType\OptionTrackingDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OptionTrackingDetails[] = $item;
        return $this;
    }
    /**
     * Get SoldoutURL value
     * @return string|null
     */
    public function getSoldoutURL()
    {
        return $this->SoldoutURL;
    }
    /**
     * Set SoldoutURL value
     * @param string $soldoutURL
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setSoldoutURL($soldoutURL = null)
    {
        // validation for constraint: string
        if (!is_null($soldoutURL) && !is_string($soldoutURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($soldoutURL)), __LINE__);
        }
        $this->SoldoutURL = $soldoutURL;
        return $this;
    }
    /**
     * Get DigitalDownloadKeys value
     * @return string[]|null
     */
    public function getDigitalDownloadKeys()
    {
        return $this->DigitalDownloadKeys;
    }
    /**
     * Set DigitalDownloadKeys value
     * @throws \InvalidArgumentException
     * @param string[] $digitalDownloadKeys
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function setDigitalDownloadKeys(array $digitalDownloadKeys = array())
    {
        foreach ($digitalDownloadKeys as $bMGetInventoryResponseTypeDigitalDownloadKeysItem) {
            // validation for constraint: itemType
            if (!is_string($bMGetInventoryResponseTypeDigitalDownloadKeysItem)) {
                throw new \InvalidArgumentException(sprintf('The DigitalDownloadKeys property can only contain items of string, "%s" given', is_object($bMGetInventoryResponseTypeDigitalDownloadKeysItem) ? get_class($bMGetInventoryResponseTypeDigitalDownloadKeysItem) : gettype($bMGetInventoryResponseTypeDigitalDownloadKeysItem)), __LINE__);
            }
        }
        $this->DigitalDownloadKeys = $digitalDownloadKeys;
        return $this;
    }
    /**
     * Add item to DigitalDownloadKeys value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\BMGetInventoryResponseType
     */
    public function addToDigitalDownloadKeys($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DigitalDownloadKeys property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DigitalDownloadKeys[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMGetInventoryResponseType
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
