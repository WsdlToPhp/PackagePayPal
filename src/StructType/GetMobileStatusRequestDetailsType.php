<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMobileStatusRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetMobileStatusRequestDetailsType extends AbstractStructBase
{
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - documentation: Phone number for status inquiry
     * @var \PayPal\StructType\PhoneNumberType
     */
    public $Phone;
    /**
     * Constructor method for GetMobileStatusRequestDetailsType
     * @uses GetMobileStatusRequestDetailsType::setPhone()
     * @param \PayPal\StructType\PhoneNumberType $phone
     */
    public function __construct(\PayPal\StructType\PhoneNumberType $phone = null)
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \PayPal\StructType\PhoneNumberType|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param \PayPal\StructType\PhoneNumberType $phone
     * @return \PayPal\StructType\GetMobileStatusRequestDetailsType
     */
    public function setPhone(\PayPal\StructType\PhoneNumberType $phone = null)
    {
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetMobileStatusRequestDetailsType
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
