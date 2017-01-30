<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMSetInventoryRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMSetInventoryRequestType extends AbstractRequestType
{
    /**
     * The HostedButtonID
     * Meta informations extracted from the WSDL
     * - documentation: Hosted Button ID of button you wish to change. Required Character length and limitations: 10 single-byte numeric characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HostedButtonID;
    /**
     * The TrackInv
     * Meta informations extracted from the WSDL
     * - documentation: Is Inventory tracked. Required 0 or 1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TrackInv;
    /**
     * The TrackPnl
     * Meta informations extracted from the WSDL
     * - documentation: Is PNL Tracked. Required 0 or 1
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
     * - documentation: Option Index. Optional Character length and limitations: 1 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionIndex;
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
     * - documentation: URL of page to display when an item is soldout. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoldoutURL;
    /**
     * The ReuseDigitalDownloadKeys
     * Meta informations extracted from the WSDL
     * - documentation: Whether to use the same digital download key repeatedly. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReuseDigitalDownloadKeys;
    /**
     * The AppendDigitalDownloadKeys
     * Meta informations extracted from the WSDL
     * - documentation: Whether to append these keys to the list or not (replace). Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AppendDigitalDownloadKeys;
    /**
     * The DigitalDownloadKeys
     * Meta informations extracted from the WSDL
     * - documentation: Zero or more digital download keys to distribute to customers after transaction is completed. Optional Character length and limitations: 1000 single-byte alphanumeric characters
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var string[]
     */
    public $DigitalDownloadKeys;
    /**
     * Constructor method for BMSetInventoryRequestType
     * @uses BMSetInventoryRequestType::setHostedButtonID()
     * @uses BMSetInventoryRequestType::setTrackInv()
     * @uses BMSetInventoryRequestType::setTrackPnl()
     * @uses BMSetInventoryRequestType::setItemTrackingDetails()
     * @uses BMSetInventoryRequestType::setOptionIndex()
     * @uses BMSetInventoryRequestType::setOptionTrackingDetails()
     * @uses BMSetInventoryRequestType::setSoldoutURL()
     * @uses BMSetInventoryRequestType::setReuseDigitalDownloadKeys()
     * @uses BMSetInventoryRequestType::setAppendDigitalDownloadKeys()
     * @uses BMSetInventoryRequestType::setDigitalDownloadKeys()
     * @param string $hostedButtonID
     * @param string $trackInv
     * @param string $trackPnl
     * @param \PayPal\StructType\ItemTrackingDetailsType $itemTrackingDetails
     * @param string $optionIndex
     * @param \PayPal\StructType\OptionTrackingDetailsType[] $optionTrackingDetails
     * @param string $soldoutURL
     * @param string $reuseDigitalDownloadKeys
     * @param string $appendDigitalDownloadKeys
     * @param string[] $digitalDownloadKeys
     */
    public function __construct($hostedButtonID = null, $trackInv = null, $trackPnl = null, \PayPal\StructType\ItemTrackingDetailsType $itemTrackingDetails = null, $optionIndex = null, array $optionTrackingDetails = array(), $soldoutURL = null, $reuseDigitalDownloadKeys = null, $appendDigitalDownloadKeys = null, array $digitalDownloadKeys = array())
    {
        $this
            ->setHostedButtonID($hostedButtonID)
            ->setTrackInv($trackInv)
            ->setTrackPnl($trackPnl)
            ->setItemTrackingDetails($itemTrackingDetails)
            ->setOptionIndex($optionIndex)
            ->setOptionTrackingDetails($optionTrackingDetails)
            ->setSoldoutURL($soldoutURL)
            ->setReuseDigitalDownloadKeys($reuseDigitalDownloadKeys)
            ->setAppendDigitalDownloadKeys($appendDigitalDownloadKeys)
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
     */
    public function setOptionTrackingDetails(array $optionTrackingDetails = array())
    {
        foreach ($optionTrackingDetails as $bMSetInventoryRequestTypeOptionTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$bMSetInventoryRequestTypeOptionTrackingDetailsItem instanceof \PayPal\StructType\OptionTrackingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The OptionTrackingDetails property can only contain items of \PayPal\StructType\OptionTrackingDetailsType, "%s" given', is_object($bMSetInventoryRequestTypeOptionTrackingDetailsItem) ? get_class($bMSetInventoryRequestTypeOptionTrackingDetailsItem) : gettype($bMSetInventoryRequestTypeOptionTrackingDetailsItem)), __LINE__);
            }
        }
        $this->OptionTrackingDetails = $optionTrackingDetails;
        return $this;
    }
    /**
     * Add item to OptionTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionTrackingDetailsType $item
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * Get ReuseDigitalDownloadKeys value
     * @return string|null
     */
    public function getReuseDigitalDownloadKeys()
    {
        return $this->ReuseDigitalDownloadKeys;
    }
    /**
     * Set ReuseDigitalDownloadKeys value
     * @param string $reuseDigitalDownloadKeys
     * @return \PayPal\StructType\BMSetInventoryRequestType
     */
    public function setReuseDigitalDownloadKeys($reuseDigitalDownloadKeys = null)
    {
        // validation for constraint: string
        if (!is_null($reuseDigitalDownloadKeys) && !is_string($reuseDigitalDownloadKeys)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reuseDigitalDownloadKeys)), __LINE__);
        }
        $this->ReuseDigitalDownloadKeys = $reuseDigitalDownloadKeys;
        return $this;
    }
    /**
     * Get AppendDigitalDownloadKeys value
     * @return string|null
     */
    public function getAppendDigitalDownloadKeys()
    {
        return $this->AppendDigitalDownloadKeys;
    }
    /**
     * Set AppendDigitalDownloadKeys value
     * @param string $appendDigitalDownloadKeys
     * @return \PayPal\StructType\BMSetInventoryRequestType
     */
    public function setAppendDigitalDownloadKeys($appendDigitalDownloadKeys = null)
    {
        // validation for constraint: string
        if (!is_null($appendDigitalDownloadKeys) && !is_string($appendDigitalDownloadKeys)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appendDigitalDownloadKeys)), __LINE__);
        }
        $this->AppendDigitalDownloadKeys = $appendDigitalDownloadKeys;
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
     */
    public function setDigitalDownloadKeys(array $digitalDownloadKeys = array())
    {
        foreach ($digitalDownloadKeys as $bMSetInventoryRequestTypeDigitalDownloadKeysItem) {
            // validation for constraint: itemType
            if (!is_string($bMSetInventoryRequestTypeDigitalDownloadKeysItem)) {
                throw new \InvalidArgumentException(sprintf('The DigitalDownloadKeys property can only contain items of string, "%s" given', is_object($bMSetInventoryRequestTypeDigitalDownloadKeysItem) ? get_class($bMSetInventoryRequestTypeDigitalDownloadKeysItem) : gettype($bMSetInventoryRequestTypeDigitalDownloadKeysItem)), __LINE__);
            }
        }
        $this->DigitalDownloadKeys = $digitalDownloadKeys;
        return $this;
    }
    /**
     * Add item to DigitalDownloadKeys value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
     * @return \PayPal\StructType\BMSetInventoryRequestType
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
