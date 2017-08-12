<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: 2-letter ISO 3166 Country Code. | 3-letter ISO Currency Code. | The ID that uniquely identifies the item listing. | Describes the number of days the auction will be active. | List of payment methods accepted by a seller from a buyer
 * for a (checkout) transaction. | Region where the item is listed. See Region Table for values. If the item is listed with a Region of 0 (zero), then this return field denotes no region association with the item, meaning that it is not listing the item
 * regionally. | Revise Status contains information about the item being revised. | Seller user. | Container for for selling status information (e.g., BidCount, BidIncrement, HighBidder, MinimimumToBid, etc). | Contains the shipping payment related
 * information for the listed item. | Regions that seller will ship to. | eBay site on which item is listed. | Universally unique constraint tag. The UUID is unique to a category.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ItemType extends AbstractStructBase
{
    /**
     * The ApplicationData
     * Meta informations extracted from the WSDL
     * - documentation: Returns custom, application-specific data associated with the item. The data in this field is stored with the item in the items table at eBay, but is not used in any way by eBay. Use ApplicationData to store such special information
     * as a part or SKU number. Maximum 32 characters in length.
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationData;
    /**
     * The ListOfAttributeSets
     * Meta informations extracted from the WSDL
     * - documentation: Carries one or more instances of the AttributeSet in a list.
     * - minOccurs: 0
     * @var \PayPal\StructType\ListOfAttributeSetType
     */
    public $ListOfAttributeSets;
    /**
     * The AutoPay
     * Meta informations extracted from the WSDL
     * - documentation: If true (1), indicates that the seller requested immediate payment for the item. False (0) if immediate payment was not requested. (Does not indicate whether the item is still a candidate for puchase via immediate payment.) Only
     * applicable for items listed on US and UK sites in categories that support immediate payment, when seller has a Premier or Business PayPal account.
     * - minOccurs: 0
     * @var bool
     */
    public $AutoPay;
    /**
     * The BuyerProtection
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the item's eligibility for the Buyer Protection Program. Possible values: ItemIneligible - Item is ineligible (e.g., category not applicable) ItemEligible - Item is eligible per standard criteria
     * ItemMarkedIneligible - Item marked ineligible per special criteria (e.g., seller's account closed) ItemMarkedIneligible - Item marked elegible per other criteria Applicable for items listed to the US site and for the Parts and Accessories category
     * (6028) or Everything Else category (10368) (or their subcategories) on the eBay Motors site.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerProtection;
    /**
     * The BuyItNowPrice
     * Meta informations extracted from the WSDL
     * - documentation: Amount a Buyer would need to bid to take advantage of the Buy It Now feature. Not applicable to Fixed-Price items (Type = 7 or 9) or AdFormat-type listings. For Fixed-Price items, see StartPrice instead.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $BuyItNowPrice;
    /**
     * The Charity
     * Meta informations extracted from the WSDL
     * - documentation: Charity listing container.
     * - minOccurs: 0
     * @var \PayPal\StructType\CharityType
     */
    public $Charity;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:Country
     * @var string
     */
    public $Country;
    /**
     * The CrossPromotion
     * Meta informations extracted from the WSDL
     * - documentation: CrossPromotions container, if applicable shows promoted items
     * - minOccurs: 0
     * @var \PayPal\StructType\CrossPromotionsType
     */
    public $CrossPromotion;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:Currency
     * @var string
     */
    public $Currency;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Item Description.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Escrow
     * Meta informations extracted from the WSDL
     * - documentation: Online Escrow paid for by buyer or seller. Cannot use with real estate auctions. Escrow is recommended for for transactions over $500. Escrow service, available via Escrow.com, protects both buyer and seller by acting as a trusted
     * third-party during the transaction and managing the payment process from start to finish. Also, if escrow by seller option used, then for Motors, this means that Escrow will be negotiated at the end of the auction.
     * - minOccurs: 0
     * @var string
     */
    public $Escrow;
    /**
     * The GiftIcon
     * Meta informations extracted from the WSDL
     * - documentation: If set, a generic gift icon displays in the listing's Title. GiftIcon must be set to to be able to use GiftServices options (e.g., GiftExpressShipping, GiftShipToRecipient, or GiftWrap).
     * - minOccurs: 0
     * @var int
     */
    public $GiftIcon;
    /**
     * The GiftServices
     * Meta informations extracted from the WSDL
     * - documentation: Gift service options offered by the seller of the listed item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $GiftServices;
    /**
     * The HitCounter
     * Meta informations extracted from the WSDL
     * - documentation: Optional hit counter for the item's listing page. Possible values are: "NoHitCounter" "HonestyStyle" "GreenLED" "Hidden"
     * - minOccurs: 0
     * @var string
     */
    public $HitCounter;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ItemID
     * - documentation: Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
     * @var string
     */
    public $ItemID;
    /**
     * The ListingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Includes listing details in terms of start and end time of listing (in GMT) as well as other details (e.g., orginal item for second chance, converted start price, etc.).
     * - minOccurs: 0
     * @var \PayPal\StructType\ListingDetailsType
     */
    public $ListingDetails;
    /**
     * The ListingDesigner
     * Meta informations extracted from the WSDL
     * - documentation: When an item is first listed (using AddItem), a Layout template or a Theme template (or both) can be assigned to the item. A Layout template is assigned to a new item by specifying the Layout template ID (in the AddItem input
     * argument LayoutID). Similarly, a Theme template is assigned to the item using the ThemeID argument.
     * - minOccurs: 0
     * @var \PayPal\StructType\ListingDesignerType
     */
    public $ListingDesigner;
    /**
     * The ListingDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ListingDuration
     * @var string
     */
    public $ListingDuration;
    /**
     * The ListingEnhancement
     * Meta informations extracted from the WSDL
     * - documentation: Describes the types of enhancment supported for the item's listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ListingEnhancement;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: Describes the type of listing for the item a seller has chosen (e.g., Chinese, Dutch, FixedPrice, etc.).
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the geographical location of the item.
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The PartnerCode
     * Meta informations extracted from the WSDL
     * - documentation: Needed for add item only for partners.
     * - minOccurs: 0
     * @var string
     */
    public $PartnerCode;
    /**
     * The PartnerName
     * Meta informations extracted from the WSDL
     * - documentation: Needed for add item only for partners.
     * - minOccurs: 0
     * @var string
     */
    public $PartnerName;
    /**
     * The PaymentMethods
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ns:PaymentMethods
     * @var string[]
     */
    public $PaymentMethods;
    /**
     * The PayPalEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Valid PayPal e-mail address if seller has chosen PayPal as a payment method for the listed item.
     * - minOccurs: 0
     * @var string
     */
    public $PayPalEmailAddress;
    /**
     * The PrimaryCategory
     * Meta informations extracted from the WSDL
     * - documentation: Container for data on the primary category of listing.
     * - minOccurs: 0
     * @var \PayPal\StructType\CategoryType
     */
    public $PrimaryCategory;
    /**
     * The PrivateListing
     * Meta informations extracted from the WSDL
     * - documentation: Private auction. Not applicable to Fixed Price items.
     * - minOccurs: 0
     * @var bool
     */
    public $PrivateListing;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of items being sold in the auction.
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The RegionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:RegionID
     * @var string
     */
    public $RegionID;
    /**
     * The RelistLink
     * Meta informations extracted from the WSDL
     * - documentation: If true, creates a link from the old listing for the item to the new relist page, which accommodates users who might still look for the item under its old item ID. Also adds the relist ID to the old listing's record in the eBay
     * database, which can be returned by calling GetItem for the old ItemId. If your application creates the listing page for the user, you need to add the relist link option to your application for your users.
     * - minOccurs: 0
     * @var bool
     */
    public $RelistLink;
    /**
     * The ReservePrice
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the reserve price for a reserve auction. Returned only if DetailLevel = 4. ReservePrice is only returned for auctions with a reserve price where the user calling GetItem is the item's seller. Returned as null for
     * International Fixed Price items. For more information on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ReservePrice;
    /**
     * The ReviseStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ReviseStatus
     * @var \PayPal\StructType\ReviseStatusType
     */
    public $ReviseStatus;
    /**
     * The ScheduleTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleTime;
    /**
     * The SecondaryCategory
     * Meta informations extracted from the WSDL
     * - documentation: Container for data on the secondary category of listing. Secondary category is optional.
     * - minOccurs: 0
     * @var \PayPal\StructType\CategoryType
     */
    public $SecondaryCategory;
    /**
     * The SiteHostedPicture
     * Meta informations extracted from the WSDL
     * - documentation: Item picture information for pictures hosted at eBay site.
     * - minOccurs: 0
     * @var \PayPal\StructType\SiteHostedPictureType
     */
    public $SiteHostedPicture;
    /**
     * The Seller
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:Seller
     * @var \PayPal\StructType\UserType
     */
    public $Seller;
    /**
     * The SellingStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:SellingStatus
     * @var \PayPal\StructType\SellingStatusType
     */
    public $SellingStatus;
    /**
     * The ShippingOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies where the seller is willing to ship the item. Default "SiteOnly". Valid values are: SiteOnly (the default) WorldWide SitePlusRegions WillNotShip If SitePlusRegions is selected, then at least one regions argument
     * (ShipToNorthAmerica, ShipToEurope, etc.) must also be set.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingOption;
    /**
     * The ShippingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ShippingDetails
     * @var \PayPal\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The ShippingRegions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ns:ShippingRegions
     * @var string[]
     */
    public $ShippingRegions;
    /**
     * The ShippingTerms
     * Meta informations extracted from the WSDL
     * - documentation: Describes who pays for the delivery of an item (e.g., buyer or seller).
     * - minOccurs: 0
     * @var string
     */
    public $ShippingTerms;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:Site
     * @var string
     */
    public $Site;
    /**
     * The StartPrice
     * Meta informations extracted from the WSDL
     * - documentation: Starting price for the item. For Type=7 or Type=9 (Fixed Price) items, if the item price (MinimumBid) is revised, this field returns the new price.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $StartPrice;
    /**
     * The Storefront
     * Meta informations extracted from the WSDL
     * - documentation: Storefront is shown for any item that belongs to an eBay Store owner, regardless of whether it is fixed price or auction type. Not returned for International Fixed Price items.
     * - minOccurs: 0
     * @var \PayPal\StructType\StorefrontType
     */
    public $Storefront;
    /**
     * The SubTitle
     * Meta informations extracted from the WSDL
     * - documentation: Subtitle to use in addition to the title. Provides more keywords when buyers search in titles and descriptions.
     * - minOccurs: 0
     * @var string
     */
    public $SubTitle;
    /**
     * The TimeLeft
     * Meta informations extracted from the WSDL
     * - documentation: Time until the the end of the listing (e.g., the amount of time left in an active auction).
     * - minOccurs: 0
     * @var string
     */
    public $TimeLeft;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: Name of the item as it appears for auctions.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The UUID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:UUID
     * - documentation: Specifies a universally unique identifier. The UUID can only contain digits from 0-9 and letters from A-F. The UUID must be 32 characters long. For example, 1FB02B2-9D27-3acb-ABA2-9D539C374228
     * - length: 36
     * @var string
     */
    public $UUID;
    /**
     * The VATDetails
     * Meta informations extracted from the WSDL
     * - documentation: VAT info container.
     * - minOccurs: 0
     * @var \PayPal\StructType\VATDetailsType
     */
    public $VATDetails;
    /**
     * The VendorHostedPicture
     * Meta informations extracted from the WSDL
     * - documentation: Item picture information for pictures hosted at vendor (i.e., remote) site.
     * - minOccurs: 0
     * @var \PayPal\StructType\VendorHostedPictureType
     */
    public $VendorHostedPicture;
    /**
     * Constructor method for ItemType
     * @uses ItemType::setApplicationData()
     * @uses ItemType::setListOfAttributeSets()
     * @uses ItemType::setAutoPay()
     * @uses ItemType::setBuyerProtection()
     * @uses ItemType::setBuyItNowPrice()
     * @uses ItemType::setCharity()
     * @uses ItemType::setCountry()
     * @uses ItemType::setCrossPromotion()
     * @uses ItemType::setCurrency()
     * @uses ItemType::setDescription()
     * @uses ItemType::setEscrow()
     * @uses ItemType::setGiftIcon()
     * @uses ItemType::setGiftServices()
     * @uses ItemType::setHitCounter()
     * @uses ItemType::setItemID()
     * @uses ItemType::setListingDetails()
     * @uses ItemType::setListingDesigner()
     * @uses ItemType::setListingDuration()
     * @uses ItemType::setListingEnhancement()
     * @uses ItemType::setListingType()
     * @uses ItemType::setLocation()
     * @uses ItemType::setPartnerCode()
     * @uses ItemType::setPartnerName()
     * @uses ItemType::setPaymentMethods()
     * @uses ItemType::setPayPalEmailAddress()
     * @uses ItemType::setPrimaryCategory()
     * @uses ItemType::setPrivateListing()
     * @uses ItemType::setQuantity()
     * @uses ItemType::setRegionID()
     * @uses ItemType::setRelistLink()
     * @uses ItemType::setReservePrice()
     * @uses ItemType::setReviseStatus()
     * @uses ItemType::setScheduleTime()
     * @uses ItemType::setSecondaryCategory()
     * @uses ItemType::setSiteHostedPicture()
     * @uses ItemType::setSeller()
     * @uses ItemType::setSellingStatus()
     * @uses ItemType::setShippingOption()
     * @uses ItemType::setShippingDetails()
     * @uses ItemType::setShippingRegions()
     * @uses ItemType::setShippingTerms()
     * @uses ItemType::setSite()
     * @uses ItemType::setStartPrice()
     * @uses ItemType::setStorefront()
     * @uses ItemType::setSubTitle()
     * @uses ItemType::setTimeLeft()
     * @uses ItemType::setTitle()
     * @uses ItemType::setUUID()
     * @uses ItemType::setVATDetails()
     * @uses ItemType::setVendorHostedPicture()
     * @param string $applicationData
     * @param \PayPal\StructType\ListOfAttributeSetType $listOfAttributeSets
     * @param bool $autoPay
     * @param string $buyerProtection
     * @param \PayPal\StructType\AmountType $buyItNowPrice
     * @param \PayPal\StructType\CharityType $charity
     * @param string $country
     * @param \PayPal\StructType\CrossPromotionsType $crossPromotion
     * @param string $currency
     * @param string $description
     * @param string $escrow
     * @param int $giftIcon
     * @param string[] $giftServices
     * @param string $hitCounter
     * @param string $itemID
     * @param \PayPal\StructType\ListingDetailsType $listingDetails
     * @param \PayPal\StructType\ListingDesignerType $listingDesigner
     * @param string $listingDuration
     * @param string[] $listingEnhancement
     * @param string $listingType
     * @param string $location
     * @param string $partnerCode
     * @param string $partnerName
     * @param string[] $paymentMethods
     * @param string $payPalEmailAddress
     * @param \PayPal\StructType\CategoryType $primaryCategory
     * @param bool $privateListing
     * @param int $quantity
     * @param string $regionID
     * @param bool $relistLink
     * @param \PayPal\StructType\AmountType $reservePrice
     * @param \PayPal\StructType\ReviseStatusType $reviseStatus
     * @param string $scheduleTime
     * @param \PayPal\StructType\CategoryType $secondaryCategory
     * @param \PayPal\StructType\SiteHostedPictureType $siteHostedPicture
     * @param \PayPal\StructType\UserType $seller
     * @param \PayPal\StructType\SellingStatusType $sellingStatus
     * @param string $shippingOption
     * @param \PayPal\StructType\ShippingDetailsType $shippingDetails
     * @param string[] $shippingRegions
     * @param string $shippingTerms
     * @param string $site
     * @param \PayPal\StructType\AmountType $startPrice
     * @param \PayPal\StructType\StorefrontType $storefront
     * @param string $subTitle
     * @param string $timeLeft
     * @param string $title
     * @param string $uUID
     * @param \PayPal\StructType\VATDetailsType $vATDetails
     * @param \PayPal\StructType\VendorHostedPictureType $vendorHostedPicture
     */
    public function __construct($applicationData = null, \PayPal\StructType\ListOfAttributeSetType $listOfAttributeSets = null, $autoPay = null, $buyerProtection = null, \PayPal\StructType\AmountType $buyItNowPrice = null, \PayPal\StructType\CharityType $charity = null, $country = null, \PayPal\StructType\CrossPromotionsType $crossPromotion = null, $currency = null, $description = null, $escrow = null, $giftIcon = null, array $giftServices = array(), $hitCounter = null, $itemID = null, \PayPal\StructType\ListingDetailsType $listingDetails = null, \PayPal\StructType\ListingDesignerType $listingDesigner = null, $listingDuration = null, array $listingEnhancement = array(), $listingType = null, $location = null, $partnerCode = null, $partnerName = null, array $paymentMethods = array(), $payPalEmailAddress = null, \PayPal\StructType\CategoryType $primaryCategory = null, $privateListing = null, $quantity = null, $regionID = null, $relistLink = null, \PayPal\StructType\AmountType $reservePrice = null, \PayPal\StructType\ReviseStatusType $reviseStatus = null, $scheduleTime = null, \PayPal\StructType\CategoryType $secondaryCategory = null, \PayPal\StructType\SiteHostedPictureType $siteHostedPicture = null, \PayPal\StructType\UserType $seller = null, \PayPal\StructType\SellingStatusType $sellingStatus = null, $shippingOption = null, \PayPal\StructType\ShippingDetailsType $shippingDetails = null, array $shippingRegions = array(), $shippingTerms = null, $site = null, \PayPal\StructType\AmountType $startPrice = null, \PayPal\StructType\StorefrontType $storefront = null, $subTitle = null, $timeLeft = null, $title = null, $uUID = null, \PayPal\StructType\VATDetailsType $vATDetails = null, \PayPal\StructType\VendorHostedPictureType $vendorHostedPicture = null)
    {
        $this
            ->setApplicationData($applicationData)
            ->setListOfAttributeSets($listOfAttributeSets)
            ->setAutoPay($autoPay)
            ->setBuyerProtection($buyerProtection)
            ->setBuyItNowPrice($buyItNowPrice)
            ->setCharity($charity)
            ->setCountry($country)
            ->setCrossPromotion($crossPromotion)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setEscrow($escrow)
            ->setGiftIcon($giftIcon)
            ->setGiftServices($giftServices)
            ->setHitCounter($hitCounter)
            ->setItemID($itemID)
            ->setListingDetails($listingDetails)
            ->setListingDesigner($listingDesigner)
            ->setListingDuration($listingDuration)
            ->setListingEnhancement($listingEnhancement)
            ->setListingType($listingType)
            ->setLocation($location)
            ->setPartnerCode($partnerCode)
            ->setPartnerName($partnerName)
            ->setPaymentMethods($paymentMethods)
            ->setPayPalEmailAddress($payPalEmailAddress)
            ->setPrimaryCategory($primaryCategory)
            ->setPrivateListing($privateListing)
            ->setQuantity($quantity)
            ->setRegionID($regionID)
            ->setRelistLink($relistLink)
            ->setReservePrice($reservePrice)
            ->setReviseStatus($reviseStatus)
            ->setScheduleTime($scheduleTime)
            ->setSecondaryCategory($secondaryCategory)
            ->setSiteHostedPicture($siteHostedPicture)
            ->setSeller($seller)
            ->setSellingStatus($sellingStatus)
            ->setShippingOption($shippingOption)
            ->setShippingDetails($shippingDetails)
            ->setShippingRegions($shippingRegions)
            ->setShippingTerms($shippingTerms)
            ->setSite($site)
            ->setStartPrice($startPrice)
            ->setStorefront($storefront)
            ->setSubTitle($subTitle)
            ->setTimeLeft($timeLeft)
            ->setTitle($title)
            ->setUUID($uUID)
            ->setVATDetails($vATDetails)
            ->setVendorHostedPicture($vendorHostedPicture);
    }
    /**
     * Get ApplicationData value
     * @return string|null
     */
    public function getApplicationData()
    {
        return $this->ApplicationData;
    }
    /**
     * Set ApplicationData value
     * @param string $applicationData
     * @return \PayPal\StructType\ItemType
     */
    public function setApplicationData($applicationData = null)
    {
        // validation for constraint: string
        if (!is_null($applicationData) && !is_string($applicationData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationData)), __LINE__);
        }
        $this->ApplicationData = $applicationData;
        return $this;
    }
    /**
     * Get ListOfAttributeSets value
     * @return \PayPal\StructType\ListOfAttributeSetType|null
     */
    public function getListOfAttributeSets()
    {
        return $this->ListOfAttributeSets;
    }
    /**
     * Set ListOfAttributeSets value
     * @param \PayPal\StructType\ListOfAttributeSetType $listOfAttributeSets
     * @return \PayPal\StructType\ItemType
     */
    public function setListOfAttributeSets(\PayPal\StructType\ListOfAttributeSetType $listOfAttributeSets = null)
    {
        $this->ListOfAttributeSets = $listOfAttributeSets;
        return $this;
    }
    /**
     * Get AutoPay value
     * @return bool|null
     */
    public function getAutoPay()
    {
        return $this->AutoPay;
    }
    /**
     * Set AutoPay value
     * @param bool $autoPay
     * @return \PayPal\StructType\ItemType
     */
    public function setAutoPay($autoPay = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoPay) && !is_bool($autoPay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoPay)), __LINE__);
        }
        $this->AutoPay = $autoPay;
        return $this;
    }
    /**
     * Get BuyerProtection value
     * @return string|null
     */
    public function getBuyerProtection()
    {
        return $this->BuyerProtection;
    }
    /**
     * Set BuyerProtection value
     * @uses \PayPal\EnumType\BuyerProtectionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BuyerProtectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerProtection
     * @return \PayPal\StructType\ItemType
     */
    public function setBuyerProtection($buyerProtection = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BuyerProtectionCodeType::valueIsValid($buyerProtection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buyerProtection, implode(', ', \PayPal\EnumType\BuyerProtectionCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtection = $buyerProtection;
        return $this;
    }
    /**
     * Get BuyItNowPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getBuyItNowPrice()
    {
        return $this->BuyItNowPrice;
    }
    /**
     * Set BuyItNowPrice value
     * @param \PayPal\StructType\AmountType $buyItNowPrice
     * @return \PayPal\StructType\ItemType
     */
    public function setBuyItNowPrice(\PayPal\StructType\AmountType $buyItNowPrice = null)
    {
        $this->BuyItNowPrice = $buyItNowPrice;
        return $this;
    }
    /**
     * Get Charity value
     * @return \PayPal\StructType\CharityType|null
     */
    public function getCharity()
    {
        return $this->Charity;
    }
    /**
     * Set Charity value
     * @param \PayPal\StructType\CharityType $charity
     * @return \PayPal\StructType\ItemType
     */
    public function setCharity(\PayPal\StructType\CharityType $charity = null)
    {
        $this->Charity = $charity;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \PayPal\EnumType\CountryCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $country
     * @return \PayPal\StructType\ItemType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $country, implode(', ', \PayPal\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get CrossPromotion value
     * @return \PayPal\StructType\CrossPromotionsType|null
     */
    public function getCrossPromotion()
    {
        return $this->CrossPromotion;
    }
    /**
     * Set CrossPromotion value
     * @param \PayPal\StructType\CrossPromotionsType $crossPromotion
     * @return \PayPal\StructType\ItemType
     */
    public function setCrossPromotion(\PayPal\StructType\CrossPromotionsType $crossPromotion = null)
    {
        $this->CrossPromotion = $crossPromotion;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @uses \PayPal\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency
     * @return \PayPal\StructType\ItemType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CurrencyCodeType::valueIsValid($currency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency, implode(', ', \PayPal\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \PayPal\StructType\ItemType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Escrow value
     * @return string|null
     */
    public function getEscrow()
    {
        return $this->Escrow;
    }
    /**
     * Set Escrow value
     * @uses \PayPal\EnumType\EscrowCodeType::valueIsValid()
     * @uses \PayPal\EnumType\EscrowCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $escrow
     * @return \PayPal\StructType\ItemType
     */
    public function setEscrow($escrow = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\EscrowCodeType::valueIsValid($escrow)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $escrow, implode(', ', \PayPal\EnumType\EscrowCodeType::getValidValues())), __LINE__);
        }
        $this->Escrow = $escrow;
        return $this;
    }
    /**
     * Get GiftIcon value
     * @return int|null
     */
    public function getGiftIcon()
    {
        return $this->GiftIcon;
    }
    /**
     * Set GiftIcon value
     * @param int $giftIcon
     * @return \PayPal\StructType\ItemType
     */
    public function setGiftIcon($giftIcon = null)
    {
        // validation for constraint: int
        if (!is_null($giftIcon) && !is_numeric($giftIcon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($giftIcon)), __LINE__);
        }
        $this->GiftIcon = $giftIcon;
        return $this;
    }
    /**
     * Get GiftServices value
     * @return string[]|null
     */
    public function getGiftServices()
    {
        return $this->GiftServices;
    }
    /**
     * Set GiftServices value
     * @uses \PayPal\EnumType\GiftServicesCodeType::valueIsValid()
     * @uses \PayPal\EnumType\GiftServicesCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $giftServices
     * @return \PayPal\StructType\ItemType
     */
    public function setGiftServices(array $giftServices = array())
    {
        $invalidValues = array();
        foreach ($giftServices as $itemTypeGiftServicesItem) {
            if (!\PayPal\EnumType\GiftServicesCodeType::valueIsValid($itemTypeGiftServicesItem)) {
                $invalidValues[] = var_export($itemTypeGiftServicesItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \PayPal\EnumType\GiftServicesCodeType::getValidValues())), __LINE__);
        }
        $this->GiftServices = $giftServices;
        return $this;
    }
    /**
     * Add item to GiftServices value
     * @uses \PayPal\EnumType\GiftServicesCodeType::valueIsValid()
     * @uses \PayPal\EnumType\GiftServicesCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\ItemType
     */
    public function addToGiftServices($item)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\GiftServicesCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \PayPal\EnumType\GiftServicesCodeType::getValidValues())), __LINE__);
        }
        $this->GiftServices[] = $item;
        return $this;
    }
    /**
     * Get HitCounter value
     * @return string|null
     */
    public function getHitCounter()
    {
        return $this->HitCounter;
    }
    /**
     * Set HitCounter value
     * @uses \PayPal\EnumType\HitCounterCodeType::valueIsValid()
     * @uses \PayPal\EnumType\HitCounterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $hitCounter
     * @return \PayPal\StructType\ItemType
     */
    public function setHitCounter($hitCounter = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\HitCounterCodeType::valueIsValid($hitCounter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $hitCounter, implode(', ', \PayPal\EnumType\HitCounterCodeType::getValidValues())), __LINE__);
        }
        $this->HitCounter = $hitCounter;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \PayPal\StructType\ItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get ListingDetails value
     * @return \PayPal\StructType\ListingDetailsType|null
     */
    public function getListingDetails()
    {
        return $this->ListingDetails;
    }
    /**
     * Set ListingDetails value
     * @param \PayPal\StructType\ListingDetailsType $listingDetails
     * @return \PayPal\StructType\ItemType
     */
    public function setListingDetails(\PayPal\StructType\ListingDetailsType $listingDetails = null)
    {
        $this->ListingDetails = $listingDetails;
        return $this;
    }
    /**
     * Get ListingDesigner value
     * @return \PayPal\StructType\ListingDesignerType|null
     */
    public function getListingDesigner()
    {
        return $this->ListingDesigner;
    }
    /**
     * Set ListingDesigner value
     * @param \PayPal\StructType\ListingDesignerType $listingDesigner
     * @return \PayPal\StructType\ItemType
     */
    public function setListingDesigner(\PayPal\StructType\ListingDesignerType $listingDesigner = null)
    {
        $this->ListingDesigner = $listingDesigner;
        return $this;
    }
    /**
     * Get ListingDuration value
     * @return string|null
     */
    public function getListingDuration()
    {
        return $this->ListingDuration;
    }
    /**
     * Set ListingDuration value
     * @uses \PayPal\EnumType\ListingDurationCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ListingDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingDuration
     * @return \PayPal\StructType\ItemType
     */
    public function setListingDuration($listingDuration = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ListingDurationCodeType::valueIsValid($listingDuration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingDuration, implode(', ', \PayPal\EnumType\ListingDurationCodeType::getValidValues())), __LINE__);
        }
        $this->ListingDuration = $listingDuration;
        return $this;
    }
    /**
     * Get ListingEnhancement value
     * @return string[]|null
     */
    public function getListingEnhancement()
    {
        return $this->ListingEnhancement;
    }
    /**
     * Set ListingEnhancement value
     * @uses \PayPal\EnumType\ListingEnhancementsCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ListingEnhancementsCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $listingEnhancement
     * @return \PayPal\StructType\ItemType
     */
    public function setListingEnhancement(array $listingEnhancement = array())
    {
        $invalidValues = array();
        foreach ($listingEnhancement as $itemTypeListingEnhancementItem) {
            if (!\PayPal\EnumType\ListingEnhancementsCodeType::valueIsValid($itemTypeListingEnhancementItem)) {
                $invalidValues[] = var_export($itemTypeListingEnhancementItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \PayPal\EnumType\ListingEnhancementsCodeType::getValidValues())), __LINE__);
        }
        $this->ListingEnhancement = $listingEnhancement;
        return $this;
    }
    /**
     * Add item to ListingEnhancement value
     * @uses \PayPal\EnumType\ListingEnhancementsCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ListingEnhancementsCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\ItemType
     */
    public function addToListingEnhancement($item)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ListingEnhancementsCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \PayPal\EnumType\ListingEnhancementsCodeType::getValidValues())), __LINE__);
        }
        $this->ListingEnhancement[] = $item;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \PayPal\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \PayPal\StructType\ItemType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \PayPal\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \PayPal\StructType\ItemType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get PartnerCode value
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->PartnerCode;
    }
    /**
     * Set PartnerCode value
     * @param string $partnerCode
     * @return \PayPal\StructType\ItemType
     */
    public function setPartnerCode($partnerCode = null)
    {
        // validation for constraint: string
        if (!is_null($partnerCode) && !is_string($partnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerCode)), __LINE__);
        }
        $this->PartnerCode = $partnerCode;
        return $this;
    }
    /**
     * Get PartnerName value
     * @return string|null
     */
    public function getPartnerName()
    {
        return $this->PartnerName;
    }
    /**
     * Set PartnerName value
     * @param string $partnerName
     * @return \PayPal\StructType\ItemType
     */
    public function setPartnerName($partnerName = null)
    {
        // validation for constraint: string
        if (!is_null($partnerName) && !is_string($partnerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerName)), __LINE__);
        }
        $this->PartnerName = $partnerName;
        return $this;
    }
    /**
     * Get PaymentMethods value
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->PaymentMethods;
    }
    /**
     * Set PaymentMethods value
     * @uses \PayPal\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethods
     * @return \PayPal\StructType\ItemType
     */
    public function setPaymentMethods(array $paymentMethods = array())
    {
        $invalidValues = array();
        foreach ($paymentMethods as $itemTypePaymentMethodsItem) {
            if (!\PayPal\EnumType\BuyerPaymentMethodCodeType::valueIsValid($itemTypePaymentMethodsItem)) {
                $invalidValues[] = var_export($itemTypePaymentMethodsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \PayPal\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * Add item to PaymentMethods value
     * @uses \PayPal\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \PayPal\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\ItemType
     */
    public function addToPaymentMethods($item)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \PayPal\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethods[] = $item;
        return $this;
    }
    /**
     * Get PayPalEmailAddress value
     * @return string|null
     */
    public function getPayPalEmailAddress()
    {
        return $this->PayPalEmailAddress;
    }
    /**
     * Set PayPalEmailAddress value
     * @param string $payPalEmailAddress
     * @return \PayPal\StructType\ItemType
     */
    public function setPayPalEmailAddress($payPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($payPalEmailAddress) && !is_string($payPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPalEmailAddress)), __LINE__);
        }
        $this->PayPalEmailAddress = $payPalEmailAddress;
        return $this;
    }
    /**
     * Get PrimaryCategory value
     * @return \PayPal\StructType\CategoryType|null
     */
    public function getPrimaryCategory()
    {
        return $this->PrimaryCategory;
    }
    /**
     * Set PrimaryCategory value
     * @param \PayPal\StructType\CategoryType $primaryCategory
     * @return \PayPal\StructType\ItemType
     */
    public function setPrimaryCategory(\PayPal\StructType\CategoryType $primaryCategory = null)
    {
        $this->PrimaryCategory = $primaryCategory;
        return $this;
    }
    /**
     * Get PrivateListing value
     * @return bool|null
     */
    public function getPrivateListing()
    {
        return $this->PrivateListing;
    }
    /**
     * Set PrivateListing value
     * @param bool $privateListing
     * @return \PayPal\StructType\ItemType
     */
    public function setPrivateListing($privateListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($privateListing) && !is_bool($privateListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($privateListing)), __LINE__);
        }
        $this->PrivateListing = $privateListing;
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
     * @return \PayPal\StructType\ItemType
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
     * Get RegionID value
     * @return string|null
     */
    public function getRegionID()
    {
        return $this->RegionID;
    }
    /**
     * Set RegionID value
     * @param string $regionID
     * @return \PayPal\StructType\ItemType
     */
    public function setRegionID($regionID = null)
    {
        // validation for constraint: string
        if (!is_null($regionID) && !is_string($regionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionID)), __LINE__);
        }
        $this->RegionID = $regionID;
        return $this;
    }
    /**
     * Get RelistLink value
     * @return bool|null
     */
    public function getRelistLink()
    {
        return $this->RelistLink;
    }
    /**
     * Set RelistLink value
     * @param bool $relistLink
     * @return \PayPal\StructType\ItemType
     */
    public function setRelistLink($relistLink = null)
    {
        // validation for constraint: boolean
        if (!is_null($relistLink) && !is_bool($relistLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($relistLink)), __LINE__);
        }
        $this->RelistLink = $relistLink;
        return $this;
    }
    /**
     * Get ReservePrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getReservePrice()
    {
        return $this->ReservePrice;
    }
    /**
     * Set ReservePrice value
     * @param \PayPal\StructType\AmountType $reservePrice
     * @return \PayPal\StructType\ItemType
     */
    public function setReservePrice(\PayPal\StructType\AmountType $reservePrice = null)
    {
        $this->ReservePrice = $reservePrice;
        return $this;
    }
    /**
     * Get ReviseStatus value
     * @return \PayPal\StructType\ReviseStatusType|null
     */
    public function getReviseStatus()
    {
        return $this->ReviseStatus;
    }
    /**
     * Set ReviseStatus value
     * @param \PayPal\StructType\ReviseStatusType $reviseStatus
     * @return \PayPal\StructType\ItemType
     */
    public function setReviseStatus(\PayPal\StructType\ReviseStatusType $reviseStatus = null)
    {
        $this->ReviseStatus = $reviseStatus;
        return $this;
    }
    /**
     * Get ScheduleTime value
     * @return string|null
     */
    public function getScheduleTime()
    {
        return $this->ScheduleTime;
    }
    /**
     * Set ScheduleTime value
     * @param string $scheduleTime
     * @return \PayPal\StructType\ItemType
     */
    public function setScheduleTime($scheduleTime = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleTime) && !is_string($scheduleTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleTime)), __LINE__);
        }
        $this->ScheduleTime = $scheduleTime;
        return $this;
    }
    /**
     * Get SecondaryCategory value
     * @return \PayPal\StructType\CategoryType|null
     */
    public function getSecondaryCategory()
    {
        return $this->SecondaryCategory;
    }
    /**
     * Set SecondaryCategory value
     * @param \PayPal\StructType\CategoryType $secondaryCategory
     * @return \PayPal\StructType\ItemType
     */
    public function setSecondaryCategory(\PayPal\StructType\CategoryType $secondaryCategory = null)
    {
        $this->SecondaryCategory = $secondaryCategory;
        return $this;
    }
    /**
     * Get SiteHostedPicture value
     * @return \PayPal\StructType\SiteHostedPictureType|null
     */
    public function getSiteHostedPicture()
    {
        return $this->SiteHostedPicture;
    }
    /**
     * Set SiteHostedPicture value
     * @param \PayPal\StructType\SiteHostedPictureType $siteHostedPicture
     * @return \PayPal\StructType\ItemType
     */
    public function setSiteHostedPicture(\PayPal\StructType\SiteHostedPictureType $siteHostedPicture = null)
    {
        $this->SiteHostedPicture = $siteHostedPicture;
        return $this;
    }
    /**
     * Get Seller value
     * @return \PayPal\StructType\UserType|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \PayPal\StructType\UserType $seller
     * @return \PayPal\StructType\ItemType
     */
    public function setSeller(\PayPal\StructType\UserType $seller = null)
    {
        $this->Seller = $seller;
        return $this;
    }
    /**
     * Get SellingStatus value
     * @return \PayPal\StructType\SellingStatusType|null
     */
    public function getSellingStatus()
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \PayPal\StructType\SellingStatusType $sellingStatus
     * @return \PayPal\StructType\ItemType
     */
    public function setSellingStatus(\PayPal\StructType\SellingStatusType $sellingStatus = null)
    {
        $this->SellingStatus = $sellingStatus;
        return $this;
    }
    /**
     * Get ShippingOption value
     * @return string|null
     */
    public function getShippingOption()
    {
        return $this->ShippingOption;
    }
    /**
     * Set ShippingOption value
     * @uses \PayPal\EnumType\ShippingOptionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingOption
     * @return \PayPal\StructType\ItemType
     */
    public function setShippingOption($shippingOption = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingOptionCodeType::valueIsValid($shippingOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingOption, implode(', ', \PayPal\EnumType\ShippingOptionCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingOption = $shippingOption;
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \PayPal\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \PayPal\StructType\ShippingDetailsType $shippingDetails
     * @return \PayPal\StructType\ItemType
     */
    public function setShippingDetails(\PayPal\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get ShippingRegions value
     * @return string[]|null
     */
    public function getShippingRegions()
    {
        return $this->ShippingRegions;
    }
    /**
     * Set ShippingRegions value
     * @uses \PayPal\EnumType\ShippingRegionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingRegionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingRegions
     * @return \PayPal\StructType\ItemType
     */
    public function setShippingRegions(array $shippingRegions = array())
    {
        $invalidValues = array();
        foreach ($shippingRegions as $itemTypeShippingRegionsItem) {
            if (!\PayPal\EnumType\ShippingRegionCodeType::valueIsValid($itemTypeShippingRegionsItem)) {
                $invalidValues[] = var_export($itemTypeShippingRegionsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \PayPal\EnumType\ShippingRegionCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingRegions = $shippingRegions;
        return $this;
    }
    /**
     * Add item to ShippingRegions value
     * @uses \PayPal\EnumType\ShippingRegionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingRegionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\ItemType
     */
    public function addToShippingRegions($item)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingRegionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \PayPal\EnumType\ShippingRegionCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingRegions[] = $item;
        return $this;
    }
    /**
     * Get ShippingTerms value
     * @return string|null
     */
    public function getShippingTerms()
    {
        return $this->ShippingTerms;
    }
    /**
     * Set ShippingTerms value
     * @uses \PayPal\EnumType\ShippingTermsCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ShippingTermsCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingTerms
     * @return \PayPal\StructType\ItemType
     */
    public function setShippingTerms($shippingTerms = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ShippingTermsCodeType::valueIsValid($shippingTerms)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingTerms, implode(', ', \PayPal\EnumType\ShippingTermsCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingTerms = $shippingTerms;
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \PayPal\EnumType\SiteCodeType::valueIsValid()
     * @uses \PayPal\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \PayPal\StructType\ItemType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \PayPal\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get StartPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \PayPal\StructType\AmountType $startPrice
     * @return \PayPal\StructType\ItemType
     */
    public function setStartPrice(\PayPal\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get Storefront value
     * @return \PayPal\StructType\StorefrontType|null
     */
    public function getStorefront()
    {
        return $this->Storefront;
    }
    /**
     * Set Storefront value
     * @param \PayPal\StructType\StorefrontType $storefront
     * @return \PayPal\StructType\ItemType
     */
    public function setStorefront(\PayPal\StructType\StorefrontType $storefront = null)
    {
        $this->Storefront = $storefront;
        return $this;
    }
    /**
     * Get SubTitle value
     * @return string|null
     */
    public function getSubTitle()
    {
        return $this->SubTitle;
    }
    /**
     * Set SubTitle value
     * @param string $subTitle
     * @return \PayPal\StructType\ItemType
     */
    public function setSubTitle($subTitle = null)
    {
        // validation for constraint: string
        if (!is_null($subTitle) && !is_string($subTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subTitle)), __LINE__);
        }
        $this->SubTitle = $subTitle;
        return $this;
    }
    /**
     * Get TimeLeft value
     * @return string|null
     */
    public function getTimeLeft()
    {
        return $this->TimeLeft;
    }
    /**
     * Set TimeLeft value
     * @param string $timeLeft
     * @return \PayPal\StructType\ItemType
     */
    public function setTimeLeft($timeLeft = null)
    {
        // validation for constraint: string
        if (!is_null($timeLeft) && !is_string($timeLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeLeft)), __LINE__);
        }
        $this->TimeLeft = $timeLeft;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \PayPal\StructType\ItemType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get UUID value
     * @return string|null
     */
    public function getUUID()
    {
        return $this->UUID;
    }
    /**
     * Set UUID value
     * @param string $uUID
     * @return \PayPal\StructType\ItemType
     */
    public function setUUID($uUID = null)
    {
        // validation for constraint: length
        if ((is_scalar($uUID) && strlen($uUID) !== 36) || (is_array($uUID) && count($uUID) !== 36)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 36 element(s) or a scalar of 36 character(s)', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($uUID) && !is_string($uUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uUID)), __LINE__);
        }
        $this->UUID = $uUID;
        return $this;
    }
    /**
     * Get VATDetails value
     * @return \PayPal\StructType\VATDetailsType|null
     */
    public function getVATDetails()
    {
        return $this->VATDetails;
    }
    /**
     * Set VATDetails value
     * @param \PayPal\StructType\VATDetailsType $vATDetails
     * @return \PayPal\StructType\ItemType
     */
    public function setVATDetails(\PayPal\StructType\VATDetailsType $vATDetails = null)
    {
        $this->VATDetails = $vATDetails;
        return $this;
    }
    /**
     * Get VendorHostedPicture value
     * @return \PayPal\StructType\VendorHostedPictureType|null
     */
    public function getVendorHostedPicture()
    {
        return $this->VendorHostedPicture;
    }
    /**
     * Set VendorHostedPicture value
     * @param \PayPal\StructType\VendorHostedPictureType $vendorHostedPicture
     * @return \PayPal\StructType\ItemType
     */
    public function setVendorHostedPicture(\PayPal\StructType\VendorHostedPictureType $vendorHostedPicture = null)
    {
        $this->VendorHostedPicture = $vendorHostedPicture;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ItemType
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
