<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetExpressCheckoutRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetExpressCheckoutRequestDetailsType extends AbstractStructBase
{
    /**
     * The OrderTotal
     * Meta informations extracted from the WSDL
     * - documentation: The total cost of the order to the customer. If shipping cost and tax charges are known, include them in OrderTotal; if not, OrderTotal should be the current sub-total of the order. You must set the currencyID attribute to one of the
     * three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $OrderTotal;
    /**
     * The ReturnURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Required Character length
     * and limitations: no limit.
     * @var string
     */
    public $ReturnURL;
    /**
     * The CancelURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Required Character length
     * and limitations: no limit
     * @var string
     */
    public $CancelURL;
    /**
     * The TrackingImageURL
     * Meta informations extracted from the WSDL
     * - documentation: Tracking URL for ebay. Required Character length and limitations: no limit
     * - minOccurs: 0
     * @var string
     */
    public $TrackingImageURL;
    /**
     * The giropaySuccessURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after paying with giropay online. Optional Character length and limitations: no limit.
     * - minOccurs: 0
     * @var string
     */
    public $giropaySuccessURL;
    /**
     * The giropayCancelURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer's browser is returned after fail to pay with giropay online. Optional Character length and limitations: no limit.
     * - minOccurs: 0
     * @var string
     */
    public $giropayCancelURL;
    /**
     * The BanktxnPendingURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to which the customer's browser can be returned in the mEFT done page. Optional Character length and limitations: no limit.
     * - minOccurs: 0
     * @var string
     */
    public $BanktxnPendingURL;
    /**
     * The Token
     * Meta informations extracted from the WSDL
     * - documentation: On your first invocation of SetExpressCheckoutRequest, the value of this token is returned by SetExpressCheckoutResponse. Optional Include this element and its value only if you want to modify an existing checkout session with
     * another invocation of SetExpressCheckoutRequest; for example, if you want the customer to edit his shipping address on PayPal. Character length and limitations: 20 single-byte characters
     * - minOccurs: 0
     * @var string
     */
    public $Token;
    /**
     * The MaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: The expected maximum total amount of the complete order, including shipping cost and tax charges. Optional You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
     * Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $MaxAmount;
    /**
     * The OrderDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $OrderDescription;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - documentation: A free-form field for your own use, such as a tracking number or other value you want PayPal to return on GetExpressCheckoutDetailsResponse and DoExpressCheckoutPaymentResponse. Optional Character length and limitations: 256
     * single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The InvoiceID
     * Meta informations extracted from the WSDL
     * - documentation: Your own unique invoice or tracking number. PayPal returns this value to you on DoExpressCheckoutPaymentResponse. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The ReqConfirmShipping
     * Meta informations extracted from the WSDL
     * - documentation: The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Any value other than 1 indicates that the customer's shipping address on file with PayPal need NOT be a confirmed
     * address. Setting this element overrides the setting you have specified in the recipient's Merchant Account Profile. Optional Character length and limitations: One single-byte numeric character.
     * - minOccurs: 0
     * @var string
     */
    public $ReqConfirmShipping;
    /**
     * The ReqBillingAddress
     * Meta informations extracted from the WSDL
     * - documentation: The value 1 indicates that you require that the customer's billing address on file. Setting this element overrides the setting you have specified in Admin. Optional Character length and limitations: One single-byte numeric character.
     * - minOccurs: 0
     * @var string
     */
    public $ReqBillingAddress;
    /**
     * The BillingAddress
     * Meta informations extracted from the WSDL
     * - documentation: The billing address for the buyer. Optional If you include the BillingAddress element, the AddressType elements are required: Name Street1 CityName CountryCode Do not set set the CountryName element.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $BillingAddress;
    /**
     * The NoShipping
     * Meta informations extracted from the WSDL
     * - documentation: The value 1 indicates that on the PayPal pages, no shipping address fields should be displayed whatsoever. Optional Character length and limitations: Four single-byte numeric characters.
     * - minOccurs: 0
     * @var string
     */
    public $NoShipping;
    /**
     * The AddressOverride
     * Meta informations extracted from the WSDL
     * - documentation: The value 1 indicates that the PayPal pages should display the shipping address set by you in the Address element on this SetExpressCheckoutRequest, not the shipping address on file with PayPal for this customer. Displaying the
     * PayPal street address on file does not allow the customer to edit that address. Optional Character length and limitations: Four single-byte numeric characters.
     * - minOccurs: 0
     * @var string
     */
    public $AddressOverride;
    /**
     * The LocaleCode
     * Meta informations extracted from the WSDL
     * - documentation: Locale of pages displayed by PayPal during Express Checkout. Optional Character length and limitations: Five single-byte alphabetic characters, upper- or lowercase. Allowable values: AU or en_AUDE or de_DEFR or fr_FRGB or en_GBIT or
     * it_ITJP or ja_JPUS or en_US
     * - minOccurs: 0
     * @var string
     */
    public $LocaleCode;
    /**
     * The PageStyle
     * Meta informations extracted from the WSDL
     * - documentation: Sets the Custom Payment Page Style for payment pages associated with this button/link. PageStyle corresponds to the HTML variable page_style for customizing payment pages. The value is the same as the Page Style Name you chose when
     * adding or editing the page style from the Profile subtab of the My Account tab of your PayPal account. Optional Character length and limitations: 30 single-byte alphabetic characters.
     * - minOccurs: 0
     * @var string
     */
    public $PageStyle;
    /**
     * The cpp_header_image
     * Meta informations extracted from the WSDL
     * - documentation: A URL for the image you want to appear at the top left of the payment page. The image has a maximum size of 750 pixels wide by 90 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server.
     * Optional Character length and limitations: 127
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_image;
    /**
     * The cpp_header_border_color
     * Meta informations extracted from the WSDL
     * - documentation: Sets the border color around the header of the payment page. The border is a 2-pixel perimeter around the header space, which is 750 pixels wide by 90 pixels high. Optional Character length and limitations: Six character HTML
     * hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_border_color;
    /**
     * The cpp_header_back_color
     * Meta informations extracted from the WSDL
     * - documentation: Sets the background color for the header of the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_header_back_color;
    /**
     * The cpp_payflow_color
     * Meta informations extracted from the WSDL
     * - documentation: Sets the background color for the payment page. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_payflow_color;
    /**
     * The cpp_cart_border_color
     * Meta informations extracted from the WSDL
     * - documentation: Sets the cart gradient color for the Mini Cart on 1X flow. Optional Character length and limitation: Six character HTML hexadecimal color code in ASCII
     * - minOccurs: 0
     * @var string
     */
    public $cpp_cart_border_color;
    /**
     * The cpp_logo_image
     * Meta informations extracted from the WSDL
     * - documentation: A URL for the image you want to appear above the mini-cart. The image has a maximum size of 190 pixels wide by 60 pixels high. PayPal recommends that you provide an image that is stored on a secure (https) server. Optional Character
     * length and limitations: 127
     * - minOccurs: 0
     * @var string
     */
    public $cpp_logo_image;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Customer's shipping address. Optional If you include a shipping address and set the AddressOverride element on the request, PayPal returns this same address in GetExpressCheckoutDetailsResponse.
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $Address;
    /**
     * The PaymentAction
     * Meta informations extracted from the WSDL
     * - documentation: How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization
     * subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale or Order on SetExpressCheckoutRequest and then change
     * PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
     * - minOccurs: 0
     * @var string
     */
    public $PaymentAction;
    /**
     * The SolutionType
     * Meta informations extracted from the WSDL
     * - documentation: This will indicate which flow you are choosing (expresschecheckout or expresscheckout optional) Optional None Sole indicates that you are in the ExpressO flow Mark indicates that you are in the old express flow.
     * - minOccurs: 0
     * @var string
     */
    public $SolutionType;
    /**
     * The LandingPage
     * Meta informations extracted from the WSDL
     * - documentation: This indicates Which page to display for ExpressO (Billing or Login) Optional None Billing indicates that you are not a paypal account holder Login indicates that you are a paypal account holder
     * - minOccurs: 0
     * @var string
     */
    public $LandingPage;
    /**
     * The BuyerEmail
     * Meta informations extracted from the WSDL
     * - documentation: Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the PayPal membership sign-up portion of the PayPal login page. Optional Character length and limit: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmail;
    /**
     * The ChannelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ChannelType;
    /**
     * The BillingAgreementDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingAgreementDetailsType[]
     */
    public $BillingAgreementDetails;
    /**
     * The PromoCodes
     * Meta informations extracted from the WSDL
     * - documentation: Promo Code Optional List of promo codes supplied by merchant. These promo codes enable the Merchant Services Promotion Financing feature.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PromoCodes;
    /**
     * The PayPalCheckOutBtnType
     * Meta informations extracted from the WSDL
     * - documentation: Default Funding option for PayLater Checkout button.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PayPalCheckOutBtnType;
    /**
     * The ProductCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductCategory;
    /**
     * The ShippingMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingMethod;
    /**
     * The ProfileAddressChangeDate
     * Meta informations extracted from the WSDL
     * - documentation: Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileAddressChangeDate;
    /**
     * The AllowNote
     * Meta informations extracted from the WSDL
     * - documentation: The value 1 indicates that the customer may enter a note to the merchant on the PayPal page during checkout. The note is returned in the GetExpressCheckoutDetails response and the DoExpressCheckoutPayment response. Optional Character
     * length and limitations: One single-byte numeric character. Allowable values: 0,1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowNote;
    /**
     * The FundingSourceDetails
     * Meta informations extracted from the WSDL
     * - documentation: Funding source preferences.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FundingSourceDetailsType
     */
    public $FundingSourceDetails;
    /**
     * The BrandName
     * Meta informations extracted from the WSDL
     * - documentation: The label that needs to be displayed on the cancel links in the PayPal hosted checkout pages. Optional Character length and limit: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BrandName;
    /**
     * The CallbackURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for PayPal to use to retrieve shipping, handling, insurance, and tax details from your website. Optional Character length and limitations: 2048 characters.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallbackURL;
    /**
     * The EnhancedCheckoutData
     * Meta informations extracted from the WSDL
     * - documentation: Enhanced data for different industry segments. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\EnhancedCheckoutDataType
     */
    public $EnhancedCheckoutData;
    /**
     * The OtherPaymentMethods
     * Meta informations extracted from the WSDL
     * - documentation: List of other payment methods the user can pay with. Optional Refer to the OtherPaymentMethodDetailsType for more details.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\OtherPaymentMethodDetailsType[]
     */
    public $OtherPaymentMethods;
    /**
     * The BuyerDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details about the buyer's account. Optional Refer to the BuyerDetailsType for more details.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BuyerDetailsType
     */
    public $BuyerDetails;
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about the payment.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsType[]
     */
    public $PaymentDetails;
    /**
     * The FlatRateShippingOptions
     * Meta informations extracted from the WSDL
     * - documentation: List of Fall Back Shipping options provided by merchant.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\ShippingOptionType[]
     */
    public $FlatRateShippingOptions;
    /**
     * The CallbackTimeout
     * Meta informations extracted from the WSDL
     * - documentation: Information about the call back timeout override.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallbackTimeout;
    /**
     * The CallbackVersion
     * Meta informations extracted from the WSDL
     * - documentation: Information about the call back version.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallbackVersion;
    /**
     * The CustomerServiceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Customer service number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerServiceNumber;
    /**
     * The GiftMessageEnable
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift message enable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftMessageEnable;
    /**
     * The GiftReceiptEnable
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift receipt enable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftReceiptEnable;
    /**
     * The GiftWrapEnable
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift Wrap enable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftWrapEnable;
    /**
     * The GiftWrapName
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift Wrap name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftWrapName;
    /**
     * The GiftWrapAmount
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Gift Wrap amount.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $GiftWrapAmount;
    /**
     * The BuyerEmailOptInEnable
     * Meta informations extracted from the WSDL
     * - documentation: Information about the Buyer email option enable .
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmailOptInEnable;
    /**
     * The SurveyEnable
     * Meta informations extracted from the WSDL
     * - documentation: Information about the survey enable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SurveyEnable;
    /**
     * The SurveyQuestion
     * Meta informations extracted from the WSDL
     * - documentation: Information about the survey question.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SurveyQuestion;
    /**
     * The SurveyChoice
     * Meta informations extracted from the WSDL
     * - documentation: Information about the survey choices for survey question.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SurveyChoice;
    /**
     * The TotalType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TotalType;
    /**
     * The NoteToBuyer
     * Meta informations extracted from the WSDL
     * - documentation: Any message the seller would like to be displayed in the Mini Cart for UX.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NoteToBuyer;
    /**
     * The Incentives
     * Meta informations extracted from the WSDL
     * - documentation: Incentive Code Optional List of incentive codes supplied by ebay/merchant.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveInfoType[]
     */
    public $Incentives;
    /**
     * The ReqInstrumentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Merchant specified flag which indicates whether to return Funding Instrument Details in DoEC or not. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReqInstrumentDetails;
    /**
     * The ExternalRememberMeOptInDetails
     * Meta informations extracted from the WSDL
     * - documentation: This element contains information that allows the merchant to request to opt into external remember me on behalf of the buyer or to request login bypass using external remember me. Note the opt-in details are silently ignored if the
     * ExternalRememberMeID is present.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalRememberMeOptInDetailsType
     */
    public $ExternalRememberMeOptInDetails;
    /**
     * The FlowControlDetails
     * Meta informations extracted from the WSDL
     * - documentation: An optional set of values related to flow-specific details.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FlowControlDetailsType
     */
    public $FlowControlDetails;
    /**
     * The DisplayControlDetails
     * Meta informations extracted from the WSDL
     * - documentation: An optional set of values related to display-specific details.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\DisplayControlDetailsType
     */
    public $DisplayControlDetails;
    /**
     * The ExternalPartnerTrackingDetails
     * Meta informations extracted from the WSDL
     * - documentation: An optional set of values related to tracking for external partner.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalPartnerTrackingDetailsType
     */
    public $ExternalPartnerTrackingDetails;
    /**
     * The CoupledBuckets
     * Meta informations extracted from the WSDL
     * - documentation: Optional element that defines relationship between buckets
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \PayPal\StructType\CoupledBucketsType[]
     */
    public $CoupledBuckets;
    /**
     * Constructor method for SetExpressCheckoutRequestDetailsType
     * @uses SetExpressCheckoutRequestDetailsType::setOrderTotal()
     * @uses SetExpressCheckoutRequestDetailsType::setReturnURL()
     * @uses SetExpressCheckoutRequestDetailsType::setCancelURL()
     * @uses SetExpressCheckoutRequestDetailsType::setTrackingImageURL()
     * @uses SetExpressCheckoutRequestDetailsType::setGiropaySuccessURL()
     * @uses SetExpressCheckoutRequestDetailsType::setGiropayCancelURL()
     * @uses SetExpressCheckoutRequestDetailsType::setBanktxnPendingURL()
     * @uses SetExpressCheckoutRequestDetailsType::setToken()
     * @uses SetExpressCheckoutRequestDetailsType::setMaxAmount()
     * @uses SetExpressCheckoutRequestDetailsType::setOrderDescription()
     * @uses SetExpressCheckoutRequestDetailsType::setCustom()
     * @uses SetExpressCheckoutRequestDetailsType::setInvoiceID()
     * @uses SetExpressCheckoutRequestDetailsType::setReqConfirmShipping()
     * @uses SetExpressCheckoutRequestDetailsType::setReqBillingAddress()
     * @uses SetExpressCheckoutRequestDetailsType::setBillingAddress()
     * @uses SetExpressCheckoutRequestDetailsType::setNoShipping()
     * @uses SetExpressCheckoutRequestDetailsType::setAddressOverride()
     * @uses SetExpressCheckoutRequestDetailsType::setLocaleCode()
     * @uses SetExpressCheckoutRequestDetailsType::setPageStyle()
     * @uses SetExpressCheckoutRequestDetailsType::setCpp_header_image()
     * @uses SetExpressCheckoutRequestDetailsType::setCpp_header_border_color()
     * @uses SetExpressCheckoutRequestDetailsType::setCpp_header_back_color()
     * @uses SetExpressCheckoutRequestDetailsType::setCpp_payflow_color()
     * @uses SetExpressCheckoutRequestDetailsType::setCpp_cart_border_color()
     * @uses SetExpressCheckoutRequestDetailsType::setCpp_logo_image()
     * @uses SetExpressCheckoutRequestDetailsType::setAddress()
     * @uses SetExpressCheckoutRequestDetailsType::setPaymentAction()
     * @uses SetExpressCheckoutRequestDetailsType::setSolutionType()
     * @uses SetExpressCheckoutRequestDetailsType::setLandingPage()
     * @uses SetExpressCheckoutRequestDetailsType::setBuyerEmail()
     * @uses SetExpressCheckoutRequestDetailsType::setChannelType()
     * @uses SetExpressCheckoutRequestDetailsType::setBillingAgreementDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setPromoCodes()
     * @uses SetExpressCheckoutRequestDetailsType::setPayPalCheckOutBtnType()
     * @uses SetExpressCheckoutRequestDetailsType::setProductCategory()
     * @uses SetExpressCheckoutRequestDetailsType::setShippingMethod()
     * @uses SetExpressCheckoutRequestDetailsType::setProfileAddressChangeDate()
     * @uses SetExpressCheckoutRequestDetailsType::setAllowNote()
     * @uses SetExpressCheckoutRequestDetailsType::setFundingSourceDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setBrandName()
     * @uses SetExpressCheckoutRequestDetailsType::setCallbackURL()
     * @uses SetExpressCheckoutRequestDetailsType::setEnhancedCheckoutData()
     * @uses SetExpressCheckoutRequestDetailsType::setOtherPaymentMethods()
     * @uses SetExpressCheckoutRequestDetailsType::setBuyerDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setPaymentDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setFlatRateShippingOptions()
     * @uses SetExpressCheckoutRequestDetailsType::setCallbackTimeout()
     * @uses SetExpressCheckoutRequestDetailsType::setCallbackVersion()
     * @uses SetExpressCheckoutRequestDetailsType::setCustomerServiceNumber()
     * @uses SetExpressCheckoutRequestDetailsType::setGiftMessageEnable()
     * @uses SetExpressCheckoutRequestDetailsType::setGiftReceiptEnable()
     * @uses SetExpressCheckoutRequestDetailsType::setGiftWrapEnable()
     * @uses SetExpressCheckoutRequestDetailsType::setGiftWrapName()
     * @uses SetExpressCheckoutRequestDetailsType::setGiftWrapAmount()
     * @uses SetExpressCheckoutRequestDetailsType::setBuyerEmailOptInEnable()
     * @uses SetExpressCheckoutRequestDetailsType::setSurveyEnable()
     * @uses SetExpressCheckoutRequestDetailsType::setSurveyQuestion()
     * @uses SetExpressCheckoutRequestDetailsType::setSurveyChoice()
     * @uses SetExpressCheckoutRequestDetailsType::setTotalType()
     * @uses SetExpressCheckoutRequestDetailsType::setNoteToBuyer()
     * @uses SetExpressCheckoutRequestDetailsType::setIncentives()
     * @uses SetExpressCheckoutRequestDetailsType::setReqInstrumentDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setExternalRememberMeOptInDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setFlowControlDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setDisplayControlDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setExternalPartnerTrackingDetails()
     * @uses SetExpressCheckoutRequestDetailsType::setCoupledBuckets()
     * @param \PayPal\StructType\BasicAmountType $orderTotal
     * @param string $returnURL
     * @param string $cancelURL
     * @param string $trackingImageURL
     * @param string $giropaySuccessURL
     * @param string $giropayCancelURL
     * @param string $banktxnPendingURL
     * @param string $token
     * @param \PayPal\StructType\BasicAmountType $maxAmount
     * @param string $orderDescription
     * @param string $custom
     * @param string $invoiceID
     * @param string $reqConfirmShipping
     * @param string $reqBillingAddress
     * @param \PayPal\StructType\AddressType $billingAddress
     * @param string $noShipping
     * @param string $addressOverride
     * @param string $localeCode
     * @param string $pageStyle
     * @param string $cpp_header_image
     * @param string $cpp_header_border_color
     * @param string $cpp_header_back_color
     * @param string $cpp_payflow_color
     * @param string $cpp_cart_border_color
     * @param string $cpp_logo_image
     * @param \PayPal\StructType\AddressType $address
     * @param string $paymentAction
     * @param string $solutionType
     * @param string $landingPage
     * @param string $buyerEmail
     * @param string $channelType
     * @param \PayPal\StructType\BillingAgreementDetailsType[] $billingAgreementDetails
     * @param string[] $promoCodes
     * @param string $payPalCheckOutBtnType
     * @param string $productCategory
     * @param string $shippingMethod
     * @param string $profileAddressChangeDate
     * @param string $allowNote
     * @param \PayPal\StructType\FundingSourceDetailsType $fundingSourceDetails
     * @param string $brandName
     * @param string $callbackURL
     * @param \PayPal\StructType\EnhancedCheckoutDataType $enhancedCheckoutData
     * @param \PayPal\StructType\OtherPaymentMethodDetailsType[] $otherPaymentMethods
     * @param \PayPal\StructType\BuyerDetailsType $buyerDetails
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @param \PayPal\StructType\ShippingOptionType[] $flatRateShippingOptions
     * @param string $callbackTimeout
     * @param string $callbackVersion
     * @param string $customerServiceNumber
     * @param string $giftMessageEnable
     * @param string $giftReceiptEnable
     * @param string $giftWrapEnable
     * @param string $giftWrapName
     * @param \PayPal\StructType\BasicAmountType $giftWrapAmount
     * @param string $buyerEmailOptInEnable
     * @param string $surveyEnable
     * @param string $surveyQuestion
     * @param string[] $surveyChoice
     * @param string $totalType
     * @param string $noteToBuyer
     * @param \PayPal\StructType\IncentiveInfoType[] $incentives
     * @param string $reqInstrumentDetails
     * @param \PayPal\StructType\ExternalRememberMeOptInDetailsType $externalRememberMeOptInDetails
     * @param \PayPal\StructType\FlowControlDetailsType $flowControlDetails
     * @param \PayPal\StructType\DisplayControlDetailsType $displayControlDetails
     * @param \PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails
     * @param \PayPal\StructType\CoupledBucketsType[] $coupledBuckets
     */
    public function __construct(\PayPal\StructType\BasicAmountType $orderTotal = null, $returnURL = null, $cancelURL = null, $trackingImageURL = null, $giropaySuccessURL = null, $giropayCancelURL = null, $banktxnPendingURL = null, $token = null, \PayPal\StructType\BasicAmountType $maxAmount = null, $orderDescription = null, $custom = null, $invoiceID = null, $reqConfirmShipping = null, $reqBillingAddress = null, \PayPal\StructType\AddressType $billingAddress = null, $noShipping = null, $addressOverride = null, $localeCode = null, $pageStyle = null, $cpp_header_image = null, $cpp_header_border_color = null, $cpp_header_back_color = null, $cpp_payflow_color = null, $cpp_cart_border_color = null, $cpp_logo_image = null, \PayPal\StructType\AddressType $address = null, $paymentAction = null, $solutionType = null, $landingPage = null, $buyerEmail = null, $channelType = null, array $billingAgreementDetails = array(), array $promoCodes = array(), $payPalCheckOutBtnType = null, $productCategory = null, $shippingMethod = null, $profileAddressChangeDate = null, $allowNote = null, \PayPal\StructType\FundingSourceDetailsType $fundingSourceDetails = null, $brandName = null, $callbackURL = null, \PayPal\StructType\EnhancedCheckoutDataType $enhancedCheckoutData = null, array $otherPaymentMethods = array(), \PayPal\StructType\BuyerDetailsType $buyerDetails = null, array $paymentDetails = array(), array $flatRateShippingOptions = array(), $callbackTimeout = null, $callbackVersion = null, $customerServiceNumber = null, $giftMessageEnable = null, $giftReceiptEnable = null, $giftWrapEnable = null, $giftWrapName = null, \PayPal\StructType\BasicAmountType $giftWrapAmount = null, $buyerEmailOptInEnable = null, $surveyEnable = null, $surveyQuestion = null, array $surveyChoice = array(), $totalType = null, $noteToBuyer = null, array $incentives = array(), $reqInstrumentDetails = null, \PayPal\StructType\ExternalRememberMeOptInDetailsType $externalRememberMeOptInDetails = null, \PayPal\StructType\FlowControlDetailsType $flowControlDetails = null, \PayPal\StructType\DisplayControlDetailsType $displayControlDetails = null, \PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails = null, array $coupledBuckets = array())
    {
        $this
            ->setOrderTotal($orderTotal)
            ->setReturnURL($returnURL)
            ->setCancelURL($cancelURL)
            ->setTrackingImageURL($trackingImageURL)
            ->setGiropaySuccessURL($giropaySuccessURL)
            ->setGiropayCancelURL($giropayCancelURL)
            ->setBanktxnPendingURL($banktxnPendingURL)
            ->setToken($token)
            ->setMaxAmount($maxAmount)
            ->setOrderDescription($orderDescription)
            ->setCustom($custom)
            ->setInvoiceID($invoiceID)
            ->setReqConfirmShipping($reqConfirmShipping)
            ->setReqBillingAddress($reqBillingAddress)
            ->setBillingAddress($billingAddress)
            ->setNoShipping($noShipping)
            ->setAddressOverride($addressOverride)
            ->setLocaleCode($localeCode)
            ->setPageStyle($pageStyle)
            ->setCpp_header_image($cpp_header_image)
            ->setCpp_header_border_color($cpp_header_border_color)
            ->setCpp_header_back_color($cpp_header_back_color)
            ->setCpp_payflow_color($cpp_payflow_color)
            ->setCpp_cart_border_color($cpp_cart_border_color)
            ->setCpp_logo_image($cpp_logo_image)
            ->setAddress($address)
            ->setPaymentAction($paymentAction)
            ->setSolutionType($solutionType)
            ->setLandingPage($landingPage)
            ->setBuyerEmail($buyerEmail)
            ->setChannelType($channelType)
            ->setBillingAgreementDetails($billingAgreementDetails)
            ->setPromoCodes($promoCodes)
            ->setPayPalCheckOutBtnType($payPalCheckOutBtnType)
            ->setProductCategory($productCategory)
            ->setShippingMethod($shippingMethod)
            ->setProfileAddressChangeDate($profileAddressChangeDate)
            ->setAllowNote($allowNote)
            ->setFundingSourceDetails($fundingSourceDetails)
            ->setBrandName($brandName)
            ->setCallbackURL($callbackURL)
            ->setEnhancedCheckoutData($enhancedCheckoutData)
            ->setOtherPaymentMethods($otherPaymentMethods)
            ->setBuyerDetails($buyerDetails)
            ->setPaymentDetails($paymentDetails)
            ->setFlatRateShippingOptions($flatRateShippingOptions)
            ->setCallbackTimeout($callbackTimeout)
            ->setCallbackVersion($callbackVersion)
            ->setCustomerServiceNumber($customerServiceNumber)
            ->setGiftMessageEnable($giftMessageEnable)
            ->setGiftReceiptEnable($giftReceiptEnable)
            ->setGiftWrapEnable($giftWrapEnable)
            ->setGiftWrapName($giftWrapName)
            ->setGiftWrapAmount($giftWrapAmount)
            ->setBuyerEmailOptInEnable($buyerEmailOptInEnable)
            ->setSurveyEnable($surveyEnable)
            ->setSurveyQuestion($surveyQuestion)
            ->setSurveyChoice($surveyChoice)
            ->setTotalType($totalType)
            ->setNoteToBuyer($noteToBuyer)
            ->setIncentives($incentives)
            ->setReqInstrumentDetails($reqInstrumentDetails)
            ->setExternalRememberMeOptInDetails($externalRememberMeOptInDetails)
            ->setFlowControlDetails($flowControlDetails)
            ->setDisplayControlDetails($displayControlDetails)
            ->setExternalPartnerTrackingDetails($externalPartnerTrackingDetails)
            ->setCoupledBuckets($coupledBuckets);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setOrderTotal(\PayPal\StructType\BasicAmountType $orderTotal = null)
    {
        $this->OrderTotal = $orderTotal;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
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
     * Get TrackingImageURL value
     * @return string|null
     */
    public function getTrackingImageURL()
    {
        return $this->TrackingImageURL;
    }
    /**
     * Set TrackingImageURL value
     * @param string $trackingImageURL
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setTrackingImageURL($trackingImageURL = null)
    {
        // validation for constraint: string
        if (!is_null($trackingImageURL) && !is_string($trackingImageURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingImageURL)), __LINE__);
        }
        $this->TrackingImageURL = $trackingImageURL;
        return $this;
    }
    /**
     * Get giropaySuccessURL value
     * @return string|null
     */
    public function getGiropaySuccessURL()
    {
        return $this->giropaySuccessURL;
    }
    /**
     * Set giropaySuccessURL value
     * @param string $giropaySuccessURL
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiropaySuccessURL($giropaySuccessURL = null)
    {
        // validation for constraint: string
        if (!is_null($giropaySuccessURL) && !is_string($giropaySuccessURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giropaySuccessURL)), __LINE__);
        }
        $this->giropaySuccessURL = $giropaySuccessURL;
        return $this;
    }
    /**
     * Get giropayCancelURL value
     * @return string|null
     */
    public function getGiropayCancelURL()
    {
        return $this->giropayCancelURL;
    }
    /**
     * Set giropayCancelURL value
     * @param string $giropayCancelURL
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiropayCancelURL($giropayCancelURL = null)
    {
        // validation for constraint: string
        if (!is_null($giropayCancelURL) && !is_string($giropayCancelURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giropayCancelURL)), __LINE__);
        }
        $this->giropayCancelURL = $giropayCancelURL;
        return $this;
    }
    /**
     * Get BanktxnPendingURL value
     * @return string|null
     */
    public function getBanktxnPendingURL()
    {
        return $this->BanktxnPendingURL;
    }
    /**
     * Set BanktxnPendingURL value
     * @param string $banktxnPendingURL
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBanktxnPendingURL($banktxnPendingURL = null)
    {
        // validation for constraint: string
        if (!is_null($banktxnPendingURL) && !is_string($banktxnPendingURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($banktxnPendingURL)), __LINE__);
        }
        $this->BanktxnPendingURL = $banktxnPendingURL;
        return $this;
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Get MaxAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getMaxAmount()
    {
        return $this->MaxAmount;
    }
    /**
     * Set MaxAmount value
     * @param \PayPal\StructType\BasicAmountType $maxAmount
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setMaxAmount(\PayPal\StructType\BasicAmountType $maxAmount = null)
    {
        $this->MaxAmount = $maxAmount;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setOrderDescription($orderDescription = null)
    {
        // validation for constraint: string
        if (!is_null($orderDescription) && !is_string($orderDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderDescription)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setInvoiceID($invoiceID = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
        return $this;
    }
    /**
     * Get ReqConfirmShipping value
     * @return string|null
     */
    public function getReqConfirmShipping()
    {
        return $this->ReqConfirmShipping;
    }
    /**
     * Set ReqConfirmShipping value
     * @param string $reqConfirmShipping
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setReqConfirmShipping($reqConfirmShipping = null)
    {
        // validation for constraint: string
        if (!is_null($reqConfirmShipping) && !is_string($reqConfirmShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqConfirmShipping)), __LINE__);
        }
        $this->ReqConfirmShipping = $reqConfirmShipping;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setReqBillingAddress($reqBillingAddress = null)
    {
        // validation for constraint: string
        if (!is_null($reqBillingAddress) && !is_string($reqBillingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqBillingAddress)), __LINE__);
        }
        $this->ReqBillingAddress = $reqBillingAddress;
        return $this;
    }
    /**
     * Get BillingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param \PayPal\StructType\AddressType $billingAddress
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBillingAddress(\PayPal\StructType\AddressType $billingAddress = null)
    {
        $this->BillingAddress = $billingAddress;
        return $this;
    }
    /**
     * Get NoShipping value
     * @return string|null
     */
    public function getNoShipping()
    {
        return $this->NoShipping;
    }
    /**
     * Set NoShipping value
     * @param string $noShipping
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setNoShipping($noShipping = null)
    {
        // validation for constraint: string
        if (!is_null($noShipping) && !is_string($noShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noShipping)), __LINE__);
        }
        $this->NoShipping = $noShipping;
        return $this;
    }
    /**
     * Get AddressOverride value
     * @return string|null
     */
    public function getAddressOverride()
    {
        return $this->AddressOverride;
    }
    /**
     * Set AddressOverride value
     * @param string $addressOverride
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setAddressOverride($addressOverride = null)
    {
        // validation for constraint: string
        if (!is_null($addressOverride) && !is_string($addressOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressOverride)), __LINE__);
        }
        $this->AddressOverride = $addressOverride;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setLocaleCode($localeCode = null)
    {
        // validation for constraint: string
        if (!is_null($localeCode) && !is_string($localeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localeCode)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setPageStyle($pageStyle = null)
    {
        // validation for constraint: string
        if (!is_null($pageStyle) && !is_string($pageStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageStyle)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCpp_header_image($cpp_header_image = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_header_image) && !is_string($cpp_header_image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cpp_header_image)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCpp_header_border_color($cpp_header_border_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_header_border_color) && !is_string($cpp_header_border_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cpp_header_border_color)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCpp_header_back_color($cpp_header_back_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_header_back_color) && !is_string($cpp_header_back_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cpp_header_back_color)), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCpp_payflow_color($cpp_payflow_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_payflow_color) && !is_string($cpp_payflow_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cpp_payflow_color)), __LINE__);
        }
        $this->cpp_payflow_color = $this->{'cpp-payflow-color'} = $cpp_payflow_color;
        return $this;
    }
    /**
     * Get cpp_cart_border_color value
     * @return string|null
     */
    public function getCpp_cart_border_color()
    {
        return $this->{'cpp-cart-border-color'};
    }
    /**
     * Set cpp_cart_border_color value
     * @param string $cpp_cart_border_color
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCpp_cart_border_color($cpp_cart_border_color = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_cart_border_color) && !is_string($cpp_cart_border_color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cpp_cart_border_color)), __LINE__);
        }
        $this->cpp_cart_border_color = $this->{'cpp-cart-border-color'} = $cpp_cart_border_color;
        return $this;
    }
    /**
     * Get cpp_logo_image value
     * @return string|null
     */
    public function getCpp_logo_image()
    {
        return $this->{'cpp-logo-image'};
    }
    /**
     * Set cpp_logo_image value
     * @param string $cpp_logo_image
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCpp_logo_image($cpp_logo_image = null)
    {
        // validation for constraint: string
        if (!is_null($cpp_logo_image) && !is_string($cpp_logo_image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cpp_logo_image)), __LINE__);
        }
        $this->cpp_logo_image = $this->{'cpp-logo-image'} = $cpp_logo_image;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setAddress(\PayPal\StructType\AddressType $address = null)
    {
        $this->Address = $address;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setPaymentAction($paymentAction = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentActionCodeType::valueIsValid($paymentAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentAction, implode(', ', \PayPal\EnumType\PaymentActionCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentAction = $paymentAction;
        return $this;
    }
    /**
     * Get SolutionType value
     * @return string|null
     */
    public function getSolutionType()
    {
        return $this->SolutionType;
    }
    /**
     * Set SolutionType value
     * @uses \PayPal\EnumType\SolutionTypeType::valueIsValid()
     * @uses \PayPal\EnumType\SolutionTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $solutionType
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setSolutionType($solutionType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SolutionTypeType::valueIsValid($solutionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $solutionType, implode(', ', \PayPal\EnumType\SolutionTypeType::getValidValues())), __LINE__);
        }
        $this->SolutionType = $solutionType;
        return $this;
    }
    /**
     * Get LandingPage value
     * @return string|null
     */
    public function getLandingPage()
    {
        return $this->LandingPage;
    }
    /**
     * Set LandingPage value
     * @uses \PayPal\EnumType\LandingPageType::valueIsValid()
     * @uses \PayPal\EnumType\LandingPageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $landingPage
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setLandingPage($landingPage = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\LandingPageType::valueIsValid($landingPage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $landingPage, implode(', ', \PayPal\EnumType\LandingPageType::getValidValues())), __LINE__);
        }
        $this->LandingPage = $landingPage;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBuyerEmail($buyerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmail) && !is_string($buyerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerEmail)), __LINE__);
        }
        $this->BuyerEmail = $buyerEmail;
        return $this;
    }
    /**
     * Get ChannelType value
     * @return string|null
     */
    public function getChannelType()
    {
        return $this->ChannelType;
    }
    /**
     * Set ChannelType value
     * @uses \PayPal\EnumType\ChannelType::valueIsValid()
     * @uses \PayPal\EnumType\ChannelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $channelType
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setChannelType($channelType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ChannelType::valueIsValid($channelType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $channelType, implode(', ', \PayPal\EnumType\ChannelType::getValidValues())), __LINE__);
        }
        $this->ChannelType = $channelType;
        return $this;
    }
    /**
     * Get BillingAgreementDetails value
     * @return \PayPal\StructType\BillingAgreementDetailsType[]|null
     */
    public function getBillingAgreementDetails()
    {
        return $this->BillingAgreementDetails;
    }
    /**
     * Set BillingAgreementDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BillingAgreementDetailsType[] $billingAgreementDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBillingAgreementDetails(array $billingAgreementDetails = array())
    {
        foreach ($billingAgreementDetails as $setExpressCheckoutRequestDetailsTypeBillingAgreementDetailsItem) {
            // validation for constraint: itemType
            if (!$setExpressCheckoutRequestDetailsTypeBillingAgreementDetailsItem instanceof \PayPal\StructType\BillingAgreementDetailsType) {
                throw new \InvalidArgumentException(sprintf('The BillingAgreementDetails property can only contain items of \PayPal\StructType\BillingAgreementDetailsType, "%s" given', is_object($setExpressCheckoutRequestDetailsTypeBillingAgreementDetailsItem) ? get_class($setExpressCheckoutRequestDetailsTypeBillingAgreementDetailsItem) : gettype($setExpressCheckoutRequestDetailsTypeBillingAgreementDetailsItem)), __LINE__);
            }
        }
        $this->BillingAgreementDetails = $billingAgreementDetails;
        return $this;
    }
    /**
     * Add item to BillingAgreementDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BillingAgreementDetailsType $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToBillingAgreementDetails(\PayPal\StructType\BillingAgreementDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\BillingAgreementDetailsType) {
            throw new \InvalidArgumentException(sprintf('The BillingAgreementDetails property can only contain items of \PayPal\StructType\BillingAgreementDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BillingAgreementDetails[] = $item;
        return $this;
    }
    /**
     * Get PromoCodes value
     * @return string[]|null
     */
    public function getPromoCodes()
    {
        return $this->PromoCodes;
    }
    /**
     * Set PromoCodes value
     * @throws \InvalidArgumentException
     * @param string[] $promoCodes
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setPromoCodes(array $promoCodes = array())
    {
        foreach ($promoCodes as $setExpressCheckoutRequestDetailsTypePromoCodesItem) {
            // validation for constraint: itemType
            if (!is_string($setExpressCheckoutRequestDetailsTypePromoCodesItem)) {
                throw new \InvalidArgumentException(sprintf('The PromoCodes property can only contain items of string, "%s" given', is_object($setExpressCheckoutRequestDetailsTypePromoCodesItem) ? get_class($setExpressCheckoutRequestDetailsTypePromoCodesItem) : gettype($setExpressCheckoutRequestDetailsTypePromoCodesItem)), __LINE__);
            }
        }
        $this->PromoCodes = $promoCodes;
        return $this;
    }
    /**
     * Add item to PromoCodes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToPromoCodes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PromoCodes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PromoCodes[] = $item;
        return $this;
    }
    /**
     * Get PayPalCheckOutBtnType value
     * @return string|null
     */
    public function getPayPalCheckOutBtnType()
    {
        return $this->PayPalCheckOutBtnType;
    }
    /**
     * Set PayPalCheckOutBtnType value
     * @param string $payPalCheckOutBtnType
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setPayPalCheckOutBtnType($payPalCheckOutBtnType = null)
    {
        // validation for constraint: string
        if (!is_null($payPalCheckOutBtnType) && !is_string($payPalCheckOutBtnType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPalCheckOutBtnType)), __LINE__);
        }
        $this->PayPalCheckOutBtnType = $payPalCheckOutBtnType;
        return $this;
    }
    /**
     * Get ProductCategory value
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->ProductCategory;
    }
    /**
     * Set ProductCategory value
     * @uses \PayPal\EnumType\ProductCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\ProductCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productCategory
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setProductCategory($productCategory = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ProductCategoryType::valueIsValid($productCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productCategory, implode(', ', \PayPal\EnumType\ProductCategoryType::getValidValues())), __LINE__);
        }
        $this->ProductCategory = $productCategory;
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setShippingMethod($shippingMethod = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingServiceCodeType::valueIsValid($shippingMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingMethod, implode(', ', \PayPal\EnumType\ShippingServiceCodeType::getValidValues())), __LINE__);
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
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setProfileAddressChangeDate($profileAddressChangeDate = null)
    {
        // validation for constraint: string
        if (!is_null($profileAddressChangeDate) && !is_string($profileAddressChangeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileAddressChangeDate)), __LINE__);
        }
        $this->ProfileAddressChangeDate = $profileAddressChangeDate;
        return $this;
    }
    /**
     * Get AllowNote value
     * @return string|null
     */
    public function getAllowNote()
    {
        return $this->AllowNote;
    }
    /**
     * Set AllowNote value
     * @param string $allowNote
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setAllowNote($allowNote = null)
    {
        // validation for constraint: string
        if (!is_null($allowNote) && !is_string($allowNote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allowNote)), __LINE__);
        }
        $this->AllowNote = $allowNote;
        return $this;
    }
    /**
     * Get FundingSourceDetails value
     * @return \PayPal\StructType\FundingSourceDetailsType|null
     */
    public function getFundingSourceDetails()
    {
        return $this->FundingSourceDetails;
    }
    /**
     * Set FundingSourceDetails value
     * @param \PayPal\StructType\FundingSourceDetailsType $fundingSourceDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setFundingSourceDetails(\PayPal\StructType\FundingSourceDetailsType $fundingSourceDetails = null)
    {
        $this->FundingSourceDetails = $fundingSourceDetails;
        return $this;
    }
    /**
     * Get BrandName value
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }
    /**
     * Set BrandName value
     * @param string $brandName
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        $this->BrandName = $brandName;
        return $this;
    }
    /**
     * Get CallbackURL value
     * @return string|null
     */
    public function getCallbackURL()
    {
        return $this->CallbackURL;
    }
    /**
     * Set CallbackURL value
     * @param string $callbackURL
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCallbackURL($callbackURL = null)
    {
        // validation for constraint: string
        if (!is_null($callbackURL) && !is_string($callbackURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callbackURL)), __LINE__);
        }
        $this->CallbackURL = $callbackURL;
        return $this;
    }
    /**
     * Get EnhancedCheckoutData value
     * @return \PayPal\StructType\EnhancedCheckoutDataType|null
     */
    public function getEnhancedCheckoutData()
    {
        return $this->EnhancedCheckoutData;
    }
    /**
     * Set EnhancedCheckoutData value
     * @param \PayPal\StructType\EnhancedCheckoutDataType $enhancedCheckoutData
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setEnhancedCheckoutData(\PayPal\StructType\EnhancedCheckoutDataType $enhancedCheckoutData = null)
    {
        $this->EnhancedCheckoutData = $enhancedCheckoutData;
        return $this;
    }
    /**
     * Get OtherPaymentMethods value
     * @return \PayPal\StructType\OtherPaymentMethodDetailsType[]|null
     */
    public function getOtherPaymentMethods()
    {
        return $this->OtherPaymentMethods;
    }
    /**
     * Set OtherPaymentMethods value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OtherPaymentMethodDetailsType[] $otherPaymentMethods
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setOtherPaymentMethods(array $otherPaymentMethods = array())
    {
        foreach ($otherPaymentMethods as $setExpressCheckoutRequestDetailsTypeOtherPaymentMethodsItem) {
            // validation for constraint: itemType
            if (!$setExpressCheckoutRequestDetailsTypeOtherPaymentMethodsItem instanceof \PayPal\StructType\OtherPaymentMethodDetailsType) {
                throw new \InvalidArgumentException(sprintf('The OtherPaymentMethods property can only contain items of \PayPal\StructType\OtherPaymentMethodDetailsType, "%s" given', is_object($setExpressCheckoutRequestDetailsTypeOtherPaymentMethodsItem) ? get_class($setExpressCheckoutRequestDetailsTypeOtherPaymentMethodsItem) : gettype($setExpressCheckoutRequestDetailsTypeOtherPaymentMethodsItem)), __LINE__);
            }
        }
        $this->OtherPaymentMethods = $otherPaymentMethods;
        return $this;
    }
    /**
     * Add item to OtherPaymentMethods value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\OtherPaymentMethodDetailsType $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToOtherPaymentMethods(\PayPal\StructType\OtherPaymentMethodDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\OtherPaymentMethodDetailsType) {
            throw new \InvalidArgumentException(sprintf('The OtherPaymentMethods property can only contain items of \PayPal\StructType\OtherPaymentMethodDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherPaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get BuyerDetails value
     * @return \PayPal\StructType\BuyerDetailsType|null
     */
    public function getBuyerDetails()
    {
        return $this->BuyerDetails;
    }
    /**
     * Set BuyerDetails value
     * @param \PayPal\StructType\BuyerDetailsType $buyerDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBuyerDetails(\PayPal\StructType\BuyerDetailsType $buyerDetails = null)
    {
        $this->BuyerDetails = $buyerDetails;
        return $this;
    }
    /**
     * Get PaymentDetails value
     * @return \PayPal\StructType\PaymentDetailsType[]|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setPaymentDetails(array $paymentDetails = array())
    {
        foreach ($paymentDetails as $setExpressCheckoutRequestDetailsTypePaymentDetailsItem) {
            // validation for constraint: itemType
            if (!$setExpressCheckoutRequestDetailsTypePaymentDetailsItem instanceof \PayPal\StructType\PaymentDetailsType) {
                throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of \PayPal\StructType\PaymentDetailsType, "%s" given', is_object($setExpressCheckoutRequestDetailsTypePaymentDetailsItem) ? get_class($setExpressCheckoutRequestDetailsTypePaymentDetailsItem) : gettype($setExpressCheckoutRequestDetailsTypePaymentDetailsItem)), __LINE__);
            }
        }
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Add item to PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToPaymentDetails(\PayPal\StructType\PaymentDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of \PayPal\StructType\PaymentDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentDetails[] = $item;
        return $this;
    }
    /**
     * Get FlatRateShippingOptions value
     * @return \PayPal\StructType\ShippingOptionType[]|null
     */
    public function getFlatRateShippingOptions()
    {
        return $this->FlatRateShippingOptions;
    }
    /**
     * Set FlatRateShippingOptions value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ShippingOptionType[] $flatRateShippingOptions
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setFlatRateShippingOptions(array $flatRateShippingOptions = array())
    {
        foreach ($flatRateShippingOptions as $setExpressCheckoutRequestDetailsTypeFlatRateShippingOptionsItem) {
            // validation for constraint: itemType
            if (!$setExpressCheckoutRequestDetailsTypeFlatRateShippingOptionsItem instanceof \PayPal\StructType\ShippingOptionType) {
                throw new \InvalidArgumentException(sprintf('The FlatRateShippingOptions property can only contain items of \PayPal\StructType\ShippingOptionType, "%s" given', is_object($setExpressCheckoutRequestDetailsTypeFlatRateShippingOptionsItem) ? get_class($setExpressCheckoutRequestDetailsTypeFlatRateShippingOptionsItem) : gettype($setExpressCheckoutRequestDetailsTypeFlatRateShippingOptionsItem)), __LINE__);
            }
        }
        $this->FlatRateShippingOptions = $flatRateShippingOptions;
        return $this;
    }
    /**
     * Add item to FlatRateShippingOptions value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ShippingOptionType $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToFlatRateShippingOptions(\PayPal\StructType\ShippingOptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ShippingOptionType) {
            throw new \InvalidArgumentException(sprintf('The FlatRateShippingOptions property can only contain items of \PayPal\StructType\ShippingOptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlatRateShippingOptions[] = $item;
        return $this;
    }
    /**
     * Get CallbackTimeout value
     * @return string|null
     */
    public function getCallbackTimeout()
    {
        return $this->CallbackTimeout;
    }
    /**
     * Set CallbackTimeout value
     * @param string $callbackTimeout
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCallbackTimeout($callbackTimeout = null)
    {
        // validation for constraint: string
        if (!is_null($callbackTimeout) && !is_string($callbackTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callbackTimeout)), __LINE__);
        }
        $this->CallbackTimeout = $callbackTimeout;
        return $this;
    }
    /**
     * Get CallbackVersion value
     * @return string|null
     */
    public function getCallbackVersion()
    {
        return $this->CallbackVersion;
    }
    /**
     * Set CallbackVersion value
     * @param string $callbackVersion
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCallbackVersion($callbackVersion = null)
    {
        // validation for constraint: string
        if (!is_null($callbackVersion) && !is_string($callbackVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callbackVersion)), __LINE__);
        }
        $this->CallbackVersion = $callbackVersion;
        return $this;
    }
    /**
     * Get CustomerServiceNumber value
     * @return string|null
     */
    public function getCustomerServiceNumber()
    {
        return $this->CustomerServiceNumber;
    }
    /**
     * Set CustomerServiceNumber value
     * @param string $customerServiceNumber
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCustomerServiceNumber($customerServiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($customerServiceNumber) && !is_string($customerServiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerServiceNumber)), __LINE__);
        }
        $this->CustomerServiceNumber = $customerServiceNumber;
        return $this;
    }
    /**
     * Get GiftMessageEnable value
     * @return string|null
     */
    public function getGiftMessageEnable()
    {
        return $this->GiftMessageEnable;
    }
    /**
     * Set GiftMessageEnable value
     * @param string $giftMessageEnable
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiftMessageEnable($giftMessageEnable = null)
    {
        // validation for constraint: string
        if (!is_null($giftMessageEnable) && !is_string($giftMessageEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftMessageEnable)), __LINE__);
        }
        $this->GiftMessageEnable = $giftMessageEnable;
        return $this;
    }
    /**
     * Get GiftReceiptEnable value
     * @return string|null
     */
    public function getGiftReceiptEnable()
    {
        return $this->GiftReceiptEnable;
    }
    /**
     * Set GiftReceiptEnable value
     * @param string $giftReceiptEnable
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiftReceiptEnable($giftReceiptEnable = null)
    {
        // validation for constraint: string
        if (!is_null($giftReceiptEnable) && !is_string($giftReceiptEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftReceiptEnable)), __LINE__);
        }
        $this->GiftReceiptEnable = $giftReceiptEnable;
        return $this;
    }
    /**
     * Get GiftWrapEnable value
     * @return string|null
     */
    public function getGiftWrapEnable()
    {
        return $this->GiftWrapEnable;
    }
    /**
     * Set GiftWrapEnable value
     * @param string $giftWrapEnable
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiftWrapEnable($giftWrapEnable = null)
    {
        // validation for constraint: string
        if (!is_null($giftWrapEnable) && !is_string($giftWrapEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftWrapEnable)), __LINE__);
        }
        $this->GiftWrapEnable = $giftWrapEnable;
        return $this;
    }
    /**
     * Get GiftWrapName value
     * @return string|null
     */
    public function getGiftWrapName()
    {
        return $this->GiftWrapName;
    }
    /**
     * Set GiftWrapName value
     * @param string $giftWrapName
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiftWrapName($giftWrapName = null)
    {
        // validation for constraint: string
        if (!is_null($giftWrapName) && !is_string($giftWrapName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftWrapName)), __LINE__);
        }
        $this->GiftWrapName = $giftWrapName;
        return $this;
    }
    /**
     * Get GiftWrapAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getGiftWrapAmount()
    {
        return $this->GiftWrapAmount;
    }
    /**
     * Set GiftWrapAmount value
     * @param \PayPal\StructType\BasicAmountType $giftWrapAmount
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setGiftWrapAmount(\PayPal\StructType\BasicAmountType $giftWrapAmount = null)
    {
        $this->GiftWrapAmount = $giftWrapAmount;
        return $this;
    }
    /**
     * Get BuyerEmailOptInEnable value
     * @return string|null
     */
    public function getBuyerEmailOptInEnable()
    {
        return $this->BuyerEmailOptInEnable;
    }
    /**
     * Set BuyerEmailOptInEnable value
     * @param string $buyerEmailOptInEnable
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setBuyerEmailOptInEnable($buyerEmailOptInEnable = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmailOptInEnable) && !is_string($buyerEmailOptInEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerEmailOptInEnable)), __LINE__);
        }
        $this->BuyerEmailOptInEnable = $buyerEmailOptInEnable;
        return $this;
    }
    /**
     * Get SurveyEnable value
     * @return string|null
     */
    public function getSurveyEnable()
    {
        return $this->SurveyEnable;
    }
    /**
     * Set SurveyEnable value
     * @param string $surveyEnable
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setSurveyEnable($surveyEnable = null)
    {
        // validation for constraint: string
        if (!is_null($surveyEnable) && !is_string($surveyEnable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyEnable)), __LINE__);
        }
        $this->SurveyEnable = $surveyEnable;
        return $this;
    }
    /**
     * Get SurveyQuestion value
     * @return string|null
     */
    public function getSurveyQuestion()
    {
        return $this->SurveyQuestion;
    }
    /**
     * Set SurveyQuestion value
     * @param string $surveyQuestion
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setSurveyQuestion($surveyQuestion = null)
    {
        // validation for constraint: string
        if (!is_null($surveyQuestion) && !is_string($surveyQuestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surveyQuestion)), __LINE__);
        }
        $this->SurveyQuestion = $surveyQuestion;
        return $this;
    }
    /**
     * Get SurveyChoice value
     * @return string[]|null
     */
    public function getSurveyChoice()
    {
        return $this->SurveyChoice;
    }
    /**
     * Set SurveyChoice value
     * @throws \InvalidArgumentException
     * @param string[] $surveyChoice
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setSurveyChoice(array $surveyChoice = array())
    {
        foreach ($surveyChoice as $setExpressCheckoutRequestDetailsTypeSurveyChoiceItem) {
            // validation for constraint: itemType
            if (!is_string($setExpressCheckoutRequestDetailsTypeSurveyChoiceItem)) {
                throw new \InvalidArgumentException(sprintf('The SurveyChoice property can only contain items of string, "%s" given', is_object($setExpressCheckoutRequestDetailsTypeSurveyChoiceItem) ? get_class($setExpressCheckoutRequestDetailsTypeSurveyChoiceItem) : gettype($setExpressCheckoutRequestDetailsTypeSurveyChoiceItem)), __LINE__);
            }
        }
        $this->SurveyChoice = $surveyChoice;
        return $this;
    }
    /**
     * Add item to SurveyChoice value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToSurveyChoice($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SurveyChoice property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SurveyChoice[] = $item;
        return $this;
    }
    /**
     * Get TotalType value
     * @return string|null
     */
    public function getTotalType()
    {
        return $this->TotalType;
    }
    /**
     * Set TotalType value
     * @uses \PayPal\EnumType\TotalType::valueIsValid()
     * @uses \PayPal\EnumType\TotalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $totalType
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setTotalType($totalType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\TotalType::valueIsValid($totalType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $totalType, implode(', ', \PayPal\EnumType\TotalType::getValidValues())), __LINE__);
        }
        $this->TotalType = $totalType;
        return $this;
    }
    /**
     * Get NoteToBuyer value
     * @return string|null
     */
    public function getNoteToBuyer()
    {
        return $this->NoteToBuyer;
    }
    /**
     * Set NoteToBuyer value
     * @param string $noteToBuyer
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setNoteToBuyer($noteToBuyer = null)
    {
        // validation for constraint: string
        if (!is_null($noteToBuyer) && !is_string($noteToBuyer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noteToBuyer)), __LINE__);
        }
        $this->NoteToBuyer = $noteToBuyer;
        return $this;
    }
    /**
     * Get Incentives value
     * @return \PayPal\StructType\IncentiveInfoType[]|null
     */
    public function getIncentives()
    {
        return $this->Incentives;
    }
    /**
     * Set Incentives value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveInfoType[] $incentives
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setIncentives(array $incentives = array())
    {
        foreach ($incentives as $setExpressCheckoutRequestDetailsTypeIncentivesItem) {
            // validation for constraint: itemType
            if (!$setExpressCheckoutRequestDetailsTypeIncentivesItem instanceof \PayPal\StructType\IncentiveInfoType) {
                throw new \InvalidArgumentException(sprintf('The Incentives property can only contain items of \PayPal\StructType\IncentiveInfoType, "%s" given', is_object($setExpressCheckoutRequestDetailsTypeIncentivesItem) ? get_class($setExpressCheckoutRequestDetailsTypeIncentivesItem) : gettype($setExpressCheckoutRequestDetailsTypeIncentivesItem)), __LINE__);
            }
        }
        $this->Incentives = $incentives;
        return $this;
    }
    /**
     * Add item to Incentives value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveInfoType $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToIncentives(\PayPal\StructType\IncentiveInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveInfoType) {
            throw new \InvalidArgumentException(sprintf('The Incentives property can only contain items of \PayPal\StructType\IncentiveInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Incentives[] = $item;
        return $this;
    }
    /**
     * Get ReqInstrumentDetails value
     * @return string|null
     */
    public function getReqInstrumentDetails()
    {
        return $this->ReqInstrumentDetails;
    }
    /**
     * Set ReqInstrumentDetails value
     * @param string $reqInstrumentDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setReqInstrumentDetails($reqInstrumentDetails = null)
    {
        // validation for constraint: string
        if (!is_null($reqInstrumentDetails) && !is_string($reqInstrumentDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqInstrumentDetails)), __LINE__);
        }
        $this->ReqInstrumentDetails = $reqInstrumentDetails;
        return $this;
    }
    /**
     * Get ExternalRememberMeOptInDetails value
     * @return \PayPal\StructType\ExternalRememberMeOptInDetailsType|null
     */
    public function getExternalRememberMeOptInDetails()
    {
        return $this->ExternalRememberMeOptInDetails;
    }
    /**
     * Set ExternalRememberMeOptInDetails value
     * @param \PayPal\StructType\ExternalRememberMeOptInDetailsType $externalRememberMeOptInDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setExternalRememberMeOptInDetails(\PayPal\StructType\ExternalRememberMeOptInDetailsType $externalRememberMeOptInDetails = null)
    {
        $this->ExternalRememberMeOptInDetails = $externalRememberMeOptInDetails;
        return $this;
    }
    /**
     * Get FlowControlDetails value
     * @return \PayPal\StructType\FlowControlDetailsType|null
     */
    public function getFlowControlDetails()
    {
        return $this->FlowControlDetails;
    }
    /**
     * Set FlowControlDetails value
     * @param \PayPal\StructType\FlowControlDetailsType $flowControlDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setFlowControlDetails(\PayPal\StructType\FlowControlDetailsType $flowControlDetails = null)
    {
        $this->FlowControlDetails = $flowControlDetails;
        return $this;
    }
    /**
     * Get DisplayControlDetails value
     * @return \PayPal\StructType\DisplayControlDetailsType|null
     */
    public function getDisplayControlDetails()
    {
        return $this->DisplayControlDetails;
    }
    /**
     * Set DisplayControlDetails value
     * @param \PayPal\StructType\DisplayControlDetailsType $displayControlDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setDisplayControlDetails(\PayPal\StructType\DisplayControlDetailsType $displayControlDetails = null)
    {
        $this->DisplayControlDetails = $displayControlDetails;
        return $this;
    }
    /**
     * Get ExternalPartnerTrackingDetails value
     * @return \PayPal\StructType\ExternalPartnerTrackingDetailsType|null
     */
    public function getExternalPartnerTrackingDetails()
    {
        return $this->ExternalPartnerTrackingDetails;
    }
    /**
     * Set ExternalPartnerTrackingDetails value
     * @param \PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setExternalPartnerTrackingDetails(\PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails = null)
    {
        $this->ExternalPartnerTrackingDetails = $externalPartnerTrackingDetails;
        return $this;
    }
    /**
     * Get CoupledBuckets value
     * @return \PayPal\StructType\CoupledBucketsType[]|null
     */
    public function getCoupledBuckets()
    {
        return $this->CoupledBuckets;
    }
    /**
     * Set CoupledBuckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledBucketsType[] $coupledBuckets
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function setCoupledBuckets(array $coupledBuckets = array())
    {
        foreach ($coupledBuckets as $setExpressCheckoutRequestDetailsTypeCoupledBucketsItem) {
            // validation for constraint: itemType
            if (!$setExpressCheckoutRequestDetailsTypeCoupledBucketsItem instanceof \PayPal\StructType\CoupledBucketsType) {
                throw new \InvalidArgumentException(sprintf('The CoupledBuckets property can only contain items of \PayPal\StructType\CoupledBucketsType, "%s" given', is_object($setExpressCheckoutRequestDetailsTypeCoupledBucketsItem) ? get_class($setExpressCheckoutRequestDetailsTypeCoupledBucketsItem) : gettype($setExpressCheckoutRequestDetailsTypeCoupledBucketsItem)), __LINE__);
            }
        }
        $this->CoupledBuckets = $coupledBuckets;
        return $this;
    }
    /**
     * Add item to CoupledBuckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CoupledBucketsType $item
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function addToCoupledBuckets(\PayPal\StructType\CoupledBucketsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\CoupledBucketsType) {
            throw new \InvalidArgumentException(sprintf('The CoupledBuckets property can only contain items of \PayPal\StructType\CoupledBucketsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoupledBuckets[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
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
