<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDataRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetDataRequestType extends AbstractStructBase
{
    /**
     * The BillingApprovalDetails
     * Meta information extracted from the WSDL
     * - documentation: Details about Billing Agreements requested to be created.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\BillingApprovalDetailsType[]
     */
    public $BillingApprovalDetails;
    /**
     * The BuyerDetail
     * Meta information extracted from the WSDL
     * - documentation: Only needed if Auto Authorization is requested. The authentication session token will be passed in here.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BuyerDetailType
     */
    public $BuyerDetail;
    /**
     * The InfoSharingDirectives
     * Meta information extracted from the WSDL
     * - documentation: Requests for specific buyer information like Billing Address to be returned through GetExpressCheckoutDetails should be specified under this.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\InfoSharingDirectivesType
     */
    public $InfoSharingDirectives;
    /**
     * The RetrieveShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: The value 1 indicates that you require to retrieve the customer's shipping address on file with PayPal. Any value other than 1 indicates that no such requirement.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RetrieveShippingAddress;
    /**
     * The UserChannel
     * Meta information extracted from the WSDL
     * - documentation: the value is required by ACS team to specify the channel which the partners are in. the channel will be used for risk assessment the value is defined in biz/User/value_object/Channel.oml Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserChannel;
    /**
     * The ReqConfirmShipping
     * Meta information extracted from the WSDL
     * - documentation: The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Any value other than 1 indicates that the customer's shipping address on file with PayPal need NOT be a confirmed
     * address. Setting this element overrides the setting you have specified in the recipient's Merchant Account Profile. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ReqConfirmShipping;
    /**
     * The PaymentDetails
     * Meta information extracted from the WSDL
     * - documentation: Information about the payment.
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsType[]
     */
    public $PaymentDetails;
    /**
     * The ExternalPartnerTrackingDetails
     * Meta information extracted from the WSDL
     * - documentation: An optional set of values related to tracking for external partner.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ExternalPartnerTrackingDetailsType
     */
    public $ExternalPartnerTrackingDetails;
    /**
     * The URI
     * Meta information extracted from the WSDL
     * - documentation: URI(uniform resource identifier), the source from which the request is initiated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URI;
    /**
     * Constructor method for SetDataRequestType
     * @uses SetDataRequestType::setBillingApprovalDetails()
     * @uses SetDataRequestType::setBuyerDetail()
     * @uses SetDataRequestType::setInfoSharingDirectives()
     * @uses SetDataRequestType::setRetrieveShippingAddress()
     * @uses SetDataRequestType::setUserChannel()
     * @uses SetDataRequestType::setReqConfirmShipping()
     * @uses SetDataRequestType::setPaymentDetails()
     * @uses SetDataRequestType::setExternalPartnerTrackingDetails()
     * @uses SetDataRequestType::setURI()
     * @param \PayPal\StructType\BillingApprovalDetailsType[] $billingApprovalDetails
     * @param \PayPal\StructType\BuyerDetailType $buyerDetail
     * @param \PayPal\StructType\InfoSharingDirectivesType $infoSharingDirectives
     * @param bool $retrieveShippingAddress
     * @param string $userChannel
     * @param bool $reqConfirmShipping
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @param \PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails
     * @param string $uRI
     */
    public function __construct(array $billingApprovalDetails = array(), \PayPal\StructType\BuyerDetailType $buyerDetail = null, \PayPal\StructType\InfoSharingDirectivesType $infoSharingDirectives = null, $retrieveShippingAddress = null, $userChannel = null, $reqConfirmShipping = null, array $paymentDetails = array(), \PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails = null, $uRI = null)
    {
        $this
            ->setBillingApprovalDetails($billingApprovalDetails)
            ->setBuyerDetail($buyerDetail)
            ->setInfoSharingDirectives($infoSharingDirectives)
            ->setRetrieveShippingAddress($retrieveShippingAddress)
            ->setUserChannel($userChannel)
            ->setReqConfirmShipping($reqConfirmShipping)
            ->setPaymentDetails($paymentDetails)
            ->setExternalPartnerTrackingDetails($externalPartnerTrackingDetails)
            ->setURI($uRI);
    }
    /**
     * Get BillingApprovalDetails value
     * @return \PayPal\StructType\BillingApprovalDetailsType[]|null
     */
    public function getBillingApprovalDetails()
    {
        return $this->BillingApprovalDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setBillingApprovalDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingApprovalDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBillingApprovalDetailsForArrayConstraintsFromSetBillingApprovalDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setDataRequestTypeBillingApprovalDetailsItem) {
            // validation for constraint: itemType
            if (!$setDataRequestTypeBillingApprovalDetailsItem instanceof \PayPal\StructType\BillingApprovalDetailsType) {
                $invalidValues[] = is_object($setDataRequestTypeBillingApprovalDetailsItem) ? get_class($setDataRequestTypeBillingApprovalDetailsItem) : sprintf('%s(%s)', gettype($setDataRequestTypeBillingApprovalDetailsItem), var_export($setDataRequestTypeBillingApprovalDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BillingApprovalDetails property can only contain items of type \PayPal\StructType\BillingApprovalDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BillingApprovalDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BillingApprovalDetailsType[] $billingApprovalDetails
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setBillingApprovalDetails(array $billingApprovalDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($billingApprovalDetailsArrayErrorMessage = self::validateBillingApprovalDetailsForArrayConstraintsFromSetBillingApprovalDetails($billingApprovalDetails))) {
            throw new \InvalidArgumentException($billingApprovalDetailsArrayErrorMessage, __LINE__);
        }
        $this->BillingApprovalDetails = $billingApprovalDetails;
        return $this;
    }
    /**
     * Add item to BillingApprovalDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BillingApprovalDetailsType $item
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function addToBillingApprovalDetails(\PayPal\StructType\BillingApprovalDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\BillingApprovalDetailsType) {
            throw new \InvalidArgumentException(sprintf('The BillingApprovalDetails property can only contain items of type \PayPal\StructType\BillingApprovalDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BillingApprovalDetails[] = $item;
        return $this;
    }
    /**
     * Get BuyerDetail value
     * @return \PayPal\StructType\BuyerDetailType|null
     */
    public function getBuyerDetail()
    {
        return $this->BuyerDetail;
    }
    /**
     * Set BuyerDetail value
     * @param \PayPal\StructType\BuyerDetailType $buyerDetail
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setBuyerDetail(\PayPal\StructType\BuyerDetailType $buyerDetail = null)
    {
        $this->BuyerDetail = $buyerDetail;
        return $this;
    }
    /**
     * Get InfoSharingDirectives value
     * @return \PayPal\StructType\InfoSharingDirectivesType|null
     */
    public function getInfoSharingDirectives()
    {
        return $this->InfoSharingDirectives;
    }
    /**
     * Set InfoSharingDirectives value
     * @param \PayPal\StructType\InfoSharingDirectivesType $infoSharingDirectives
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setInfoSharingDirectives(\PayPal\StructType\InfoSharingDirectivesType $infoSharingDirectives = null)
    {
        $this->InfoSharingDirectives = $infoSharingDirectives;
        return $this;
    }
    /**
     * Get RetrieveShippingAddress value
     * @return bool|null
     */
    public function getRetrieveShippingAddress()
    {
        return $this->RetrieveShippingAddress;
    }
    /**
     * Set RetrieveShippingAddress value
     * @param bool $retrieveShippingAddress
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setRetrieveShippingAddress($retrieveShippingAddress = null)
    {
        // validation for constraint: boolean
        if (!is_null($retrieveShippingAddress) && !is_bool($retrieveShippingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retrieveShippingAddress, true), gettype($retrieveShippingAddress)), __LINE__);
        }
        $this->RetrieveShippingAddress = $retrieveShippingAddress;
        return $this;
    }
    /**
     * Get UserChannel value
     * @return string|null
     */
    public function getUserChannel()
    {
        return $this->UserChannel;
    }
    /**
     * Set UserChannel value
     * @uses \PayPal\EnumType\UserChannelCodeType::valueIsValid()
     * @uses \PayPal\EnumType\UserChannelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userChannel
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setUserChannel($userChannel = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\UserChannelCodeType::valueIsValid($userChannel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\UserChannelCodeType', is_array($userChannel) ? implode(', ', $userChannel) : var_export($userChannel, true), implode(', ', \PayPal\EnumType\UserChannelCodeType::getValidValues())), __LINE__);
        }
        $this->UserChannel = $userChannel;
        return $this;
    }
    /**
     * Get ReqConfirmShipping value
     * @return bool|null
     */
    public function getReqConfirmShipping()
    {
        return $this->ReqConfirmShipping;
    }
    /**
     * Set ReqConfirmShipping value
     * @param bool $reqConfirmShipping
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setReqConfirmShipping($reqConfirmShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($reqConfirmShipping) && !is_bool($reqConfirmShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reqConfirmShipping, true), gettype($reqConfirmShipping)), __LINE__);
        }
        $this->ReqConfirmShipping = $reqConfirmShipping;
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
     * This method is responsible for validating the values passed to the setPaymentDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentDetailsForArrayConstraintsFromSetPaymentDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setDataRequestTypePaymentDetailsItem) {
            // validation for constraint: itemType
            if (!$setDataRequestTypePaymentDetailsItem instanceof \PayPal\StructType\PaymentDetailsType) {
                $invalidValues[] = is_object($setDataRequestTypePaymentDetailsItem) ? get_class($setDataRequestTypePaymentDetailsItem) : sprintf('%s(%s)', gettype($setDataRequestTypePaymentDetailsItem), var_export($setDataRequestTypePaymentDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentDetails property can only contain items of type \PayPal\StructType\PaymentDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType[] $paymentDetails
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setPaymentDetails(array $paymentDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentDetailsArrayErrorMessage = self::validatePaymentDetailsForArrayConstraintsFromSetPaymentDetails($paymentDetails))) {
            throw new \InvalidArgumentException($paymentDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($paymentDetails) && count($paymentDetails) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($paymentDetails)), __LINE__);
        }
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Add item to PaymentDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsType $item
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function addToPaymentDetails(\PayPal\StructType\PaymentDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PaymentDetails property can only contain items of type \PayPal\StructType\PaymentDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PaymentDetails) && count($this->PaymentDetails) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PaymentDetails)), __LINE__);
        }
        $this->PaymentDetails[] = $item;
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
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setExternalPartnerTrackingDetails(\PayPal\StructType\ExternalPartnerTrackingDetailsType $externalPartnerTrackingDetails = null)
    {
        $this->ExternalPartnerTrackingDetails = $externalPartnerTrackingDetails;
        return $this;
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \PayPal\StructType\SetDataRequestType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRI, true), gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
}
