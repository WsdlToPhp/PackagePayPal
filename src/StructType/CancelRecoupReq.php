<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRecoupReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CancelRecoupReq extends AbstractStructBase
{
    /**
     * The CancelRecoupRequest
     * Meta information extracted from the WSDL
     * - ref: ns:CancelRecoupRequest
     * @var \PayPal\StructType\CancelRecoupRequestType
     */
    public $CancelRecoupRequest;
    /**
     * Constructor method for CancelRecoupReq
     * @uses CancelRecoupReq::setCancelRecoupRequest()
     * @param \PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest
     */
    public function __construct(\PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest = null)
    {
        $this
            ->setCancelRecoupRequest($cancelRecoupRequest);
    }
    /**
     * Get CancelRecoupRequest value
     * @return \PayPal\StructType\CancelRecoupRequestType|null
     */
    public function getCancelRecoupRequest()
    {
        return $this->CancelRecoupRequest;
    }
    /**
     * Set CancelRecoupRequest value
     * @param \PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest
     * @return \PayPal\StructType\CancelRecoupReq
     */
    public function setCancelRecoupRequest(\PayPal\StructType\CancelRecoupRequestType $cancelRecoupRequest = null)
    {
        $this->CancelRecoupRequest = $cancelRecoupRequest;
        return $this;
    }
}
