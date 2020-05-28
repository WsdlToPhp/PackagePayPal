<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPExpressCheckoutPaymentResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPExpressCheckoutPaymentResponseType extends DoExpressCheckoutPaymentResponseType
{
    /**
     * The UATPDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:UATPDetails
     * @var \PayPal\StructType\UATPDetailsType
     */
    public $UATPDetails;
    /**
     * Constructor method for DoUATPExpressCheckoutPaymentResponseType
     * @uses DoUATPExpressCheckoutPaymentResponseType::setUATPDetails()
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     */
    public function __construct(\PayPal\StructType\UATPDetailsType $uATPDetails = null)
    {
        $this
            ->setUATPDetails($uATPDetails);
    }
    /**
     * Get UATPDetails value
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function getUATPDetails()
    {
        return $this->UATPDetails;
    }
    /**
     * Set UATPDetails value
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @return \PayPal\StructType\DoUATPExpressCheckoutPaymentResponseType
     */
    public function setUATPDetails(\PayPal\StructType\UATPDetailsType $uATPDetails = null)
    {
        $this->UATPDetails = $uATPDetails;
        return $this;
    }
}
