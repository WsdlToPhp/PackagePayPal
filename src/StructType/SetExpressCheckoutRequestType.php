<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetExpressCheckoutRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetExpressCheckoutRequestType extends AbstractRequestType
{
    /**
     * The SetExpressCheckoutRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetExpressCheckoutRequestDetails
     * @var \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public $SetExpressCheckoutRequestDetails;
    /**
     * Constructor method for SetExpressCheckoutRequestType
     * @uses SetExpressCheckoutRequestType::setSetExpressCheckoutRequestDetails()
     * @param \PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails
     */
    public function __construct(\PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails = null)
    {
        $this
            ->setSetExpressCheckoutRequestDetails($setExpressCheckoutRequestDetails);
    }
    /**
     * Get SetExpressCheckoutRequestDetails value
     * @return \PayPal\StructType\SetExpressCheckoutRequestDetailsType
     */
    public function getSetExpressCheckoutRequestDetails()
    {
        return $this->SetExpressCheckoutRequestDetails;
    }
    /**
     * Set SetExpressCheckoutRequestDetails value
     * @param \PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails
     * @return \PayPal\StructType\SetExpressCheckoutRequestType
     */
    public function setSetExpressCheckoutRequestDetails(\PayPal\StructType\SetExpressCheckoutRequestDetailsType $setExpressCheckoutRequestDetails = null)
    {
        $this->SetExpressCheckoutRequestDetails = $setExpressCheckoutRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetExpressCheckoutRequestType
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
