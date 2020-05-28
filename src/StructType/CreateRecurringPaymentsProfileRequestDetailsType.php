<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRecurringPaymentsProfileRequestDetailsType
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateRecurringPaymentsProfileRequestDetailsType extends AbstractStructBase
{
    /**
     * The RecurringPaymentsProfileDetails
     * Meta information extracted from the WSDL
     * - documentation: Customer Information for this Recurring Payments
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public $RecurringPaymentsProfileDetails;
    /**
     * The ScheduleDetails
     * Meta information extracted from the WSDL
     * - documentation: Schedule Information for this Recurring Payments
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\ScheduleDetailsType
     */
    public $ScheduleDetails;
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - documentation: Billing Agreement token (required if Express Checkout)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Token;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - documentation: Information about the credit card to be charged (required if Direct Payment)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\CreditCardDetailsType
     */
    public $CreditCard;
    /**
     * The PaymentDetailsItem
     * Meta information extracted from the WSDL
     * - documentation: Information about the Item Details.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentDetailsItemType[]
     */
    public $PaymentDetailsItem;
    /**
     * The SoftDescriptor
     * Meta information extracted from the WSDL
     * - documentation: Use this optional parameter to pass in your business name and other data describing the transaction. Optional This information is usually displayed in the CC account holder's statement. Example: RedCross Haiti, RedCross Uganda,
     * Realtor.com dues, Realtor.com list fee Length 25 characters. Alphanumeric characters and dash(-), dot(.), asterisk(*), space( ) On the customer's statement, an asterisk is used to separate the DBA name and product name. The asterisk delimiter can
     * appear in position 4, 8, or 13.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptor;
    /**
     * The SoftDescriptorCity
     * Meta information extracted from the WSDL
     * - documentation: Use this optional parameter to pass information about how consumer should contact the merchant. Optional This information is usually displayed in the CC account holder's statement. For Ecom trx: phone, email or URL is allowed For
     * Retail trx: only the actual city is allowed For details on allowed characters in Soft Descriptor City refer to the API documentation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SoftDescriptorCity;
    /**
     * Constructor method for CreateRecurringPaymentsProfileRequestDetailsType
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setRecurringPaymentsProfileDetails()
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setScheduleDetails()
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setToken()
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setCreditCard()
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setPaymentDetailsItem()
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setSoftDescriptor()
     * @uses CreateRecurringPaymentsProfileRequestDetailsType::setSoftDescriptorCity()
     * @param \PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails
     * @param \PayPal\StructType\ScheduleDetailsType $scheduleDetails
     * @param string $token
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @param \PayPal\StructType\PaymentDetailsItemType[] $paymentDetailsItem
     * @param string $softDescriptor
     * @param string $softDescriptorCity
     */
    public function __construct(\PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails = null, \PayPal\StructType\ScheduleDetailsType $scheduleDetails = null, $token = null, \PayPal\StructType\CreditCardDetailsType $creditCard = null, array $paymentDetailsItem = array(), $softDescriptor = null, $softDescriptorCity = null)
    {
        $this
            ->setRecurringPaymentsProfileDetails($recurringPaymentsProfileDetails)
            ->setScheduleDetails($scheduleDetails)
            ->setToken($token)
            ->setCreditCard($creditCard)
            ->setPaymentDetailsItem($paymentDetailsItem)
            ->setSoftDescriptor($softDescriptor)
            ->setSoftDescriptorCity($softDescriptorCity);
    }
    /**
     * Get RecurringPaymentsProfileDetails value
     * @return \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public function getRecurringPaymentsProfileDetails()
    {
        return $this->RecurringPaymentsProfileDetails;
    }
    /**
     * Set RecurringPaymentsProfileDetails value
     * @param \PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
     */
    public function setRecurringPaymentsProfileDetails(\PayPal\StructType\RecurringPaymentsProfileDetailsType $recurringPaymentsProfileDetails = null)
    {
        $this->RecurringPaymentsProfileDetails = $recurringPaymentsProfileDetails;
        return $this;
    }
    /**
     * Get ScheduleDetails value
     * @return \PayPal\StructType\ScheduleDetailsType
     */
    public function getScheduleDetails()
    {
        return $this->ScheduleDetails;
    }
    /**
     * Set ScheduleDetails value
     * @param \PayPal\StructType\ScheduleDetailsType $scheduleDetails
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
     */
    public function setScheduleDetails(\PayPal\StructType\ScheduleDetailsType $scheduleDetails = null)
    {
        $this->ScheduleDetails = $scheduleDetails;
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \PayPal\StructType\CreditCardDetailsType|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \PayPal\StructType\CreditCardDetailsType $creditCard
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
     */
    public function setCreditCard(\PayPal\StructType\CreditCardDetailsType $creditCard = null)
    {
        $this->CreditCard = $creditCard;
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
        foreach ($values as $createRecurringPaymentsProfileRequestDetailsTypePaymentDetailsItemItem) {
            // validation for constraint: itemType
            if (!$createRecurringPaymentsProfileRequestDetailsTypePaymentDetailsItemItem instanceof \PayPal\StructType\PaymentDetailsItemType) {
                $invalidValues[] = is_object($createRecurringPaymentsProfileRequestDetailsTypePaymentDetailsItemItem) ? get_class($createRecurringPaymentsProfileRequestDetailsTypePaymentDetailsItemItem) : sprintf('%s(%s)', gettype($createRecurringPaymentsProfileRequestDetailsTypePaymentDetailsItemItem), var_export($createRecurringPaymentsProfileRequestDetailsTypePaymentDetailsItemItem, true));
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
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
     * @return \PayPal\StructType\CreateRecurringPaymentsProfileRequestDetailsType
     */
    public function setSoftDescriptorCity($softDescriptorCity = null)
    {
        // validation for constraint: string
        if (!is_null($softDescriptorCity) && !is_string($softDescriptorCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($softDescriptorCity, true), gettype($softDescriptorCity)), __LINE__);
        }
        $this->SoftDescriptorCity = $softDescriptorCity;
        return $this;
    }
}
