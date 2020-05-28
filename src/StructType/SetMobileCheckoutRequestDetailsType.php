<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMobileCheckoutRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetMobileCheckoutRequestDetailsType extends AbstractStructBase
{
    /**
     * The ItemAmount
     * Meta information extracted from the WSDL
     * - documentation: Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Required
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemAmount;
    /**
     * The ItemName
     * Meta information extracted from the WSDL
     * - documentation: Description of the item that the customer is purchasing. Required Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 1
     * @var string
     */
    public $ItemName;
    /**
     * The ReturnURL
     * Meta information extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Required Character length
     * and limitations: no limit.
     * - minOccurs: 1
     * @var string
     */
    public $ReturnURL;
    /**
     * The BuyerPhone
     * Meta information extracted from the WSDL
     * - documentation: The phone number of the buyer's mobile device, if available. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\PhoneNumberType
     */
    public $BuyerPhone;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: Tax amount for this item.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Tax;
    /**
     * The Shipping
     * Meta information extracted from the WSDL
     * - documentation: Shipping amount for this item.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Shipping;
    /**
     * The ItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Reference number of the item that the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN. Optional Character length and limitations: 256 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The CancelURL
     * Meta information extracted from the WSDL
     * - documentation: URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Optional Character length
     * and limitations: no limit
     * - minOccurs: 0
     * @var string
     */
    public $CancelURL;
    /**
     * The AddressDisplayOptions
     * Meta information extracted from the WSDL
     * - documentation: The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Setting this element overrides the setting you have specified in your Merchant Account Profile. Optional
     * - minOccurs: 0
     * @var int
     */
    public $AddressDisplayOptions;
    /**
     * The SharePhone
     * Meta information extracted from the WSDL
     * - documentation: The value 1 indicates that you require that the customer specifies a contact phone for the transactxion. Default is 0 / none required. Optional
     * - minOccurs: 0
     * @var int
     */
    public $SharePhone;
    /**
     * The ShipToAddress
     * Meta information extracted from the WSDL
     * - documentation: Customer's shipping address. Optional
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $ShipToAddress;
    /**
     * The BuyerEmail
     * Meta information extracted from the WSDL
     * - documentation: Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the login portion of the PayPal login page. Optional Character length and limit: 127 single-byte alphanumeric characters
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmail;
    /**
     * Constructor method for SetMobileCheckoutRequestDetailsType
     * @uses SetMobileCheckoutRequestDetailsType::setItemAmount()
     * @uses SetMobileCheckoutRequestDetailsType::setItemName()
     * @uses SetMobileCheckoutRequestDetailsType::setReturnURL()
     * @uses SetMobileCheckoutRequestDetailsType::setBuyerPhone()
     * @uses SetMobileCheckoutRequestDetailsType::setTax()
     * @uses SetMobileCheckoutRequestDetailsType::setShipping()
     * @uses SetMobileCheckoutRequestDetailsType::setItemNumber()
     * @uses SetMobileCheckoutRequestDetailsType::setCustom()
     * @uses SetMobileCheckoutRequestDetailsType::setInvoiceID()
     * @uses SetMobileCheckoutRequestDetailsType::setCancelURL()
     * @uses SetMobileCheckoutRequestDetailsType::setAddressDisplayOptions()
     * @uses SetMobileCheckoutRequestDetailsType::setSharePhone()
     * @uses SetMobileCheckoutRequestDetailsType::setShipToAddress()
     * @uses SetMobileCheckoutRequestDetailsType::setBuyerEmail()
     * @param \PayPal\StructType\BasicAmountType $itemAmount
     * @param string $itemName
     * @param string $returnURL
     * @param \PayPal\StructType\PhoneNumberType $buyerPhone
     * @param \PayPal\StructType\BasicAmountType $tax
     * @param \PayPal\StructType\BasicAmountType $shipping
     * @param string $itemNumber
     * @param string $custom
     * @param string $invoiceID
     * @param string $cancelURL
     * @param int $addressDisplayOptions
     * @param int $sharePhone
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @param string $buyerEmail
     */
    public function __construct(\PayPal\StructType\BasicAmountType $itemAmount = null, $itemName = null, $returnURL = null, \PayPal\StructType\PhoneNumberType $buyerPhone = null, \PayPal\StructType\BasicAmountType $tax = null, \PayPal\StructType\BasicAmountType $shipping = null, $itemNumber = null, $custom = null, $invoiceID = null, $cancelURL = null, $addressDisplayOptions = null, $sharePhone = null, \PayPal\StructType\AddressType $shipToAddress = null, $buyerEmail = null)
    {
        $this
            ->setItemAmount($itemAmount)
            ->setItemName($itemName)
            ->setReturnURL($returnURL)
            ->setBuyerPhone($buyerPhone)
            ->setTax($tax)
            ->setShipping($shipping)
            ->setItemNumber($itemNumber)
            ->setCustom($custom)
            ->setInvoiceID($invoiceID)
            ->setCancelURL($cancelURL)
            ->setAddressDisplayOptions($addressDisplayOptions)
            ->setSharePhone($sharePhone)
            ->setShipToAddress($shipToAddress)
            ->setBuyerEmail($buyerEmail);
    }
    /**
     * Get ItemAmount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getItemAmount()
    {
        return $this->ItemAmount;
    }
    /**
     * Set ItemAmount value
     * @param \PayPal\StructType\BasicAmountType $itemAmount
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setItemAmount(\PayPal\StructType\BasicAmountType $itemAmount = null)
    {
        $this->ItemAmount = $itemAmount;
        return $this;
    }
    /**
     * Get ItemName value
     * @return string
     */
    public function getItemName()
    {
        return $this->ItemName;
    }
    /**
     * Set ItemName value
     * @param string $itemName
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setItemName($itemName = null)
    {
        // validation for constraint: string
        if (!is_null($itemName) && !is_string($itemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemName, true), gettype($itemName)), __LINE__);
        }
        $this->ItemName = $itemName;
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
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
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
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setBuyerPhone(\PayPal\StructType\PhoneNumberType $buyerPhone = null)
    {
        $this->BuyerPhone = $buyerPhone;
        return $this;
    }
    /**
     * Get Tax value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \PayPal\StructType\BasicAmountType $tax
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setTax(\PayPal\StructType\BasicAmountType $tax = null)
    {
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Get Shipping value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShipping()
    {
        return $this->Shipping;
    }
    /**
     * Set Shipping value
     * @param \PayPal\StructType\BasicAmountType $shipping
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setShipping(\PayPal\StructType\BasicAmountType $shipping = null)
    {
        $this->Shipping = $shipping;
        return $this;
    }
    /**
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemNumber, true), gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get InvoiceID value
     * @return string|null
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }
    /**
     * Set InvoiceID value
     * @param string $invoiceID
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setInvoiceID($invoiceID = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceID, true), gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
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
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
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
     * Get AddressDisplayOptions value
     * @return int|null
     */
    public function getAddressDisplayOptions()
    {
        return $this->AddressDisplayOptions;
    }
    /**
     * Set AddressDisplayOptions value
     * @param int $addressDisplayOptions
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setAddressDisplayOptions($addressDisplayOptions = null)
    {
        // validation for constraint: int
        if (!is_null($addressDisplayOptions) && !(is_int($addressDisplayOptions) || ctype_digit($addressDisplayOptions))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressDisplayOptions, true), gettype($addressDisplayOptions)), __LINE__);
        }
        $this->AddressDisplayOptions = $addressDisplayOptions;
        return $this;
    }
    /**
     * Get SharePhone value
     * @return int|null
     */
    public function getSharePhone()
    {
        return $this->SharePhone;
    }
    /**
     * Set SharePhone value
     * @param int $sharePhone
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setSharePhone($sharePhone = null)
    {
        // validation for constraint: int
        if (!is_null($sharePhone) && !(is_int($sharePhone) || ctype_digit($sharePhone))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sharePhone, true), gettype($sharePhone)), __LINE__);
        }
        $this->SharePhone = $sharePhone;
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function setShipToAddress(\PayPal\StructType\AddressType $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
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
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
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
}
