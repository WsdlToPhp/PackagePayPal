<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMCreateButtonRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMCreateButtonRequestType extends AbstractRequestType
{
    /**
     * The ButtonType
     * Meta informations extracted from the WSDL
     * - documentation: Type of Button to create. Required Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonType;
    /**
     * The ButtonCode
     * Meta informations extracted from the WSDL
     * - documentation: button code. optional Must be one of the following: hosted, encrypted or cleartext
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonCode;
    /**
     * The ButtonSubType
     * Meta informations extracted from the WSDL
     * - documentation: Button sub type. optional for button types buynow and cart only Must Be either PRODUCTS or SERVICES
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonSubType;
    /**
     * The ButtonVar
     * Meta informations extracted from the WSDL
     * - documentation: Button Variable information At least one required recurring Character length and limitations: 63 single-byte alphanumeric characters
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var string[]
     */
    public $ButtonVar;
    /**
     * The OptionDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \PayPal\StructType\OptionDetailsType[]
     */
    public $OptionDetails;
    /**
     * The TextBox
     * Meta informations extracted from the WSDL
     * - documentation: Details of each option for the button. Optional
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var string[]
     */
    public $TextBox;
    /**
     * The ButtonImage
     * Meta informations extracted from the WSDL
     * - documentation: Button image to use. Optional Must be one of: REG, SML, or CC
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonImage;
    /**
     * The ButtonImageURL
     * Meta informations extracted from the WSDL
     * - documentation: Button URL for custom button image. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonImageURL;
    /**
     * The BuyNowText
     * Meta informations extracted from the WSDL
     * - documentation: Text to use on Buy Now Button. Optional Must be either BUYNOW or PAYNOW
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyNowText;
    /**
     * The SubscribeText
     * Meta informations extracted from the WSDL
     * - documentation: Text to use on Subscribe button. Optional Must be either BUYNOW or SUBSCRIBE
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SubscribeText;
    /**
     * The ButtonCountry
     * Meta informations extracted from the WSDL
     * - documentation: Button Country. Optional Must be valid ISO country code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonCountry;
    /**
     * The ButtonLanguage
     * Meta informations extracted from the WSDL
     * - documentation: Button language code. Optional Character length and limitations: 3 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonLanguage;
    /**
     * Constructor method for BMCreateButtonRequestType
     * @uses BMCreateButtonRequestType::setButtonType()
     * @uses BMCreateButtonRequestType::setButtonCode()
     * @uses BMCreateButtonRequestType::setButtonSubType()
     * @uses BMCreateButtonRequestType::setButtonVar()
     * @uses BMCreateButtonRequestType::setOptionDetails()
     * @uses BMCreateButtonRequestType::setTextBox()
     * @uses BMCreateButtonRequestType::setButtonImage()
     * @uses BMCreateButtonRequestType::setButtonImageURL()
     * @uses BMCreateButtonRequestType::setBuyNowText()
     * @uses BMCreateButtonRequestType::setSubscribeText()
     * @uses BMCreateButtonRequestType::setButtonCountry()
     * @uses BMCreateButtonRequestType::setButtonLanguage()
     * @param string $buttonType
     * @param string $buttonCode
     * @param string $buttonSubType
     * @param string[] $buttonVar
     * @param \PayPal\StructType\OptionDetailsType[] $optionDetails
     * @param string[] $textBox
     * @param string $buttonImage
     * @param string $buttonImageURL
     * @param string $buyNowText
     * @param string $subscribeText
     * @param string $buttonCountry
     * @param string $buttonLanguage
     */
    public function __construct($buttonType = null, $buttonCode = null, $buttonSubType = null, array $buttonVar = array(), array $optionDetails = array(), array $textBox = array(), $buttonImage = null, $buttonImageURL = null, $buyNowText = null, $subscribeText = null, $buttonCountry = null, $buttonLanguage = null)
    {
        $this
            ->setButtonType($buttonType)
            ->setButtonCode($buttonCode)
            ->setButtonSubType($buttonSubType)
            ->setButtonVar($buttonVar)
            ->setOptionDetails($optionDetails)
            ->setTextBox($textBox)
            ->setButtonImage($buttonImage)
            ->setButtonImageURL($buttonImageURL)
            ->setBuyNowText($buyNowText)
            ->setSubscribeText($subscribeText)
            ->setButtonCountry($buttonCountry)
            ->setButtonLanguage($buttonLanguage);
    }
    /**
     * Get ButtonType value
     * @return string|null
     */
    public function getButtonType()
    {
        return $this->ButtonType;
    }
    /**
     * Set ButtonType value
     * @uses \PayPal\EnumType\ButtonTypeType::valueIsValid()
     * @uses \PayPal\EnumType\ButtonTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buttonType
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonType($buttonType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonTypeType::valueIsValid($buttonType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buttonType, implode(', ', \PayPal\EnumType\ButtonTypeType::getValidValues())), __LINE__);
        }
        $this->ButtonType = $buttonType;
        return $this;
    }
    /**
     * Get ButtonCode value
     * @return string|null
     */
    public function getButtonCode()
    {
        return $this->ButtonCode;
    }
    /**
     * Set ButtonCode value
     * @uses \PayPal\EnumType\ButtonCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ButtonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buttonCode
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonCode($buttonCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonCodeType::valueIsValid($buttonCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buttonCode, implode(', ', \PayPal\EnumType\ButtonCodeType::getValidValues())), __LINE__);
        }
        $this->ButtonCode = $buttonCode;
        return $this;
    }
    /**
     * Get ButtonSubType value
     * @return string|null
     */
    public function getButtonSubType()
    {
        return $this->ButtonSubType;
    }
    /**
     * Set ButtonSubType value
     * @uses \PayPal\EnumType\ButtonSubTypeType::valueIsValid()
     * @uses \PayPal\EnumType\ButtonSubTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buttonSubType
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonSubType($buttonSubType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonSubTypeType::valueIsValid($buttonSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buttonSubType, implode(', ', \PayPal\EnumType\ButtonSubTypeType::getValidValues())), __LINE__);
        }
        $this->ButtonSubType = $buttonSubType;
        return $this;
    }
    /**
     * Get ButtonVar value
     * @return string[]|null
     */
    public function getButtonVar()
    {
        return $this->ButtonVar;
    }
    /**
     * Set ButtonVar value
     * @throws \InvalidArgumentException
     * @param string[] $buttonVar
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonVar(array $buttonVar = array())
    {
        foreach ($buttonVar as $bMCreateButtonRequestTypeButtonVarItem) {
            // validation for constraint: itemType
            if (!is_string($bMCreateButtonRequestTypeButtonVarItem)) {
                throw new \InvalidArgumentException(sprintf('The ButtonVar property can only contain items of string, "%s" given', is_object($bMCreateButtonRequestTypeButtonVarItem) ? get_class($bMCreateButtonRequestTypeButtonVarItem) : gettype($bMCreateButtonRequestTypeButtonVarItem)), __LINE__);
            }
        }
        $this->ButtonVar = $buttonVar;
        return $this;
    }
    /**
     * Add item to ButtonVar value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function addToButtonVar($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ButtonVar property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ButtonVar[] = $item;
        return $this;
    }
    /**
     * Get OptionDetails value
     * @return \PayPal\StructType\OptionDetailsType[]|null
     */
    public function getOptionDetails()
    {
        return $this->OptionDetails;
    }
    /**
     * Set OptionDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionDetailsType[] $optionDetails
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setOptionDetails(array $optionDetails = array())
    {
        foreach ($optionDetails as $bMCreateButtonRequestTypeOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$bMCreateButtonRequestTypeOptionDetailsItem instanceof \PayPal\StructType\OptionDetailsType) {
                throw new \InvalidArgumentException(sprintf('The OptionDetails property can only contain items of \PayPal\StructType\OptionDetailsType, "%s" given', is_object($bMCreateButtonRequestTypeOptionDetailsItem) ? get_class($bMCreateButtonRequestTypeOptionDetailsItem) : gettype($bMCreateButtonRequestTypeOptionDetailsItem)), __LINE__);
            }
        }
        $this->OptionDetails = $optionDetails;
        return $this;
    }
    /**
     * Add item to OptionDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionDetailsType $item
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function addToOptionDetails(\PayPal\StructType\OptionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\OptionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The OptionDetails property can only contain items of \PayPal\StructType\OptionDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OptionDetails[] = $item;
        return $this;
    }
    /**
     * Get TextBox value
     * @return string[]|null
     */
    public function getTextBox()
    {
        return $this->TextBox;
    }
    /**
     * Set TextBox value
     * @throws \InvalidArgumentException
     * @param string[] $textBox
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setTextBox(array $textBox = array())
    {
        foreach ($textBox as $bMCreateButtonRequestTypeTextBoxItem) {
            // validation for constraint: itemType
            if (!is_string($bMCreateButtonRequestTypeTextBoxItem)) {
                throw new \InvalidArgumentException(sprintf('The TextBox property can only contain items of string, "%s" given', is_object($bMCreateButtonRequestTypeTextBoxItem) ? get_class($bMCreateButtonRequestTypeTextBoxItem) : gettype($bMCreateButtonRequestTypeTextBoxItem)), __LINE__);
            }
        }
        $this->TextBox = $textBox;
        return $this;
    }
    /**
     * Add item to TextBox value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function addToTextBox($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TextBox property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextBox[] = $item;
        return $this;
    }
    /**
     * Get ButtonImage value
     * @return string|null
     */
    public function getButtonImage()
    {
        return $this->ButtonImage;
    }
    /**
     * Set ButtonImage value
     * @uses \PayPal\EnumType\ButtonImageType::valueIsValid()
     * @uses \PayPal\EnumType\ButtonImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buttonImage
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonImage($buttonImage = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonImageType::valueIsValid($buttonImage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buttonImage, implode(', ', \PayPal\EnumType\ButtonImageType::getValidValues())), __LINE__);
        }
        $this->ButtonImage = $buttonImage;
        return $this;
    }
    /**
     * Get ButtonImageURL value
     * @return string|null
     */
    public function getButtonImageURL()
    {
        return $this->ButtonImageURL;
    }
    /**
     * Set ButtonImageURL value
     * @param string $buttonImageURL
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonImageURL($buttonImageURL = null)
    {
        // validation for constraint: string
        if (!is_null($buttonImageURL) && !is_string($buttonImageURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buttonImageURL)), __LINE__);
        }
        $this->ButtonImageURL = $buttonImageURL;
        return $this;
    }
    /**
     * Get BuyNowText value
     * @return string|null
     */
    public function getBuyNowText()
    {
        return $this->BuyNowText;
    }
    /**
     * Set BuyNowText value
     * @uses \PayPal\EnumType\BuyNowTextType::valueIsValid()
     * @uses \PayPal\EnumType\BuyNowTextType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyNowText
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setBuyNowText($buyNowText = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BuyNowTextType::valueIsValid($buyNowText)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buyNowText, implode(', ', \PayPal\EnumType\BuyNowTextType::getValidValues())), __LINE__);
        }
        $this->BuyNowText = $buyNowText;
        return $this;
    }
    /**
     * Get SubscribeText value
     * @return string|null
     */
    public function getSubscribeText()
    {
        return $this->SubscribeText;
    }
    /**
     * Set SubscribeText value
     * @uses \PayPal\EnumType\SubscribeTextType::valueIsValid()
     * @uses \PayPal\EnumType\SubscribeTextType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscribeText
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setSubscribeText($subscribeText = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SubscribeTextType::valueIsValid($subscribeText)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscribeText, implode(', ', \PayPal\EnumType\SubscribeTextType::getValidValues())), __LINE__);
        }
        $this->SubscribeText = $subscribeText;
        return $this;
    }
    /**
     * Get ButtonCountry value
     * @return string|null
     */
    public function getButtonCountry()
    {
        return $this->ButtonCountry;
    }
    /**
     * Set ButtonCountry value
     * @uses \PayPal\EnumType\CountryCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buttonCountry
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonCountry($buttonCountry = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CountryCodeType::valueIsValid($buttonCountry)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buttonCountry, implode(', ', \PayPal\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->ButtonCountry = $buttonCountry;
        return $this;
    }
    /**
     * Get ButtonLanguage value
     * @return string|null
     */
    public function getButtonLanguage()
    {
        return $this->ButtonLanguage;
    }
    /**
     * Set ButtonLanguage value
     * @param string $buttonLanguage
     * @return \PayPal\StructType\BMCreateButtonRequestType
     */
    public function setButtonLanguage($buttonLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($buttonLanguage) && !is_string($buttonLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buttonLanguage)), __LINE__);
        }
        $this->ButtonLanguage = $buttonLanguage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMCreateButtonRequestType
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
