<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillOutstandingAmountReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillOutstandingAmountReq extends AbstractStructBase
{
    /**
     * The BillOutstandingAmountRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:BillOutstandingAmountRequest
     * @var \PayPal\StructType\BillOutstandingAmountRequestType
     */
    public $BillOutstandingAmountRequest;
    /**
     * Constructor method for BillOutstandingAmountReq
     * @uses BillOutstandingAmountReq::setBillOutstandingAmountRequest()
     * @param \PayPal\StructType\BillOutstandingAmountRequestType $billOutstandingAmountRequest
     */
    public function __construct(\PayPal\StructType\BillOutstandingAmountRequestType $billOutstandingAmountRequest = null)
    {
        $this
            ->setBillOutstandingAmountRequest($billOutstandingAmountRequest);
    }
    /**
     * Get BillOutstandingAmountRequest value
     * @return \PayPal\StructType\BillOutstandingAmountRequestType|null
     */
    public function getBillOutstandingAmountRequest()
    {
        return $this->BillOutstandingAmountRequest;
    }
    /**
     * Set BillOutstandingAmountRequest value
     * @param \PayPal\StructType\BillOutstandingAmountRequestType $billOutstandingAmountRequest
     * @return \PayPal\StructType\BillOutstandingAmountReq
     */
    public function setBillOutstandingAmountRequest(\PayPal\StructType\BillOutstandingAmountRequestType $billOutstandingAmountRequest = null)
    {
        $this->BillOutstandingAmountRequest = $billOutstandingAmountRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillOutstandingAmountReq
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
