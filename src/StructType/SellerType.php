<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about user used by selling applications there are number of required elements - they will always show up for seller node there is not such a call to do revise seller info. only added minoccur=0 to elements that will not
 * show up in every type of request/responce
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SellerType extends AbstractStructBase
{
    /**
     * The AllowPaymentEdit
     * @var bool
     */
    public $AllowPaymentEdit;
    /**
     * The BillingCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingCurrency;
    /**
     * The CheckoutEnabled
     * Meta informations extracted from the WSDL
     * - ref: ns:CheckoutEnabled
     * @var bool
     */
    public $CheckoutEnabled;
    /**
     * The CIPBankAccountStored
     * @var bool
     */
    public $CIPBankAccountStored;
    /**
     * The GoodStanding
     * @var bool
     */
    public $GoodStanding;
    /**
     * The LiveAuctionAuthorized
     * @var bool
     */
    public $LiveAuctionAuthorized;
    /**
     * The MerchandizingPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the user has elected to participate as a seller in the Merchandising Manager feature.
     * @var string
     */
    public $MerchandizingPref;
    /**
     * The QualifiesForB2BVAT
     * @var bool
     */
    public $QualifiesForB2BVAT;
    /**
     * The SellerLevel
     * Meta informations extracted from the WSDL
     * - ref: ns:SellerLevel
     * @var string
     */
    public $SellerLevel;
    /**
     * The SellerPaymentAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:SellerPaymentAddress
     * @var \PayPal\StructType\AddressType
     */
    public $SellerPaymentAddress;
    /**
     * The SchedulingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\SchedulingInfoType
     */
    public $SchedulingInfo;
    /**
     * The StoreOwner
     * Meta informations extracted from the WSDL
     * - ref: ns:StoreOwner
     * @var bool
     */
    public $StoreOwner;
    /**
     * The StoreURL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StoreURL;
    /**
     * Constructor method for SellerType
     * @uses SellerType::setAllowPaymentEdit()
     * @uses SellerType::setBillingCurrency()
     * @uses SellerType::setCheckoutEnabled()
     * @uses SellerType::setCIPBankAccountStored()
     * @uses SellerType::setGoodStanding()
     * @uses SellerType::setLiveAuctionAuthorized()
     * @uses SellerType::setMerchandizingPref()
     * @uses SellerType::setQualifiesForB2BVAT()
     * @uses SellerType::setSellerLevel()
     * @uses SellerType::setSellerPaymentAddress()
     * @uses SellerType::setSchedulingInfo()
     * @uses SellerType::setStoreOwner()
     * @uses SellerType::setStoreURL()
     * @param bool $allowPaymentEdit
     * @param string $billingCurrency
     * @param bool $checkoutEnabled
     * @param bool $cIPBankAccountStored
     * @param bool $goodStanding
     * @param bool $liveAuctionAuthorized
     * @param string $merchandizingPref
     * @param bool $qualifiesForB2BVAT
     * @param string $sellerLevel
     * @param \PayPal\StructType\AddressType $sellerPaymentAddress
     * @param \PayPal\StructType\SchedulingInfoType $schedulingInfo
     * @param bool $storeOwner
     * @param string $storeURL
     */
    public function __construct($allowPaymentEdit = null, $billingCurrency = null, $checkoutEnabled = null, $cIPBankAccountStored = null, $goodStanding = null, $liveAuctionAuthorized = null, $merchandizingPref = null, $qualifiesForB2BVAT = null, $sellerLevel = null, \PayPal\StructType\AddressType $sellerPaymentAddress = null, \PayPal\StructType\SchedulingInfoType $schedulingInfo = null, $storeOwner = null, $storeURL = null)
    {
        $this
            ->setAllowPaymentEdit($allowPaymentEdit)
            ->setBillingCurrency($billingCurrency)
            ->setCheckoutEnabled($checkoutEnabled)
            ->setCIPBankAccountStored($cIPBankAccountStored)
            ->setGoodStanding($goodStanding)
            ->setLiveAuctionAuthorized($liveAuctionAuthorized)
            ->setMerchandizingPref($merchandizingPref)
            ->setQualifiesForB2BVAT($qualifiesForB2BVAT)
            ->setSellerLevel($sellerLevel)
            ->setSellerPaymentAddress($sellerPaymentAddress)
            ->setSchedulingInfo($schedulingInfo)
            ->setStoreOwner($storeOwner)
            ->setStoreURL($storeURL);
    }
    /**
     * Get AllowPaymentEdit value
     * @return bool|null
     */
    public function getAllowPaymentEdit()
    {
        return $this->AllowPaymentEdit;
    }
    /**
     * Set AllowPaymentEdit value
     * @param bool $allowPaymentEdit
     * @return \PayPal\StructType\SellerType
     */
    public function setAllowPaymentEdit($allowPaymentEdit = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowPaymentEdit) && !is_bool($allowPaymentEdit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowPaymentEdit)), __LINE__);
        }
        $this->AllowPaymentEdit = $allowPaymentEdit;
        return $this;
    }
    /**
     * Get BillingCurrency value
     * @return string|null
     */
    public function getBillingCurrency()
    {
        return $this->BillingCurrency;
    }
    /**
     * Set BillingCurrency value
     * @uses \PayPal\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingCurrency
     * @return \PayPal\StructType\SellerType
     */
    public function setBillingCurrency($billingCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CurrencyCodeType::valueIsValid($billingCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $billingCurrency, implode(', ', \PayPal\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->BillingCurrency = $billingCurrency;
        return $this;
    }
    /**
     * Get CheckoutEnabled value
     * @return bool|null
     */
    public function getCheckoutEnabled()
    {
        return $this->CheckoutEnabled;
    }
    /**
     * Set CheckoutEnabled value
     * @param bool $checkoutEnabled
     * @return \PayPal\StructType\SellerType
     */
    public function setCheckoutEnabled($checkoutEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkoutEnabled) && !is_bool($checkoutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkoutEnabled)), __LINE__);
        }
        $this->CheckoutEnabled = $checkoutEnabled;
        return $this;
    }
    /**
     * Get CIPBankAccountStored value
     * @return bool|null
     */
    public function getCIPBankAccountStored()
    {
        return $this->CIPBankAccountStored;
    }
    /**
     * Set CIPBankAccountStored value
     * @param bool $cIPBankAccountStored
     * @return \PayPal\StructType\SellerType
     */
    public function setCIPBankAccountStored($cIPBankAccountStored = null)
    {
        // validation for constraint: boolean
        if (!is_null($cIPBankAccountStored) && !is_bool($cIPBankAccountStored)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cIPBankAccountStored)), __LINE__);
        }
        $this->CIPBankAccountStored = $cIPBankAccountStored;
        return $this;
    }
    /**
     * Get GoodStanding value
     * @return bool|null
     */
    public function getGoodStanding()
    {
        return $this->GoodStanding;
    }
    /**
     * Set GoodStanding value
     * @param bool $goodStanding
     * @return \PayPal\StructType\SellerType
     */
    public function setGoodStanding($goodStanding = null)
    {
        // validation for constraint: boolean
        if (!is_null($goodStanding) && !is_bool($goodStanding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($goodStanding)), __LINE__);
        }
        $this->GoodStanding = $goodStanding;
        return $this;
    }
    /**
     * Get LiveAuctionAuthorized value
     * @return bool|null
     */
    public function getLiveAuctionAuthorized()
    {
        return $this->LiveAuctionAuthorized;
    }
    /**
     * Set LiveAuctionAuthorized value
     * @param bool $liveAuctionAuthorized
     * @return \PayPal\StructType\SellerType
     */
    public function setLiveAuctionAuthorized($liveAuctionAuthorized = null)
    {
        // validation for constraint: boolean
        if (!is_null($liveAuctionAuthorized) && !is_bool($liveAuctionAuthorized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($liveAuctionAuthorized)), __LINE__);
        }
        $this->LiveAuctionAuthorized = $liveAuctionAuthorized;
        return $this;
    }
    /**
     * Get MerchandizingPref value
     * @return string|null
     */
    public function getMerchandizingPref()
    {
        return $this->MerchandizingPref;
    }
    /**
     * Set MerchandizingPref value
     * @uses \PayPal\EnumType\MerchandizingPrefCodeType::valueIsValid()
     * @uses \PayPal\EnumType\MerchandizingPrefCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $merchandizingPref
     * @return \PayPal\StructType\SellerType
     */
    public function setMerchandizingPref($merchandizingPref = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\MerchandizingPrefCodeType::valueIsValid($merchandizingPref)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $merchandizingPref, implode(', ', \PayPal\EnumType\MerchandizingPrefCodeType::getValidValues())), __LINE__);
        }
        $this->MerchandizingPref = $merchandizingPref;
        return $this;
    }
    /**
     * Get QualifiesForB2BVAT value
     * @return bool|null
     */
    public function getQualifiesForB2BVAT()
    {
        return $this->QualifiesForB2BVAT;
    }
    /**
     * Set QualifiesForB2BVAT value
     * @param bool $qualifiesForB2BVAT
     * @return \PayPal\StructType\SellerType
     */
    public function setQualifiesForB2BVAT($qualifiesForB2BVAT = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForB2BVAT) && !is_bool($qualifiesForB2BVAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiesForB2BVAT)), __LINE__);
        }
        $this->QualifiesForB2BVAT = $qualifiesForB2BVAT;
        return $this;
    }
    /**
     * Get SellerLevel value
     * @return string|null
     */
    public function getSellerLevel()
    {
        return $this->SellerLevel;
    }
    /**
     * Set SellerLevel value
     * @uses \PayPal\EnumType\SellerLevelCodeType::valueIsValid()
     * @uses \PayPal\EnumType\SellerLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerLevel
     * @return \PayPal\StructType\SellerType
     */
    public function setSellerLevel($sellerLevel = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SellerLevelCodeType::valueIsValid($sellerLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerLevel, implode(', ', \PayPal\EnumType\SellerLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SellerLevel = $sellerLevel;
        return $this;
    }
    /**
     * Get SellerPaymentAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getSellerPaymentAddress()
    {
        return $this->SellerPaymentAddress;
    }
    /**
     * Set SellerPaymentAddress value
     * @param \PayPal\StructType\AddressType $sellerPaymentAddress
     * @return \PayPal\StructType\SellerType
     */
    public function setSellerPaymentAddress(\PayPal\StructType\AddressType $sellerPaymentAddress = null)
    {
        $this->SellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }
    /**
     * Get SchedulingInfo value
     * @return \PayPal\StructType\SchedulingInfoType|null
     */
    public function getSchedulingInfo()
    {
        return $this->SchedulingInfo;
    }
    /**
     * Set SchedulingInfo value
     * @param \PayPal\StructType\SchedulingInfoType $schedulingInfo
     * @return \PayPal\StructType\SellerType
     */
    public function setSchedulingInfo(\PayPal\StructType\SchedulingInfoType $schedulingInfo = null)
    {
        $this->SchedulingInfo = $schedulingInfo;
        return $this;
    }
    /**
     * Get StoreOwner value
     * @return bool|null
     */
    public function getStoreOwner()
    {
        return $this->StoreOwner;
    }
    /**
     * Set StoreOwner value
     * @param bool $storeOwner
     * @return \PayPal\StructType\SellerType
     */
    public function setStoreOwner($storeOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($storeOwner) && !is_bool($storeOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($storeOwner)), __LINE__);
        }
        $this->StoreOwner = $storeOwner;
        return $this;
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL()
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \PayPal\StructType\SellerType
     */
    public function setStoreURL($storeURL = null)
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SellerType
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
