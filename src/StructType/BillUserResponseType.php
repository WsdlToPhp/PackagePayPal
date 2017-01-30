<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillUserResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillUserResponseType extends AbstractResponseType
{
    /**
     * The BillUserResponseDetails
     * Meta informations extracted from the WSDL
     * - ref: ebl:BillUserResponseDetails
     * @var \PayPal\StructType\MerchantPullPaymentResponseType
     */
    public $BillUserResponseDetails;
    /**
     * The FMFDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FMFDetailsType
     */
    public $FMFDetails;
    /**
     * Constructor method for BillUserResponseType
     * @uses BillUserResponseType::setBillUserResponseDetails()
     * @uses BillUserResponseType::setFMFDetails()
     * @param \PayPal\StructType\MerchantPullPaymentResponseType $billUserResponseDetails
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     */
    public function __construct(\PayPal\StructType\MerchantPullPaymentResponseType $billUserResponseDetails = null, \PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this
            ->setBillUserResponseDetails($billUserResponseDetails)
            ->setFMFDetails($fMFDetails);
    }
    /**
     * Get BillUserResponseDetails value
     * @return \PayPal\StructType\MerchantPullPaymentResponseType|null
     */
    public function getBillUserResponseDetails()
    {
        return $this->BillUserResponseDetails;
    }
    /**
     * Set BillUserResponseDetails value
     * @param \PayPal\StructType\MerchantPullPaymentResponseType $billUserResponseDetails
     * @return \PayPal\StructType\BillUserResponseType
     */
    public function setBillUserResponseDetails(\PayPal\StructType\MerchantPullPaymentResponseType $billUserResponseDetails = null)
    {
        $this->BillUserResponseDetails = $billUserResponseDetails;
        return $this;
    }
    /**
     * Get FMFDetails value
     * @return \PayPal\StructType\FMFDetailsType|null
     */
    public function getFMFDetails()
    {
        return $this->FMFDetails;
    }
    /**
     * Set FMFDetails value
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @return \PayPal\StructType\BillUserResponseType
     */
    public function setFMFDetails(\PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this->FMFDetails = $fMFDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillUserResponseType
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
