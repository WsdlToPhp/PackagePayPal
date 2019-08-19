<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: PaymentDetailsType Information about a payment. Used by DCC and Express Checkout.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentDetailsType extends AbstractStructBase
{
    /**
     * The OrderTotal
     * Meta information extracted from the WSDL
     * - documentation: Total of order, including shipping, handling, and tax. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any
     * currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $OrderTotal;
    /**
     * The ItemTotal
     * Meta information extracted from the WSDL
     * - documentation: Sum of cost of all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemTotal;
    /**
     * The ShippingTotal
     * Meta information extracted from the WSDL
     * - documentation: Total shipping costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingTotal;
    /**
     * The HandlingTotal
     * Meta information extracted from the WSDL
     * - documentation: Total handling costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $HandlingTotal;
    /**
     * The TaxTotal
     * Meta information extracted from the WSDL
     * - documentation: Sum of tax for all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency.
     * No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxTotal;
    /**
     * The OrderDescription
     * Meta information extracted from the WSDL
     * - documentation: Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $OrderDescription;
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: A free-form field for your own use. Optional Character length and limitations: 256 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Your own invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The ButtonSource
     * Meta information extracted from the WSDL
     * - documentation: An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $ButtonSource;
    /**
     * The NotifyURL
     * Meta information extracted from the WSDL
     * - documentation: Your URL for receiving Instant Payment Notification (IPN) about this transaction. Optional If you do not specify NotifyURL in the request, the notification URL from your Merchant Profile is used, if one exists. Character length and
     * limitations: 2,048 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $NotifyURL;
    /**
     * The ShipToAddress
     * Meta information extracted from the WSDL
     * - documentation: Address the order will be shipped to. Optional If you include the ShipToAddress element, the AddressType elements are required: Name Street1 CityName CountryCode Do not set set the CountryName element.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $ShipToAddress;
    /**
     * The MultiShipping
     * Meta information extracted from the WSDL
     * - documentation: The value 1 indicates that this payment is associated with multiple shipping addresses. Optional Character length and limitations: Four single-byte numeric characters.
     * - minOccurs: 0
     * @var string
     */
    public $MultiShipping;
    /**
     * The FulfillmentReferenceNumber
     * Meta information extracted from the WSDL
     * - documentation: Thirdparty Fulfillment Reference Number. Optional Character length and limitations: 32 alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FulfillmentReferenceNumber;
    /**
     * The FulfillmentAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $FulfillmentAddress;
    /**
     * The PaymentCategoryType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentCategoryType;
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LocationType;
    /**
     * The ShippingMethod
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingMethod;
    /**
     * The ProfileAddressChangeDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileAddressChangeDate;
    /**
     * The PaymentDetailsItem
     * Meta information extracted from the WSDL
     * - documentation: Information about the individual purchased items
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsItemType[]
     */
    public $PaymentDetailsItem;
    /**
     * The InsuranceTotal
     * Meta information extracted from the WSDL
     * - documentation: Total shipping insurance costs for this order. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $InsuranceTotal;
    /**
     * The ShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: Shipping discount for this order, specified as a negative number. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingDiscount;
    /**
     * The InsuranceOptionOffered
     * Meta information extracted from the WSDL
     * - documentation: Information about the Insurance options.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceOptionOffered;
    /**
     * The AllowedPaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: Allowed payment methods for this transaction.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowedPaymentMethod;
    /**
     * The EnhancedPaymentData
     * Meta information extracted from the WSDL
     * - documentation: Enhanced Data section to accept channel specific data. Applicable for version 62 and above, use this tag to pass airline itinerary data. Optional Refer to EnhancedPaymentDataType for details.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\EnhancedPaymentDataType
     */
    public $EnhancedPaymentData;
    /**
     * The SellerDetails
     * Meta information extracted from the WSDL
     * - documentation: Details about the seller. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\SellerDetailsType
     */
    public $SellerDetails;
    /**
     * The NoteText
     * Meta information extracted from the WSDL
     * - documentation: Note to recipient/seller. Optional Character length and limitations: 127 single-byte alphanumeric characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NoteText;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - documentation: PayPal Transaction Id, returned once DoExpressCheckout is completed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionId;
    /**
     * The PaymentAction
     * Meta information extracted from the WSDL
     * - documentation: How you want to obtain payment. This payment action input will be used for split payments Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates
     * that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale on
     * SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentAction;
    /**
     * The PaymentRequestID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier and mandatory for the particular payment request in case of multiple payment
     * - minOccurs: 0
     * @var string
     */
    public $PaymentRequestID;
    /**
     * The OrderURL
     * Meta information extracted from the WSDL
     * - documentation: URL on Merchant site pertaining to this invoice. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderURL;
    /**
     * The SoftDescriptor
     * Meta information extracted from the WSDL
     * - documentation: Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * The BranchLevel
     * Meta information extracted from the WSDL
     * - documentation: BranchLevel is used to identify chain payment. If BranchLevel is 0 or 1, this payment is where money moves to. If BranchLevel greater than 1, this payment contains the actual seller info. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BranchLevel;
    /**
     * The OfferDetails
     * Meta information extracted from the WSDL
     * - documentation: Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\OfferDetailsType
     */
    public $OfferDetails;
    /**
     * The Recurring
     * Meta information extracted from the WSDL
     * - documentation: Flag to indicate the recurring transaction
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Recurring;
    /**
     * The PaymentReason
     * Meta information extracted from the WSDL
     * - documentation: Indicates the purpose of this payment like Refund
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentReason;
    /**
     * The LocationID
     * Meta information extracted from the WSDL
     * - documentation: Location ID Specified by merchant Optional Character length and limitations: 50 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $LocationID;
    /**
     * The RedeemedOffers
     * Meta information extracted from the WSDL
     * - documentation: For instance single use coupons should not be returned in future CheckIn calls once they are redeemed.
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \PayPal\StructType\DiscountInfoType[]
     */
    public $RedeemedOffers;
    /**
     * The CummulativePoints
     * Meta information extracted from the WSDL
     * - documentation: Total loyalty points for a given id accumulated by the consumre so far.
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \PayPal\StructType\DiscountInfoType[]
     */
    public $CummulativePoints;
    /**
     * The MerchantData
     * Meta information extracted from the WSDL
     * - documentation: Merchant Data that is passed through from Merchant to Processor
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \PayPal\StructType\MerchantDataType[]
     */
    public $MerchantData;
    /**
     * Constructor method for PaymentDetailsType
     * @uses PaymentDetailsType::setOrderTotal()
     * @uses PaymentDetailsType::setItemTotal()
     * @uses PaymentDetailsType::setShippingTotal()
     * @uses PaymentDetailsType::setHandlingTotal()
     * @uses PaymentDetailsType::setTaxTotal()
     * @uses PaymentDetailsType::setOrderDescription()
     * @uses PaymentDetailsType::setCustom()
     * @uses PaymentDetailsType::setInvoiceID()
     * @uses PaymentDetailsType::setButtonSource()
     * @uses PaymentDetailsType::setNotifyURL()
     * @uses PaymentDetailsType::setShipToAddress()
     * @uses PaymentDetailsType::setMultiShipping()
     * @uses PaymentDetailsType::setFulfillmentReferenceNumber()
     * @uses PaymentDetailsType::setFulfillmentAddress()
     * @uses PaymentDetailsType::setPaymentCategoryType()
     * @uses PaymentDetailsType::setLocationType()
     * @uses PaymentDetailsType::setShippingMethod()
     * @uses PaymentDetailsType::setProfileAddressChangeDate()
     * @uses PaymentDetailsType::setPaymentDetailsItem()
     * @uses PaymentDetailsType::setInsuranceTotal()
     * @uses PaymentDetailsType::setShippingDiscount()
     * @uses PaymentDetailsType::setInsuranceOptionOffered()
     * @uses PaymentDetailsType::setAllowedPaymentMethod()
     * @uses PaymentDetailsType::setEnhancedPaymentData()
     * @uses PaymentDetailsType::setSellerDetails()
     * @uses PaymentDetailsType::setNoteText()
     * @uses PaymentDetailsType::setTransactionId()
     * @uses PaymentDetailsType::setPaymentAction()
     * @uses PaymentDetailsType::setPaymentRequestID()
     * @uses PaymentDetailsType::setOrderURL()
     * @uses PaymentDetailsType::setSoftDescriptor()
     * @uses PaymentDetailsType::setBranchLevel()
     * @uses PaymentDetailsType::setOfferDetails()
     * @uses PaymentDetailsType::setRecurring()
     * @uses PaymentDetailsType::setPaymentReason()
     * @uses PaymentDetailsType::setLocationID()
     * @uses PaymentDetailsType::setRedeemedOffers()
     * @uses PaymentDetailsType::setCummulativePoints()
     * @uses PaymentDetailsType::setMerchantData()
     * @param \PayPal\StructType\BasicAmountType $orderTotal
     * @param \PayPal\StructType\BasicAmountType $itemTotal
     * @param \PayPal\StructType\BasicAmountType $shippingTotal
     * @param \PayPal\StructType\BasicAmountType $handlingTotal
     * @param \PayPal\StructType\BasicAmountType $taxTotal
     * @param string $orderDescription
     * @param string $custom
     * @param string $invoiceID
     * @param string $buttonSource
     * @param string $notifyURL
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @param string $multiShipping
     * @param string $fulfillmentReferenceNumber
     * @param \PayPal\StructType\AddressType $fulfillmentAddress
     * @param string $paymentCategoryType
     * @param string $locationType
     * @param string $shippingMethod
     * @param string $profileAddressChangeDate
     * @param \PayPal\StructType\PaymentDetailsItemType[] $paymentDetailsItem
     * @param \PayPal\StructType\BasicAmountType $insuranceTotal
     * @param \PayPal\StructType\BasicAmountType $shippingDiscount
     * @param string $insuranceOptionOffered
     * @param string $allowedPaymentMethod
     * @param \PayPal\StructType\EnhancedPaymentDataType $enhancedPaymentData
     * @param \PayPal\StructType\SellerDetailsType $sellerDetails
     * @param string $noteText
     * @param string $transactionId
     * @param string $paymentAction
     * @param string $paymentRequestID
     * @param string $orderURL
     * @param string $softDescriptor
     * @param int $branchLevel
     * @param \PayPal\StructType\OfferDetailsType $offerDetails
     * @param string $recurring
     * @param string $paymentReason
     * @param string $locationID
     * @param \PayPal\StructType\DiscountInfoType[] $redeemedOffers
     * @param \PayPal\StructType\DiscountInfoType[] $cummulativePoints
     * @param \PayPal\StructType\MerchantDataType[] $merchantData
     */
    public function __construct(\PayPal\StructType\BasicAmountType $orderTotal = null, \PayPal\StructType\BasicAmountType $itemTotal = null, \PayPal\StructType\BasicAmountType $shippingTotal = null, \PayPal\StructType\BasicAmountType $handlingTotal = null, \PayPal\StructType\BasicAmountType $taxTotal = null, $orderDescription = null, $custom = null, $invoiceID = null, $buttonSource = null, $notifyURL = null, \PayPal\StructType\AddressType $shipToAddress = null, $multiShipping = null, $fulfillmentReferenceNumber = null, \PayPal\StructType\AddressType $fulfillmentAddress = null, $paymentCategoryType = null, $locationType = null, $shippingMethod = null, $profileAddressChangeDate = null, array $paymentDetailsItem = array(), \PayPal\StructType\BasicAmountType $insuranceTotal = null, \PayPal\StructType\BasicAmountType $shippingDiscount = null, $insuranceOptionOffered = null, $allowedPaymentMethod = null, \PayPal\StructType\EnhancedPaymentDataType $enhancedPaymentData = null, \PayPal\StructType\SellerDetailsType $sellerDetails = null, $noteText = null, $transactionId = null, $paymentAction = null, $paymentRequestID = null, $orderURL = null, $softDescriptor = null, $branchLevel = null, \PayPal\StructType\OfferDetailsType $offerDetails = null, $recurring = null, $paymentReason = null, $locationID = null, array $redeemedOffers = array(), array $cummulativePoints = array(), array $merchantData = array())
    {
        $this
            ->setOrderTotal($orderTotal)
            ->setItemTotal($itemTotal)
            ->setShippingTotal($shippingTotal)
            ->setHandlingTotal($handlingTotal)
            ->setTaxTotal($taxTotal)
            ->setOrderDescription($orderDescription)
            ->setCustom($custom)
            ->setInvoiceID($invoiceID)
            ->setButtonSource($buttonSource)
            ->setNotifyURL($notifyURL)
            ->setShipToAddress($shipToAddress)
            ->setMultiShipping($multiShipping)
            ->setFulfillmentReferenceNumber($fulfillmentReferenceNumber)
            ->setFulfillmentAddress($fulfillmentAddress)
            ->setPaymentCategoryType($paymentCategoryType)
            ->setLocationType($locationType)
            ->setShippingMethod($shippingMethod)
            ->setProfileAddressChangeDate($profileAddressChangeDate)
            ->setPaymentDetailsItem($paymentDetailsItem)
            ->setInsuranceTotal($insuranceTotal)
            ->setShippingDiscount($shippingDiscount)
            ->setInsuranceOptionOffered($insuranceOptionOffered)
            ->setAllowedPaymentMethod($allowedPaymentMethod)
            ->setEnhancedPaymentData($enhancedPaymentData)
            ->setSellerDetails($sellerDetails)
            ->setNoteText($noteText)
            ->setTransactionId($transactionId)
            ->setPaymentAction($paymentAction)
            ->setPaymentRequestID($paymentRequestID)
            ->setOrderURL($orderURL)
            ->setSoftDescriptor($softDescriptor)
            ->setBranchLevel($branchLevel)
            ->setOfferDetails($offerDetails)
            ->setRecurring($recurring)
            ->setPaymentReason($paymentReason)
            ->setLocationID($locationID)
            ->setRedeemedOffers($redeemedOffers)
            ->setCummulativePoints($cummulativePoints)
            ->setMerchantData($merchantData);
    }
    /**
     * Get OrderTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getOrderTotal()
    {
        return $this->OrderTotal;
    }
    /**
     * Set OrderTotal value
     * @param \PayPal\StructType\BasicAmountType $orderTotal
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setOrderTotal(\PayPal\StructType\BasicAmountType $orderTotal = null)
    {
        $this->OrderTotal = $orderTotal;
        return $this;
    }
    /**
     * Get ItemTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getItemTotal()
    {
        return $this->ItemTotal;
    }
    /**
     * Set ItemTotal value
     * @param \PayPal\StructType\BasicAmountType $itemTotal
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setItemTotal(\PayPal\StructType\BasicAmountType $itemTotal = null)
    {
        $this->ItemTotal = $itemTotal;
        return $this;
    }
    /**
     * Get ShippingTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingTotal()
    {
        return $this->ShippingTotal;
    }
    /**
     * Set ShippingTotal value
     * @param \PayPal\StructType\BasicAmountType $shippingTotal
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setShippingTotal(\PayPal\StructType\BasicAmountType $shippingTotal = null)
    {
        $this->ShippingTotal = $shippingTotal;
        return $this;
    }
    /**
     * Get HandlingTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getHandlingTotal()
    {
        return $this->HandlingTotal;
    }
    /**
     * Set HandlingTotal value
     * @param \PayPal\StructType\BasicAmountType $handlingTotal
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setHandlingTotal(\PayPal\StructType\BasicAmountType $handlingTotal = null)
    {
        $this->HandlingTotal = $handlingTotal;
        return $this;
    }
    /**
     * Get TaxTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxTotal()
    {
        return $this->TaxTotal;
    }
    /**
     * Set TaxTotal value
     * @param \PayPal\StructType\BasicAmountType $taxTotal
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setTaxTotal(\PayPal\StructType\BasicAmountType $taxTotal = null)
    {
        $this->TaxTotal = $taxTotal;
        return $this;
    }
    /**
     * Get OrderDescription value
     * @return string|null
     */
    public function getOrderDescription()
    {
        return $this->OrderDescription;
    }
    /**
     * Set OrderDescription value
     * @param string $orderDescription
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setOrderDescription($orderDescription = null)
    {
        // validation for constraint: string
        if (!is_null($orderDescription) && !is_string($orderDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderDescription, true), gettype($orderDescription)), __LINE__);
        }
        $this->OrderDescription = $orderDescription;
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
     * @return \PayPal\StructType\PaymentDetailsType
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
     * @return \PayPal\StructType\PaymentDetailsType
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
     * Get ButtonSource value
     * @return string|null
     */
    public function getButtonSource()
    {
        return $this->ButtonSource;
    }
    /**
     * Set ButtonSource value
     * @param string $buttonSource
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setButtonSource($buttonSource = null)
    {
        // validation for constraint: string
        if (!is_null($buttonSource) && !is_string($buttonSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buttonSource, true), gettype($buttonSource)), __LINE__);
        }
        $this->ButtonSource = $buttonSource;
        return $this;
    }
    /**
     * Get NotifyURL value
     * @return string|null
     */
    public function getNotifyURL()
    {
        return $this->NotifyURL;
    }
    /**
     * Set NotifyURL value
     * @param string $notifyURL
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setNotifyURL($notifyURL = null)
    {
        // validation for constraint: string
        if (!is_null($notifyURL) && !is_string($notifyURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notifyURL, true), gettype($notifyURL)), __LINE__);
        }
        $this->NotifyURL = $notifyURL;
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
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setShipToAddress(\PayPal\StructType\AddressType $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Get MultiShipping value
     * @return string|null
     */
    public function getMultiShipping()
    {
        return $this->MultiShipping;
    }
    /**
     * Set MultiShipping value
     * @param string $multiShipping
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setMultiShipping($multiShipping = null)
    {
        // validation for constraint: string
        if (!is_null($multiShipping) && !is_string($multiShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiShipping, true), gettype($multiShipping)), __LINE__);
        }
        $this->MultiShipping = $multiShipping;
        return $this;
    }
    /**
     * Get FulfillmentReferenceNumber value
     * @return string|null
     */
    public function getFulfillmentReferenceNumber()
    {
        return $this->FulfillmentReferenceNumber;
    }
    /**
     * Set FulfillmentReferenceNumber value
     * @param string $fulfillmentReferenceNumber
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setFulfillmentReferenceNumber($fulfillmentReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($fulfillmentReferenceNumber) && !is_string($fulfillmentReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentReferenceNumber, true), gettype($fulfillmentReferenceNumber)), __LINE__);
        }
        $this->FulfillmentReferenceNumber = $fulfillmentReferenceNumber;
        return $this;
    }
    /**
     * Get FulfillmentAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getFulfillmentAddress()
    {
        return $this->FulfillmentAddress;
    }
    /**
     * Set FulfillmentAddress value
     * @param \PayPal\StructType\AddressType $fulfillmentAddress
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setFulfillmentAddress(\PayPal\StructType\AddressType $fulfillmentAddress = null)
    {
        $this->FulfillmentAddress = $fulfillmentAddress;
        return $this;
    }
    /**
     * Get PaymentCategoryType value
     * @return string|null
     */
    public function getPaymentCategoryType()
    {
        return $this->PaymentCategoryType;
    }
    /**
     * Set PaymentCategoryType value
     * @uses \PayPal\EnumType\PaymentCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentCategoryType
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setPaymentCategoryType($paymentCategoryType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentCategoryType::valueIsValid($paymentCategoryType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentCategoryType', is_array($paymentCategoryType) ? implode(', ', $paymentCategoryType) : var_export($paymentCategoryType, true), implode(', ', \PayPal\EnumType\PaymentCategoryType::getValidValues())), __LINE__);
        }
        $this->PaymentCategoryType = $paymentCategoryType;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \PayPal\EnumType\LocationType::valueIsValid()
     * @uses \PayPal\EnumType\LocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationType
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\LocationType::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\LocationType', is_array($locationType) ? implode(', ', $locationType) : var_export($locationType, true), implode(', ', \PayPal\EnumType\LocationType::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Get ShippingMethod value
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->ShippingMethod;
    }
    /**
     * Set ShippingMethod value
     * @uses \PayPal\EnumType\ShippingServiceCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingServiceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingMethod
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setShippingMethod($shippingMethod = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingServiceCodeType::valueIsValid($shippingMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ShippingServiceCodeType', is_array($shippingMethod) ? implode(', ', $shippingMethod) : var_export($shippingMethod, true), implode(', ', \PayPal\EnumType\ShippingServiceCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * Get ProfileAddressChangeDate value
     * @return string|null
     */
    public function getProfileAddressChangeDate()
    {
        return $this->ProfileAddressChangeDate;
    }
    /**
     * Set ProfileAddressChangeDate value
     * @param string $profileAddressChangeDate
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setProfileAddressChangeDate($profileAddressChangeDate = null)
    {
        // validation for constraint: string
        if (!is_null($profileAddressChangeDate) && !is_string($profileAddressChangeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileAddressChangeDate, true), gettype($profileAddressChangeDate)), __LINE__);
        }
        $this->ProfileAddressChangeDate = $profileAddressChangeDate;
        return $this;
    }
    /**
     * Get PaymentDetailsItem value
     * @return \PayPal\StructType\PaymentDetailsItemType[]|null
     */
    public function getPaymentDetailsItem()
    {
        return $this->PaymentDetailsItem;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentDetailsItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentDetailsItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentDetailsItemForArrayConstraintsFromSetPaymentDetailsItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentDetailsTypePaymentDetailsItemItem) {
            // validation for constraint: itemType
            if (!$paymentDetailsTypePaymentDetailsItemItem instanceof \PayPal\StructType\PaymentDetailsItemType) {
                $invalidValues[] = is_object($paymentDetailsTypePaymentDetailsItemItem) ? get_class($paymentDetailsTypePaymentDetailsItemItem) : sprintf('%s(%s)', gettype($paymentDetailsTypePaymentDetailsItemItem), var_export($paymentDetailsTypePaymentDetailsItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentDetailsItem property can only contain items of type \PayPal\StructType\PaymentDetailsItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentDetailsItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsItemType[] $paymentDetailsItem
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setPaymentDetailsItem(array $paymentDetailsItem = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentDetailsItemArrayErrorMessage = self::validatePaymentDetailsItemForArrayConstraintsFromSetPaymentDetailsItem($paymentDetailsItem))) {
            throw new \InvalidArgumentException($paymentDetailsItemArrayErrorMessage, __LINE__);
        }
        $this->PaymentDetailsItem = $paymentDetailsItem;
        return $this;
    }
    /**
     * Add item to PaymentDetailsItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsItemType $item
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function addToPaymentDetailsItem(\PayPal\StructType\PaymentDetailsItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentDetailsItemType) {
            throw new \InvalidArgumentException(sprintf('The PaymentDetailsItem property can only contain items of type \PayPal\StructType\PaymentDetailsItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentDetailsItem[] = $item;
        return $this;
    }
    /**
     * Get InsuranceTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getInsuranceTotal()
    {
        return $this->InsuranceTotal;
    }
    /**
     * Set InsuranceTotal value
     * @param \PayPal\StructType\BasicAmountType $insuranceTotal
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setInsuranceTotal(\PayPal\StructType\BasicAmountType $insuranceTotal = null)
    {
        $this->InsuranceTotal = $insuranceTotal;
        return $this;
    }
    /**
     * Get ShippingDiscount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingDiscount()
    {
        return $this->ShippingDiscount;
    }
    /**
     * Set ShippingDiscount value
     * @param \PayPal\StructType\BasicAmountType $shippingDiscount
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setShippingDiscount(\PayPal\StructType\BasicAmountType $shippingDiscount = null)
    {
        $this->ShippingDiscount = $shippingDiscount;
        return $this;
    }
    /**
     * Get InsuranceOptionOffered value
     * @return string|null
     */
    public function getInsuranceOptionOffered()
    {
        return $this->InsuranceOptionOffered;
    }
    /**
     * Set InsuranceOptionOffered value
     * @param string $insuranceOptionOffered
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setInsuranceOptionOffered($insuranceOptionOffered = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceOptionOffered) && !is_string($insuranceOptionOffered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceOptionOffered, true), gettype($insuranceOptionOffered)), __LINE__);
        }
        $this->InsuranceOptionOffered = $insuranceOptionOffered;
        return $this;
    }
    /**
     * Get AllowedPaymentMethod value
     * @return string|null
     */
    public function getAllowedPaymentMethod()
    {
        return $this->AllowedPaymentMethod;
    }
    /**
     * Set AllowedPaymentMethod value
     * @uses \PayPal\EnumType\AllowedPaymentMethodType::valueIsValid()
     * @uses \PayPal\EnumType\AllowedPaymentMethodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowedPaymentMethod
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setAllowedPaymentMethod($allowedPaymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AllowedPaymentMethodType::valueIsValid($allowedPaymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AllowedPaymentMethodType', is_array($allowedPaymentMethod) ? implode(', ', $allowedPaymentMethod) : var_export($allowedPaymentMethod, true), implode(', ', \PayPal\EnumType\AllowedPaymentMethodType::getValidValues())), __LINE__);
        }
        $this->AllowedPaymentMethod = $allowedPaymentMethod;
        return $this;
    }
    /**
     * Get EnhancedPaymentData value
     * @return \PayPal\StructType\EnhancedPaymentDataType|null
     */
    public function getEnhancedPaymentData()
    {
        return $this->EnhancedPaymentData;
    }
    /**
     * Set EnhancedPaymentData value
     * @param \PayPal\StructType\EnhancedPaymentDataType $enhancedPaymentData
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setEnhancedPaymentData(\PayPal\StructType\EnhancedPaymentDataType $enhancedPaymentData = null)
    {
        $this->EnhancedPaymentData = $enhancedPaymentData;
        return $this;
    }
    /**
     * Get SellerDetails value
     * @return \PayPal\StructType\SellerDetailsType|null
     */
    public function getSellerDetails()
    {
        return $this->SellerDetails;
    }
    /**
     * Set SellerDetails value
     * @param \PayPal\StructType\SellerDetailsType $sellerDetails
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setSellerDetails(\PayPal\StructType\SellerDetailsType $sellerDetails = null)
    {
        $this->SellerDetails = $sellerDetails;
        return $this;
    }
    /**
     * Get NoteText value
     * @return string|null
     */
    public function getNoteText()
    {
        return $this->NoteText;
    }
    /**
     * Set NoteText value
     * @param string $noteText
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setNoteText($noteText = null)
    {
        // validation for constraint: string
        if (!is_null($noteText) && !is_string($noteText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteText, true), gettype($noteText)), __LINE__);
        }
        $this->NoteText = $noteText;
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Get PaymentAction value
     * @return string|null
     */
    public function getPaymentAction()
    {
        return $this->PaymentAction;
    }
    /**
     * Set PaymentAction value
     * @uses \PayPal\EnumType\PaymentActionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentAction
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setPaymentAction($paymentAction = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentActionCodeType::valueIsValid($paymentAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentActionCodeType', is_array($paymentAction) ? implode(', ', $paymentAction) : var_export($paymentAction, true), implode(', ', \PayPal\EnumType\PaymentActionCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAction = $paymentAction;
        return $this;
    }
    /**
     * Get PaymentRequestID value
     * @return string|null
     */
    public function getPaymentRequestID()
    {
        return $this->PaymentRequestID;
    }
    /**
     * Set PaymentRequestID value
     * @param string $paymentRequestID
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setPaymentRequestID($paymentRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($paymentRequestID) && !is_string($paymentRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentRequestID, true), gettype($paymentRequestID)), __LINE__);
        }
        $this->PaymentRequestID = $paymentRequestID;
        return $this;
    }
    /**
     * Get OrderURL value
     * @return string|null
     */
    public function getOrderURL()
    {
        return $this->OrderURL;
    }
    /**
     * Set OrderURL value
     * @param string $orderURL
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setOrderURL($orderURL = null)
    {
        // validation for constraint: string
        if (!is_null($orderURL) && !is_string($orderURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderURL, true), gettype($orderURL)), __LINE__);
        }
        $this->OrderURL = $orderURL;
        return $this;
    }
    /**
     * Get SoftDescriptor value
     * @return string|null
     */
    public function getSoftDescriptor()
    {
        return $this->SoftDescriptor;
    }
    /**
     * Set SoftDescriptor value
     * @param string $softDescriptor
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setSoftDescriptor($softDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softDescriptor, true), gettype($softDescriptor)), __LINE__);
        }
        $this->SoftDescriptor = $softDescriptor;
        return $this;
    }
    /**
     * Get BranchLevel value
     * @return int|null
     */
    public function getBranchLevel()
    {
        return $this->BranchLevel;
    }
    /**
     * Set BranchLevel value
     * @param int $branchLevel
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setBranchLevel($branchLevel = null)
    {
        // validation for constraint: int
        if (!is_null($branchLevel) && !(is_int($branchLevel) || ctype_digit($branchLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($branchLevel, true), gettype($branchLevel)), __LINE__);
        }
        $this->BranchLevel = $branchLevel;
        return $this;
    }
    /**
     * Get OfferDetails value
     * @return \PayPal\StructType\OfferDetailsType|null
     */
    public function getOfferDetails()
    {
        return $this->OfferDetails;
    }
    /**
     * Set OfferDetails value
     * @param \PayPal\StructType\OfferDetailsType $offerDetails
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setOfferDetails(\PayPal\StructType\OfferDetailsType $offerDetails = null)
    {
        $this->OfferDetails = $offerDetails;
        return $this;
    }
    /**
     * Get Recurring value
     * @return string|null
     */
    public function getRecurring()
    {
        return $this->Recurring;
    }
    /**
     * Set Recurring value
     * @uses \PayPal\EnumType\RecurringFlagType::valueIsValid()
     * @uses \PayPal\EnumType\RecurringFlagType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $recurring
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setRecurring($recurring = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RecurringFlagType::valueIsValid($recurring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\RecurringFlagType', is_array($recurring) ? implode(', ', $recurring) : var_export($recurring, true), implode(', ', \PayPal\EnumType\RecurringFlagType::getValidValues())), __LINE__);
        }
        $this->Recurring = $recurring;
        return $this;
    }
    /**
     * Get PaymentReason value
     * @return string|null
     */
    public function getPaymentReason()
    {
        return $this->PaymentReason;
    }
    /**
     * Set PaymentReason value
     * @uses \PayPal\EnumType\PaymentReasonType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentReasonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentReason
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setPaymentReason($paymentReason = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentReasonType::valueIsValid($paymentReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentReasonType', is_array($paymentReason) ? implode(', ', $paymentReason) : var_export($paymentReason, true), implode(', ', \PayPal\EnumType\PaymentReasonType::getValidValues())), __LINE__);
        }
        $this->PaymentReason = $paymentReason;
        return $this;
    }
    /**
     * Get LocationID value
     * @return string|null
     */
    public function getLocationID()
    {
        return $this->LocationID;
    }
    /**
     * Set LocationID value
     * @param string $locationID
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setLocationID($locationID = null)
    {
        // validation for constraint: string
        if (!is_null($locationID) && !is_string($locationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationID, true), gettype($locationID)), __LINE__);
        }
        $this->LocationID = $locationID;
        return $this;
    }
    /**
     * Get RedeemedOffers value
     * @return \PayPal\StructType\DiscountInfoType[]|null
     */
    public function getRedeemedOffers()
    {
        return $this->RedeemedOffers;
    }
    /**
     * This method is responsible for validating the values passed to the setRedeemedOffers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRedeemedOffers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRedeemedOffersForArrayConstraintsFromSetRedeemedOffers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentDetailsTypeRedeemedOffersItem) {
            // validation for constraint: itemType
            if (!$paymentDetailsTypeRedeemedOffersItem instanceof \PayPal\StructType\DiscountInfoType) {
                $invalidValues[] = is_object($paymentDetailsTypeRedeemedOffersItem) ? get_class($paymentDetailsTypeRedeemedOffersItem) : sprintf('%s(%s)', gettype($paymentDetailsTypeRedeemedOffersItem), var_export($paymentDetailsTypeRedeemedOffersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RedeemedOffers property can only contain items of type \PayPal\StructType\DiscountInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RedeemedOffers value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DiscountInfoType[] $redeemedOffers
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setRedeemedOffers(array $redeemedOffers = array())
    {
        // validation for constraint: array
        if ('' !== ($redeemedOffersArrayErrorMessage = self::validateRedeemedOffersForArrayConstraintsFromSetRedeemedOffers($redeemedOffers))) {
            throw new \InvalidArgumentException($redeemedOffersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($redeemedOffers) && count($redeemedOffers) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($redeemedOffers)), __LINE__);
        }
        $this->RedeemedOffers = $redeemedOffers;
        return $this;
    }
    /**
     * Add item to RedeemedOffers value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DiscountInfoType $item
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function addToRedeemedOffers(\PayPal\StructType\DiscountInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\DiscountInfoType) {
            throw new \InvalidArgumentException(sprintf('The RedeemedOffers property can only contain items of type \PayPal\StructType\DiscountInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->RedeemedOffers) && count($this->RedeemedOffers) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->RedeemedOffers)), __LINE__);
        }
        $this->RedeemedOffers[] = $item;
        return $this;
    }
    /**
     * Get CummulativePoints value
     * @return \PayPal\StructType\DiscountInfoType[]|null
     */
    public function getCummulativePoints()
    {
        return $this->CummulativePoints;
    }
    /**
     * This method is responsible for validating the values passed to the setCummulativePoints method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCummulativePoints method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCummulativePointsForArrayConstraintsFromSetCummulativePoints(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentDetailsTypeCummulativePointsItem) {
            // validation for constraint: itemType
            if (!$paymentDetailsTypeCummulativePointsItem instanceof \PayPal\StructType\DiscountInfoType) {
                $invalidValues[] = is_object($paymentDetailsTypeCummulativePointsItem) ? get_class($paymentDetailsTypeCummulativePointsItem) : sprintf('%s(%s)', gettype($paymentDetailsTypeCummulativePointsItem), var_export($paymentDetailsTypeCummulativePointsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CummulativePoints property can only contain items of type \PayPal\StructType\DiscountInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CummulativePoints value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DiscountInfoType[] $cummulativePoints
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setCummulativePoints(array $cummulativePoints = array())
    {
        // validation for constraint: array
        if ('' !== ($cummulativePointsArrayErrorMessage = self::validateCummulativePointsForArrayConstraintsFromSetCummulativePoints($cummulativePoints))) {
            throw new \InvalidArgumentException($cummulativePointsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($cummulativePoints) && count($cummulativePoints) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($cummulativePoints)), __LINE__);
        }
        $this->CummulativePoints = $cummulativePoints;
        return $this;
    }
    /**
     * Add item to CummulativePoints value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DiscountInfoType $item
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function addToCummulativePoints(\PayPal\StructType\DiscountInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\DiscountInfoType) {
            throw new \InvalidArgumentException(sprintf('The CummulativePoints property can only contain items of type \PayPal\StructType\DiscountInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->CummulativePoints) && count($this->CummulativePoints) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->CummulativePoints)), __LINE__);
        }
        $this->CummulativePoints[] = $item;
        return $this;
    }
    /**
     * Get MerchantData value
     * @return \PayPal\StructType\MerchantDataType[]|null
     */
    public function getMerchantData()
    {
        return $this->MerchantData;
    }
    /**
     * This method is responsible for validating the values passed to the setMerchantData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMerchantData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMerchantDataForArrayConstraintsFromSetMerchantData(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentDetailsTypeMerchantDataItem) {
            // validation for constraint: itemType
            if (!$paymentDetailsTypeMerchantDataItem instanceof \PayPal\StructType\MerchantDataType) {
                $invalidValues[] = is_object($paymentDetailsTypeMerchantDataItem) ? get_class($paymentDetailsTypeMerchantDataItem) : sprintf('%s(%s)', gettype($paymentDetailsTypeMerchantDataItem), var_export($paymentDetailsTypeMerchantDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MerchantData property can only contain items of type \PayPal\StructType\MerchantDataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MerchantData value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\MerchantDataType[] $merchantData
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function setMerchantData(array $merchantData = array())
    {
        // validation for constraint: array
        if ('' !== ($merchantDataArrayErrorMessage = self::validateMerchantDataForArrayConstraintsFromSetMerchantData($merchantData))) {
            throw new \InvalidArgumentException($merchantDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($merchantData) && count($merchantData) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($merchantData)), __LINE__);
        }
        $this->MerchantData = $merchantData;
        return $this;
    }
    /**
     * Add item to MerchantData value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\MerchantDataType $item
     * @return \PayPal\StructType\PaymentDetailsType
     */
    public function addToMerchantData(\PayPal\StructType\MerchantDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\MerchantDataType) {
            throw new \InvalidArgumentException(sprintf('The MerchantData property can only contain items of type \PayPal\StructType\MerchantDataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->MerchantData) && count($this->MerchantData) >= 16) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->MerchantData)), __LINE__);
        }
        $this->MerchantData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentDetailsType
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
