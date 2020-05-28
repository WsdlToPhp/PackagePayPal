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
}
