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
     * Meta information extracted from the WSDL
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
}
