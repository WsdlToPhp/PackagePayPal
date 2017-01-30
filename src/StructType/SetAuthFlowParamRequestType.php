<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAuthFlowParamRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SetAuthFlowParamRequestType extends AbstractRequestType
{
    /**
     * The SetAuthFlowParamRequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:SetAuthFlowParamRequestDetails
     * @var \PayPal\StructType\SetAuthFlowParamRequestDetailsType
     */
    public $SetAuthFlowParamRequestDetails;
    /**
     * Constructor method for SetAuthFlowParamRequestType
     * @uses SetAuthFlowParamRequestType::setSetAuthFlowParamRequestDetails()
     * @param \PayPal\StructType\SetAuthFlowParamRequestDetailsType $setAuthFlowParamRequestDetails
     */
    public function __construct(\PayPal\StructType\SetAuthFlowParamRequestDetailsType $setAuthFlowParamRequestDetails = null)
    {
        $this
            ->setSetAuthFlowParamRequestDetails($setAuthFlowParamRequestDetails);
    }
    /**
     * Get SetAuthFlowParamRequestDetails value
     * @return \PayPal\StructType\SetAuthFlowParamRequestDetailsType
     */
    public function getSetAuthFlowParamRequestDetails()
    {
        return $this->SetAuthFlowParamRequestDetails;
    }
    /**
     * Set SetAuthFlowParamRequestDetails value
     * @param \PayPal\StructType\SetAuthFlowParamRequestDetailsType $setAuthFlowParamRequestDetails
     * @return \PayPal\StructType\SetAuthFlowParamRequestType
     */
    public function setSetAuthFlowParamRequestDetails(\PayPal\StructType\SetAuthFlowParamRequestDetailsType $setAuthFlowParamRequestDetails = null)
    {
        $this->SetAuthFlowParamRequestDetails = $setAuthFlowParamRequestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SetAuthFlowParamRequestType
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
