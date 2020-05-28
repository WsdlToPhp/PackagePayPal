<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoMobileCheckoutPaymentResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoMobileCheckoutPaymentResponseType extends AbstractResponseType
{
    /**
     * The DoMobileCheckoutPaymentResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoMobileCheckoutPaymentResponseDetails
     * @var \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public $DoMobileCheckoutPaymentResponseDetails;
    /**
     * Constructor method for DoMobileCheckoutPaymentResponseType
     * @uses DoMobileCheckoutPaymentResponseType::setDoMobileCheckoutPaymentResponseDetails()
     * @param \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails
     */
    public function __construct(\PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails = null)
    {
        $this
            ->setDoMobileCheckoutPaymentResponseDetails($doMobileCheckoutPaymentResponseDetails);
    }
    /**
     * Get DoMobileCheckoutPaymentResponseDetails value
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType
     */
    public function getDoMobileCheckoutPaymentResponseDetails()
    {
        return $this->DoMobileCheckoutPaymentResponseDetails;
    }
    /**
     * Set DoMobileCheckoutPaymentResponseDetails value
     * @param \PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails
     * @return \PayPal\StructType\DoMobileCheckoutPaymentResponseType
     */
    public function setDoMobileCheckoutPaymentResponseDetails(\PayPal\StructType\DoMobileCheckoutPaymentResponseDetailsType $doMobileCheckoutPaymentResponseDetails = null)
    {
        $this->DoMobileCheckoutPaymentResponseDetails = $doMobileCheckoutPaymentResponseDetails;
        return $this;
    }
}
