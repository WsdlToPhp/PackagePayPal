<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringPaymentsProfileDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RecurringPaymentsProfileDetailsType extends AbstractStructBase
{
    /**
     * The BillingStartDate
     * Meta information extracted from the WSDL
     * - documentation: When does this Profile begin billing?
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BillingStartDate;
    /**
     * The SubscriberName
     * Meta information extracted from the WSDL
     * - documentation: Subscriber name - if missing, will use name in buyer's account
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SubscriberName;
    /**
     * The SubscriberShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: Subscriber address - if missing, will use address in buyer's account
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $SubscriberShippingAddress;
    /**
     * The ProfileReference
     * Meta information extracted from the WSDL
     * - documentation: Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileReference;
    /**
     * Constructor method for RecurringPaymentsProfileDetailsType
     * @uses RecurringPaymentsProfileDetailsType::setBillingStartDate()
     * @uses RecurringPaymentsProfileDetailsType::setSubscriberName()
     * @uses RecurringPaymentsProfileDetailsType::setSubscriberShippingAddress()
     * @uses RecurringPaymentsProfileDetailsType::setProfileReference()
     * @param string $billingStartDate
     * @param string $subscriberName
     * @param \PayPal\StructType\AddressType $subscriberShippingAddress
     * @param string $profileReference
     */
    public function __construct($billingStartDate = null, $subscriberName = null, \PayPal\StructType\AddressType $subscriberShippingAddress = null, $profileReference = null)
    {
        $this
            ->setBillingStartDate($billingStartDate)
            ->setSubscriberName($subscriberName)
            ->setSubscriberShippingAddress($subscriberShippingAddress)
            ->setProfileReference($profileReference);
    }
    /**
     * Get BillingStartDate value
     * @return string
     */
    public function getBillingStartDate()
    {
        return $this->BillingStartDate;
    }
    /**
     * Set BillingStartDate value
     * @param string $billingStartDate
     * @return \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public function setBillingStartDate($billingStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($billingStartDate) && !is_string($billingStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingStartDate, true), gettype($billingStartDate)), __LINE__);
        }
        $this->BillingStartDate = $billingStartDate;
        return $this;
    }
    /**
     * Get SubscriberName value
     * @return string|null
     */
    public function getSubscriberName()
    {
        return $this->SubscriberName;
    }
    /**
     * Set SubscriberName value
     * @param string $subscriberName
     * @return \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public function setSubscriberName($subscriberName = null)
    {
        // validation for constraint: string
        if (!is_null($subscriberName) && !is_string($subscriberName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriberName, true), gettype($subscriberName)), __LINE__);
        }
        $this->SubscriberName = $subscriberName;
        return $this;
    }
    /**
     * Get SubscriberShippingAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getSubscriberShippingAddress()
    {
        return $this->SubscriberShippingAddress;
    }
    /**
     * Set SubscriberShippingAddress value
     * @param \PayPal\StructType\AddressType $subscriberShippingAddress
     * @return \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public function setSubscriberShippingAddress(\PayPal\StructType\AddressType $subscriberShippingAddress = null)
    {
        $this->SubscriberShippingAddress = $subscriberShippingAddress;
        return $this;
    }
    /**
     * Get ProfileReference value
     * @return string|null
     */
    public function getProfileReference()
    {
        return $this->ProfileReference;
    }
    /**
     * Set ProfileReference value
     * @param string $profileReference
     * @return \PayPal\StructType\RecurringPaymentsProfileDetailsType
     */
    public function setProfileReference($profileReference = null)
    {
        // validation for constraint: string
        if (!is_null($profileReference) && !is_string($profileReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileReference, true), gettype($profileReference)), __LINE__);
        }
        $this->ProfileReference = $profileReference;
        return $this;
    }
}
