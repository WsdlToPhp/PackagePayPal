<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManagePendingTransactionStatusReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagePendingTransactionStatusReq extends AbstractStructBase
{
    /**
     * The ManagePendingTransactionStatusRequest
     * Meta information extracted from the WSDL
     * - ref: ns:ManagePendingTransactionStatusRequest
     * @var \PayPal\StructType\ManagePendingTransactionStatusRequestType
     */
    public $ManagePendingTransactionStatusRequest;
    /**
     * Constructor method for ManagePendingTransactionStatusReq
     * @uses ManagePendingTransactionStatusReq::setManagePendingTransactionStatusRequest()
     * @param \PayPal\StructType\ManagePendingTransactionStatusRequestType $managePendingTransactionStatusRequest
     */
    public function __construct(\PayPal\StructType\ManagePendingTransactionStatusRequestType $managePendingTransactionStatusRequest = null)
    {
        $this
            ->setManagePendingTransactionStatusRequest($managePendingTransactionStatusRequest);
    }
    /**
     * Get ManagePendingTransactionStatusRequest value
     * @return \PayPal\StructType\ManagePendingTransactionStatusRequestType|null
     */
    public function getManagePendingTransactionStatusRequest()
    {
        return $this->ManagePendingTransactionStatusRequest;
    }
    /**
     * Set ManagePendingTransactionStatusRequest value
     * @param \PayPal\StructType\ManagePendingTransactionStatusRequestType $managePendingTransactionStatusRequest
     * @return \PayPal\StructType\ManagePendingTransactionStatusReq
     */
    public function setManagePendingTransactionStatusRequest(\PayPal\StructType\ManagePendingTransactionStatusRequestType $managePendingTransactionStatusRequest = null)
    {
        $this->ManagePendingTransactionStatusRequest = $managePendingTransactionStatusRequest;
        return $this;
    }
}
