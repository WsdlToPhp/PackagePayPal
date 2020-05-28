<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillOutstandingAmountRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillOutstandingAmountRequestType extends AbstractRequestType
{
    /**
     * The BillOutstandingAmountRequestDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:BillOutstandingAmountRequestDetails
     * @var \PayPal\StructType\BillOutstandingAmountRequestDetailsType
     */
    public $BillOutstandingAmountRequestDetails;
    /**
     * Constructor method for BillOutstandingAmountRequestType
     * @uses BillOutstandingAmountRequestType::setBillOutstandingAmountRequestDetails()
     * @param \PayPal\StructType\BillOutstandingAmountRequestDetailsType $billOutstandingAmountRequestDetails
     */
    public function __construct(\PayPal\StructType\BillOutstandingAmountRequestDetailsType $billOutstandingAmountRequestDetails = null)
    {
        $this
            ->setBillOutstandingAmountRequestDetails($billOutstandingAmountRequestDetails);
    }
    /**
     * Get BillOutstandingAmountRequestDetails value
     * @return \PayPal\StructType\BillOutstandingAmountRequestDetailsType|null
     */
    public function getBillOutstandingAmountRequestDetails()
    {
        return $this->BillOutstandingAmountRequestDetails;
    }
    /**
     * Set BillOutstandingAmountRequestDetails value
     * @param \PayPal\StructType\BillOutstandingAmountRequestDetailsType $billOutstandingAmountRequestDetails
     * @return \PayPal\StructType\BillOutstandingAmountRequestType
     */
    public function setBillOutstandingAmountRequestDetails(\PayPal\StructType\BillOutstandingAmountRequestDetailsType $billOutstandingAmountRequestDetails = null)
    {
        $this->BillOutstandingAmountRequestDetails = $billOutstandingAmountRequestDetails;
        return $this;
    }
}
