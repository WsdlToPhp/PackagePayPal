<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMobileCheckoutRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetMobileCheckoutRequestType extends AbstractRequestType
{
    /**
     * The SetMobileCheckoutRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetMobileCheckoutRequestDetails
     * @var \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public $SetMobileCheckoutRequestDetails;
    /**
     * Constructor method for SetMobileCheckoutRequestType
     * @uses SetMobileCheckoutRequestType::setSetMobileCheckoutRequestDetails()
     * @param \PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails
     */
    public function __construct(\PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails = null)
    {
        $this
            ->setSetMobileCheckoutRequestDetails($setMobileCheckoutRequestDetails);
    }
    /**
     * Get SetMobileCheckoutRequestDetails value
     * @return \PayPal\StructType\SetMobileCheckoutRequestDetailsType
     */
    public function getSetMobileCheckoutRequestDetails()
    {
        return $this->SetMobileCheckoutRequestDetails;
    }
    /**
     * Set SetMobileCheckoutRequestDetails value
     * @param \PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails
     * @return \PayPal\StructType\SetMobileCheckoutRequestType
     */
    public function setSetMobileCheckoutRequestDetails(\PayPal\StructType\SetMobileCheckoutRequestDetailsType $setMobileCheckoutRequestDetails = null)
    {
        $this->SetMobileCheckoutRequestDetails = $setMobileCheckoutRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetMobileCheckoutRequestType
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
