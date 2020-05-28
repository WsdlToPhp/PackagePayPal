<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillOutstandingAmountResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillOutstandingAmountResponseType extends AbstractResponseType
{
    /**
     * The BillOutstandingAmountResponseDetails
     * Meta information extracted from the WSDL
     * - ref: ebl:BillOutstandingAmountResponseDetails
     * @var \PayPal\StructType\BillOutstandingAmountResponseDetailsType
     */
    public $BillOutstandingAmountResponseDetails;
    /**
     * Constructor method for BillOutstandingAmountResponseType
     * @uses BillOutstandingAmountResponseType::setBillOutstandingAmountResponseDetails()
     * @param \PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails
     */
    public function __construct(\PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails = null)
    {
        $this
            ->setBillOutstandingAmountResponseDetails($billOutstandingAmountResponseDetails);
    }
    /**
     * Get BillOutstandingAmountResponseDetails value
     * @return \PayPal\StructType\BillOutstandingAmountResponseDetailsType|null
     */
    public function getBillOutstandingAmountResponseDetails()
    {
        return $this->BillOutstandingAmountResponseDetails;
    }
    /**
     * Set BillOutstandingAmountResponseDetails value
     * @param \PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails
     * @return \PayPal\StructType\BillOutstandingAmountResponseType
     */
    public function setBillOutstandingAmountResponseDetails(\PayPal\StructType\BillOutstandingAmountResponseDetailsType $billOutstandingAmountResponseDetails = null)
    {
        $this->BillOutstandingAmountResponseDetails = $billOutstandingAmountResponseDetails;
        return $this;
    }
}
