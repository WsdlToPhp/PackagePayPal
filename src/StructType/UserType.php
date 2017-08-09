<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Feedback scores are a quantitative expression of the desirability of dealing with that person as a Buyer or a Seller in auction transactions. Each auction transaction can result in one feedback entry for a given user (the Buyer can
 * leave one feedback about the Seller and the Seller can leave one feedback about the Buyer). That one feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback score
 * (referred to as a "feedback rating" on the eBay site). This rating is commonly expressed as the eBay Feedback score for the user.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserType extends AbstractStructBase
{
    /**
     * The AboutMePage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AboutMePage;
    /**
     * The EAISToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EAISToken;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - ref: ns:Email
     * @var string
     */
    public $Email;
    /**
     * The FeedbackScore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:FeedbackScore
     * @var int
     */
    public $FeedbackScore;
    /**
     * The FeedbackPrivate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FeedbackPrivate;
    /**
     * The FeedbackRatingStar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackRatingStar;
    /**
     * The IDVerified
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IDVerified;
    /**
     * The NewUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NewUser;
    /**
     * The RegistrationAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:RegistrationAddress
     * @var \PayPal\StructType\AddressType
     */
    public $RegistrationAddress;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationDate;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:Site
     * @var string
     */
    public $Site;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:UserID
     * - maxLength: 127
     * @var string
     */
    public $UserID;
    /**
     * The UserIDChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UserIDChanged;
    /**
     * The UserIDLastChanged
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserIDLastChanged;
    /**
     * The VATStatus
     * Meta informations extracted from the WSDL
     * - documentation: If present, indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See Value-Added Tax (VAT). Not returned for users whose country of residence is outside the
     * EU. Possible values for the user's status: 2 = Residence in an EU country but user registered as VAT-exempt 3 = Residence in an EU country and user not registered as VAT-exempt
     * - minOccurs: 0
     * @var string
     */
    public $VATStatus;
    /**
     * The BuyerInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BuyerType
     */
    public $BuyerInfo;
    /**
     * The SellerInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\SellerType
     */
    public $SellerInfo;
    /**
     * Constructor method for UserType
     * @uses UserType::setAboutMePage()
     * @uses UserType::setEAISToken()
     * @uses UserType::setEmail()
     * @uses UserType::setFeedbackScore()
     * @uses UserType::setFeedbackPrivate()
     * @uses UserType::setFeedbackRatingStar()
     * @uses UserType::setIDVerified()
     * @uses UserType::setNewUser()
     * @uses UserType::setRegistrationAddress()
     * @uses UserType::setRegistrationDate()
     * @uses UserType::setSite()
     * @uses UserType::setStatus()
     * @uses UserType::setUserID()
     * @uses UserType::setUserIDChanged()
     * @uses UserType::setUserIDLastChanged()
     * @uses UserType::setVATStatus()
     * @uses UserType::setBuyerInfo()
     * @uses UserType::setSellerInfo()
     * @param bool $aboutMePage
     * @param string $eAISToken
     * @param string $email
     * @param int $feedbackScore
     * @param bool $feedbackPrivate
     * @param string $feedbackRatingStar
     * @param bool $iDVerified
     * @param bool $newUser
     * @param \PayPal\StructType\AddressType $registrationAddress
     * @param string $registrationDate
     * @param string $site
     * @param string $status
     * @param string $userID
     * @param bool $userIDChanged
     * @param string $userIDLastChanged
     * @param string $vATStatus
     * @param \PayPal\StructType\BuyerType $buyerInfo
     * @param \PayPal\StructType\SellerType $sellerInfo
     */
    public function __construct($aboutMePage = null, $eAISToken = null, $email = null, $feedbackScore = null, $feedbackPrivate = null, $feedbackRatingStar = null, $iDVerified = null, $newUser = null, \PayPal\StructType\AddressType $registrationAddress = null, $registrationDate = null, $site = null, $status = null, $userID = null, $userIDChanged = null, $userIDLastChanged = null, $vATStatus = null, \PayPal\StructType\BuyerType $buyerInfo = null, \PayPal\StructType\SellerType $sellerInfo = null)
    {
        $this
            ->setAboutMePage($aboutMePage)
            ->setEAISToken($eAISToken)
            ->setEmail($email)
            ->setFeedbackScore($feedbackScore)
            ->setFeedbackPrivate($feedbackPrivate)
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setIDVerified($iDVerified)
            ->setNewUser($newUser)
            ->setRegistrationAddress($registrationAddress)
            ->setRegistrationDate($registrationDate)
            ->setSite($site)
            ->setStatus($status)
            ->setUserID($userID)
            ->setUserIDChanged($userIDChanged)
            ->setUserIDLastChanged($userIDLastChanged)
            ->setVATStatus($vATStatus)
            ->setBuyerInfo($buyerInfo)
            ->setSellerInfo($sellerInfo);
    }
    /**
     * Get AboutMePage value
     * @return bool|null
     */
    public function getAboutMePage()
    {
        return $this->AboutMePage;
    }
    /**
     * Set AboutMePage value
     * @param bool $aboutMePage
     * @return \PayPal\StructType\UserType
     */
    public function setAboutMePage($aboutMePage = null)
    {
        // validation for constraint: boolean
        if (!is_null($aboutMePage) && !is_bool($aboutMePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($aboutMePage)), __LINE__);
        }
        $this->AboutMePage = $aboutMePage;
        return $this;
    }
    /**
     * Get EAISToken value
     * @return string|null
     */
    public function getEAISToken()
    {
        return $this->EAISToken;
    }
    /**
     * Set EAISToken value
     * @param string $eAISToken
     * @return \PayPal\StructType\UserType
     */
    public function setEAISToken($eAISToken = null)
    {
        // validation for constraint: string
        if (!is_null($eAISToken) && !is_string($eAISToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eAISToken)), __LINE__);
        }
        $this->EAISToken = $eAISToken;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \PayPal\StructType\UserType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get FeedbackScore value
     * @return int|null
     */
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \PayPal\StructType\UserType
     */
    public function setFeedbackScore($feedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !is_numeric($feedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Get FeedbackPrivate value
     * @return bool|null
     */
    public function getFeedbackPrivate()
    {
        return $this->FeedbackPrivate;
    }
    /**
     * Set FeedbackPrivate value
     * @param bool $feedbackPrivate
     * @return \PayPal\StructType\UserType
     */
    public function setFeedbackPrivate($feedbackPrivate = null)
    {
        // validation for constraint: boolean
        if (!is_null($feedbackPrivate) && !is_bool($feedbackPrivate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($feedbackPrivate)), __LINE__);
        }
        $this->FeedbackPrivate = $feedbackPrivate;
        return $this;
    }
    /**
     * Get FeedbackRatingStar value
     * @return string|null
     */
    public function getFeedbackRatingStar()
    {
        return $this->FeedbackRatingStar;
    }
    /**
     * Set FeedbackRatingStar value
     * @uses \PayPal\EnumType\FeedbackRatingStarCodeType::valueIsValid()
     * @uses \PayPal\EnumType\FeedbackRatingStarCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackRatingStar
     * @return \PayPal\StructType\UserType
     */
    public function setFeedbackRatingStar($feedbackRatingStar = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\FeedbackRatingStarCodeType::valueIsValid($feedbackRatingStar)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $feedbackRatingStar, implode(', ', \PayPal\EnumType\FeedbackRatingStarCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackRatingStar = $feedbackRatingStar;
        return $this;
    }
    /**
     * Get IDVerified value
     * @return bool|null
     */
    public function getIDVerified()
    {
        return $this->IDVerified;
    }
    /**
     * Set IDVerified value
     * @param bool $iDVerified
     * @return \PayPal\StructType\UserType
     */
    public function setIDVerified($iDVerified = null)
    {
        // validation for constraint: boolean
        if (!is_null($iDVerified) && !is_bool($iDVerified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($iDVerified)), __LINE__);
        }
        $this->IDVerified = $iDVerified;
        return $this;
    }
    /**
     * Get NewUser value
     * @return bool|null
     */
    public function getNewUser()
    {
        return $this->NewUser;
    }
    /**
     * Set NewUser value
     * @param bool $newUser
     * @return \PayPal\StructType\UserType
     */
    public function setNewUser($newUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($newUser) && !is_bool($newUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newUser)), __LINE__);
        }
        $this->NewUser = $newUser;
        return $this;
    }
    /**
     * Get RegistrationAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getRegistrationAddress()
    {
        return $this->RegistrationAddress;
    }
    /**
     * Set RegistrationAddress value
     * @param \PayPal\StructType\AddressType $registrationAddress
     * @return \PayPal\StructType\UserType
     */
    public function setRegistrationAddress(\PayPal\StructType\AddressType $registrationAddress = null)
    {
        $this->RegistrationAddress = $registrationAddress;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \PayPal\StructType\UserType
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
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
     * @return \PayPal\StructType\UserType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \PayPal\EnumType\UserStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\UserStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \PayPal\StructType\UserType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\UserStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \PayPal\EnumType\UserStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \PayPal\StructType\UserType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($userID) && strlen($userID) > 127) || (is_array($userID) && count($userID) > 127)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 127 element(s) or a scalar of 127 character(s) at most, "%d" length given', is_scalar($userID) ? strlen($userID) : count($userID)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get UserIDChanged value
     * @return bool|null
     */
    public function getUserIDChanged()
    {
        return $this->UserIDChanged;
    }
    /**
     * Set UserIDChanged value
     * @param bool $userIDChanged
     * @return \PayPal\StructType\UserType
     */
    public function setUserIDChanged($userIDChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($userIDChanged) && !is_bool($userIDChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userIDChanged)), __LINE__);
        }
        $this->UserIDChanged = $userIDChanged;
        return $this;
    }
    /**
     * Get UserIDLastChanged value
     * @return string|null
     */
    public function getUserIDLastChanged()
    {
        return $this->UserIDLastChanged;
    }
    /**
     * Set UserIDLastChanged value
     * @param string $userIDLastChanged
     * @return \PayPal\StructType\UserType
     */
    public function setUserIDLastChanged($userIDLastChanged = null)
    {
        // validation for constraint: string
        if (!is_null($userIDLastChanged) && !is_string($userIDLastChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userIDLastChanged)), __LINE__);
        }
        $this->UserIDLastChanged = $userIDLastChanged;
        return $this;
    }
    /**
     * Get VATStatus value
     * @return string|null
     */
    public function getVATStatus()
    {
        return $this->VATStatus;
    }
    /**
     * Set VATStatus value
     * @uses \PayPal\EnumType\VATStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\VATStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vATStatus
     * @return \PayPal\StructType\UserType
     */
    public function setVATStatus($vATStatus = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\VATStatusCodeType::valueIsValid($vATStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vATStatus, implode(', ', \PayPal\EnumType\VATStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VATStatus = $vATStatus;
        return $this;
    }
    /**
     * Get BuyerInfo value
     * @return \PayPal\StructType\BuyerType|null
     */
    public function getBuyerInfo()
    {
        return $this->BuyerInfo;
    }
    /**
     * Set BuyerInfo value
     * @param \PayPal\StructType\BuyerType $buyerInfo
     * @return \PayPal\StructType\UserType
     */
    public function setBuyerInfo(\PayPal\StructType\BuyerType $buyerInfo = null)
    {
        $this->BuyerInfo = $buyerInfo;
        return $this;
    }
    /**
     * Get SellerInfo value
     * @return \PayPal\StructType\SellerType|null
     */
    public function getSellerInfo()
    {
        return $this->SellerInfo;
    }
    /**
     * Set SellerInfo value
     * @param \PayPal\StructType\SellerType $sellerInfo
     * @return \PayPal\StructType\UserType
     */
    public function setSellerInfo(\PayPal\StructType\SellerType $sellerInfo = null)
    {
        $this->SellerInfo = $sellerInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UserType
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
