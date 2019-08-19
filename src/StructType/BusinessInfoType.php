<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: BusinessInfoType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BusinessInfoType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of business, such as corporation or sole proprietorship
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Official name of business Character length and limitations: 75 alphanumeric characters
     * - base: xs:string
     * - maxLength: 25
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: Merchantâs business postal address
     * - minOccurs: 0
     * @var \PayPal\StructType\AddressType
     */
    public $Address;
    /**
     * The WorkPhone
     * Meta information extracted from the WSDL
     * - documentation: Businessâs primary telephone number Character length and limitations: 20 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $WorkPhone;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Line of business, as defined in the enumerations
     * - minOccurs: 0
     * @var string
     */
    public $Category;
    /**
     * The SubCategory
     * Meta information extracted from the WSDL
     * - documentation: Business sub-category, as defined in the enumerations
     * - minOccurs: 0
     * @var string
     */
    public $SubCategory;
    /**
     * The AveragePrice
     * Meta information extracted from the WSDL
     * - documentation: Average transaction price, as defined by the enumerations. Enumeration Meaning AverageTransactionPrice-Not-Applicable AverageTransactionPrice-Range1 Less than $25 USD AverageTransactionPrice-Range2 $25 USD to $50 USD
     * AverageTransactionPrice-Range3 $50 USD to $100 USD AverageTransactionPrice-Range4 $100 USD to $250 USD AverageTransactionPrice-Range5 $250 USD to $500 USD AverageTransactionPrice-Range6 $500 USD to $1,000 USD AverageTransactionPrice-Range7 $1,000 USD
     * to $2,000 USD AverageTransactionPrice-Range8 $2,000 USD to $5,000 USD AverageTransactionPrice-Range9 $5,000 USD to $10,000 USD AverageTransactionPrice-Range10 More than $10,000 USD
     * - minOccurs: 0
     * @var string
     */
    public $AveragePrice;
    /**
     * The AverageMonthlyVolume
     * Meta information extracted from the WSDL
     * - documentation: Average monthly sales volume, as defined by the enumerations. Enumeration Meaning AverageMonthlyVolume-Not-Applicable AverageMonthlyVolume-Range1 Less than $1,000 USD AverageMonthlyVolume-Range2 $1,000 USD to $5,000 USD
     * AverageMonthlyVolume-Range3 $5,000 USD to $25,000 USD AverageMonthlyVolume-Range4 $25,000 USD to $100,000 USD AverageMonthlyVolume-Range5 $100,000 USD to $1,000,000 USD AverageMonthlyVolume-Range6 More than $1,000,000 USD
     * - minOccurs: 0
     * @var string
     */
    public $AverageMonthlyVolume;
    /**
     * The SalesVenue
     * Meta information extracted from the WSDL
     * - documentation: Main sales venue, such as eBay
     * - minOccurs: 0
     * @var string
     */
    public $SalesVenue;
    /**
     * The Website
     * Meta information extracted from the WSDL
     * - documentation: Primary URL of business Character length and limitations: 2,048 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Website;
    /**
     * The RevenueFromOnlineSales
     * Meta information extracted from the WSDL
     * - documentation: Percentage of revenue attributable to online sales, as defined by the enumerations Enumeration Meaning PercentageRevenueFromOnlineSales-Not-Applicable PercentageRevenueFromOnlineSales-Range1 Less than 25%
     * PercentageRevenueFromOnlineSales-Range2 25% to 50% PercentageRevenueFromOnlineSales-Range3 50% to 75% PercentageRevenueFromOnlineSales-Range4 75% to 100%
     * - minOccurs: 0
     * @var string
     */
    public $RevenueFromOnlineSales;
    /**
     * The BusinessEstablished
     * Meta information extracted from the WSDL
     * - documentation: Date the merchantâs business was established
     * - minOccurs: 0
     * @var string
     */
    public $BusinessEstablished;
    /**
     * The CustomerServiceEmail
     * Meta information extracted from the WSDL
     * - documentation: Email address to contact businessâs customer service Character length and limitations: 127 alphanumeric characters
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $CustomerServiceEmail;
    /**
     * The CustomerServicePhone
     * Meta information extracted from the WSDL
     * - documentation: Telephone number to contact businessâs customer service Character length and limitations: 32 alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $CustomerServicePhone;
    /**
     * Constructor method for BusinessInfoType
     * @uses BusinessInfoType::setType()
     * @uses BusinessInfoType::setName()
     * @uses BusinessInfoType::setAddress()
     * @uses BusinessInfoType::setWorkPhone()
     * @uses BusinessInfoType::setCategory()
     * @uses BusinessInfoType::setSubCategory()
     * @uses BusinessInfoType::setAveragePrice()
     * @uses BusinessInfoType::setAverageMonthlyVolume()
     * @uses BusinessInfoType::setSalesVenue()
     * @uses BusinessInfoType::setWebsite()
     * @uses BusinessInfoType::setRevenueFromOnlineSales()
     * @uses BusinessInfoType::setBusinessEstablished()
     * @uses BusinessInfoType::setCustomerServiceEmail()
     * @uses BusinessInfoType::setCustomerServicePhone()
     * @param string $type
     * @param string $name
     * @param \PayPal\StructType\AddressType $address
     * @param string $workPhone
     * @param string $category
     * @param string $subCategory
     * @param string $averagePrice
     * @param string $averageMonthlyVolume
     * @param string $salesVenue
     * @param string $website
     * @param string $revenueFromOnlineSales
     * @param string $businessEstablished
     * @param string $customerServiceEmail
     * @param string $customerServicePhone
     */
    public function __construct($type = null, $name = null, \PayPal\StructType\AddressType $address = null, $workPhone = null, $category = null, $subCategory = null, $averagePrice = null, $averageMonthlyVolume = null, $salesVenue = null, $website = null, $revenueFromOnlineSales = null, $businessEstablished = null, $customerServiceEmail = null, $customerServicePhone = null)
    {
        $this
            ->setType($type)
            ->setName($name)
            ->setAddress($address)
            ->setWorkPhone($workPhone)
            ->setCategory($category)
            ->setSubCategory($subCategory)
            ->setAveragePrice($averagePrice)
            ->setAverageMonthlyVolume($averageMonthlyVolume)
            ->setSalesVenue($salesVenue)
            ->setWebsite($website)
            ->setRevenueFromOnlineSales($revenueFromOnlineSales)
            ->setBusinessEstablished($businessEstablished)
            ->setCustomerServiceEmail($customerServiceEmail)
            ->setCustomerServicePhone($customerServicePhone);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \PayPal\EnumType\BusinessTypeType::valueIsValid()
     * @uses \PayPal\EnumType\BusinessTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BusinessTypeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BusinessTypeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \PayPal\EnumType\BusinessTypeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($name) && mb_strlen($name) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setAddress(\PayPal\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get WorkPhone value
     * @return string|null
     */
    public function getWorkPhone()
    {
        return $this->WorkPhone;
    }
    /**
     * Set WorkPhone value
     * @param string $workPhone
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setWorkPhone($workPhone = null)
    {
        // validation for constraint: string
        if (!is_null($workPhone) && !is_string($workPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workPhone, true), gettype($workPhone)), __LINE__);
        }
        $this->WorkPhone = $workPhone;
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @uses \PayPal\EnumType\BusinessCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\BusinessCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BusinessCategoryType::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BusinessCategoryType', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \PayPal\EnumType\BusinessCategoryType::getValidValues())), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get SubCategory value
     * @return string|null
     */
    public function getSubCategory()
    {
        return $this->SubCategory;
    }
    /**
     * Set SubCategory value
     * @uses \PayPal\EnumType\BusinessSubCategoryType::valueIsValid()
     * @uses \PayPal\EnumType\BusinessSubCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subCategory
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setSubCategory($subCategory = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\BusinessSubCategoryType::valueIsValid($subCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\BusinessSubCategoryType', is_array($subCategory) ? implode(', ', $subCategory) : var_export($subCategory, true), implode(', ', \PayPal\EnumType\BusinessSubCategoryType::getValidValues())), __LINE__);
        }
        $this->SubCategory = $subCategory;
        return $this;
    }
    /**
     * Get AveragePrice value
     * @return string|null
     */
    public function getAveragePrice()
    {
        return $this->AveragePrice;
    }
    /**
     * Set AveragePrice value
     * @uses \PayPal\EnumType\AverageTransactionPriceType::valueIsValid()
     * @uses \PayPal\EnumType\AverageTransactionPriceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $averagePrice
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setAveragePrice($averagePrice = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AverageTransactionPriceType::valueIsValid($averagePrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AverageTransactionPriceType', is_array($averagePrice) ? implode(', ', $averagePrice) : var_export($averagePrice, true), implode(', ', \PayPal\EnumType\AverageTransactionPriceType::getValidValues())), __LINE__);
        }
        $this->AveragePrice = $averagePrice;
        return $this;
    }
    /**
     * Get AverageMonthlyVolume value
     * @return string|null
     */
    public function getAverageMonthlyVolume()
    {
        return $this->AverageMonthlyVolume;
    }
    /**
     * Set AverageMonthlyVolume value
     * @uses \PayPal\EnumType\AverageMonthlyVolumeType::valueIsValid()
     * @uses \PayPal\EnumType\AverageMonthlyVolumeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $averageMonthlyVolume
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setAverageMonthlyVolume($averageMonthlyVolume = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\AverageMonthlyVolumeType::valueIsValid($averageMonthlyVolume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\AverageMonthlyVolumeType', is_array($averageMonthlyVolume) ? implode(', ', $averageMonthlyVolume) : var_export($averageMonthlyVolume, true), implode(', ', \PayPal\EnumType\AverageMonthlyVolumeType::getValidValues())), __LINE__);
        }
        $this->AverageMonthlyVolume = $averageMonthlyVolume;
        return $this;
    }
    /**
     * Get SalesVenue value
     * @return string|null
     */
    public function getSalesVenue()
    {
        return $this->SalesVenue;
    }
    /**
     * Set SalesVenue value
     * @uses \PayPal\EnumType\SalesVenueType::valueIsValid()
     * @uses \PayPal\EnumType\SalesVenueType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $salesVenue
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setSalesVenue($salesVenue = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\SalesVenueType::valueIsValid($salesVenue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\SalesVenueType', is_array($salesVenue) ? implode(', ', $salesVenue) : var_export($salesVenue, true), implode(', ', \PayPal\EnumType\SalesVenueType::getValidValues())), __LINE__);
        }
        $this->SalesVenue = $salesVenue;
        return $this;
    }
    /**
     * Get Website value
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->Website;
    }
    /**
     * Set Website value
     * @param string $website
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setWebsite($website = null)
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($website, true), gettype($website)), __LINE__);
        }
        $this->Website = $website;
        return $this;
    }
    /**
     * Get RevenueFromOnlineSales value
     * @return string|null
     */
    public function getRevenueFromOnlineSales()
    {
        return $this->RevenueFromOnlineSales;
    }
    /**
     * Set RevenueFromOnlineSales value
     * @uses \PayPal\EnumType\PercentageRevenueFromOnlineSalesType::valueIsValid()
     * @uses \PayPal\EnumType\PercentageRevenueFromOnlineSalesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $revenueFromOnlineSales
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setRevenueFromOnlineSales($revenueFromOnlineSales = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PercentageRevenueFromOnlineSalesType::valueIsValid($revenueFromOnlineSales)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PercentageRevenueFromOnlineSalesType', is_array($revenueFromOnlineSales) ? implode(', ', $revenueFromOnlineSales) : var_export($revenueFromOnlineSales, true), implode(', ', \PayPal\EnumType\PercentageRevenueFromOnlineSalesType::getValidValues())), __LINE__);
        }
        $this->RevenueFromOnlineSales = $revenueFromOnlineSales;
        return $this;
    }
    /**
     * Get BusinessEstablished value
     * @return string|null
     */
    public function getBusinessEstablished()
    {
        return $this->BusinessEstablished;
    }
    /**
     * Set BusinessEstablished value
     * @param string $businessEstablished
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setBusinessEstablished($businessEstablished = null)
    {
        // validation for constraint: string
        if (!is_null($businessEstablished) && !is_string($businessEstablished)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessEstablished, true), gettype($businessEstablished)), __LINE__);
        }
        $this->BusinessEstablished = $businessEstablished;
        return $this;
    }
    /**
     * Get CustomerServiceEmail value
     * @return string|null
     */
    public function getCustomerServiceEmail()
    {
        return $this->CustomerServiceEmail;
    }
    /**
     * Set CustomerServiceEmail value
     * @param string $customerServiceEmail
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setCustomerServiceEmail($customerServiceEmail = null)
    {
        // validation for constraint: string
        if (!is_null($customerServiceEmail) && !is_string($customerServiceEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerServiceEmail, true), gettype($customerServiceEmail)), __LINE__);
        }
        $this->CustomerServiceEmail = $customerServiceEmail;
        return $this;
    }
    /**
     * Get CustomerServicePhone value
     * @return string|null
     */
    public function getCustomerServicePhone()
    {
        return $this->CustomerServicePhone;
    }
    /**
     * Set CustomerServicePhone value
     * @param string $customerServicePhone
     * @return \PayPal\StructType\BusinessInfoType
     */
    public function setCustomerServicePhone($customerServicePhone = null)
    {
        // validation for constraint: string
        if (!is_null($customerServicePhone) && !is_string($customerServicePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerServicePhone, true), gettype($customerServicePhone)), __LINE__);
        }
        $this->CustomerServicePhone = $customerServicePhone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BusinessInfoType
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
