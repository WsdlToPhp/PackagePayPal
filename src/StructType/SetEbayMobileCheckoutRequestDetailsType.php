<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetEbayMobileCheckoutRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetEbayMobileCheckoutRequestDetailsType extends AbstractStructBase
{
    /**
     * The CheckoutType
     * Meta informations extracted from the WSDL
     * - documentation: The value 'Auction' indicates that user is coming to checkout after an auction ended. A value of 'BuyItNow' indicates if the user is coming to checkout by clicking on the 'buy it now' button in a chinese auction. A value of
     * 'FixedPriceItem' indicates that user clicked on 'Buy it now' on a fixed price item. A value of Autopay indicates autopay (or immediate pay) which is not supported at the moment. Required
     * - minOccurs: 1
     * @var string
     */
    public $CheckoutType;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - documentation: An item number assigned to the item in eBay database. Required Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 1
     * @var string
     */
    public $ItemId;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - documentation: An Transaction id assigned to the item in eBay database. In case of Chinese auction Item Id itself indicates Transaction Id. Transaction Id in this case is Zero. Required Character length and limitations: 127 single-byte alphanumeric
     * characters
     * - minOccurs: 1
     * @var string
     */
    public $TransactionId;
    /**
     * The SiteId
     * Meta informations extracted from the WSDL
     * - documentation: An id indicating the site on which the item was listed. Required Character length and limitations: 2 alphanumeric characters
     * - minOccurs: 1
     * @var string
     */
    public $SiteId;
    /**
     * The BuyerId
     * Meta informations extracted from the WSDL
     * - documentation: Buyers ebay Id. Required Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 1
     * @var string
     */
    public $BuyerId;
    /**
     * The ClientType
     * Meta informations extracted from the WSDL
     * - documentation: Indicating the client type. Weather it is WAP or J2ME. A value of 'WAP' indicates WAP. A value of 'J2MEClient' indicates J2ME client. Required
     * - minOccurs: 1
     * @var string
     */
    public $ClientType;
    /**
     * The BuyerPhone
     * Meta informations extracted from the WSDL
     * - documentation: The phone number of the buyer's mobile device, if available. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\PhoneNumberType
     */
    public $BuyerPhone;
    /**
     * The ReturnURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Optional Character length
     * and limitations: no limit.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnURL;
    /**
     * The CancelURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Optional Character length
     * and limitations: no limit
     * - minOccurs: 0
     * @var string
     */
    public $CancelURL;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specify quantity in case it is an immediate pay (or autopay) item. Optional
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The ItemAmount
     * Meta informations extracted from the WSDL
     * - documentation: Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.Used only for autopay items. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemAmount;
    /**
     * Constructor method for SetEbayMobileCheckoutRequestDetailsType
     * @uses SetEbayMobileCheckoutRequestDetailsType::setCheckoutType()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setItemId()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setTransactionId()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setSiteId()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setBuyerId()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setClientType()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setBuyerPhone()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setReturnURL()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setCancelURL()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setQuantity()
     * @uses SetEbayMobileCheckoutRequestDetailsType::setItemAmount()
     * @param string $checkoutType
     * @param string $itemId
     * @param string $transactionId
     * @param string $siteId
     * @param string $buyerId
     * @param string $clientType
     * @param \PayPal\StructType\PhoneNumberType $buyerPhone
     * @param string $returnURL
     * @param string $cancelURL
     * @param int $quantity
     * @param \PayPal\StructType\BasicAmountType $itemAmount
     */
    public function __construct($checkoutType = null, $itemId = null, $transactionId = null, $siteId = null, $buyerId = null, $clientType = null, \PayPal\StructType\PhoneNumberType $buyerPhone = null, $returnURL = null, $cancelURL = null, $quantity = null, \PayPal\StructType\BasicAmountType $itemAmount = null)
    {
        $this
            ->setCheckoutType($checkoutType)
            ->setItemId($itemId)
            ->setTransactionId($transactionId)
            ->setSiteId($siteId)
            ->setBuyerId($buyerId)
            ->setClientType($clientType)
            ->setBuyerPhone($buyerPhone)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setQuantity($quantity)
            ->setItemAmount($itemAmount);
    }
    /**
     * Get CheckoutType value
     * @return string
     */
    public function getCheckoutType()
    {
        return $this->CheckoutType;
    }
    /**
     * Set CheckoutType value
     * @uses \PayPal\EnumType\EbayCheckoutType::valueIsValid()
     * @uses \PayPal\EnumType\EbayCheckoutType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkoutType
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setCheckoutType($checkoutType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\EbayCheckoutType::valueIsValid($checkoutType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkoutType, implode(', ', \PayPal\EnumType\EbayCheckoutType::getValidValues())), __LINE__);
        }
        $this->CheckoutType = $checkoutType;
        return $this;
    }
    /**
     * Get ItemId value
     * @return string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Get SiteId value
     * @return string
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }
    /**
     * Set SiteId value
     * @param string $siteId
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setSiteId($siteId = null)
    {
        // validation for constraint: string
        if (!is_null($siteId) && !is_string($siteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteId)), __LINE__);
        }
        $this->SiteId = $siteId;
        return $this;
    }
    /**
     * Get BuyerId value
     * @return string
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }
    /**
     * Set BuyerId value
     * @param string $buyerId
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setBuyerId($buyerId = null)
    {
        // validation for constraint: string
        if (!is_null($buyerId) && !is_string($buyerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerId)), __LINE__);
        }
        $this->BuyerId = $buyerId;
        return $this;
    }
    /**
     * Get ClientType value
     * @return string
     */
    public function getClientType()
    {
        return $this->ClientType;
    }
    /**
     * Set ClientType value
     * @uses \PayPal\EnumType\DyneticClientType::valueIsValid()
     * @uses \PayPal\EnumType\DyneticClientType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $clientType
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setClientType($clientType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\DyneticClientType::valueIsValid($clientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clientType, implode(', ', \PayPal\EnumType\DyneticClientType::getValidValues())), __LINE__);
        }
        $this->ClientType = $clientType;
        return $this;
    }
    /**
     * Get BuyerPhone value
     * @return \PayPal\StructType\PhoneNumberType|null
     */
    public function getBuyerPhone()
    {
        return $this->BuyerPhone;
    }
    /**
     * Set BuyerPhone value
     * @param \PayPal\StructType\PhoneNumberType $buyerPhone
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setBuyerPhone(\PayPal\StructType\PhoneNumberType $buyerPhone = null)
    {
        $this->BuyerPhone = $buyerPhone;
        return $this;
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
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setReturnURL($returnURL = null)
    {
        // validation for constraint: string
        if (!is_null($returnURL) && !is_string($returnURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnURL)), __LINE__);
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
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setCancelURL($cancelURL = null)
    {
        // validation for constraint: string
        if (!is_null($cancelURL) && !is_string($cancelURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelURL)), __LINE__);
        }
        $this->CancelURL = $cancelURL;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get ItemAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getItemAmount()
    {
        return $this->ItemAmount;
    }
    /**
     * Set ItemAmount value
     * @param \PayPal\StructType\BasicAmountType $itemAmount
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
     */
    public function setItemAmount(\PayPal\StructType\BasicAmountType $itemAmount = null)
    {
        $this->ItemAmount = $itemAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetEbayMobileCheckoutRequestDetailsType
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
