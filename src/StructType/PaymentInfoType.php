<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentInfoType Payment information. | A transaction identification number. Character length and limits: 19 single-byte characters maximum | Its Ebay transaction id. EbayTransactionID will returned for immediate pay item transaction
 * in ECA | Receipt ID Character length and limitations: 16 digits in xxxx-xxxx-xxxx-xxxx format
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentInfoType extends AbstractStructBase
{
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:TransactionID
     * @var string
     */
    public $TransactionID;
    /**
     * The EbayTransactionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:EbayTransactionID
     * @var string
     */
    public $EbayTransactionID;
    /**
     * The ParentTransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Parent or related transaction identification number. This field is populated for the following transaction types: ReversalCapture of an authorized transaction.Reauthorization of a transaction.Capture of an order. The value of
     * ParentTransactionID is the original OrderID.Authorization of an order. The value of ParentTransactionID is the original OrderID.Capture of an order authorization.Void of an order. The value of ParentTransactionID is the original OrderID. Character
     * length and limits: 19 single-byte characters maximum | TransactionId - Type for a PayPal Transaction ID.
     * - minOccurs: 0
     * @var string
     */
    public $ParentTransactionID;
    /**
     * The ReceiptID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ReceiptID
     * @var string
     */
    public $ReceiptID;
    /**
     * The TransactionType
     * Meta informations extracted from the WSDL
     * - documentation: The type of transaction cart: Transaction created via the PayPal Shopping Cart feature or by Express Checkout with multiple purchased item express-checkout: Transaction created by Express Checkout with a single purchased items
     * send-money: Transaction created by customer from the Send Money tab on the PayPal website. web-accept: Transaction created by customer via Buy Now, Donation, or Auction Smart Logos. subscr-*: Transaction created by customer via Subscription. eot
     * means "end of subscription term." merch-pmt: preapproved payment. mass-pay: Transaction created via MassPay. virtual-terminal: Transaction created via merchant virtual terminal. credit: Transaction created via merchant virtual terminal or API to
     * credit a customer.
     * @var string
     */
    public $TransactionType;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: The type of payment
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The RefundSourceCodeType
     * Meta informations extracted from the WSDL
     * - documentation: The type of funding source
     * - minOccurs: 0
     * @var string
     */
    public $RefundSourceCodeType;
    /**
     * The ExpectedeCheckClearDate
     * Meta informations extracted from the WSDL
     * - documentation: eCheck latest expected clear date
     * - minOccurs: 0
     * @var string
     */
    public $ExpectedeCheckClearDate;
    /**
     * The PaymentDate
     * Meta informations extracted from the WSDL
     * - documentation: Date and time of payment
     * - minOccurs: 0
     * @var string
     */
    public $PaymentDate;
    /**
     * The GrossAmount
     * Meta informations extracted from the WSDL
     * - documentation: Full amount of the customer's payment, before transaction fee is subtracted
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $GrossAmount;
    /**
     * The FeeAmount
     * Meta informations extracted from the WSDL
     * - documentation: Transaction fee associated with the payment
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $FeeAmount;
    /**
     * The FinancingFeeAmount
     * Meta informations extracted from the WSDL
     * - documentation: Transaction financing fee associated with the payment.
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $FinancingFeeAmount;
    /**
     * The FinancingTotalCost
     * Meta informations extracted from the WSDL
     * - documentation: Total overall cost associated with this financing transaction.
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $FinancingTotalCost;
    /**
     * The FinancingMonthlyPayment
     * Meta informations extracted from the WSDL
     * - documentation: Monthly payment for this financing transaction.
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $FinancingMonthlyPayment;
    /**
     * The FinancingTerm
     * Meta informations extracted from the WSDL
     * - documentation: The length of this financing term, in months.
     * - minOccurs: 0
     * @var string
     */
    public $FinancingTerm;
    /**
     * The IsFinancing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IsFinancing;
    /**
     * The SettleAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount deposited into the account's primary balance after a currency conversion from automatic conversion through your Payment Receiving Preferences or manual conversion through manually accepting a payment. This amount is calculated
     * after fees and taxes have been assessed.
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $SettleAmount;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of tax for transaction
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxAmount;
    /**
     * The ExchangeRate
     * Meta informations extracted from the WSDL
     * - documentation: Exchange rate for transaction
     * - minOccurs: 0
     * @var string
     */
    public $ExchangeRate;
    /**
     * The PaymentStatus
     * Meta informations extracted from the WSDL
     * - documentation: The status of the payment: None: No status Created: A giropay payment has been initiated. Canceled-Reversal: A reversal has been canceled. For example, you won a dispute with the customer, and the funds for the transaction that was
     * reversed have been returned to you. Completed: The payment has been completed, and the funds have been added successfully to your account balance. Denied: You denied the payment. This happens only if the payment was previously pending because of
     * possible reasons described for the PendingReason element. Expired: This authorization has expired and cannot be captured. Failed: The payment has failed. This happens only if the payment was made from your customer's bank account. In-Progress: The
     * transaction is in process of authorization and capture. Partially-Refunded: The transaction has been partially refunded. Pending: The payment is pending. See "PendingReason" for more information. Refunded: You refunded the payment. Reversed: A
     * payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer. The reason for the reversal is specified in the ReasonCode element. Processed: A payment has been
     * accepted. Voided: This authorization has been voided. Completed-Funds-Held: The payment has been completed, and the funds have been added successfully to your pending balance. See the "HoldDecision" field for more information.
     * @var string
     */
    public $PaymentStatus;
    /**
     * The PendingReason
     * Meta informations extracted from the WSDL
     * - documentation: The reason the payment is pending: none: No pending reason address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to
     * manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. authorization: You set PaymentAction to Authorization on SetExpressCheckoutRequest and have not yet captured funds. echeck: The
     * payment is pending because it was made by an eCheck that has not yet cleared. intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account
     * Overview. multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. unilateral: The
     * payment is pending because it was made to an email address that is not yet registered or confirmed. upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to
     * receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account. verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment.
     * regulatory-review: This payment is pending while we make sure it meets regulatory requirements. We'll contact you again in 24-72 hours with the outcome of our review. other: The payment is pending for a reason other than those listed above. For more
     * information, contact PayPal Customer Service.
     * - minOccurs: 0
     * @var string
     */
    public $PendingReason;
    /**
     * The ReasonCode
     * Meta informations extracted from the WSDL
     * - documentation: The reason for a reversal if TransactionType is reversal: none: No reason code chargeback: A reversal has occurred on this transaction due to a chargeback by your customer. guarantee: A reversal has occurred on this transaction due
     * to your customer triggering a money-back guarantee. buyer-complaint: A reversal has occurred on this transaction due to a complaint about the transaction from your customer. refund: A reversal has occurred on this transaction because you have given
     * the customer a refund. other: A reversal has occurred on this transaction due to a reason not listed above.
     * - minOccurs: 0
     * @var string
     */
    public $ReasonCode;
    /**
     * The HoldDecision
     * Meta informations extracted from the WSDL
     * - documentation: HoldDecision is returned in the response only if PaymentStatus is Completed-Funds-Held. The reason the funds are kept in pending balance: newsellerpaymenthold: The seller is new. paymenthold: A hold is placed on your transaction due
     * to a reason not listed above.
     * - minOccurs: 0
     * @var string
     */
    public $HoldDecision;
    /**
     * The ShippingMethod
     * Meta informations extracted from the WSDL
     * - documentation: Shipping method selected by the user during check-out.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingMethod;
    /**
     * The ProtectionEligibility
     * Meta informations extracted from the WSDL
     * - documentation: Protection Eligibility for this Transaction - None, SPP or ESPP
     * - minOccurs: 0
     * @var string
     */
    public $ProtectionEligibility;
    /**
     * The ProtectionEligibilityType
     * Meta informations extracted from the WSDL
     * - documentation: Protection Eligibility details for this Transaction
     * - minOccurs: 0
     * @var string
     */
    public $ProtectionEligibilityType;
    /**
     * The ReceiptReferenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Receipt Reference Number for this Transaction
     * - minOccurs: 0
     * @var string
     */
    public $ReceiptReferenceNumber;
    /**
     * The POSTransactionType
     * Meta informations extracted from the WSDL
     * - documentation: The type of POS transaction F: Forced post transaction. POS merchant can send transactions at a later point if connectivity is lost. S: Single call checkout, and this is to identify PayPal Lite API usage.
     * - minOccurs: 0
     * @var string
     */
    public $POSTransactionType;
    /**
     * The ShipAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of shipping charged on transaction
     * - minOccurs: 0
     * @var string
     */
    public $ShipAmount;
    /**
     * The ShipHandleAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of ship handling charged on transaction
     * - minOccurs: 0
     * @var string
     */
    public $ShipHandleAmount;
    /**
     * The ShipDiscount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of shipping discount on transaction
     * - minOccurs: 0
     * @var string
     */
    public $ShipDiscount;
    /**
     * The InsuranceAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount of Insurance amount on transaction
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceAmount;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - documentation: Subject as entered in the transaction
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The StoreID
     * Meta informations extracted from the WSDL
     * - documentation: StoreID as entered in the transaction
     * - minOccurs: 0
     * @var string
     */
    public $StoreID;
    /**
     * The TerminalID
     * Meta informations extracted from the WSDL
     * - documentation: TerminalID as entered in the transaction
     * - minOccurs: 0
     * @var string
     */
    public $TerminalID;
    /**
     * The SellerDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details about the seller. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\SellerDetailsType
     */
    public $SellerDetails;
    /**
     * The PaymentRequestID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier and mandatory for each bucket in case of split payement
     * - minOccurs: 0
     * @var string
     */
    public $PaymentRequestID;
    /**
     * The FMFDetails
     * Meta informations extracted from the WSDL
     * - documentation: Thes are filters that could result in accept/deny/pending action.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FMFDetailsType
     */
    public $FMFDetails;
    /**
     * The EnhancedPaymentInfo
     * Meta informations extracted from the WSDL
     * - documentation: This will be enhanced info for the payment: Example: UATP details
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\EnhancedPaymentInfoType
     */
    public $EnhancedPaymentInfo;
    /**
     * The PaymentError
     * Meta informations extracted from the WSDL
     * - documentation: This will indicate the payment status for individual payment request in case of split payment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ErrorType
     */
    public $PaymentError;
    /**
     * The InstrumentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Type of the payment instrument.
     * - minOccurs: 0
     * @var \PayPal\StructType\InstrumentDetailsType
     */
    public $InstrumentDetails;
    /**
     * The OfferDetails
     * Meta informations extracted from the WSDL
     * - documentation: Offer Details.
     * - minOccurs: 0
     * @var \PayPal\StructType\OfferDetailsType
     */
    public $OfferDetails;
    /**
     * The BinEligibility
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates whether the credit card number used for this transaction is in a particular bin range registered with PayPal by the merchant. This filed is optional and will be present if merchant has a registered bin range. The
     * value of this field will be "true" if merchant has a registered bin range and the credit card used in the transaction is within the registered bin range. The value of this field will be false if merchant has a registered bin range and credit card
     * used in the transaction outside registered bin range or the transaction is not done using a credit card.
     * - minOccurs: 0
     * @var string
     */
    public $BinEligibility;
    /**
     * The SoftDescriptor
     * Meta informations extracted from the WSDL
     * - documentation: This information holds business name and other data describing the transaction. This information is usually displayed in the CC account holder's statement.
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * The SoftDescriptorCity
     * Meta informations extracted from the WSDL
     * - documentation: CC Information about how consumer should contact the merchant. This information is usually displayed in the CC account holder's statement.
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptorCity;
    /**
     * Constructor method for PaymentInfoType
     * @uses PaymentInfoType::setTransactionID()
     * @uses PaymentInfoType::setEbayTransactionID()
     * @uses PaymentInfoType::setParentTransactionID()
     * @uses PaymentInfoType::setReceiptID()
     * @uses PaymentInfoType::setTransactionType()
     * @uses PaymentInfoType::setPaymentType()
     * @uses PaymentInfoType::setRefundSourceCodeType()
     * @uses PaymentInfoType::setExpectedeCheckClearDate()
     * @uses PaymentInfoType::setPaymentDate()
     * @uses PaymentInfoType::setGrossAmount()
     * @uses PaymentInfoType::setFeeAmount()
     * @uses PaymentInfoType::setFinancingFeeAmount()
     * @uses PaymentInfoType::setFinancingTotalCost()
     * @uses PaymentInfoType::setFinancingMonthlyPayment()
     * @uses PaymentInfoType::setFinancingTerm()
     * @uses PaymentInfoType::setIsFinancing()
     * @uses PaymentInfoType::setSettleAmount()
     * @uses PaymentInfoType::setTaxAmount()
     * @uses PaymentInfoType::setExchangeRate()
     * @uses PaymentInfoType::setPaymentStatus()
     * @uses PaymentInfoType::setPendingReason()
     * @uses PaymentInfoType::setReasonCode()
     * @uses PaymentInfoType::setHoldDecision()
     * @uses PaymentInfoType::setShippingMethod()
     * @uses PaymentInfoType::setProtectionEligibility()
     * @uses PaymentInfoType::setProtectionEligibilityType()
     * @uses PaymentInfoType::setReceiptReferenceNumber()
     * @uses PaymentInfoType::setPOSTransactionType()
     * @uses PaymentInfoType::setShipAmount()
     * @uses PaymentInfoType::setShipHandleAmount()
     * @uses PaymentInfoType::setShipDiscount()
     * @uses PaymentInfoType::setInsuranceAmount()
     * @uses PaymentInfoType::setSubject()
     * @uses PaymentInfoType::setStoreID()
     * @uses PaymentInfoType::setTerminalID()
     * @uses PaymentInfoType::setSellerDetails()
     * @uses PaymentInfoType::setPaymentRequestID()
     * @uses PaymentInfoType::setFMFDetails()
     * @uses PaymentInfoType::setEnhancedPaymentInfo()
     * @uses PaymentInfoType::setPaymentError()
     * @uses PaymentInfoType::setInstrumentDetails()
     * @uses PaymentInfoType::setOfferDetails()
     * @uses PaymentInfoType::setBinEligibility()
     * @uses PaymentInfoType::setSoftDescriptor()
     * @uses PaymentInfoType::setSoftDescriptorCity()
     * @param string $transactionID
     * @param string $ebayTransactionID
     * @param string $parentTransactionID
     * @param string $receiptID
     * @param string $transactionType
     * @param string $paymentType
     * @param string $refundSourceCodeType
     * @param string $expectedeCheckClearDate
     * @param string $paymentDate
     * @param \PayPal\StructType\BasicAmountType $grossAmount
     * @param \PayPal\StructType\BasicAmountType $feeAmount
     * @param \PayPal\StructType\BasicAmountType $financingFeeAmount
     * @param \PayPal\StructType\BasicAmountType $financingTotalCost
     * @param \PayPal\StructType\BasicAmountType $financingMonthlyPayment
     * @param string $financingTerm
     * @param string $isFinancing
     * @param \PayPal\StructType\BasicAmountType $settleAmount
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @param string $exchangeRate
     * @param string $paymentStatus
     * @param string $pendingReason
     * @param string $reasonCode
     * @param string $holdDecision
     * @param string $shippingMethod
     * @param string $protectionEligibility
     * @param string $protectionEligibilityType
     * @param string $receiptReferenceNumber
     * @param string $pOSTransactionType
     * @param string $shipAmount
     * @param string $shipHandleAmount
     * @param string $shipDiscount
     * @param string $insuranceAmount
     * @param string $subject
     * @param string $storeID
     * @param string $terminalID
     * @param \PayPal\StructType\SellerDetailsType $sellerDetails
     * @param string $paymentRequestID
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @param \PayPal\StructType\EnhancedPaymentInfoType $enhancedPaymentInfo
     * @param \PayPal\StructType\ErrorType $paymentError
     * @param \PayPal\StructType\InstrumentDetailsType $instrumentDetails
     * @param \PayPal\StructType\OfferDetailsType $offerDetails
     * @param string $binEligibility
     * @param string $softDescriptor
     * @param string $softDescriptorCity
     */
    public function __construct($transactionID = null, $ebayTransactionID = null, $parentTransactionID = null, $receiptID = null, $transactionType = null, $paymentType = null, $refundSourceCodeType = null, $expectedeCheckClearDate = null, $paymentDate = null, \PayPal\StructType\BasicAmountType $grossAmount = null, \PayPal\StructType\BasicAmountType $feeAmount = null, \PayPal\StructType\BasicAmountType $financingFeeAmount = null, \PayPal\StructType\BasicAmountType $financingTotalCost = null, \PayPal\StructType\BasicAmountType $financingMonthlyPayment = null, $financingTerm = null, $isFinancing = null, \PayPal\StructType\BasicAmountType $settleAmount = null, \PayPal\StructType\BasicAmountType $taxAmount = null, $exchangeRate = null, $paymentStatus = null, $pendingReason = null, $reasonCode = null, $holdDecision = null, $shippingMethod = null, $protectionEligibility = null, $protectionEligibilityType = null, $receiptReferenceNumber = null, $pOSTransactionType = null, $shipAmount = null, $shipHandleAmount = null, $shipDiscount = null, $insuranceAmount = null, $subject = null, $storeID = null, $terminalID = null, \PayPal\StructType\SellerDetailsType $sellerDetails = null, $paymentRequestID = null, \PayPal\StructType\FMFDetailsType $fMFDetails = null, \PayPal\StructType\EnhancedPaymentInfoType $enhancedPaymentInfo = null, \PayPal\StructType\ErrorType $paymentError = null, \PayPal\StructType\InstrumentDetailsType $instrumentDetails = null, \PayPal\StructType\OfferDetailsType $offerDetails = null, $binEligibility = null, $softDescriptor = null, $softDescriptorCity = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setEbayTransactionID($ebayTransactionID)
            ->setParentTransactionID($parentTransactionID)
            ->setReceiptID($receiptID)
            ->setTransactionType($transactionType)
            ->setPaymentType($paymentType)
            ->setRefundSourceCodeType($refundSourceCodeType)
            ->setExpectedeCheckClearDate($expectedeCheckClearDate)
            ->setPaymentDate($paymentDate)
            ->setGrossAmount($grossAmount)
            ->setFeeAmount($feeAmount)
            ->setFinancingFeeAmount($financingFeeAmount)
            ->setFinancingTotalCost($financingTotalCost)
            ->setFinancingMonthlyPayment($financingMonthlyPayment)
            ->setFinancingTerm($financingTerm)
            ->setIsFinancing($isFinancing)
            ->setSettleAmount($settleAmount)
            ->setTaxAmount($taxAmount)
            ->setExchangeRate($exchangeRate)
            ->setPaymentStatus($paymentStatus)
            ->setPendingReason($pendingReason)
            ->setReasonCode($reasonCode)
            ->setHoldDecision($holdDecision)
            ->setShippingMethod($shippingMethod)
            ->setProtectionEligibility($protectionEligibility)
            ->setProtectionEligibilityType($protectionEligibilityType)
            ->setReceiptReferenceNumber($receiptReferenceNumber)
            ->setPOSTransactionType($pOSTransactionType)
            ->setShipAmount($shipAmount)
            ->setShipHandleAmount($shipHandleAmount)
            ->setShipDiscount($shipDiscount)
            ->setInsuranceAmount($insuranceAmount)
            ->setSubject($subject)
            ->setStoreID($storeID)
            ->setTerminalID($terminalID)
            ->setSellerDetails($sellerDetails)
            ->setPaymentRequestID($paymentRequestID)
            ->setFMFDetails($fMFDetails)
            ->setEnhancedPaymentInfo($enhancedPaymentInfo)
            ->setPaymentError($paymentError)
            ->setInstrumentDetails($instrumentDetails)
            ->setOfferDetails($offerDetails)
            ->setBinEligibility($binEligibility)
            ->setSoftDescriptor($softDescriptor)
            ->setSoftDescriptorCity($softDescriptorCity);
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get EbayTransactionID value
     * @return string|null
     */
    public function getEbayTransactionID()
    {
        return $this->EbayTransactionID;
    }
    /**
     * Set EbayTransactionID value
     * @param string $ebayTransactionID
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setEbayTransactionID($ebayTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($ebayTransactionID) && !is_string($ebayTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ebayTransactionID)), __LINE__);
        }
        $this->EbayTransactionID = $ebayTransactionID;
        return $this;
    }
    /**
     * Get ParentTransactionID value
     * @return string|null
     */
    public function getParentTransactionID()
    {
        return $this->ParentTransactionID;
    }
    /**
     * Set ParentTransactionID value
     * @param string $parentTransactionID
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setParentTransactionID($parentTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($parentTransactionID) && !is_string($parentTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentTransactionID)), __LINE__);
        }
        $this->ParentTransactionID = $parentTransactionID;
        return $this;
    }
    /**
     * Get ReceiptID value
     * @return string|null
     */
    public function getReceiptID()
    {
        return $this->ReceiptID;
    }
    /**
     * Set ReceiptID value
     * @param string $receiptID
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setReceiptID($receiptID = null)
    {
        // validation for constraint: string
        if (!is_null($receiptID) && !is_string($receiptID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiptID)), __LINE__);
        }
        $this->ReceiptID = $receiptID;
        return $this;
    }
    /**
     * Get TransactionType value
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @uses \PayPal\EnumType\PaymentTransactionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentTransactionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionType
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setTransactionType($transactionType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentTransactionCodeType::valueIsValid($transactionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transactionType, implode(', ', \PayPal\EnumType\PaymentTransactionCodeType::getValidValues())), __LINE__);
        }
        $this->TransactionType = $transactionType;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \PayPal\EnumType\PaymentCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentCodeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \PayPal\EnumType\PaymentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get RefundSourceCodeType value
     * @return string|null
     */
    public function getRefundSourceCodeType()
    {
        return $this->RefundSourceCodeType;
    }
    /**
     * Set RefundSourceCodeType value
     * @uses \PayPal\EnumType\RefundSourceCodeType::valueIsValid()
     * @uses \PayPal\EnumType\RefundSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundSourceCodeType
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setRefundSourceCodeType($refundSourceCodeType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RefundSourceCodeType::valueIsValid($refundSourceCodeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refundSourceCodeType, implode(', ', \PayPal\EnumType\RefundSourceCodeType::getValidValues())), __LINE__);
        }
        $this->RefundSourceCodeType = $refundSourceCodeType;
        return $this;
    }
    /**
     * Get ExpectedeCheckClearDate value
     * @return string|null
     */
    public function getExpectedeCheckClearDate()
    {
        return $this->ExpectedeCheckClearDate;
    }
    /**
     * Set ExpectedeCheckClearDate value
     * @param string $expectedeCheckClearDate
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setExpectedeCheckClearDate($expectedeCheckClearDate = null)
    {
        // validation for constraint: string
        if (!is_null($expectedeCheckClearDate) && !is_string($expectedeCheckClearDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedeCheckClearDate)), __LINE__);
        }
        $this->ExpectedeCheckClearDate = $expectedeCheckClearDate;
        return $this;
    }
    /**
     * Get PaymentDate value
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     * @param string $paymentDate
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPaymentDate($paymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentDate)), __LINE__);
        }
        $this->PaymentDate = $paymentDate;
        return $this;
    }
    /**
     * Get GrossAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }
    /**
     * Set GrossAmount value
     * @param \PayPal\StructType\BasicAmountType $grossAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setGrossAmount(\PayPal\StructType\BasicAmountType $grossAmount = null)
    {
        $this->GrossAmount = $grossAmount;
        return $this;
    }
    /**
     * Get FeeAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }
    /**
     * Set FeeAmount value
     * @param \PayPal\StructType\BasicAmountType $feeAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setFeeAmount(\PayPal\StructType\BasicAmountType $feeAmount = null)
    {
        $this->FeeAmount = $feeAmount;
        return $this;
    }
    /**
     * Get FinancingFeeAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFinancingFeeAmount()
    {
        return $this->FinancingFeeAmount;
    }
    /**
     * Set FinancingFeeAmount value
     * @param \PayPal\StructType\BasicAmountType $financingFeeAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setFinancingFeeAmount(\PayPal\StructType\BasicAmountType $financingFeeAmount = null)
    {
        $this->FinancingFeeAmount = $financingFeeAmount;
        return $this;
    }
    /**
     * Get FinancingTotalCost value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFinancingTotalCost()
    {
        return $this->FinancingTotalCost;
    }
    /**
     * Set FinancingTotalCost value
     * @param \PayPal\StructType\BasicAmountType $financingTotalCost
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setFinancingTotalCost(\PayPal\StructType\BasicAmountType $financingTotalCost = null)
    {
        $this->FinancingTotalCost = $financingTotalCost;
        return $this;
    }
    /**
     * Get FinancingMonthlyPayment value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFinancingMonthlyPayment()
    {
        return $this->FinancingMonthlyPayment;
    }
    /**
     * Set FinancingMonthlyPayment value
     * @param \PayPal\StructType\BasicAmountType $financingMonthlyPayment
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setFinancingMonthlyPayment(\PayPal\StructType\BasicAmountType $financingMonthlyPayment = null)
    {
        $this->FinancingMonthlyPayment = $financingMonthlyPayment;
        return $this;
    }
    /**
     * Get FinancingTerm value
     * @return string|null
     */
    public function getFinancingTerm()
    {
        return $this->FinancingTerm;
    }
    /**
     * Set FinancingTerm value
     * @param string $financingTerm
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setFinancingTerm($financingTerm = null)
    {
        // validation for constraint: string
        if (!is_null($financingTerm) && !is_string($financingTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($financingTerm)), __LINE__);
        }
        $this->FinancingTerm = $financingTerm;
        return $this;
    }
    /**
     * Get IsFinancing value
     * @return string|null
     */
    public function getIsFinancing()
    {
        return $this->IsFinancing;
    }
    /**
     * Set IsFinancing value
     * @param string $isFinancing
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setIsFinancing($isFinancing = null)
    {
        // validation for constraint: string
        if (!is_null($isFinancing) && !is_string($isFinancing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isFinancing)), __LINE__);
        }
        $this->IsFinancing = $isFinancing;
        return $this;
    }
    /**
     * Get SettleAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getSettleAmount()
    {
        return $this->SettleAmount;
    }
    /**
     * Set SettleAmount value
     * @param \PayPal\StructType\BasicAmountType $settleAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setSettleAmount(\PayPal\StructType\BasicAmountType $settleAmount = null)
    {
        $this->SettleAmount = $settleAmount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setTaxAmount(\PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get ExchangeRate value
     * @return string|null
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }
    /**
     * Set ExchangeRate value
     * @param string $exchangeRate
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setExchangeRate($exchangeRate = null)
    {
        // validation for constraint: string
        if (!is_null($exchangeRate) && !is_string($exchangeRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exchangeRate)), __LINE__);
        }
        $this->ExchangeRate = $exchangeRate;
        return $this;
    }
    /**
     * Get PaymentStatus value
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }
    /**
     * Set PaymentStatus value
     * @uses \PayPal\EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentStatus
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPaymentStatus($paymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentStatusCodeType::valueIsValid($paymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentStatus, implode(', ', \PayPal\EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * Get PendingReason value
     * @return string|null
     */
    public function getPendingReason()
    {
        return $this->PendingReason;
    }
    /**
     * Set PendingReason value
     * @uses \PayPal\EnumType\PendingStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PendingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pendingReason
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPendingReason($pendingReason = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PendingStatusCodeType::valueIsValid($pendingReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pendingReason, implode(', ', \PayPal\EnumType\PendingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PendingReason = $pendingReason;
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @uses \PayPal\EnumType\ReversalReasonCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ReversalReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reasonCode
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setReasonCode($reasonCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ReversalReasonCodeType::valueIsValid($reasonCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reasonCode, implode(', ', \PayPal\EnumType\ReversalReasonCodeType::getValidValues())), __LINE__);
        }
        $this->ReasonCode = $reasonCode;
        return $this;
    }
    /**
     * Get HoldDecision value
     * @return string|null
     */
    public function getHoldDecision()
    {
        return $this->HoldDecision;
    }
    /**
     * Set HoldDecision value
     * @param string $holdDecision
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setHoldDecision($holdDecision = null)
    {
        // validation for constraint: string
        if (!is_null($holdDecision) && !is_string($holdDecision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holdDecision)), __LINE__);
        }
        $this->HoldDecision = $holdDecision;
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
     * @param string $shippingMethod
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setShippingMethod($shippingMethod = null)
    {
        // validation for constraint: string
        if (!is_null($shippingMethod) && !is_string($shippingMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingMethod)), __LINE__);
        }
        $this->ShippingMethod = $shippingMethod;
        return $this;
    }
    /**
     * Get ProtectionEligibility value
     * @return string|null
     */
    public function getProtectionEligibility()
    {
        return $this->ProtectionEligibility;
    }
    /**
     * Set ProtectionEligibility value
     * @param string $protectionEligibility
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setProtectionEligibility($protectionEligibility = null)
    {
        // validation for constraint: string
        if (!is_null($protectionEligibility) && !is_string($protectionEligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protectionEligibility)), __LINE__);
        }
        $this->ProtectionEligibility = $protectionEligibility;
        return $this;
    }
    /**
     * Get ProtectionEligibilityType value
     * @return string|null
     */
    public function getProtectionEligibilityType()
    {
        return $this->ProtectionEligibilityType;
    }
    /**
     * Set ProtectionEligibilityType value
     * @param string $protectionEligibilityType
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setProtectionEligibilityType($protectionEligibilityType = null)
    {
        // validation for constraint: string
        if (!is_null($protectionEligibilityType) && !is_string($protectionEligibilityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protectionEligibilityType)), __LINE__);
        }
        $this->ProtectionEligibilityType = $protectionEligibilityType;
        return $this;
    }
    /**
     * Get ReceiptReferenceNumber value
     * @return string|null
     */
    public function getReceiptReferenceNumber()
    {
        return $this->ReceiptReferenceNumber;
    }
    /**
     * Set ReceiptReferenceNumber value
     * @param string $receiptReferenceNumber
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setReceiptReferenceNumber($receiptReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($receiptReferenceNumber) && !is_string($receiptReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiptReferenceNumber)), __LINE__);
        }
        $this->ReceiptReferenceNumber = $receiptReferenceNumber;
        return $this;
    }
    /**
     * Get POSTransactionType value
     * @return string|null
     */
    public function getPOSTransactionType()
    {
        return $this->POSTransactionType;
    }
    /**
     * Set POSTransactionType value
     * @uses \PayPal\EnumType\POSTransactionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\POSTransactionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pOSTransactionType
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPOSTransactionType($pOSTransactionType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\POSTransactionCodeType::valueIsValid($pOSTransactionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pOSTransactionType, implode(', ', \PayPal\EnumType\POSTransactionCodeType::getValidValues())), __LINE__);
        }
        $this->POSTransactionType = $pOSTransactionType;
        return $this;
    }
    /**
     * Get ShipAmount value
     * @return string|null
     */
    public function getShipAmount()
    {
        return $this->ShipAmount;
    }
    /**
     * Set ShipAmount value
     * @param string $shipAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setShipAmount($shipAmount = null)
    {
        // validation for constraint: string
        if (!is_null($shipAmount) && !is_string($shipAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipAmount)), __LINE__);
        }
        $this->ShipAmount = $shipAmount;
        return $this;
    }
    /**
     * Get ShipHandleAmount value
     * @return string|null
     */
    public function getShipHandleAmount()
    {
        return $this->ShipHandleAmount;
    }
    /**
     * Set ShipHandleAmount value
     * @param string $shipHandleAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setShipHandleAmount($shipHandleAmount = null)
    {
        // validation for constraint: string
        if (!is_null($shipHandleAmount) && !is_string($shipHandleAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipHandleAmount)), __LINE__);
        }
        $this->ShipHandleAmount = $shipHandleAmount;
        return $this;
    }
    /**
     * Get ShipDiscount value
     * @return string|null
     */
    public function getShipDiscount()
    {
        return $this->ShipDiscount;
    }
    /**
     * Set ShipDiscount value
     * @param string $shipDiscount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setShipDiscount($shipDiscount = null)
    {
        // validation for constraint: string
        if (!is_null($shipDiscount) && !is_string($shipDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDiscount)), __LINE__);
        }
        $this->ShipDiscount = $shipDiscount;
        return $this;
    }
    /**
     * Get InsuranceAmount value
     * @return string|null
     */
    public function getInsuranceAmount()
    {
        return $this->InsuranceAmount;
    }
    /**
     * Set InsuranceAmount value
     * @param string $insuranceAmount
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setInsuranceAmount($insuranceAmount = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceAmount) && !is_string($insuranceAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceAmount)), __LINE__);
        }
        $this->InsuranceAmount = $insuranceAmount;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get StoreID value
     * @return string|null
     */
    public function getStoreID()
    {
        return $this->StoreID;
    }
    /**
     * Set StoreID value
     * @param string $storeID
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setStoreID($storeID = null)
    {
        // validation for constraint: string
        if (!is_null($storeID) && !is_string($storeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeID)), __LINE__);
        }
        $this->StoreID = $storeID;
        return $this;
    }
    /**
     * Get TerminalID value
     * @return string|null
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }
    /**
     * Set TerminalID value
     * @param string $terminalID
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setTerminalID($terminalID = null)
    {
        // validation for constraint: string
        if (!is_null($terminalID) && !is_string($terminalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalID)), __LINE__);
        }
        $this->TerminalID = $terminalID;
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
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setSellerDetails(\PayPal\StructType\SellerDetailsType $sellerDetails = null)
    {
        $this->SellerDetails = $sellerDetails;
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
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPaymentRequestID($paymentRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($paymentRequestID) && !is_string($paymentRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentRequestID)), __LINE__);
        }
        $this->PaymentRequestID = $paymentRequestID;
        return $this;
    }
    /**
     * Get FMFDetails value
     * @return \PayPal\StructType\FMFDetailsType|null
     */
    public function getFMFDetails()
    {
        return $this->FMFDetails;
    }
    /**
     * Set FMFDetails value
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setFMFDetails(\PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this->FMFDetails = $fMFDetails;
        return $this;
    }
    /**
     * Get EnhancedPaymentInfo value
     * @return \PayPal\StructType\EnhancedPaymentInfoType|null
     */
    public function getEnhancedPaymentInfo()
    {
        return $this->EnhancedPaymentInfo;
    }
    /**
     * Set EnhancedPaymentInfo value
     * @param \PayPal\StructType\EnhancedPaymentInfoType $enhancedPaymentInfo
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setEnhancedPaymentInfo(\PayPal\StructType\EnhancedPaymentInfoType $enhancedPaymentInfo = null)
    {
        $this->EnhancedPaymentInfo = $enhancedPaymentInfo;
        return $this;
    }
    /**
     * Get PaymentError value
     * @return \PayPal\StructType\ErrorType|null
     */
    public function getPaymentError()
    {
        return $this->PaymentError;
    }
    /**
     * Set PaymentError value
     * @param \PayPal\StructType\ErrorType $paymentError
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setPaymentError(\PayPal\StructType\ErrorType $paymentError = null)
    {
        $this->PaymentError = $paymentError;
        return $this;
    }
    /**
     * Get InstrumentDetails value
     * @return \PayPal\StructType\InstrumentDetailsType|null
     */
    public function getInstrumentDetails()
    {
        return $this->InstrumentDetails;
    }
    /**
     * Set InstrumentDetails value
     * @param \PayPal\StructType\InstrumentDetailsType $instrumentDetails
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setInstrumentDetails(\PayPal\StructType\InstrumentDetailsType $instrumentDetails = null)
    {
        $this->InstrumentDetails = $instrumentDetails;
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
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setOfferDetails(\PayPal\StructType\OfferDetailsType $offerDetails = null)
    {
        $this->OfferDetails = $offerDetails;
        return $this;
    }
    /**
     * Get BinEligibility value
     * @return string|null
     */
    public function getBinEligibility()
    {
        return $this->BinEligibility;
    }
    /**
     * Set BinEligibility value
     * @param string $binEligibility
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setBinEligibility($binEligibility = null)
    {
        // validation for constraint: string
        if (!is_null($binEligibility) && !is_string($binEligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($binEligibility)), __LINE__);
        }
        $this->BinEligibility = $binEligibility;
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
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setSoftDescriptor($softDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptor) && !is_string($softDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softDescriptor)), __LINE__);
        }
        $this->SoftDescriptor = $softDescriptor;
        return $this;
    }
    /**
     * Get SoftDescriptorCity value
     * @return string|null
     */
    public function getSoftDescriptorCity()
    {
        return $this->SoftDescriptorCity;
    }
    /**
     * Set SoftDescriptorCity value
     * @param string $softDescriptorCity
     * @return \PayPal\StructType\PaymentInfoType
     */
    public function setSoftDescriptorCity($softDescriptorCity = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptorCity) && !is_string($softDescriptorCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($softDescriptorCity)), __LINE__);
        }
        $this->SoftDescriptorCity = $softDescriptorCity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentInfoType
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
