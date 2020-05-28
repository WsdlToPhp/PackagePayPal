<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about the seller.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SellerDetailsType extends AbstractStructBase
{
    /**
     * The SellerId
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the seller. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SellerId;
    /**
     * The SellerUserName
     * Meta information extracted from the WSDL
     * - documentation: The user name of the user at the marketplaces site. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SellerUserName;
    /**
     * The SellerRegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: Date when the user registered with the marketplace. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SellerRegistrationDate;
    /**
     * The PayPalAccountID
     * Meta information extracted from the WSDL
     * - documentation: Seller Paypal Account Id contains the seller EmailId or PayerId or PhoneNo passed during the Request.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PayPalAccountID;
    /**
     * The SecureMerchantAccountID
     * Meta information extracted from the WSDL
     * - documentation: Unique PayPal customer account identification number (of the seller). This feild is meant for Response. This field is ignored, if passed in the Request.
     * - base: xs:string
     * - maxLength: 127
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SecureMerchantAccountID;
    /**
     * Constructor method for SellerDetailsType
     * @uses SellerDetailsType::setSellerId()
     * @uses SellerDetailsType::setSellerUserName()
     * @uses SellerDetailsType::setSellerRegistrationDate()
     * @uses SellerDetailsType::setPayPalAccountID()
     * @uses SellerDetailsType::setSecureMerchantAccountID()
     * @param string $sellerId
     * @param string $sellerUserName
     * @param string $sellerRegistrationDate
     * @param string $payPalAccountID
     * @param string $secureMerchantAccountID
     */
    public function __construct($sellerId = null, $sellerUserName = null, $sellerRegistrationDate = null, $payPalAccountID = null, $secureMerchantAccountID = null)
    {
        $this
            ->setSellerId($sellerId)
            ->setSellerUserName($sellerUserName)
            ->setSellerRegistrationDate($sellerRegistrationDate)
            ->setPayPalAccountID($payPalAccountID)
            ->setSecureMerchantAccountID($secureMerchantAccountID);
    }
    /**
     * Get SellerId value
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->SellerId;
    }
    /**
     * Set SellerId value
     * @param string $sellerId
     * @return \PayPal\StructType\SellerDetailsType
     */
    public function setSellerId($sellerId = null)
    {
        // validation for constraint: string
        if (!is_null($sellerId) && !is_string($sellerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerId, true), gettype($sellerId)), __LINE__);
        }
        $this->SellerId = $sellerId;
        return $this;
    }
    /**
     * Get SellerUserName value
     * @return string|null
     */
    public function getSellerUserName()
    {
        return $this->SellerUserName;
    }
    /**
     * Set SellerUserName value
     * @param string $sellerUserName
     * @return \PayPal\StructType\SellerDetailsType
     */
    public function setSellerUserName($sellerUserName = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserName) && !is_string($sellerUserName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerUserName, true), gettype($sellerUserName)), __LINE__);
        }
        $this->SellerUserName = $sellerUserName;
        return $this;
    }
    /**
     * Get SellerRegistrationDate value
     * @return string|null
     */
    public function getSellerRegistrationDate()
    {
        return $this->SellerRegistrationDate;
    }
    /**
     * Set SellerRegistrationDate value
     * @param string $sellerRegistrationDate
     * @return \PayPal\StructType\SellerDetailsType
     */
    public function setSellerRegistrationDate($sellerRegistrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($sellerRegistrationDate) && !is_string($sellerRegistrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerRegistrationDate, true), gettype($sellerRegistrationDate)), __LINE__);
        }
        $this->SellerRegistrationDate = $sellerRegistrationDate;
        return $this;
    }
    /**
     * Get PayPalAccountID value
     * @return string|null
     */
    public function getPayPalAccountID()
    {
        return $this->PayPalAccountID;
    }
    /**
     * Set PayPalAccountID value
     * @param string $payPalAccountID
     * @return \PayPal\StructType\SellerDetailsType
     */
    public function setPayPalAccountID($payPalAccountID = null)
    {
        // validation for constraint: string
        if (!is_null($payPalAccountID) && !is_string($payPalAccountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalAccountID, true), gettype($payPalAccountID)), __LINE__);
        }
        $this->PayPalAccountID = $payPalAccountID;
        return $this;
    }
    /**
     * Get SecureMerchantAccountID value
     * @return string|null
     */
    public function getSecureMerchantAccountID()
    {
        return $this->SecureMerchantAccountID;
    }
    /**
     * Set SecureMerchantAccountID value
     * @param string $secureMerchantAccountID
     * @return \PayPal\StructType\SellerDetailsType
     */
    public function setSecureMerchantAccountID($secureMerchantAccountID = null)
    {
        // validation for constraint: string
        if (!is_null($secureMerchantAccountID) && !is_string($secureMerchantAccountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secureMerchantAccountID, true), gettype($secureMerchantAccountID)), __LINE__);
        }
        // validation for constraint: maxLength(127)
        if (!is_null($secureMerchantAccountID) && mb_strlen($secureMerchantAccountID) > 127) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 127', mb_strlen($secureMerchantAccountID)), __LINE__);
        }
        $this->SecureMerchantAccountID = $secureMerchantAccountID;
        return $this;
    }
}
