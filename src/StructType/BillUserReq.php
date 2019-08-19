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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillUserReq
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
