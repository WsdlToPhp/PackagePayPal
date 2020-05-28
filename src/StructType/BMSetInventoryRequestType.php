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
     * Meta information extracted from the WSDL
     * - documentation: Hosted Button ID of button you wish to change. Required Character length and limitations: 10 single-byte numeric characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HostedButtonID;
    /**
     * The TrackInv
     * Meta information extracted from the WSDL
     * - documentation: Is Inventory tracked. Required 0 or 1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TrackInv;
    /**
     * The TrackPnl
     * Meta information extracted from the WSDL
     * - documentation: Is PNL Tracked. Required 0 or 1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TrackPnl;
    /**
     * The ItemTrackingDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:ItemTrackingDetails
     * @var \PayPal\StructType\ItemTrackingDetailsType
     */
    public $ItemTrackingDetails;
    /**
     * The OptionIndex
     * Meta information extracted from the WSDL
     * - documentation: Option Index. Optional Character length and limitations: 1 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OptionIndex;
    /**
     * The OptionTrackingDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: ebl:OptionTrackingDetails
     * @var \PayPal\StructType\OptionTrackingDetailsType[]
     */
    public $OptionTrackingDetails;
    /**
     * The SoldoutURL
     * Meta information extracted from the WSDL
     * - documentation: URL of page to display when an item is soldout. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoldoutURL;
    /**
     * The ReuseDigitalDownloadKeys
     * Meta information extracted from the WSDL
     * - documentation: Whether to use the same digital download key repeatedly. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReuseDigitalDownloadKeys;
    /**
     * The AppendDigitalDownloadKeys
     * Meta information extracted from the WSDL
     * - documentation: Whether to append these keys to the list or not (replace). Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AppendDigitalDownloadKeys;
    /**
     * The DigitalDownloadKeys
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostedButtonID, true), gettype($hostedButtonID)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackInv, true), gettype($trackInv)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackPnl, true), gettype($trackPnl)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionIndex, true), gettype($optionIndex)), __LINE__);
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
     * This method is responsible for validating the values passed to the setOptionTrackingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionTrackingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionTrackingDetailsForArrayConstraintsFromSetOptionTrackingDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bMSetInventoryRequestTypeOptionTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$bMSetInventoryRequestTypeOptionTrackingDetailsItem instanceof \PayPal\StructType\OptionTrackingDetailsType) {
                $invalidValues[] = is_object($bMSetInventoryRequestTypeOptionTrackingDetailsItem) ? get_class($bMSetInventoryRequestTypeOptionTrackingDetailsItem) : sprintf('%s(%s)', gettype($bMSetInventoryRequestTypeOptionTrackingDetailsItem), var_export($bMSetInventoryRequestTypeOptionTrackingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionTrackingDetails property can only contain items of type \PayPal\StructType\OptionTrackingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OptionTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionTrackingDetailsType[] $optionTrackingDetails
     * @return \PayPal\StructType\BMSetInventoryRequestType
     */
    public function setOptionTrackingDetails(array $optionTrackingDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($optionTrackingDetailsArrayErrorMessage = self::validateOptionTrackingDetailsForArrayConstraintsFromSetOptionTrackingDetails($optionTrackingDetails))) {
            throw new \InvalidArgumentException($optionTrackingDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($optionTrackingDetails) && count($optionTrackingDetails) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($optionTrackingDetails)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The OptionTrackingDetails property can only contain items of type \PayPal\StructType\OptionTrackingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->OptionTrackingDetails) && count($this->OptionTrackingDetails) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->OptionTrackingDetails)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soldoutURL, true), gettype($soldoutURL)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reuseDigitalDownloadKeys, true), gettype($reuseDigitalDownloadKeys)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appendDigitalDownloadKeys, true), gettype($appendDigitalDownloadKeys)), __LINE__);
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
     * This method is responsible for validating the values passed to the setDigitalDownloadKeys method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDigitalDownloadKeys method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDigitalDownloadKeysForArrayConstraintsFromSetDigitalDownloadKeys(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bMSetInventoryRequestTypeDigitalDownloadKeysItem) {
            // validation for constraint: itemType
            if (!is_string($bMSetInventoryRequestTypeDigitalDownloadKeysItem)) {
                $invalidValues[] = is_object($bMSetInventoryRequestTypeDigitalDownloadKeysItem) ? get_class($bMSetInventoryRequestTypeDigitalDownloadKeysItem) : sprintf('%s(%s)', gettype($bMSetInventoryRequestTypeDigitalDownloadKeysItem), var_export($bMSetInventoryRequestTypeDigitalDownloadKeysItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DigitalDownloadKeys property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DigitalDownloadKeys value
     * @throws \InvalidArgumentException
     * @param string[] $digitalDownloadKeys
     * @return \PayPal\StructType\BMSetInventoryRequestType
     */
    public function setDigitalDownloadKeys(array $digitalDownloadKeys = array())
    {
        // validation for constraint: array
        if ('' !== ($digitalDownloadKeysArrayErrorMessage = self::validateDigitalDownloadKeysForArrayConstraintsFromSetDigitalDownloadKeys($digitalDownloadKeys))) {
            throw new \InvalidArgumentException($digitalDownloadKeysArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($digitalDownloadKeys) && count($digitalDownloadKeys) > 1000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($digitalDownloadKeys)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The DigitalDownloadKeys property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->DigitalDownloadKeys) && count($this->DigitalDownloadKeys) >= 1000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->DigitalDownloadKeys)), __LINE__);
        }
        $this->DigitalDownloadKeys[] = $item;
        return $this;
    }
}
