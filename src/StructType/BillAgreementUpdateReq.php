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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillAgreementUpdateReq
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
