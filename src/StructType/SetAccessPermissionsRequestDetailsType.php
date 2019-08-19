<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAccessPermissionsRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetAccessPermissionsRequestDetailsType extends AbstractStructBase
{
    /**
     * The ReturnURL
     * Meta information extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after choosing to login with PayPal. Required Character length and limitations: no limit.
     * @var string
     */
    public $ReturnURL;
    /**
     * The CancelURL
     * Meta information extracted from the WSDL
     * - documentation: URL to which the customer is returned if he does not approve the use of PayPal login. Required Character length and limitations: no limit
     * @var string
     */
    public $CancelURL;
    /**
     * The LogoutURL
     * Meta information extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after user logs out from PayPal. Required Character length and limitations: no limit.
     * @var string
     */
    public $LogoutURL;
    /**
     * The InitFlowType
     * Meta information extracted from the WSDL
     * - documentation: The type of the flow. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InitFlowType;
    /**
     * The SkipLoginPage
     * Meta information extracted from the WSDL
     * - documentation: The used to decide SkipLogin allowed or not. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $SkipLoginPage;
    /**
     * The RequiredAccessPermissions
     * Meta information extracted from the WSDL
     * - documentation: contains information about API Services
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequiredAccessPermissions;
    /**
     * The OptionalAccessPermissions
     * Meta information extracted from the WSDL
     * - documentation: contains information about API Services
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $OptionalAccessPermissions;
    /**
     * The LocaleCode
     * Meta information extracted from the WSDL
     * - documentation: Locale of pages displayed by PayPal during Authentication Login. Optional Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. Allowable values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT
     * or it_ITJP or ja_JPUS or en_US
     * - minOccurs: 0
     * @var string
     */
    public $LocaleCode;
    /**
     * The PageStyle
     * Meta information extracted from the WSDL
     * - documentation: Sets the Custom Payment Page Style for flow pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing flow pages. The value is the same as the Page Style Name you chose when adding
     * or editing the page style from the Profile subtab of the My Account tab of your PayPal account. Optional Character length and limitations: 30 single-byte alphabetic characters.
     * - minOccurs: 0
     * @var string
     */
    public $PageStyle;
    /**
     * The cpp_header_image
     * Meta information extracted from the WSDL
     * - documentation: A URL for the image you want to appear at the top left of the flow page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server.
     * Optional Character length and limitations: 127
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_image;
    /**
     * The cpp_header_border_color
     * Meta information extracted from the WSDL
     * - documentation: Sets the border color around the header of the flow page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. Optional Character length and limitations: Six character HTML
     * hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_border_color;
    /**
     * The cpp_header_back_color
     * Meta information extracted from the WSDL
     * - documentation: Sets the background color for the header of the flow page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_back_color;
    /**
     * The cpp_payflow_color
     * Meta information extracted from the WSDL
     * - documentation: Sets the background color for the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_payflow_color;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - documentation: First Name of the user, this information is used if user chooses to signup with PayPal. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - documentation: Last Name of the user, this information is used if user chooses to signup with PayPal. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: User address, this information is used when user chooses to signup for PayPal. Optional If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in
     * GetExpressCheckoutDetailsResponse.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $Address;
    /**
     * Constructor method for SetAccessPermissionsRequestDetailsType
     * @uses SetAccessPermissionsRequestDetailsType::setReturnURL()
     * @uses SetAccessPermissionsRequestDetailsType::setCancelURL()
     * @uses SetAccessPermissionsRequestDetailsType::setLogoutURL()
     * @uses SetAccessPermissionsRequestDetailsType::setInitFlowType()
     * @uses SetAccessPermissionsRequestDetailsType::setSkipLoginPage()
     * @uses SetAccessPermissionsRequestDetailsType::setRequiredAccessPermissions()
     * @uses SetAccessPermissionsRequestDetailsType::setOptionalAccessPermissions()
     * @uses SetAccessPermissionsRequestDetailsType::setLocaleCode()
     * @uses SetAccessPermissionsRequestDetailsType::setPageStyle()
     * @uses SetAccessPermissionsRequestDetailsType::setCpp_header_image()
     * @uses SetAccessPermissionsRequestDetailsType::setCpp_header_border_color()
     * @uses SetAccessPermissionsRequestDetailsType::setCpp_header_back_color()
     * @uses SetAccessPermissionsRequestDetailsType::setCpp_payflow_color()
     * @uses SetAccessPermissionsRequestDetailsType::setFirstName()
     * @uses SetAccessPermissionsRequestDetailsType::setLastName()
     * @uses SetAccessPermissionsRequestDetailsType::setAddress()
     * @param string $returnURL
     * @param string $cancelURL
     * @param string $logoutURL
     * @param string $initFlowType
     * @param string $skipLoginPage
     * @param string[] $requiredAccessPermissions
     * @param string[] $optionalAccessPermissions
     * @param string $localeCode
     * @param string $pageStyle
     * @param string $cpp_header_image
     * @param string $cpp_header_border_color
     * @param string $cpp_header_back_color
     * @param string $cpp_payflow_color
     * @param string $firstName
     * @param string $lastName
     * @param \PayPal\StructType\AddressType $address
     */
    public function __construct($returnURL = null, $cancelURL = null, $logoutURL = null, $initFlowType = null, $skipLoginPage = null, array $requiredAccessPermissions = array(), array $optionalAccessPermissions = array(), $localeCode = null, $pageStyle = null, $cpp_header_image = null, $cpp_header_border_color = null, $cpp_header_back_color = null, $cpp_payflow_color = null, $firstName = null, $lastName = null, \PayPal\StructType\AddressType $address = null)
    {
        $this
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setLogoutURL($logoutURL)
            ->setInitFlowType($initFlowType)
            ->setSkipLoginPage($skipLoginPage)
            ->setRequiredAccessPermissions($requiredAccessPermissions)
            ->setOptionalAccessPermissions($optionalAccessPermissions)
            ->setLocaleCode($localeCode)
            ->setPageStyle($pageStyle)
            ->setCpp_header_image($cpp_header_image)
            ->setCpp_header_border_color($cpp_header_border_color)
            ->setCpp_header_back_color($cpp_header_back_color)
            ->setCpp_payflow_color($cpp_payflow_color)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setAddress($address);
    }
    /**
     * Get ReturnURL value
     * @return string|null
     */
    public function getReturnURL()
    {
        return $this->ReturnURL;
    }
    /**
     * Set ReturnURL value
     * @param string $returnURL
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setReturnURL($returnURL = null)
    {
        // validation for constraint: string
        if (!is_null($returnURL) && !is_string($returnURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnURL, true), gettype($returnURL)), __LINE__);
        }
        $this->ReturnURL = $returnURL;
        return $this;
    }
    /**
     * Get CancelURL value
     * @return string|null
     */
    public function getCancelURL()
    {
        return $this->CancelURL;
    }
    /**
     * Set CancelURL value
     * @param string $cancelURL
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setCancelURL($cancelURL = null)
    {
        // validation for constraint: string
        if (!is_null($cancelURL) && !is_string($cancelURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelURL, true), gettype($cancelURL)), __LINE__);
        }
        $this->CancelURL = $cancelURL;
        return $this;
    }
    /**
     * Get LogoutURL value
     * @return string|null
     */
    public function getLogoutURL()
    {
        return $this->LogoutURL;
    }
    /**
     * Set LogoutURL value
     * @param string $logoutURL
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setLogoutURL($logoutURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoutURL) && !is_string($logoutURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoutURL, true), gettype($logoutURL)), __LINE__);
        }
        $this->LogoutURL = $logoutURL;
        return $this;
    }
    /**
     * Get InitFlowType value
     * @return string|null
     */
    public function getInitFlowType()
    {
        return $this->InitFlowType;
    }
    /**
     * Set InitFlowType value
     * @param string $initFlowType
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setInitFlowType($initFlowType = null)
    {
        // validation for constraint: string
        if (!is_null($initFlowType) && !is_string($initFlowType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initFlowType, true), gettype($initFlowType)), __LINE__);
        }
        $this->InitFlowType = $initFlowType;
        return $this;
    }
    /**
     * Get SkipLoginPage value
     * @return string|null
     */
    public function getSkipLoginPage()
    {
        return $this->SkipLoginPage;
    }
    /**
     * Set SkipLoginPage value
     * @param string $skipLoginPage
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setSkipLoginPage($skipLoginPage = null)
    {
        // validation for constraint: string
        if (!is_null($skipLoginPage) && !is_string($skipLoginPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skipLoginPage, true), gettype($skipLoginPage)), __LINE__);
        }
        $this->SkipLoginPage = $skipLoginPage;
        return $this;
    }
    /**
     * Get RequiredAccessPermissions value
     * @return string[]|null
     */
    public function getRequiredAccessPermissions()
    {
        return $this->RequiredAccessPermissions;
    }
    /**
     * This method is responsible for validating the values passed to the setRequiredAccessPermissions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequiredAccessPermissions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequiredAccessPermissionsForArrayConstraintsFromSetRequiredAccessPermissions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setAccessPermissionsRequestDetailsTypeRequiredAccessPermissionsItem) {
            // validation for constraint: itemType
            if (!is_string($setAccessPermissionsRequestDetailsTypeRequiredAccessPermissionsItem)) {
                $invalidValues[] = is_object($setAccessPermissionsRequestDetailsTypeRequiredAccessPermissionsItem) ? get_class($setAccessPermissionsRequestDetailsTypeRequiredAccessPermissionsItem) : sprintf('%s(%s)', gettype($setAccessPermissionsRequestDetailsTypeRequiredAccessPermissionsItem), var_export($setAccessPermissionsRequestDetailsTypeRequiredAccessPermissionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RequiredAccessPermissions property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RequiredAccessPermissions value
     * @throws \InvalidArgumentException
     * @param string[] $requiredAccessPermissions
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setRequiredAccessPermissions(array $requiredAccessPermissions = array())
    {
        // validation for constraint: array
        if ('' !== ($requiredAccessPermissionsArrayErrorMessage = self::validateRequiredAccessPermissionsForArrayConstraintsFromSetRequiredAccessPermissions($requiredAccessPermissions))) {
            throw new \InvalidArgumentException($requiredAccessPermissionsArrayErrorMessage, __LINE__);
        }
        $this->RequiredAccessPermissions = $requiredAccessPermissions;
        return $this;
    }
    /**
     * Add item to RequiredAccessPermissions value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function addToRequiredAccessPermissions($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The RequiredAccessPermissions property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RequiredAccessPermissions[] = $item;
        return $this;
    }
    /**
     * Get OptionalAccessPermissions value
     * @return string[]|null
     */
    public function getOptionalAccessPermissions()
    {
        return $this->OptionalAccessPermissions;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionalAccessPermissions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalAccessPermissions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionalAccessPermissionsForArrayConstraintsFromSetOptionalAccessPermissions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setAccessPermissionsRequestDetailsTypeOptionalAccessPermissionsItem) {
            // validation for constraint: itemType
            if (!is_string($setAccessPermissionsRequestDetailsTypeOptionalAccessPermissionsItem)) {
                $invalidValues[] = is_object($setAccessPermissionsRequestDetailsTypeOptionalAccessPermissionsItem) ? get_class($setAccessPermissionsRequestDetailsTypeOptionalAccessPermissionsItem) : sprintf('%s(%s)', gettype($setAccessPermissionsRequestDetailsTypeOptionalAccessPermissionsItem), var_export($setAccessPermissionsRequestDetailsTypeOptionalAccessPermissionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionalAccessPermissions property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OptionalAccessPermissions value
     * @throws \InvalidArgumentException
     * @param string[] $optionalAccessPermissions
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setOptionalAccessPermissions(array $optionalAccessPermissions = array())
    {
        // validation for constraint: array
        if ('' !== ($optionalAccessPermissionsArrayErrorMessage = self::validateOptionalAccessPermissionsForArrayConstraintsFromSetOptionalAccessPermissions($optionalAccessPermissions))) {
            throw new \InvalidArgumentException($optionalAccessPermissionsArrayErrorMessage, __LINE__);
        }
        $this->OptionalAccessPermissions = $optionalAccessPermissions;
        return $this;
    }
    /**
     * Add item to OptionalAccessPermissions value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function addToOptionalAccessPermissions($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The OptionalAccessPermissions property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OptionalAccessPermissions[] = $item;
        return $this;
    }
    /**
     * Get LocaleCode value
     * @return string|null
     */
    public function getLocaleCode()
    {
        return $this->LocaleCode;
    }
    /**
     * Set LocaleCode value
     * @param string $localeCode
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setLocaleCode($localeCode = null)
    {
        // validation for constraint: string
        if (!is_null($localeCode) && !is_string($localeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localeCode, true), gettype($localeCode)), __LINE__);
        }
        $this->LocaleCode = $localeCode;
        return $this;
    }
    /**
     * Get PageStyle value
     * @return string|null
     */
    public function getPageStyle()
    {
        return $this->PageStyle;
    }
    /**
     * Set PageStyle value
     * @param string $pageStyle
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setPageStyle($pageStyle = null)
    {
        // validation for constraint: string
        if (!is_null($pageStyle) && !is_string($pageStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageStyle, true), gettype($pageStyle)), __LINE__);
        }
        $this->PageStyle = $pageStyle;
        return $this;
    }
    /**
     * Get cpp_header_image value
     * @return string|null
     */
    public function getCpp_header_image()
    {
        return $this->{'cpp-header-image'};
    }
    /**
     * Set cpp_header_image value
     * @param string $cpp_header_image
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setCpp_header_image($cpp_header_image = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_header_image) && !is_string($cpp_header_image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpp_header_image, true), gettype($cpp_header_image)), __LINE__);
        }
        $this->cpp_header_image = $this->{'cpp-header-image'} = $cpp_header_image;
        return $this;
    }
    /**
     * Get cpp_header_border_color value
     * @return string|null
     */
    public function getCpp_header_border_color()
    {
        return $this->{'cpp-header-border-color'};
    }
    /**
     * Set cpp_header_border_color value
     * @param string $cpp_header_border_color
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setCpp_header_border_color($cpp_header_border_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_header_border_color) && !is_string($cpp_header_border_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpp_header_border_color, true), gettype($cpp_header_border_color)), __LINE__);
        }
        $this->cpp_header_border_color = $this->{'cpp-header-border-color'} = $cpp_header_border_color;
        return $this;
    }
    /**
     * Get cpp_header_back_color value
     * @return string|null
     */
    public function getCpp_header_back_color()
    {
        return $this->{'cpp-header-back-color'};
    }
    /**
     * Set cpp_header_back_color value
     * @param string $cpp_header_back_color
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setCpp_header_back_color($cpp_header_back_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_header_back_color) && !is_string($cpp_header_back_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpp_header_back_color, true), gettype($cpp_header_back_color)), __LINE__);
        }
        $this->cpp_header_back_color = $this->{'cpp-header-back-color'} = $cpp_header_back_color;
        return $this;
    }
    /**
     * Get cpp_payflow_color value
     * @return string|null
     */
    public function getCpp_payflow_color()
    {
        return $this->{'cpp-payflow-color'};
    }
    /**
     * Set cpp_payflow_color value
     * @param string $cpp_payflow_color
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setCpp_payflow_color($cpp_payflow_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_payflow_color) && !is_string($cpp_payflow_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpp_payflow_color, true), gettype($cpp_payflow_color)), __LINE__);
        }
        $this->cpp_payflow_color = $this->{'cpp-payflow-color'} = $cpp_payflow_color;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get Address value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \PayPal\StructType\AddressType $address
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
     */
    public function setAddress(\PayPal\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetAccessPermissionsRequestDetailsType
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
