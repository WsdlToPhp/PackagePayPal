<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MassPayReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MassPayReq extends AbstractStructBase
{
    /**
     * The MassPayRequest
     * Meta information extracted from the WSDL
     * - ref: ns:MassPayRequest
     * @var \PayPal\StructType\MassPayRequestType
     */
    public $MassPayRequest;
    /**
     * Constructor method for MassPayReq
     * @uses MassPayReq::setMassPayRequest()
     * @param \PayPal\StructType\MassPayRequestType $massPayRequest
     */
    public function __construct(\PayPal\StructType\MassPayRequestType $massPayRequest = null)
    {
        $this
            ->setMassPayRequest($massPayRequest);
    }
    /**
     * Get MassPayRequest value
     * @return \PayPal\StructType\MassPayRequestType|null
     */
    public function getMassPayRequest()
    {
        return $this->MassPayRequest;
    }
    /**
     * Set MassPayRequest value
     * @param \PayPal\StructType\MassPayRequestType $massPayRequest
     * @return \PayPal\StructType\MassPayReq
     */
    public function setMassPayRequest(\PayPal\StructType\MassPayRequestType $massPayRequest = null)
    {
        $this->MassPayRequest = $massPayRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MassPayReq
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
