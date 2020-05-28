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
}
