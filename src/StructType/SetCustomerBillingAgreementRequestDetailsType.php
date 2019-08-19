<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetCustomerBillingAgreementRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetCustomerBillingAgreementRequestDetailsType extends AbstractStructBase
{
    /**
     * The BillingAgreementDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BillingAgreementDetailsType
     */
    public $BillingAgreementDetails;
    /**
     * The ReturnURL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReturnURL;
    /**
     * The CancelURL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CancelURL;
    /**
     * The LocaleCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LocaleCode;
    /**
     * The PageStyle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PageStyle;
    /**
     * The cpp_header_image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_image;
    /**
     * The cpp_header_border_color
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_border_color;
    /**
     * The cpp_header_back_color
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_back_color;
    /**
     * The cpp_payflow_color
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cpp_payflow_color;
    /**
     * The BuyerEmail
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmail;
    /**
     * The ReqBillingAddress
     * Meta information extracted from the WSDL
     * - documentation: The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin. Optional Character length and limitations: One single-byte numeric character.
     * - minOccurs: 0
     * @var string
     */
    public $ReqBillingAddress;
    /**
     * Constructor method for SetCustomerBillingAgreementRequestDetailsType
     * @uses SetCustomerBillingAgreementRequestDetailsType::setBillingAgreementDetails()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setReturnURL()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setCancelURL()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setLocaleCode()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setPageStyle()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setCpp_header_image()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setCpp_header_border_color()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setCpp_header_back_color()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setCpp_payflow_color()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setBuyerEmail()
     * @uses SetCustomerBillingAgreementRequestDetailsType::setReqBillingAddress()
     * @param \PayPal\StructType\BillingAgreementDetailsType $billingAgreementDetails
     * @param string $returnURL
     * @param string $cancelURL
     * @param string $localeCode
     * @param string $pageStyle
     * @param string $cpp_header_image
     * @param string $cpp_header_border_color
     * @param string $cpp_header_back_color
     * @param string $cpp_payflow_color
     * @param string $buyerEmail
     * @param string $reqBillingAddress
     */
    public function __construct(\PayPal\StructType\BillingAgreementDetailsType $billingAgreementDetails = null, $returnURL = null, $cancelURL = null, $localeCode = null, $pageStyle = null, $cpp_header_image = null, $cpp_header_border_color = null, $cpp_header_back_color = null, $cpp_payflow_color = null, $buyerEmail = null, $reqBillingAddress = null)
    {
        $this
            ->setBillingAgreementDetails($billingAgreementDetails)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setLocaleCode($localeCode)
            ->setPageStyle($pageStyle)
            ->setCpp_header_image($cpp_header_image)
            ->setCpp_header_border_color($cpp_header_border_color)
            ->setCpp_header_back_color($cpp_header_back_color)
            ->setCpp_payflow_color($cpp_payflow_color)
            ->setBuyerEmail($buyerEmail)
            ->setReqBillingAddress($reqBillingAddress);
    }
    /**
     * Get BillingAgreementDetails value
     * @return \PayPal\StructType\BillingAgreementDetailsType
     */
    public function getBillingAgreementDetails()
    {
        return $this->BillingAgreementDetails;
    }
    /**
     * Set BillingAgreementDetails value
     * @param \PayPal\StructType\BillingAgreementDetailsType $billingAgreementDetails
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
     */
    public function setBillingAgreementDetails(\PayPal\StructType\BillingAgreementDetailsType $billingAgreementDetails = null)
    {
        $this->BillingAgreementDetails = $billingAgreementDetails;
        return $this;
    }
    /**
     * Get ReturnURL value
     * @return string
     */
    public function getReturnURL()
    {
        return $this->ReturnURL;
    }
    /**
     * Set ReturnURL value
     * @param string $returnURL
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return string
     */
    public function getCancelURL()
    {
        return $this->CancelURL;
    }
    /**
     * Set CancelURL value
     * @param string $cancelURL
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
     * Get BuyerEmail value
     * @return string|null
     */
    public function getBuyerEmail()
    {
        return $this->BuyerEmail;
    }
    /**
     * Set BuyerEmail value
     * @param string $buyerEmail
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
     */
    public function setBuyerEmail($buyerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmail) && !is_string($buyerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerEmail, true), gettype($buyerEmail)), __LINE__);
        }
        $this->BuyerEmail = $buyerEmail;
        return $this;
    }
    /**
     * Get ReqBillingAddress value
     * @return string|null
     */
    public function getReqBillingAddress()
    {
        return $this->ReqBillingAddress;
    }
    /**
     * Set ReqBillingAddress value
     * @param string $reqBillingAddress
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
     */
    public function setReqBillingAddress($reqBillingAddress = null)
    {
        // validation for constraint: string
        if (!is_null($reqBillingAddress) && !is_string($reqBillingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reqBillingAddress, true), gettype($reqBillingAddress)), __LINE__);
        }
        $this->ReqBillingAddress = $reqBillingAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetCustomerBillingAgreementRequestDetailsType
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
