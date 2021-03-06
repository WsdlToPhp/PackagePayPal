<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMUpdateButtonRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMUpdateButtonRequestType extends AbstractRequestType
{
    /**
     * The HostedButtonID
     * Meta information extracted from the WSDL
     * - documentation: Hosted Button id of the button to update. Required Character length and limitations: 10 single-byte numeric characters
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HostedButtonID;
    /**
     * The ButtonType
     * Meta information extracted from the WSDL
     * - documentation: Type of Button to create. Required Must be one of the following: BUYNOW, CART, GIFTCERTIFICATE. SUBSCRIBE, PAYMENTPLAN, AUTOBILLING, DONATE, VIEWCART or UNSUBSCRIBE
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonType;
    /**
     * The ButtonCode
     * Meta information extracted from the WSDL
     * - documentation: button code. optional Must be one of the following: hosted, encrypted or cleartext
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonCode;
    /**
     * The ButtonSubType
     * Meta information extracted from the WSDL
     * - documentation: Button sub type. optional for button types buynow and cart only Must Be either PRODUCTS or SERVICES
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonSubType;
    /**
     * The ButtonVar
     * Meta information extracted from the WSDL
     * - documentation: Button Variable information At least one required recurring Character length and limitations: 63 single-byte alphanumeric characters
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var string[]
     */
    public $ButtonVar;
    /**
     * The OptionDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \PayPal\StructType\OptionDetailsType[]
     */
    public $OptionDetails;
    /**
     * The TextBox
     * Meta information extracted from the WSDL
     * - documentation: Details of each option for the button. Optional
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var string[]
     */
    public $TextBox;
    /**
     * The ButtonImage
     * Meta information extracted from the WSDL
     * - documentation: Button image to use. Optional Must be one of: REG, SML, or CC
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonImage;
    /**
     * The ButtonImageURL
     * Meta information extracted from the WSDL
     * - documentation: Button URL for custom button image. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonImageURL;
    /**
     * The BuyNowText
     * Meta information extracted from the WSDL
     * - documentation: Text to use on Buy Now Button. Optional Must be either BUYNOW or PAYNOW
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyNowText;
    /**
     * The SubscribeText
     * Meta information extracted from the WSDL
     * - documentation: Text to use on Subscribe button. Optional Must be either BUYNOW or SUBSCRIBE
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SubscribeText;
    /**
     * The ButtonCountry
     * Meta information extracted from the WSDL
     * - documentation: Button Country. Optional Must be valid ISO country code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonCountry;
    /**
     * The ButtonLanguage
     * Meta information extracted from the WSDL
     * - documentation: Button language code. Optional Character length and limitations: 2 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ButtonLanguage;
    /**
     * Constructor method for BMUpdateButtonRequestType
     * @uses BMUpdateButtonRequestType::setHostedButtonID()
     * @uses BMUpdateButtonRequestType::setButtonType()
     * @uses BMUpdateButtonRequestType::setButtonCode()
     * @uses BMUpdateButtonRequestType::setButtonSubType()
     * @uses BMUpdateButtonRequestType::setButtonVar()
     * @uses BMUpdateButtonRequestType::setOptionDetails()
     * @uses BMUpdateButtonRequestType::setTextBox()
     * @uses BMUpdateButtonRequestType::setButtonImage()
     * @uses BMUpdateButtonRequestType::setButtonImageURL()
     * @uses BMUpdateButtonRequestType::setBuyNowText()
     * @uses BMUpdateButtonRequestType::setSubscribeText()
     * @uses BMUpdateButtonRequestType::setButtonCountry()
     * @uses BMUpdateButtonRequestType::setButtonLanguage()
     * @param string $hostedButtonID
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
    public function __construct($hostedButtonID = null, $buttonType = null, $buttonCode = null, $buttonSubType = null, array $buttonVar = array(), array $optionDetails = array(), array $textBox = array(), $buttonImage = null, $buttonImageURL = null, $buyNowText = null, $subscribeText = null, $buttonCountry = null, $buttonLanguage = null)
    {
        $this
            ->setHostedButtonID($hostedButtonID)
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonType($buttonType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonTypeType::valueIsValid($buttonType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ButtonTypeType', is_array($buttonType) ? implode(', ', $buttonType) : var_export($buttonType, true), implode(', ', \PayPal\EnumType\ButtonTypeType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonCode($buttonCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonCodeType::valueIsValid($buttonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ButtonCodeType', is_array($buttonCode) ? implode(', ', $buttonCode) : var_export($buttonCode, true), implode(', ', \PayPal\EnumType\ButtonCodeType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonSubType($buttonSubType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonSubTypeType::valueIsValid($buttonSubType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ButtonSubTypeType', is_array($buttonSubType) ? implode(', ', $buttonSubType) : var_export($buttonSubType, true), implode(', ', \PayPal\EnumType\ButtonSubTypeType::getValidValues())), __LINE__);
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
     * This method is responsible for validating the values passed to the setButtonVar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setButtonVar method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateButtonVarForArrayConstraintsFromSetButtonVar(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bMUpdateButtonRequestTypeButtonVarItem) {
            // validation for constraint: itemType
            if (!is_string($bMUpdateButtonRequestTypeButtonVarItem)) {
                $invalidValues[] = is_object($bMUpdateButtonRequestTypeButtonVarItem) ? get_class($bMUpdateButtonRequestTypeButtonVarItem) : sprintf('%s(%s)', gettype($bMUpdateButtonRequestTypeButtonVarItem), var_export($bMUpdateButtonRequestTypeButtonVarItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ButtonVar property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ButtonVar value
     * @throws \InvalidArgumentException
     * @param string[] $buttonVar
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonVar(array $buttonVar = array())
    {
        // validation for constraint: array
        if ('' !== ($buttonVarArrayErrorMessage = self::validateButtonVarForArrayConstraintsFromSetButtonVar($buttonVar))) {
            throw new \InvalidArgumentException($buttonVarArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($buttonVar) && count($buttonVar) > 1000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($buttonVar)), __LINE__);
        }
        $this->ButtonVar = $buttonVar;
        return $this;
    }
    /**
     * Add item to ButtonVar value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function addToButtonVar($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ButtonVar property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->ButtonVar) && count($this->ButtonVar) >= 1000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->ButtonVar)), __LINE__);
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
     * This method is responsible for validating the values passed to the setOptionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionDetailsForArrayConstraintsFromSetOptionDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bMUpdateButtonRequestTypeOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$bMUpdateButtonRequestTypeOptionDetailsItem instanceof \PayPal\StructType\OptionDetailsType) {
                $invalidValues[] = is_object($bMUpdateButtonRequestTypeOptionDetailsItem) ? get_class($bMUpdateButtonRequestTypeOptionDetailsItem) : sprintf('%s(%s)', gettype($bMUpdateButtonRequestTypeOptionDetailsItem), var_export($bMUpdateButtonRequestTypeOptionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionDetails property can only contain items of type \PayPal\StructType\OptionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OptionDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionDetailsType[] $optionDetails
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setOptionDetails(array $optionDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($optionDetailsArrayErrorMessage = self::validateOptionDetailsForArrayConstraintsFromSetOptionDetails($optionDetails))) {
            throw new \InvalidArgumentException($optionDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($optionDetails) && count($optionDetails) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($optionDetails)), __LINE__);
        }
        $this->OptionDetails = $optionDetails;
        return $this;
    }
    /**
     * Add item to OptionDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OptionDetailsType $item
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function addToOptionDetails(\PayPal\StructType\OptionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\OptionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The OptionDetails property can only contain items of type \PayPal\StructType\OptionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->OptionDetails) && count($this->OptionDetails) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->OptionDetails)), __LINE__);
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
     * This method is responsible for validating the values passed to the setTextBox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTextBox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextBoxForArrayConstraintsFromSetTextBox(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bMUpdateButtonRequestTypeTextBoxItem) {
            // validation for constraint: itemType
            if (!is_string($bMUpdateButtonRequestTypeTextBoxItem)) {
                $invalidValues[] = is_object($bMUpdateButtonRequestTypeTextBoxItem) ? get_class($bMUpdateButtonRequestTypeTextBoxItem) : sprintf('%s(%s)', gettype($bMUpdateButtonRequestTypeTextBoxItem), var_export($bMUpdateButtonRequestTypeTextBoxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TextBox property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TextBox value
     * @throws \InvalidArgumentException
     * @param string[] $textBox
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setTextBox(array $textBox = array())
    {
        // validation for constraint: array
        if ('' !== ($textBoxArrayErrorMessage = self::validateTextBoxForArrayConstraintsFromSetTextBox($textBox))) {
            throw new \InvalidArgumentException($textBoxArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($textBox) && count($textBox) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($textBox)), __LINE__);
        }
        $this->TextBox = $textBox;
        return $this;
    }
    /**
     * Add item to TextBox value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function addToTextBox($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TextBox property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->TextBox) && count($this->TextBox) >= 2) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->TextBox)), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonImage($buttonImage = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ButtonImageType::valueIsValid($buttonImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ButtonImageType', is_array($buttonImage) ? implode(', ', $buttonImage) : var_export($buttonImage, true), implode(', ', \PayPal\EnumType\ButtonImageType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonImageURL($buttonImageURL = null)
    {
        // validation for constraint: string
        if (!is_null($buttonImageURL) && !is_string($buttonImageURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buttonImageURL, true), gettype($buttonImageURL)), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setBuyNowText($buyNowText = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BuyNowTextType::valueIsValid($buyNowText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BuyNowTextType', is_array($buyNowText) ? implode(', ', $buyNowText) : var_export($buyNowText, true), implode(', ', \PayPal\EnumType\BuyNowTextType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setSubscribeText($subscribeText = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SubscribeTextType::valueIsValid($subscribeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\SubscribeTextType', is_array($subscribeText) ? implode(', ', $subscribeText) : var_export($subscribeText, true), implode(', ', \PayPal\EnumType\SubscribeTextType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonCountry($buttonCountry = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CountryCodeType::valueIsValid($buttonCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CountryCodeType', is_array($buttonCountry) ? implode(', ', $buttonCountry) : var_export($buttonCountry, true), implode(', ', \PayPal\EnumType\CountryCodeType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\BMUpdateButtonRequestType
     */
    public function setButtonLanguage($buttonLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($buttonLanguage) && !is_string($buttonLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buttonLanguage, true), gettype($buttonLanguage)), __LINE__);
        }
        $this->ButtonLanguage = $buttonLanguage;
        return $this;
    }
}
