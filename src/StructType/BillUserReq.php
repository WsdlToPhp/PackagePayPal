<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillUserReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillUserReq extends AbstractStructBase
{
    /**
     * The BillUserRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BillUserRequest
     * @var \PayPal\StructType\BillUserRequestType
     */
    public $BillUserRequest;
    /**
     * Constructor method for BillUserReq
     * @uses BillUserReq::setBillUserRequest()
     * @param \PayPal\StructType\BillUserRequestType $billUserRequest
     */
    public function __construct(\PayPal\StructType\BillUserRequestType $billUserRequest = null)
    {
        $this
            ->setBillUserRequest($billUserRequest);
    }
    /**
     * Get BillUserRequest value
     * @return \PayPal\StructType\BillUserRequestType|null
     */
    public function getBillUserRequest()
    {
        return $this->BillUserRequest;
    }
    /**
     * Set BillUserRequest value
     * @param \PayPal\StructType\BillUserRequestType $billUserRequest
     * @return \PayPal\StructType\BillUserReq
     */
    public function setBillUserRequest(\PayPal\StructType\BillUserRequestType $billUserRequest = null)
    {
        $this->BillUserRequest = $billUserRequest;
        return $this;
    }
}
