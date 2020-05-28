<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillAgreementUpdateReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillAgreementUpdateReq extends AbstractStructBase
{
    /**
     * The BAUpdateRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BAUpdateRequest
     * @var \PayPal\StructType\BAUpdateRequestType
     */
    public $BAUpdateRequest;
    /**
     * Constructor method for BillAgreementUpdateReq
     * @uses BillAgreementUpdateReq::setBAUpdateRequest()
     * @param \PayPal\StructType\BAUpdateRequestType $bAUpdateRequest
     */
    public function __construct(\PayPal\StructType\BAUpdateRequestType $bAUpdateRequest = null)
    {
        $this
            ->setBAUpdateRequest($bAUpdateRequest);
    }
    /**
     * Get BAUpdateRequest value
     * @return \PayPal\StructType\BAUpdateRequestType|null
     */
    public function getBAUpdateRequest()
    {
        return $this->BAUpdateRequest;
    }
    /**
     * Set BAUpdateRequest value
     * @param \PayPal\StructType\BAUpdateRequestType $bAUpdateRequest
     * @return \PayPal\StructType\BillAgreementUpdateReq
     */
    public function setBAUpdateRequest(\PayPal\StructType\BAUpdateRequestType $bAUpdateRequest = null)
    {
        $this->BAUpdateRequest = $bAUpdateRequest;
        return $this;
    }
}
