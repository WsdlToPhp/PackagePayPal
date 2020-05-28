<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnterBoardingRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EnterBoardingRequestDetailsType extends AbstractStructBase
{
    /**
     * The ProgramCode
     * Meta information extracted from the WSDL
     * - documentation: Onboarding program code given to you by PayPal. Required Character length and limitations: 64 alphanumeric characters
     * @var string
     */
    public $ProgramCode;
    /**
     * The ProductList
     * Meta information extracted from the WSDL
     * - documentation: A list of comma-separated values that indicate the PayPal products you are implementing for this merchant: Direct Payment (dp) allows payments by credit card without requiring the customer to have a PayPal account. Express Checkout
     * (ec) allows customers to fund transactions with their PayPal account. Authorization and Capture (auth_settle) allows merchants to verify availability of funds in a PayPal account, but capture them at a later time. Administrative APIs (admin_api) is a
     * collection of the PayPal APIs for transaction searching, getting transaction details, refunding, and mass payments. Required Character length and limitations: 64 alphanumeric characters
     * @var string
     */
    public $ProductList;
    /**
     * The PartnerCustom
     * Meta information extracted from the WSDL
     * - documentation: Any custom information you want to store for this partner Optional Character length and limitations: 256 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $PartnerCustom;
    /**
     * The ImageUrl
     * Meta information extracted from the WSDL
     * - documentation: The URL for the logo displayed on the PayPal Partner Welcome Page. Optional Character length and limitations: 2,048 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ImageUrl;
    /**
     * The MarketingCategory
     * Meta information extracted from the WSDL
     * - documentation: Marketing category tha configures the graphic displayed n the PayPal Partner Welcome page.
     * - minOccurs: 0
     * @var string
     */
    public $MarketingCategory;
    /**
     * The BusinessInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the merchantâs business
     * - minOccurs: 0
     * @var \PayPal\StructType\BusinessInfoType
     */
    public $BusinessInfo;
    /**
     * The OwnerInfo
     * Meta information extracted from the WSDL
     * - documentation: Information about the merchant (the business owner)
     * - minOccurs: 0
     * @var \PayPal\StructType\BusinessOwnerInfoType
     */
    public $OwnerInfo;
    /**
     * The BankAccount
     * Meta information extracted from the WSDL
     * - documentation: Information about the merchant's bank account
     * - minOccurs: 0
     * @var \PayPal\StructType\BankAccountDetailsType
     */
    public $BankAccount;
    /**
     * Constructor method for EnterBoardingRequestDetailsType
     * @uses EnterBoardingRequestDetailsType::setProgramCode()
     * @uses EnterBoardingRequestDetailsType::setProductList()
     * @uses EnterBoardingRequestDetailsType::setPartnerCustom()
     * @uses EnterBoardingRequestDetailsType::setImageUrl()
     * @uses EnterBoardingRequestDetailsType::setMarketingCategory()
     * @uses EnterBoardingRequestDetailsType::setBusinessInfo()
     * @uses EnterBoardingRequestDetailsType::setOwnerInfo()
     * @uses EnterBoardingRequestDetailsType::setBankAccount()
     * @param string $programCode
     * @param string $productList
     * @param string $partnerCustom
     * @param string $imageUrl
     * @param string $marketingCategory
     * @param \PayPal\StructType\BusinessInfoType $businessInfo
     * @param \PayPal\StructType\BusinessOwnerInfoType $ownerInfo
     * @param \PayPal\StructType\BankAccountDetailsType $bankAccount
     */
    public function __construct($programCode = null, $productList = null, $partnerCustom = null, $imageUrl = null, $marketingCategory = null, \PayPal\StructType\BusinessInfoType $businessInfo = null, \PayPal\StructType\BusinessOwnerInfoType $ownerInfo = null, \PayPal\StructType\BankAccountDetailsType $bankAccount = null)
    {
        $this
            ->setProgramCode($programCode)
            ->setProductList($productList)
            ->setPartnerCustom($partnerCustom)
            ->setImageUrl($imageUrl)
            ->setMarketingCategory($marketingCategory)
            ->setBusinessInfo($businessInfo)
            ->setOwnerInfo($ownerInfo)
            ->setBankAccount($bankAccount);
    }
    /**
     * Get ProgramCode value
     * @return string|null
     */
    public function getProgramCode()
    {
        return $this->ProgramCode;
    }
    /**
     * Set ProgramCode value
     * @param string $programCode
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setProgramCode($programCode = null)
    {
        // validation for constraint: string
        if (!is_null($programCode) && !is_string($programCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programCode, true), gettype($programCode)), __LINE__);
        }
        $this->ProgramCode = $programCode;
        return $this;
    }
    /**
     * Get ProductList value
     * @return string|null
     */
    public function getProductList()
    {
        return $this->ProductList;
    }
    /**
     * Set ProductList value
     * @param string $productList
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setProductList($productList = null)
    {
        // validation for constraint: string
        if (!is_null($productList) && !is_string($productList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productList, true), gettype($productList)), __LINE__);
        }
        $this->ProductList = $productList;
        return $this;
    }
    /**
     * Get PartnerCustom value
     * @return string|null
     */
    public function getPartnerCustom()
    {
        return $this->PartnerCustom;
    }
    /**
     * Set PartnerCustom value
     * @param string $partnerCustom
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setPartnerCustom($partnerCustom = null)
    {
        // validation for constraint: string
        if (!is_null($partnerCustom) && !is_string($partnerCustom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCustom, true), gettype($partnerCustom)), __LINE__);
        }
        $this->PartnerCustom = $partnerCustom;
        return $this;
    }
    /**
     * Get ImageUrl value
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }
    /**
     * Set ImageUrl value
     * @param string $imageUrl
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setImageUrl($imageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($imageUrl) && !is_string($imageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageUrl, true), gettype($imageUrl)), __LINE__);
        }
        $this->ImageUrl = $imageUrl;
        return $this;
    }
    /**
     * Get MarketingCategory value
     * @return string|null
     */
    public function getMarketingCategory()
    {
        return $this->MarketingCategory;
    }
    /**
     * Set MarketingCategory value
     * @uses \PayPal\EnumType\MarketingCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\MarketingCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $marketingCategory
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setMarketingCategory($marketingCategory = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MarketingCategoryType::valueIsValid($marketingCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\MarketingCategoryType', is_array($marketingCategory) ? implode(', ', $marketingCategory) : var_export($marketingCategory, true), implode(', ', \PayPal\EnumType\MarketingCategoryType::getValidValues())), __LINE__);
        }
        $this->MarketingCategory = $marketingCategory;
        return $this;
    }
    /**
     * Get BusinessInfo value
     * @return \PayPal\StructType\BusinessInfoType|null
     */
    public function getBusinessInfo()
    {
        return $this->BusinessInfo;
    }
    /**
     * Set BusinessInfo value
     * @param \PayPal\StructType\BusinessInfoType $businessInfo
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setBusinessInfo(\PayPal\StructType\BusinessInfoType $businessInfo = null)
    {
        $this->BusinessInfo = $businessInfo;
        return $this;
    }
    /**
     * Get OwnerInfo value
     * @return \PayPal\StructType\BusinessOwnerInfoType|null
     */
    public function getOwnerInfo()
    {
        return $this->OwnerInfo;
    }
    /**
     * Set OwnerInfo value
     * @param \PayPal\StructType\BusinessOwnerInfoType $ownerInfo
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setOwnerInfo(\PayPal\StructType\BusinessOwnerInfoType $ownerInfo = null)
    {
        $this->OwnerInfo = $ownerInfo;
        return $this;
    }
    /**
     * Get BankAccount value
     * @return \PayPal\StructType\BankAccountDetailsType|null
     */
    public function getBankAccount()
    {
        return $this->BankAccount;
    }
    /**
     * Set BankAccount value
     * @param \PayPal\StructType\BankAccountDetailsType $bankAccount
     * @return \PayPal\StructType\EnterBoardingRequestDetailsType
     */
    public function setBankAccount(\PayPal\StructType\BankAccountDetailsType $bankAccount = null)
    {
        $this->BankAccount = $bankAccount;
        return $this;
    }
}
